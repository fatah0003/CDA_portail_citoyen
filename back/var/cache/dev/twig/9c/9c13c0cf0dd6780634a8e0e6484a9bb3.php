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

/* _partials/_footer.html.twig */
class __TwigTemplate_46e10355735505a8fbb3fe428804d6dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        yield "<footer class=\"footer blue\">
    <div class=\"footer__section\">
        <h3>News Letter</h3>
        <form class=\"footer__newsletter\">
            <input type=\"email\" placeholder=\"Entrez votre adresse e-mail\" />
            <button type=\"submit\">S’abonner</button>
            <small>Nous ne vous enverrons jamais de spam !</small>
        </form>
    </div>



    <div class=\"footer__section\">
        <h3>Liens utiles</h3>
        <ul>
            <li><a href=\"#\">À propos</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
            <li><a href=\"#\">Politique de confidentialité</a></li>
            <li><a href=\"#\">Accessibilité</a></li>
        </ul>
    </div>
    <div class=\"footer__section\">
        <h3>Contact / Support</h3>
        <p>12 Av. Jean Mermoz, 69008 Lyon</p>
        <p>(+33) 02 000 000 00</p>
        <p>mairiedu8eme@mail.gov</p>
    </div>

    <div class=\"footer__bottom\">
        <p>© 2025 Ville de Lyon. Tous droits réservés.</p>
    </div>
</footer>

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
        return "_partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer blue\">
    <div class=\"footer__section\">
        <h3>News Letter</h3>
        <form class=\"footer__newsletter\">
            <input type=\"email\" placeholder=\"Entrez votre adresse e-mail\" />
            <button type=\"submit\">S’abonner</button>
            <small>Nous ne vous enverrons jamais de spam !</small>
        </form>
    </div>



    <div class=\"footer__section\">
        <h3>Liens utiles</h3>
        <ul>
            <li><a href=\"#\">À propos</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
            <li><a href=\"#\">Politique de confidentialité</a></li>
            <li><a href=\"#\">Accessibilité</a></li>
        </ul>
    </div>
    <div class=\"footer__section\">
        <h3>Contact / Support</h3>
        <p>12 Av. Jean Mermoz, 69008 Lyon</p>
        <p>(+33) 02 000 000 00</p>
        <p>mairiedu8eme@mail.gov</p>
    </div>

    <div class=\"footer__bottom\">
        <p>© 2025 Ville de Lyon. Tous droits réservés.</p>
    </div>
</footer>

", "_partials/_footer.html.twig", "E:\\Formation CDA\\Cours\\18-mise_en_pratique_projet\\portial_citoyen\\templates\\_partials\\_footer.html.twig");
    }
}
