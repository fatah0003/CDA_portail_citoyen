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
class __TwigTemplate_c269e6bb1c36f40d7b30d39a84435546 extends Template
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

        <nav class=\"menu-nav\">
            <ul class=\"menu\">
                <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_index");
        yield "\">Propositions</a></li>
                <li><a href=\"#\">À propos</a></li>
                <li><a href=\"#\">Nous contacter</a></li>
            </ul>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn-connexion\">Connexion</a>
        </nav>
    </div>
</header>
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
        return array (  81 => 20,  74 => 16,  70 => 15,  57 => 5,  53 => 4,  48 => 1,);
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
", "_partials/_header.html.twig", "C:\\Users\\lilyb\\Documents\\projetGroup\\CDA_portail_citoyen\\back\\templates\\_partials\\_header.html.twig");
    }
}
