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

/* pages/recipe/index.html.twig */
class __TwigTemplate_f73675fefd9c6626d2623117435003f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/index.html.twig", 1);
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

        echo "🌮 RecipeBook - Mes Recettes
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
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8) === [])) {
            // line 9
            echo "<h1>Mes Recettes</h1>
";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
<a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
</a>

<div class=\"count mt-4\">Il y a
\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 21, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\trecette(s)
</div>

<div class=\"row justify-content-center mt-4\">
  \t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 27
                echo "    <div class=\"col-3\">
\t\t<div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
\t\t<div class=\"card-header\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "</div>
\t\t<div class=\"card-body\">
\t\t\t<h4 class=\"card-title\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</h4>
\t\t\t<p class=\"card-text\"> Prix : ";
                // line 32
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 35), 2, ".", ","), "html", null, true);
                    echo "€
\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t</p>
            <p class=\"card-text\"> Difficulté : ";
                // line 38
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 41), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t</p>
\t\t\t<p class=\"card-text\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo "
\t\t\t</p>
\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-light\">Modifier</a>
\t\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-secondary\">Supprimer</a>\t\t\t\t\t\t
\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</div>


<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 56
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 56, $this->source); })()));
            echo "
</div>
";
        } else {
            // line 59
            echo "\t\t\t<h4>Il n'y a pas de Recettes</h4>

\t\t\t<a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>
\t\t";
        }
        // line 65
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 65,  215 => 61,  211 => 59,  205 => 56,  199 => 52,  188 => 47,  184 => 46,  179 => 44,  176 => 43,  170 => 41,  166 => 39,  164 => 38,  161 => 37,  155 => 35,  151 => 33,  149 => 32,  145 => 31,  140 => 29,  136 => 27,  132 => 26,  124 => 21,  116 => 16,  113 => 15,  104 => 12,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🌮 RecipeBook - Mes Recettes
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
{% if not recipes.items is same as([]) %}
<h1>Mes Recettes</h1>
{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
{% endfor %}

<a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
</a>

<div class=\"count mt-4\">Il y a
\t\t\t\t{{ recipes.getTotalItemCount }}
\t\t\t\trecette(s)
</div>

<div class=\"row justify-content-center mt-4\">
  \t{% for recipe in recipes %}
    <div class=\"col-3\">
\t\t<div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
\t\t<div class=\"card-header\">{{ recipe.id }}</div>
\t\t<div class=\"card-body\">
\t\t\t<h4 class=\"card-title\">{{ recipe.name }}</h4>
\t\t\t<p class=\"card-text\"> Prix : {% if recipe.price is null %}
\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ recipe.price|number_format(2, '.', ',') }}€
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t</p>
            <p class=\"card-text\"> Difficulté : {% if recipe.difficulty is null %}
\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ recipe.difficulty }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t</p>
\t\t\t<p class=\"card-text\">{{ recipe.createdAt|date('d/m/Y') }}
\t\t\t</p>
\t\t\t<a href=\"{{ path('recipe.edit', {id: recipe.id}) }}\" role=\"button\" class=\"btn btn-light\">Modifier</a>
\t\t\t<a href=\"{{ path('recipe.delete', {id: recipe.id}) }}\" role=\"button\" class=\"btn btn-secondary\">Supprimer</a>\t\t\t\t\t\t
\t\t</div>
\t\t</div>
\t</div>
\t{% endfor %}
</div>


<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(recipes) }}
</div>
{% else %}
\t\t\t<h4>Il n'y a pas de Recettes</h4>

\t\t\t<a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>
\t\t{% endif %}

</div>
{% endblock %}
", "pages/recipe/index.html.twig", "/Users/Shared/Openclassrooms/Projets PHP:Sf/RecipeBooK/templates/pages/recipe/index.html.twig");
    }
}
