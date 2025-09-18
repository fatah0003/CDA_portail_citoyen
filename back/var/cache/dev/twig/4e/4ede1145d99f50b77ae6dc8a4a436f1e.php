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

/* proposition/_form.html.twig */
class __TwigTemplate_bd4f0b024c6bbbfb4483c8b4bc6e0410 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), 'row');
        yield "
";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), 'row');
        yield "
";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "status", [], "any", false, false, false, 5), 'row');
        yield "
";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "category", [], "any", false, false, false, 6), 'row');
        yield "

<h3>Fichiers</h3>
<div id=\"propositionFiles\" data-prototype=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "propositionFiles", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "prototype", [], "any", false, false, false, 9), 'widget'), "html_attr");
        yield "\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "propositionFiles", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["fileForm"]) {
            // line 11
            yield "        <div class=\"file-item\">
            ";
            // line 12
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fileForm"], "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "fileName", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "                <p>Fichier actuel : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fileForm"], "vars", [], "any", false, false, false, 13), "data", [], "any", false, false, false, 13), "fileName", [], "any", false, false, false, 13), "html", null, true);
                yield "</p>
            ";
            }
            // line 15
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["fileForm"], "file", [], "any", false, false, false, 15), 'row');
            yield "
            <button type=\"button\" class=\"btn btn-danger remove-file\">Supprimer</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fileForm'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "</div>
<button type=\"button\" id=\"add-file\" class=\"btn btn-secondary\">Ajouter un fichier</button>

<br><br>
<button class=\"btn btn-primary\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', () => {
    const collectionHolder = document.getElementById('propositionFiles');
    const addButton = document.getElementById('add-file');
    let index = collectionHolder.querySelectorAll('.file-item').length;

    addButton.addEventListener('click', () => {
        const prototype = collectionHolder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        const div = document.createElement('div');
        div.classList.add('file-item');
        div.innerHTML = newForm;

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'btn btn-danger remove-file';
        removeBtn.textContent = 'Supprimer';
        div.appendChild(removeBtn);

        collectionHolder.appendChild(div);

        removeBtn.addEventListener('click', () => div.remove());
    });

    collectionHolder.querySelectorAll('.remove-file').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.file-item').remove();
        });
    });
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "proposition/_form.html.twig";
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
        return array (  112 => 25,  107 => 23,  101 => 19,  90 => 15,  84 => 13,  82 => 12,  79 => 11,  75 => 10,  71 => 9,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}

{{ form_row(form.title) }}
{{ form_row(form.description) }}
{{ form_row(form.status) }}
{{ form_row(form.category) }}

<h3>Fichiers</h3>
<div id=\"propositionFiles\" data-prototype=\"{{ form_widget(form.propositionFiles.vars.prototype)|e('html_attr') }}\">
    {% for fileForm in form.propositionFiles %}
        <div class=\"file-item\">
            {% if fileForm.vars.data.fileName %}
                <p>Fichier actuel : {{ fileForm.vars.data.fileName }}</p>
            {% endif %}
            {{ form_row(fileForm.file) }}
            <button type=\"button\" class=\"btn btn-danger remove-file\">Supprimer</button>
        </div>
    {% endfor %}
</div>
<button type=\"button\" id=\"add-file\" class=\"btn btn-secondary\">Ajouter un fichier</button>

<br><br>
<button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', () => {
    const collectionHolder = document.getElementById('propositionFiles');
    const addButton = document.getElementById('add-file');
    let index = collectionHolder.querySelectorAll('.file-item').length;

    addButton.addEventListener('click', () => {
        const prototype = collectionHolder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        const div = document.createElement('div');
        div.classList.add('file-item');
        div.innerHTML = newForm;

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'btn btn-danger remove-file';
        removeBtn.textContent = 'Supprimer';
        div.appendChild(removeBtn);

        collectionHolder.appendChild(div);

        removeBtn.addEventListener('click', () => div.remove());
    });

    collectionHolder.querySelectorAll('.remove-file').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.file-item').remove();
        });
    });
});
</script>
", "proposition/_form.html.twig", "C:\\Users\\lilyb\\Documents\\doc\\CDA_portail_citoyen\\back\\templates\\proposition\\_form.html.twig");
    }
}
