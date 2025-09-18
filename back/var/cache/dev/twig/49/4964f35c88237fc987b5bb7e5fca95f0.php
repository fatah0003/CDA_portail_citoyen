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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"proposition-card\">
    <!-- Colonne gauche : Images -->
    <div class=\"proposition-images\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 9, $this->source); })()), "propositionFiles", [], "any", false, false, false, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "                ";
                $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 11), ".")));
                // line 12
                yield "                ";
                if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 12, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 13
                    yield "                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["file"], "file"), "html", null, true);
                    yield "\" 
                         alt=\"";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 14), "html", null, true);
                    yield "\">
                ";
                } else {
                    // line 16
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["file"], "file"), "html", null, true);
                    yield "\" target=\"_blank\">
                        📎 Télécharger ";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "fileName", [], "any", false, false, false, 17), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 20
                yield "            ";
            }
            // line 21
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "            <em>Aucun fichier</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    </div>

    <!-- Colonne droite : Infos -->
    <div class=\"proposition-info\">
        <h1>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</h1>
        <p class=\"description\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>

        <p class=\"meta\">
            <strong>ID :</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "<br>
            <strong>Créé le :</strong> ";
        // line 33
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 33, $this->source); })()), "createdAt", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 33, $this->source); })()), "createdAt", [], "any", false, false, false, 33), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "<br>
            <strong>Mise à jour :</strong> ";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "<br>
            <strong>Catégories :</strong>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 38
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 39
            yield "                <em>Aucune</em>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </p>

        <p class=\"status\">
            Statut : ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
        yield "
        </p>

        <!-- Actions -->
        <div class=\"proposition-actions\">
            <form method=\"post\" action=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorite_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_favorite" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50))), "html", null, true);
        yield "\">
                <button class=\"btn-primary-amz\">
                    ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 52, $this->source); })()), "isFavoritedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                        Retirer des favoris ❤️
                    ";
        } else {
            // line 55
            yield "                        Ajouter aux favoris ❤️
                    ";
        }
        // line 57
        yield "                </button>
                <span class=\"ms-2\">❤️ ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 58, $this->source); })()), "getFavoritesCount", [], "method", false, false, false, 58), "html", null, true);
        yield "</span>
            </form>

            <a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition"]) || array_key_exists("proposition", $context) ? $context["proposition"] : (function () { throw new RuntimeError('Variable "proposition" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" class=\"btn-secondary-amz\">✏️ Modifier</a>
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_index");
        yield "\" class=\"btn-secondary-amz\">⬅️ Retour à la liste</a>

            ";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "proposition/_delete_form.html.twig");
        yield "
        </div>
    </div>
</div>
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
        return array (  278 => 64,  273 => 62,  269 => 61,  263 => 58,  260 => 57,  256 => 55,  252 => 53,  250 => 52,  245 => 50,  241 => 49,  233 => 44,  228 => 41,  221 => 39,  208 => 38,  202 => 37,  184 => 36,  179 => 34,  175 => 33,  171 => 32,  165 => 29,  161 => 28,  155 => 24,  148 => 22,  143 => 21,  140 => 20,  134 => 17,  129 => 16,  124 => 14,  119 => 13,  116 => 12,  113 => 11,  110 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ proposition.title }}{% endblock %}

{% block body %}
<div class=\"proposition-card\">
    <!-- Colonne gauche : Images -->
    <div class=\"proposition-images\">
        {% for file in proposition.propositionFiles %}
            {% if file.fileName %}
                {% set ext = file.fileName|split('.')|last|lower %}
                {% if ext in ['jpg', 'jpeg', 'png', 'gif', 'webp'] %}
                    <img src=\"{{ vich_uploader_asset(file, 'file') }}\" 
                         alt=\"{{ file.fileName }}\">
                {% else %}
                    <a href=\"{{ vich_uploader_asset(file, 'file') }}\" target=\"_blank\">
                        📎 Télécharger {{ file.fileName }}
                    </a>
                {% endif %}
            {% endif %}
        {% else %}
            <em>Aucun fichier</em>
        {% endfor %}
    </div>

    <!-- Colonne droite : Infos -->
    <div class=\"proposition-info\">
        <h1>{{ proposition.title }}</h1>
        <p class=\"description\">{{ proposition.description }}</p>

        <p class=\"meta\">
            <strong>ID :</strong> {{ proposition.id }}<br>
            <strong>Créé le :</strong> {{ proposition.createdAt ? proposition.createdAt|date('d/m/Y H:i') : '' }}<br>
            <strong>Mise à jour :</strong> {{ proposition.updatedAt ? proposition.updatedAt|date('d/m/Y H:i') : '' }}<br>
            <strong>Catégories :</strong>
            {% for category in proposition.category %}
                {{ category }}{% if not loop.last %}, {% endif %}
            {% else %}
                <em>Aucune</em>
            {% endfor %}
        </p>

        <p class=\"status\">
            Statut : {{ proposition.status.value }}
        </p>

        <!-- Actions -->
        <div class=\"proposition-actions\">
            <form method=\"post\" action=\"{{ path('app_favorite_toggle', { id: proposition.id }) }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_favorite' ~ proposition.id) }}\">
                <button class=\"btn-primary-amz\">
                    {% if proposition.isFavoritedBy(app.user) %}
                        Retirer des favoris ❤️
                    {% else %}
                        Ajouter aux favoris ❤️
                    {% endif %}
                </button>
                <span class=\"ms-2\">❤️ {{ proposition.getFavoritesCount() }}</span>
            </form>

            <a href=\"{{ path('app_proposition_edit', {'id': proposition.id}) }}\" class=\"btn-secondary-amz\">✏️ Modifier</a>
            <a href=\"{{ path('app_proposition_index') }}\" class=\"btn-secondary-amz\">⬅️ Retour à la liste</a>

            {{ include('proposition/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}
", "proposition/show.html.twig", "C:\\Users\\lilyb\\Documents\\doc\\CDA_portail_citoyen\\back\\templates\\proposition\\show.html.twig");
    }
}
