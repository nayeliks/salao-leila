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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_155c21e953bac7454196f42c74651e63 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css\">
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
        yield "    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <a class=\"navbar-brand ml-3\" href=\"#\">Dashboard</a>
        </nav>

        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\">LeilaHair</span>
            </a>
            <div class=\"sidebar\">
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\">
                        <li class=\"nav-item\">
                            <a href=\"/dashboard\" class=\"nav-link active\">
                                <i class=\"nav-icon fas fa-home\"></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/agendar\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-calendar-plus\"></i>
                                <p>Agendar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/agendamentos/historico\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-history\"></i>
                                <p>Histórico de Agendamentos</p>
                            </a>
                        </li>

                        ";
        // line 43
        if ((array_key_exists("tipoLogin", $context) && ((isset($context["tipoLogin"]) || array_key_exists("tipoLogin", $context) ? $context["tipoLogin"] : (function () { throw new RuntimeError('Variable "tipoLogin" does not exist.', 43, $this->source); })()) == 1))) {
            // line 44
            yield "                            <li class=\"nav-header\">Admin</li>
                            <li class=\"nav-item\">
                                <a href=\"/clientes/logins\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>Logins de Clientes</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/metricas\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-chart-line\"></i>
                                    <p>Métricas</p>
                                </a>
                            </li>
                        ";
        }
        // line 58
        yield "                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"content-wrapper\">
            <section class=\"content pt-4 pl-4 pr-4\">
                <div class=\"container-fluid\">
                    <h1>Bem-vindo ao seu espaço</h1>
                    <p>Hora de pensar em você!</p>

                    <div class=\"card mt-4\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Agenda</h3>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"agenda\">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <input type=\"hidden\" id=\"loginId\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["loginId"]) || array_key_exists("loginId", $context) ? $context["loginId"] : (function () { throw new RuntimeError('Variable "loginId" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js\"></script>
    <script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/dashboard.view.js"), "html", null, true);
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
        return "dashboard/dashboard.html.twig";
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
        return array (  198 => 89,  191 => 86,  181 => 85,  171 => 82,  145 => 58,  129 => 44,  127 => 43,  92 => 10,  82 => 9,  69 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css\">
{% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <a class=\"navbar-brand ml-3\" href=\"#\">Dashboard</a>
        </nav>

        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\">LeilaHair</span>
            </a>
            <div class=\"sidebar\">
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\">
                        <li class=\"nav-item\">
                            <a href=\"/dashboard\" class=\"nav-link active\">
                                <i class=\"nav-icon fas fa-home\"></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/agendar\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-calendar-plus\"></i>
                                <p>Agendar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/agendamentos/historico\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-history\"></i>
                                <p>Histórico de Agendamentos</p>
                            </a>
                        </li>

                        {% if tipoLogin is defined and tipoLogin == 1 %}
                            <li class=\"nav-header\">Admin</li>
                            <li class=\"nav-item\">
                                <a href=\"/clientes/logins\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>Logins de Clientes</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/metricas\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-chart-line\"></i>
                                    <p>Métricas</p>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"content-wrapper\">
            <section class=\"content pt-4 pl-4 pr-4\">
                <div class=\"container-fluid\">
                    <h1>Bem-vindo ao seu espaço</h1>
                    <p>Hora de pensar em você!</p>

                    <div class=\"card mt-4\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Agenda</h3>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"agenda\">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <input type=\"hidden\" id=\"loginId\" value=\"{{ loginId }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js\"></script>
    <script src=\"{{ asset('js/dashboard/dashboard.view.js') }}\"></script>
{% endblock %}
", "dashboard/dashboard.html.twig", "/var/www/html/templates/dashboard/dashboard.html.twig");
    }
}
