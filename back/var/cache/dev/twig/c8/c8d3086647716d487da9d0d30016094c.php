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

/* _partials/homePage/_about.html.twig */
class __TwigTemplate_9d4917f47998a0c9b4cbf899c7a2319b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/homePage/_about.html.twig"));

        // line 1
        yield "<section class=\"about\">
    <div class=\"about-container\">

        <div class=\"about-content\">
            <div class=\"about-text\">
                 <h2>Bienvenue sur Portail Citoyen Votre, voix pour une ville meilleure !</h2>
                 <p>Portail Citoyen est une plateforme participative qui vous permet de faire entendre vos idées pour
                   améliorer votre cadre de vie. Que vous souhaitiez proposer de nouvelles initiatives, soutenir
                   celles des autres ou suivre l’évolution des projets,
                   tout est pensé pour faciliter votre engagement citoyen.
                 </p>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"about-button\">En savoir-plus >></a>
            </div>
            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/pj-image.jpg"), "html", null, true);
        yield "\" alt=\"Portrait\">

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
        return "_partials/homePage/_about.html.twig";
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
        return array (  66 => 14,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"about\">
    <div class=\"about-container\">

        <div class=\"about-content\">
            <div class=\"about-text\">
                 <h2>Bienvenue sur Portail Citoyen Votre, voix pour une ville meilleure !</h2>
                 <p>Portail Citoyen est une plateforme participative qui vous permet de faire entendre vos idées pour
                   améliorer votre cadre de vie. Que vous souhaitiez proposer de nouvelles initiatives, soutenir
                   celles des autres ou suivre l’évolution des projets,
                   tout est pensé pour faciliter votre engagement citoyen.
                 </p>
                <a href=\"{{ path('app_home') }}\" class=\"about-button\">En savoir-plus >></a>
            </div>
            <img src=\"{{ asset('pictures/pj-image.jpg') }}\" alt=\"Portrait\">

        </div>

    </div>
</section>
", "_partials/homePage/_about.html.twig", "E:\\Formation CDA\\Cours\\18-mise_en_pratique_projet\\portial_citoyen\\templates\\_partials\\homePage\\_about.html.twig");
    }
}
