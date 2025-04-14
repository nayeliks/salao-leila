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

/* login/login.html.twig */
class __TwigTemplate_985334a79a167e776b1f72c6a55c1efd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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

        yield "Login";
        
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
        yield "<div class=\"login-box\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">
  <div class=\"login-logo\">
    <a href=\"#\"><b>Leila</b>Hair</a>
  </div>
  <div class=\"card\">
    <div class=\"card-body login-card-body\">
      <p class=\"login-box-msg\">Faça login para iniciar sua sessão</p>

      <form id=\"login-form\">
          <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Login ou E-mail\" name=\"login\" id=\"login\" required>
              <div class=\"input-group-append\">
                  <div class=\"input-group-text\">
                      <span class=\"fas fa-user\"></span>
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
          <div class=\"row\">
              <div class=\"col-12\">
                  <button type=\"submit\" id=\"login-btn\" class=\"btn btn-primary btn-block\">Entrar</button>
              </div>
          </div>
        </form>
        <div class=\"row mt-3\">
            <div class=\"col-12\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_page");
        yield "\" class=\"btn btn-outline-secondary btn-block\">Não tem uma conta? Cadastre-se</a>
            </div>
        </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"loginErrorModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body text-danger\" id=\"login-error-message\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/login/login.controller.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/login/login.view.js"), "html", null, true);
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
        return "login/login.html.twig";
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
        return array (  188 => 67,  184 => 66,  178 => 64,  168 => 63,  141 => 43,  106 => 10,  96 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css\">
{% endblock %}

{% block body %}
<div class=\"login-box\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">
  <div class=\"login-logo\">
    <a href=\"#\"><b>Leila</b>Hair</a>
  </div>
  <div class=\"card\">
    <div class=\"card-body login-card-body\">
      <p class=\"login-box-msg\">Faça login para iniciar sua sessão</p>

      <form id=\"login-form\">
          <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Login ou E-mail\" name=\"login\" id=\"login\" required>
              <div class=\"input-group-append\">
                  <div class=\"input-group-text\">
                      <span class=\"fas fa-user\"></span>
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
          <div class=\"row\">
              <div class=\"col-12\">
                  <button type=\"submit\" id=\"login-btn\" class=\"btn btn-primary btn-block\">Entrar</button>
              </div>
          </div>
        </form>
        <div class=\"row mt-3\">
            <div class=\"col-12\">
                <a href=\"{{ path('register_page') }}\" class=\"btn btn-outline-secondary btn-block\">Não tem uma conta? Cadastre-se</a>
            </div>
        </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"loginErrorModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body text-danger\" id=\"login-error-message\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/login/login.controller.js') }}\"></script>
    <script src=\"{{ asset('js/login/login.view.js') }}\"></script>
{% endblock %}", "login/login.html.twig", "/var/www/html/templates/login/login.html.twig");
    }
}
