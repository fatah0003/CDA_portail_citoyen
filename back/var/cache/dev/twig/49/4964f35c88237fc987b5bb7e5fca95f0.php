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
class __TwigTemplate_b18df6e9844cc9fb8c3a936baf21b96f extends Template
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
                <td>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 37, $this->source); })()), "category", [], "any", false, false, false, 37));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 38
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "<br>
                    ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                        <em>Aucune catégorie</em>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                </td>
            </tr>
            <tr>
                <th>Fichiers</th>
                <td>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 47, $this->source); })()), "propositionFiles", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 48
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                            ";
                // line 50
                yield "                            ";
                $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 50), ".")));
                // line 51
                yield "                            ";
                if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 51, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 52
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["file"], "file"), "html", null, true);
                    yield "\" 
                                     alt=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 53), "html", null, true);
                    yield "\" 
                                     style=\"max-width:200px; max-height:200px; display:block; margin-bottom:10px;\">
                            ";
                } else {
                    // line 56
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["file"], "file"), "html", null, true);
                    yield "\" target=\"_blank\">
                                    Télécharger ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 57), "html", null, true);
                    yield "
                                </a><br>
                            ";
                }
                // line 60
                yield "                        ";
            }
            // line 61
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            yield "                        <em>Aucun fichier</em>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <form method=\"post\" action=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorite_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_favorite" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71))), "html", null, true);
        yield "\">
            <button class=\"btn btn-outline-primary\">
                ";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 73, $this->source); })()), "isFavoritedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)], "method", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                    Retirer des favoris
                ";
        } else {
            // line 76
            yield "                    Ajouter aux favoris
                ";
        }
        // line 78
        yield "            </button>
            <span class=\"ms-2\">❤️ ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 79, $this->source); })()), "getFavoritesCount", [], "method", false, false, false, 79), "html", null, true);
        yield "</span>
        </form>

        <a href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-1\">Voir</a>
    </div>

    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_index");
        yield "\">back to list</a>
    <a href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 88
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
        return array (  283 => 88,  278 => 86,  274 => 85,  268 => 82,  262 => 79,  259 => 78,  255 => 76,  251 => 74,  249 => 73,  244 => 71,  240 => 70,  232 => 64,  225 => 62,  220 => 61,  217 => 60,  211 => 57,  206 => 56,  200 => 53,  195 => 52,  192 => 51,  189 => 50,  187 => 49,  184 => 48,  179 => 47,  172 => 42,  165 => 40,  163 => 39,  156 => 38,  151 => 37,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <td>
                    {% for category in proposition.category %}
                        {{ category }}<br>
                    {% else %}
                        <em>Aucune catégorie</em>
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Fichiers</th>
                <td>
                    {% for file in proposition.propositionFiles %}
                        {% if file.fileName %}
                            {# Affiche l'image directement si c'est une image #}
                            {% set ext = file.fileName|split('.')|last|lower %}
                            {% if ext in ['jpg', 'jpeg', 'png', 'gif', 'webp'] %}
                                <img src=\"{{ vich_uploader_asset(file, 'file') }}\" 
                                     alt=\"{{ file.fileName }}\" 
                                     style=\"max-width:200px; max-height:200px; display:block; margin-bottom:10px;\">
                            {% else %}
                                <a href=\"{{ vich_uploader_asset(file, 'file') }}\" target=\"_blank\">
                                    Télécharger {{ file.fileName }}
                                </a><br>
                            {% endif %}
                        {% endif %}
                    {% else %}
                        <em>Aucun fichier</em>
                    {% endfor %}
                </td>
            </tr>
        </tbody>
    </table>

    <div>
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
    </div>

    <a href=\"{{ path('app_proposition_index') }}\">back to list</a>
    <a href=\"{{ path('app_proposition_edit', {'id': proposition.id}) }}\">edit</a>

    {{ include('proposition/_delete_form.html.twig') }}
{% endblock %}
", "proposition/show.html.twig", "C:\\Users\\lilyb\\Documents\\projetGroup\\CDA_portail_citoyen\\back\\templates\\proposition\\show.html.twig");
    }
}
