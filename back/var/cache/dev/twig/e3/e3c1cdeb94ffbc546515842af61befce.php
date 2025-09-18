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

/* proposition/index.html.twig */
class __TwigTemplate_654b19289aa18e6bb44e8e02b6585e93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition/index.html.twig"));

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

        yield "Propositions";
        
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
        yield "<h1>Propositions</h1>

<div class=\"proposition-list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
            // line 10
            yield "        <div class=\"proposition-card\">
            
            <!-- Colonne gauche : image si dispo -->
            <div class=\"proposition-images\">
                ";
            // line 14
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "propositionFiles", [], "any", false, false, false, 14)) > 0)) {
                // line 15
                yield "                    ";
                $context["firstFile"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "propositionFiles", [], "any", false, false, false, 15));
                // line 16
                yield "                    ";
                $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstFile"]) || array_key_exists("firstFile", $context) ? $context["firstFile"] : (function () { throw new RuntimeError('Variable "firstFile" does not exist.', 16, $this->source); })()), "fileName", [], "any", false, false, false, 16), ".")));
                // line 17
                yield "                    ";
                if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 17, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 18
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["firstFile"]) || array_key_exists("firstFile", $context) ? $context["firstFile"] : (function () { throw new RuntimeError('Variable "firstFile" does not exist.', 18, $this->source); })()), "file"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstFile"]) || array_key_exists("firstFile", $context) ? $context["firstFile"] : (function () { throw new RuntimeError('Variable "firstFile" does not exist.', 18, $this->source); })()), "fileName", [], "any", false, false, false, 18), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 20
                    yield "                        <div class=\"file-placeholder\">📎</div>
                    ";
                }
                // line 22
                yield "                ";
            } else {
                // line 23
                yield "                    <div class=\"file-placeholder\">📷</div>
                ";
            }
            // line 25
            yield "            </div>

            <!-- Colonne droite : infos -->
            <div class=\"proposition-info\">
                <h2>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</h2>
                <p class=\"description\">
                    ";
            // line 31
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 31)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 31), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 31), "html", null, true)));
            yield "
                </p>

                <p class=\"meta\">
                    Créé le ";
            // line 35
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "createdAt", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true)) : ("-"));
            yield "<br>
                    Catégories : 
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "category", [], "any", false, false, false, 37));
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
                // line 38
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
                // line 39
                yield "                    ";
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
                // line 40
                yield "                        <em>Aucune</em>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                </p>

                <p class=\"status\">
                    ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45), "html", null, true);
            yield "
                </p>

                <!-- Actions -->
                <div class=\"proposition-actions\">
                    <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn-primary-amz\">Voir</a>
                    <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn-secondary-amz\">Modifier</a>
                </div>

                <div class=\"favorites\">
                    ❤️ ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "getFavoritesCount", [], "method", false, false, false, 55), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "        <p>Aucune proposition trouvée.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['proposition'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "</div>

<a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_new");
        yield "\" class=\"btn-primary-amz\">➕ Créer une nouvelle proposition</a>
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
        return "proposition/index.html.twig";
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
        return array (  259 => 64,  255 => 62,  248 => 60,  246 => 59,  237 => 55,  230 => 51,  226 => 50,  218 => 45,  213 => 42,  206 => 40,  193 => 39,  187 => 38,  169 => 37,  164 => 35,  157 => 31,  152 => 29,  146 => 25,  142 => 23,  139 => 22,  135 => 20,  127 => 18,  124 => 17,  121 => 16,  118 => 15,  116 => 14,  110 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Propositions{% endblock %}

{% block body %}
<h1>Propositions</h1>

<div class=\"proposition-list\">
    {% for proposition in propositions %}
        <div class=\"proposition-card\">
            
            <!-- Colonne gauche : image si dispo -->
            <div class=\"proposition-images\">
                {% if proposition.propositionFiles|length > 0 %}
                    {% set firstFile = proposition.propositionFiles|first %}
                    {% set ext = firstFile.fileName|split('.')|last|lower %}
                    {% if ext in ['jpg', 'jpeg', 'png', 'gif', 'webp'] %}
                        <img src=\"{{ vich_uploader_asset(firstFile, 'file') }}\" alt=\"{{ firstFile.fileName }}\">
                    {% else %}
                        <div class=\"file-placeholder\">📎</div>
                    {% endif %}
                {% else %}
                    <div class=\"file-placeholder\">📷</div>
                {% endif %}
            </div>

            <!-- Colonne droite : infos -->
            <div class=\"proposition-info\">
                <h2>{{ proposition.title }}</h2>
                <p class=\"description\">
                    {{ proposition.description|length > 120 ? proposition.description|slice(0, 120) ~ '...' : proposition.description }}
                </p>

                <p class=\"meta\">
                    Créé le {{ proposition.createdAt ? proposition.createdAt|date('d/m/Y') : '-' }}<br>
                    Catégories : 
                    {% for category in proposition.category %}
                        {{ category }}{% if not loop.last %}, {% endif %}
                    {% else %}
                        <em>Aucune</em>
                    {% endfor %}
                </p>

                <p class=\"status\">
                    {{ proposition.status.value }}
                </p>

                <!-- Actions -->
                <div class=\"proposition-actions\">
                    <a href=\"{{ path('app_proposition_show', {'id': proposition.id}) }}\" class=\"btn-primary-amz\">Voir</a>
                    <a href=\"{{ path('app_proposition_edit', {'id': proposition.id}) }}\" class=\"btn-secondary-amz\">Modifier</a>
                </div>

                <div class=\"favorites\">
                    ❤️ {{ proposition.getFavoritesCount() }}
                </div>
            </div>
        </div>
    {% else %}
        <p>Aucune proposition trouvée.</p>
    {% endfor %}
</div>

<a href=\"{{ path('app_proposition_new') }}\" class=\"btn-primary-amz\">➕ Créer une nouvelle proposition</a>
{% endblock %}
", "proposition/index.html.twig", "C:\\Users\\lilyb\\Documents\\doc\\CDA_portail_citoyen\\back\\templates\\proposition\\index.html.twig");
    }
}
