document.addEventListener('DOMContentLoaded', () => {
    let cityInput = document.querySelector('[data-action=address-input]');
    let zipInput = document.querySelector('[data-zip="zip"]');
    let showlist = document.querySelector('#showlist');
    let showresults = document.querySelector('#showresults');
    let locationContainer = document.querySelector('#locationContainer');

    let noResult = document.createElement('li');
    noResult.className = "bbb";
    noResult.innerText = "Aucun résultats";

    cityInput.addEventListener('keyup', debounce(function (e) {
        let value = e.target.value;
        if (value.length < 3 || value.length > 200) {
            alert('Between 3 and 200 characters !');
        } else {
            fetch(`https://api-adresse.data.gouv.fr/search/?q=${value}&type=municipality`, {method: 'GET'})
                .then((response) => {
                    if (response.status !== 200) {
                        throw new Error('API Error, please try again');
                    }
                    return response.json();
                })
                .then((body) => {
                    let features = body.features;
                    showresults.innerHTML = '';
                    if (features && features.length > 0) {
                        features.forEach((feature) => {
                            let li = document.createElement('li');
                            li.className = "showresults-li";
                            li.innerText = `${feature.properties.name} - ${feature.properties.postcode}`;

                            li.addEventListener('click', () => {
                                cityInput.value = feature.properties.name;
                                if (zipInput) {
                                    zipInput.value = feature.properties.postcode;
                                }
                                showlist.style.display = "none";
                                showresults.innerHTML = '';
                            });

                            showresults.appendChild(li);
                        });
                        showlist.style.display = "block";
                    }else {
                        showresults.innerHTML = ''; // Effacer les anciens résultats
                        showresults.appendChild(noResult);
                        showlist.style.display = "block";
                    }
                })
                .catch((error) => {
                    alert(error.message);
                });
        }
    }, 800));

    document.addEventListener('click', function (event) {
        if (!locationContainer.contains(event.target)) {
            showlist.style.display = "none";
            showresults.innerHTML = '';
        }
    });
});

function debounce(callback, delay) {
    let timer;
    return function () {
        let args = arguments;
        let context = this;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, delay);
    };
}
