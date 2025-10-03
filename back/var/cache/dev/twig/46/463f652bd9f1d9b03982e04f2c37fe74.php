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

/* _partials/homePage/_banner.html.twig */
class __TwigTemplate_0a3493910b1700a7ab0db17725a10acd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_banner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_banner.html.twig"));

        // line 1
        yield "<section class=\"banner-section relative\">
    <img src=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/banniere.jpg"), "html", null, true);
        yield "\" alt=\"Bannière Lyon\" class=\"banner-image\" />

    <div class=\"banner-overlay\">
        <h1 class=\"banner-title\">
            Votre voix, vos idées, votre ville
        </h1>
        <h2 class=\"banner-subtitle\">
            Un portail au service des citoyens
        </h2>

        <p class=\"banner-text\">
            Une plateforme pour proposer, voter et faire entendre votre voix.<br>
            Proposez, soutenez, réalisez les idées qui vous tiennent à cœur.
        </p>
    </div>
</section>
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
        return "_partials/homePage/_banner.html.twig";
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
        return array (  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"banner-section relative\">
    <img src=\"{{ asset('pictures/banniere.jpg') }}\" alt=\"Bannière Lyon\" class=\"banner-image\" />

    <div class=\"banner-overlay\">
        <h1 class=\"banner-title\">
            Votre voix, vos idées, votre ville
        </h1>
        <h2 class=\"banner-subtitle\">
            Un portail au service des citoyens
        </h2>

        <p class=\"banner-text\">
            Une plateforme pour proposer, voter et faire entendre votre voix.<br>
            Proposez, soutenez, réalisez les idées qui vous tiennent à cœur.
        </p>
    </div>
</section>
", "_partials/homePage/_banner.html.twig", "C:\\Users\\Daniel\\Desktop\\tp_portail\\CDA_portail_citoyen\\back\\templates\\_partials\\homePage\\_banner.html.twig");
    }
}
