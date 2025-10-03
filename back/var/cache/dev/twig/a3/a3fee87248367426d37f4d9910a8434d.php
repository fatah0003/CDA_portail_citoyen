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

/* _partials/homePage/_functionnality.html.twig */
class __TwigTemplate_605627ad87b5422916ac84c7cc164383 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_functionnality.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_functionnality.html.twig"));

        // line 1
        yield "<section class=\"function-section\">

    <div class=\"about-content\">
        <div class=\"function-content\">
            <h2 class=\"\">Nos fonctionnalités</h2>
            <p>Explorez les outils qui facilitent votre participation citoyenne et rendent vos idées visibles.</p>
        </div>
    </div>
</section>

<section class=\"green function-section\">

       <div class=\"card--container\">
         <div class=\"card--function\">

               <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/Auth.jpg"), "html", null, true);
        yield "\" alt=\"Portrait\">
               <h3>Authentification</h3>

             <p>Connectez-vous pour participer, proposer et voter</p>
         </div>
         <div class=\"card--function\">

               <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/aduan.jpg"), "html", null, true);
        yield "\" alt=\"Portrait\">
               <h3>Proposer un idée</h3>

             <p>Partagez vos idées et contribuez à améliorer votre ville</p>
         </div>
         <div class=\"card--function\">

                 <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/eLesen.jpg"), "html", null, true);
        yield "\" alt=\"Portrait\">
               <h3>Voir toutes les propositions</h3>

             <p>Découvrez toutes les idées citoyennes en un clic !</p>

         </div>
         <div class=\"card--function\">

               <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/hawker.jpg"), "html", null, true);
        yield "\" alt=\"Portrait\">
               <h3>Voter pour des propositions</h3>

             <p>Soutenez les idées qui vous tiennent à cœur !</p>
         </div>
       </div>

</section>

<section class=\"function-section\">

    <div class=\"about-content\">
        <div class=\"function-content\">
            <h2 class=\"\">En chiffres</h2>
            <p>Un aperçu des contributions et de la participation des citoyens sur la plateforme.</p>
        </div>
    </div>
</section>

<section class=\"blue function-section\">

    <div class=\"card--container\">
        <div class=\"card--function--static\">
            <h3>1256</h3>
            <h4>Citoyens actifs</h4>
            <p>Connectez-vous pour participer, proposer et voter</p>
        </div>

        <div class=\"card--function--static\">
                <h3>25</h3>
                <h4>Propositions exprimées</h4>
            <p>Vous avez proposé 25 propositions à réaliser</p>
        </div>

        <div class=\"card--function--static\">
            <h3>99</h3>
            <h4>Votes exprimés</h4>
            <p>Vous avez émis 99 votes</p>
        </div>

        <div class=\"card--function--static\">
            <h3>7</h3>
            <h4>Projets réalisés</h4>
            <p>On a réalisé 7 projets grace à vous</p>
        </div>
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
        return "_partials/homePage/_functionnality.html.twig";
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
        return array (  96 => 38,  85 => 30,  75 => 23,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"function-section\">

    <div class=\"about-content\">
        <div class=\"function-content\">
            <h2 class=\"\">Nos fonctionnalités</h2>
            <p>Explorez les outils qui facilitent votre participation citoyenne et rendent vos idées visibles.</p>
        </div>
    </div>
</section>

<section class=\"green function-section\">

       <div class=\"card--container\">
         <div class=\"card--function\">

               <img src=\"{{ asset('pictures/Auth.jpg') }}\" alt=\"Portrait\">
               <h3>Authentification</h3>

             <p>Connectez-vous pour participer, proposer et voter</p>
         </div>
         <div class=\"card--function\">

               <img src=\"{{ asset('pictures/aduan.jpg') }}\" alt=\"Portrait\">
               <h3>Proposer un idée</h3>

             <p>Partagez vos idées et contribuez à améliorer votre ville</p>
         </div>
         <div class=\"card--function\">

                 <img src=\"{{ asset('pictures/eLesen.jpg') }}\" alt=\"Portrait\">
               <h3>Voir toutes les propositions</h3>

             <p>Découvrez toutes les idées citoyennes en un clic !</p>

         </div>
         <div class=\"card--function\">

               <img src=\"{{ asset('pictures/hawker.jpg') }}\" alt=\"Portrait\">
               <h3>Voter pour des propositions</h3>

             <p>Soutenez les idées qui vous tiennent à cœur !</p>
         </div>
       </div>

</section>

<section class=\"function-section\">

    <div class=\"about-content\">
        <div class=\"function-content\">
            <h2 class=\"\">En chiffres</h2>
            <p>Un aperçu des contributions et de la participation des citoyens sur la plateforme.</p>
        </div>
    </div>
</section>

<section class=\"blue function-section\">

    <div class=\"card--container\">
        <div class=\"card--function--static\">
            <h3>1256</h3>
            <h4>Citoyens actifs</h4>
            <p>Connectez-vous pour participer, proposer et voter</p>
        </div>

        <div class=\"card--function--static\">
                <h3>25</h3>
                <h4>Propositions exprimées</h4>
            <p>Vous avez proposé 25 propositions à réaliser</p>
        </div>

        <div class=\"card--function--static\">
            <h3>99</h3>
            <h4>Votes exprimés</h4>
            <p>Vous avez émis 99 votes</p>
        </div>

        <div class=\"card--function--static\">
            <h3>7</h3>
            <h4>Projets réalisés</h4>
            <p>On a réalisé 7 projets grace à vous</p>
        </div>
    </div>

</section>
", "_partials/homePage/_functionnality.html.twig", "E:\\Formation CDA\\Cours\\18-mise_en_pratique_projet\\portial_citoyen\\back\\templates\\_partials\\homePage\\_functionnality.html.twig");
    }
}
