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

/* login/cadastro.html.twig */
class __TwigTemplate_2c5775e8349ee93d034b73116046d8fa extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/cadastro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/cadastro.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Cadastro de Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<div class=\"register-box\">
    <div class=\"register-logo\">
        <a href=\"#\"><b>Leila</b>Hair</a>
    </div>
    <div class=\"card\">
        <div class=\"card-body register-card-body\">
            <p class=\"login-box-msg\">Preencha os dados abaixo para criar sua conta</p>

            <form id=\"register-form\">
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Descrição\" name=\"description\" id=\"description\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-info-circle\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Login\" name=\"login\" id=\"login\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-user\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\" id=\"email\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" name=\"password\" id=\"password\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"DDI\" name=\"ddi\" id=\"ddi\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-phone-alt\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Número\" name=\"numero\" id=\"numero\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-phone-alt\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <button type=\"submit\" id=\"register-btn\" class=\"btn btn-primary btn-block\">Cadastrar</button>
                    </div>
                </div>
            </form>
            </br>
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_page");
        yield "\" class=\"btn btn-secondary btn-block\">Já tem uma conta? Fazer Login</a>
                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/login/login.controller.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/login/register.view.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/cadastro.html.twig";
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
        return array (  211 => 90,  207 => 89,  201 => 87,  191 => 86,  174 => 76,  106 => 10,  96 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cadastro de Login{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css\">
{% endblock %}

{% block body %}
<div class=\"register-box\">
    <div class=\"register-logo\">
        <a href=\"#\"><b>Leila</b>Hair</a>
    </div>
    <div class=\"card\">
        <div class=\"card-body register-card-body\">
            <p class=\"login-box-msg\">Preencha os dados abaixo para criar sua conta</p>

            <form id=\"register-form\">
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Descrição\" name=\"description\" id=\"description\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-info-circle\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Login\" name=\"login\" id=\"login\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-user\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\" id=\"email\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" name=\"password\" id=\"password\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"DDI\" name=\"ddi\" id=\"ddi\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-phone-alt\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Número\" name=\"numero\" id=\"numero\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-phone-alt\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <button type=\"submit\" id=\"register-btn\" class=\"btn btn-primary btn-block\">Cadastrar</button>
                    </div>
                </div>
            </form>
            </br>
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <a href=\"{{ path('login_page') }}\" class=\"btn btn-secondary btn-block\">Já tem uma conta? Fazer Login</a>
                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/login/login.controller.js') }}\"></script>
    <script src=\"{{ asset('js/login/register.view.js') }}\"></script>
{% endblock %}", "login/cadastro.html.twig", "/var/www/html/templates/login/cadastro.html.twig");
    }
}
