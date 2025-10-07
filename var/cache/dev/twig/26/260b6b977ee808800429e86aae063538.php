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

/* proposition/show.html.twig */
class __TwigTemplate_26632a55436a606251b150c1c033fdcc extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Proposition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Proposition</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 28, $this->source); })()), "updatedAt", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 28, $this->source); })()), "updatedAt", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "<br>
                    ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                        <em>Aucune catégorie</em>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "</td>
            </tr>
        </tbody>
    </table>
    <td>
        <form method=\"post\" action=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorite_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_favorite" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46))), "html", null, true);
        yield "\">
            <button class=\"btn btn-outline-primary\">
                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 48, $this->source); })()), "isFavoritedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                    Retirer des favoris
                ";
        } else {
            // line 51
            yield "                    Ajouter aux favoris
                ";
        }
        // line 53
        yield "            </button>
            <span class=\"ms-2\">❤️ ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 54, $this->source); })()), "getFavoritesCount", [], "method", false, false, false, 54), "html", null, true);
        yield "</span>
        </form>

        <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-1\">Voir</a>
    </td>



    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "proposition/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "proposition/show.html.twig";
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
        return array (  224 => 66,  219 => 64,  214 => 62,  206 => 57,  200 => 54,  197 => 53,  193 => 51,  189 => 49,  187 => 48,  182 => 46,  178 => 45,  171 => 40,  164 => 39,  162 => 38,  155 => 37,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Proposition{% endblock %}

{% block body %}
    <h1>Proposition</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ proposition.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ proposition.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ proposition.description }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ proposition.createdAt ? proposition.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ proposition.updatedAt ? proposition.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ proposition.status.value }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{% for category in proposition.category %}
                        {{ category }}<br>
                    {% else %}
                        <em>Aucune catégorie</em>
                    {% endfor %}</td>
            </tr>
        </tbody>
    </table>
    <td>
        <form method=\"post\" action=\"{{ path('app_favorite_toggle', { id: proposition.id }) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_favorite' ~ proposition.id) }}\">
            <button class=\"btn btn-outline-primary\">
                {% if proposition.isFavoritedBy(app.user) %}
                    Retirer des favoris
                {% else %}
                    Ajouter aux favoris
                {% endif %}
            </button>
            <span class=\"ms-2\">❤️ {{ proposition.getFavoritesCount() }}</span>
        </form>

        <a href=\"{{ path('app_proposition_show', {'id': proposition.id}) }}\" class=\"btn btn-secondary mt-1\">Voir</a>
    </td>



    <a href=\"{{ path('app_proposition_index') }}\">back to list</a>

    <a href=\"{{ path('app_proposition_edit', {'id': proposition.id}) }}\">edit</a>

    {{ include('proposition/_delete_form.html.twig') }}
{% endblock %}
", "proposition/show.html.twig", "C:\\Users\\Daniel\\Desktop\\tp_portail\\CDA_portail_citoyen\\templates\\proposition\\show.html.twig");
    }
}
