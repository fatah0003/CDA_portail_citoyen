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
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn-connexion\">Connexion</a>
        </nav>
    </div>
</header>

";
        // line 30
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

        // line 31
        yield "    ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 32
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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
        return array (  148 => 31,  125 => 32,  122 => 31,  99 => 30,  91 => 25,  84 => 21,  80 => 20,  72 => 15,  59 => 5,  55 => 4,  50 => 1,);
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
            <a href=\"{{ path('app_login') }}\" class=\"btn-connexion\">Connexion</a>
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
{% endblock %}
", "_partials/_header.html.twig", "C:\\Users\\Daniel\\Desktop\\tp_portail\\CDA_portail_citoyen\\back\\templates\\_partials\\_header.html.twig");
    }
}
