<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/ingredient/index.html.twig */
class __TwigTemplate_4a4b74024db1f5383b67b5417118e5cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ingredient/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "🌮 RecipeBook - Mes Ingrédients
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container mt-4\">
";
        // line 8
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8) === [])) {
            // line 9
            echo "<h1>Mes ingrédients</h1>

";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
<a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
</a>

<div class=\"count mt-4\">Il y a
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 22, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\tingrédient(s)
</div>

<div class=\"row justify-content-center mt-4\">
  \t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 28
                echo "    <div class=\"col-3\">
\t\t<div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
\t\t<div class=\"card-header\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</div>
\t\t<div class=\"card-body\">
\t\t\t<h4 class=\"card-title\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</h4>
\t\t\t<p class=\"card-text\">";
                // line 33
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 33), 2, ".", ","), "html", null, true);
                echo "
\t\t\t€</p>
\t\t\t<p class=\"card-text\">";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                echo "
\t\t\t</p>
\t\t\t<a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-light\">Modifier</a>
\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-secondary\">Supprimer</a>\t\t\t\t\t\t
\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</div>


<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 47
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 47, $this->source); })()));
            echo "
</div>
";
        } else {
            // line 50
            echo "\t\t\t<h4>Il n'y a pas d'ingrédients</h4>

\t\t\t<a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>
\t\t";
        }
        // line 56
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 56,  191 => 52,  187 => 50,  181 => 47,  175 => 43,  164 => 38,  160 => 37,  155 => 35,  150 => 33,  146 => 32,  141 => 30,  137 => 28,  133 => 27,  125 => 22,  117 => 17,  114 => 16,  105 => 13,  102 => 12,  98 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🌮 RecipeBook - Mes Ingrédients
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
{% if not ingredients.items is same as([]) %}
<h1>Mes ingrédients</h1>

{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
{% endfor %}

<a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
</a>

<div class=\"count mt-4\">Il y a
\t\t\t\t{{ ingredients.getTotalItemCount }}
\t\t\t\tingrédient(s)
</div>

<div class=\"row justify-content-center mt-4\">
  \t{% for ingredient in ingredients %}
    <div class=\"col-3\">
\t\t<div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
\t\t<div class=\"card-header\">{{ ingredient.id }}</div>
\t\t<div class=\"card-body\">
\t\t\t<h4 class=\"card-title\">{{ ingredient.name }}</h4>
\t\t\t<p class=\"card-text\">{{ ingredient.price|number_format(2, '.', ',') }}
\t\t\t€</p>
\t\t\t<p class=\"card-text\">{{ ingredient.createdAt|date('d/m/Y') }}
\t\t\t</p>
\t\t\t<a href=\"{{ path('ingredient.edit', {id: ingredient.id}) }}\" role=\"button\" class=\"btn btn-light\">Modifier</a>
\t\t\t<a href=\"{{ path('ingredient.delete', {id: ingredient.id}) }}\" role=\"button\" class=\"btn btn-secondary\">Supprimer</a>\t\t\t\t\t\t
\t\t</div>
\t\t</div>
\t</div>
\t{% endfor %}
</div>


<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(ingredients) }}
</div>
{% else %}
\t\t\t<h4>Il n'y a pas d'ingrédients</h4>

\t\t\t<a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>
\t\t{% endif %}

</div>
{% endblock %}
", "pages/ingredient/index.html.twig", "/Users/Shared/Openclassrooms/Projets PHP:Sf/RecipeBooK/templates/pages/ingredient/index.html.twig");
    }
}
