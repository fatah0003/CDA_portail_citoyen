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

/* registration/register.html.twig */
class __TwigTemplate_5417c6a88fc6d864497f77180d3ad702 extends Template
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
            'importmap' => [$this, 'block_importmap'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Register";
        
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
        yield "    ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 7
        yield "
    <div class=\"form-wrapper\">
        <form method=\"post\" class=\"form-box\">
            <h1 class=\"form-title\">Créer un compte</h1>

            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start');
        yield "

            <div class=\"form-element\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'errors');
        yield "
            </div>

            ";
        // line 21
        yield "            <div class=\"form-element\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "infosUser", [], "any", false, false, false, 22), "firstName", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "infosUser", [], "any", false, false, false, 23), "firstName", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "infosUser", [], "any", false, false, false, 27), "lastName", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "infosUser", [], "any", false, false, false, 28), "lastName", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div id=\"locationContainer\" class=\"form-element\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "infosUser", [], "any", false, false, false, 32), "city", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "infosUser", [], "any", false, false, false, 33), "city", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "

                <div id=\"showlist\" style=\"display: none;\">
                    <ul id=\"showresults\"></ul>
                </div>

                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "infosUser", [], "any", false, false, false, 39), "zipCode", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "infosUser", [], "any", false, false, false, 40), "zipCode", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "infosUser", [], "any", false, false, false, 44), "phoneNumber", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "infosUser", [], "any", false, false, false, 45), "phoneNumber", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "infosUser", [], "any", false, false, false, 49), "userName", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "infosUser", [], "any", false, false, false, 50), "userName", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "infosUser", [], "any", false, false, false, 54), "birthDate", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "infosUser", [], "any", false, false, false, 55), "birthDate", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                <div class=\"input-with-icon\">
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <span class=\"toggle-password\" aria-label=\"Afficher ou masquer le mot de passe\" onclick=\"togglePassword('registration_form_plainPassword_first')\">
                        <i class=\"fas fa-eye\"></i>
                    </span>
                </div>
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "plainPassword", [], "any", false, false, false, 66), "first", [], "any", false, false, false, 66), 'errors');
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), "second", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                <div class=\"input-with-icon\">
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <span class=\"toggle-password\" aria-label=\"Afficher ou masquer le mot de passe\" onclick=\"togglePassword('registration_form_plainPassword_second')\">
                        <i class=\"fas fa-eye\"></i>
                    </span>
                </div>
                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "plainPassword", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'errors');
        yield "
            </div>

            <div class=\"form-element\">
                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "agreeTerms", [], "any", false, false, false, 81), 'row', ["label_attr" => ["class" => "form-label"]]);
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-submit\">S'inscrire</button>
            <br>
            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-secondary\">
                Se connecter
            </a>

            ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap(["app", "api_address"]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  283 => 6,  268 => 90,  261 => 86,  253 => 81,  246 => 77,  238 => 72,  233 => 70,  226 => 66,  218 => 61,  213 => 59,  206 => 55,  202 => 54,  195 => 50,  191 => 49,  184 => 45,  180 => 44,  173 => 40,  169 => 39,  160 => 33,  156 => 32,  149 => 28,  145 => 27,  138 => 23,  134 => 22,  131 => 21,  125 => 17,  121 => 16,  117 => 15,  111 => 12,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% block importmap %}{{ importmap(['app', 'api_address']) }}{% endblock %}

    <div class=\"form-wrapper\">
        <form method=\"post\" class=\"form-box\">
            <h1 class=\"form-title\">Créer un compte</h1>

            {{ form_start(registrationForm) }}

            <div class=\"form-element\">
                {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.email, {'attr': {'class': 'form-input'}}) }}
                {{ form_errors(registrationForm.email) }}
            </div>

            {# Champs InfosUser (form imbriqué) #}
            <div class=\"form-element\">
                {{ form_label(registrationForm.infosUser.firstName, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.firstName, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.infosUser.lastName, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.lastName, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div id=\"locationContainer\" class=\"form-element\">
                {{ form_label(registrationForm.infosUser.city, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.city, {'attr': {'class': 'form-input'}}) }}

                <div id=\"showlist\" style=\"display: none;\">
                    <ul id=\"showresults\"></ul>
                </div>

                {{ form_label(registrationForm.infosUser.zipCode, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.zipCode, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.infosUser.phoneNumber, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.phoneNumber, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.infosUser.userName, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.userName, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.infosUser.birthDate, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(registrationForm.infosUser.birthDate, {'attr': {'class': 'form-input'}}) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.plainPassword.first, null, {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"input-with-icon\">
                    {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'form-input'}}) }}
                    <span class=\"toggle-password\" aria-label=\"Afficher ou masquer le mot de passe\" onclick=\"togglePassword('registration_form_plainPassword_first')\">
                        <i class=\"fas fa-eye\"></i>
                    </span>
                </div>
                {{ form_errors(registrationForm.plainPassword.first) }}
            </div>

            <div class=\"form-element\">
                {{ form_label(registrationForm.plainPassword.second, null, {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"input-with-icon\">
                    {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'form-input'}}) }}
                    <span class=\"toggle-password\" aria-label=\"Afficher ou masquer le mot de passe\" onclick=\"togglePassword('registration_form_plainPassword_second')\">
                        <i class=\"fas fa-eye\"></i>
                    </span>
                </div>
                {{ form_errors(registrationForm.plainPassword.second) }}
            </div>

            <div class=\"form-element\">
                {{ form_row(registrationForm.agreeTerms, {'label_attr': {'class': 'form-label'}}) }}
            </div>

            <button type=\"submit\" class=\"btn btn-submit\">S'inscrire</button>
            <br>
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">
                Se connecter
            </a>

            {{ form_end(registrationForm) }}
        </form>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Daniel\\Desktop\\tp_portail\\CDA_portail_citoyen\\back\\templates\\registration\\register.html.twig");
    }
}
