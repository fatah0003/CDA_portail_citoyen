<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* _partials/_header.html.twig */
class __TwigTemplate_2dc5d57e008b960b75a929bb93d2dee3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        // line 1
        yield "<header>
    <div class=\"header-container\">
        <div class=\"logo\">
            <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/logo.jpg"), "html", null, true);
        yield "\" alt=\"Logo\">
            </a>
            <div class=\"logo-text\">
                <strong>LA PAROLE AUX CITOYENS</strong>
                L’ACTION À LA MAIRIE
            </div>
        </div>


        <button class=\"burger\" aria-label=\"Menu\">
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/vector.png"), "html", null, true);
        yield "\" alt=\"Menu\">
        </button>

        <nav class=\"menu-nav\">
            <ul class=\"menu\">
                <li><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_index");
        yield "\">Propositions</a></li>
                <li><a href=\"#\">À propos</a></li>
                <li><a href=\"#\">Nous contacter</a></li>
            </ul>
            ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "infosUser", [], "any", false, false, false, 25))) {
            // line 26
            yield "                <div class=\"user-menu\">
    <span class=\"btn-connexion-connect\">
        ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "infosUser", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "infosUser", [], "any", false, false, false, 28), "lastName", [], "any", false, false, false, 28)), "html", null, true);
            yield "
        <span class=\"online-dot\"></span>
    </span>
                    <div class=\"dropdown-menu\">
                        <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                    </div>
                </div>
            ";
        } else {
            // line 36
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn-connexion\">Connexion</a>
            ";
        }
        // line 38
        yield "



        </nav>
    </div>
</header>

";
        // line 46
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        yield "    ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 48
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", () => {
            const burger = document.querySelector(\".burger\");
            const menuNav = document.querySelector(\".menu-nav\");

            if (burger && menuNav) {
                burger.addEventListener(\"click\", () => {
                    menuNav.classList.toggle(\"active\");
                });
            }
        });
    </script>
    <script>
        let hideTimeout;

        document.addEventListener('mouseover', (event) => {
            const userMenu = event.target.closest('.user-menu');
            if (userMenu) {
                const dropdown = userMenu.querySelector('.dropdown-menu');
                if (dropdown) {
                    clearTimeout(hideTimeout);
                    dropdown.style.display = 'flex';
                }
            }
        });

        document.addEventListener('mouseout', (event) => {
            const userMenu = event.target.closest('.user-menu');
            if (userMenu) {
                const dropdown = userMenu.querySelector('.dropdown-menu');
                if (dropdown) {
                    hideTimeout = setTimeout(() => {
                        dropdown.style.display = 'none';
                    }, 500);
                }
            }
        });
    </script>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  208 => 47,  155 => 48,  152 => 47,  129 => 46,  119 => 38,  113 => 36,  106 => 32,  97 => 28,  93 => 26,  91 => 25,  84 => 21,  80 => 20,  72 => 15,  59 => 5,  55 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <div class=\"header-container\">
        <div class=\"logo\">
            <a href=\"{{ path('app_home') }}\">
                <img src=\"{{ asset('pictures/logo.jpg') }}\" alt=\"Logo\">
            </a>
            <div class=\"logo-text\">
                <strong>LA PAROLE AUX CITOYENS</strong>
                L’ACTION À LA MAIRIE
            </div>
        </div>


        <button class=\"burger\" aria-label=\"Menu\">
            <img src=\"{{ asset('pictures/vector.png') }}\" alt=\"Menu\">
        </button>

        <nav class=\"menu-nav\">
            <ul class=\"menu\">
                <li><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('app_proposition_index') }}\">Propositions</a></li>
                <li><a href=\"#\">À propos</a></li>
                <li><a href=\"#\">Nous contacter</a></li>
            </ul>
            {% if app.user and app.user.infosUser %}
                <div class=\"user-menu\">
    <span class=\"btn-connexion-connect\">
        {{ app.user.infosUser.firstName|capitalize }} {{ app.user.infosUser.lastName|upper }}
        <span class=\"online-dot\"></span>
    </span>
                    <div class=\"dropdown-menu\">
                        <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </div>
                </div>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"btn-connexion\">Connexion</a>
            {% endif %}




        </nav>
    </div>
</header>

{% block javascripts %}
    {% block importmap %}{{ importmap('app') }}{% endblock %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", () => {
            const burger = document.querySelector(\".burger\");
            const menuNav = document.querySelector(\".menu-nav\");

            if (burger && menuNav) {
                burger.addEventListener(\"click\", () => {
                    menuNav.classList.toggle(\"active\");
                });
            }
        });
    </script>
    <script>
        let hideTimeout;

        document.addEventListener('mouseover', (event) => {
            const userMenu = event.target.closest('.user-menu');
            if (userMenu) {
                const dropdown = userMenu.querySelector('.dropdown-menu');
                if (dropdown) {
                    clearTimeout(hideTimeout);
                    dropdown.style.display = 'flex';
                }
            }
        });

        document.addEventListener('mouseout', (event) => {
            const userMenu = event.target.closest('.user-menu');
            if (userMenu) {
                const dropdown = userMenu.querySelector('.dropdown-menu');
                if (dropdown) {
                    hideTimeout = setTimeout(() => {
                        dropdown.style.display = 'none';
                    }, 500);
                }
            }
        });
    </script>




{% endblock %}
", "_partials/_header.html.twig", "C:\\Users\\Daniel\\Desktop\\tp_portail\\CDA_portail_citoyen\\back\\templates\\_partials\\_header.html.twig");
    }
}
