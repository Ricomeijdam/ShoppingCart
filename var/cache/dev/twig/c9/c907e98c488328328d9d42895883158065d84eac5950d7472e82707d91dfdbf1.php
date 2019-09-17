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

/* cart/index.html.twig */
class __TwigTemplate_049aad088371b2a6a712134b5a5ae0cc7555fcb27ff7f932aa760bbdc2d2bab9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
    <h2>Winkelwagen</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Prijs</th>
            <th>Omschrijving</th>
            <th>Aantal</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 20), "naam", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>€ ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 21), "prijs", [], "any", false, false, false, 21), "html", null, true);
            echo "</span></td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 22), "omschrijving", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "Aantal", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-outline-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Add</a>
                <a class=\"btn btn-outline-danger\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Delete</a>
            </td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <tr>
            <th>Totaal: € <span>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["totaal"]) || array_key_exists("totaal", $context) ? $context["totaal"] : (function () { throw new RuntimeError('Variable "totaal" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</span></th>
        </tr>
    </table>

    <div>
        <a class=\"btn btn-outline-success\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">Afrekenen</a>
        <span><a class=\"btn btn-outline-info\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Veder winkelen</a></span>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  134 => 37,  126 => 32,  123 => 31,  112 => 26,  108 => 25,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
    <h2>Winkelwagen</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Prijs</th>
            <th>Omschrijving</th>
            <th>Aantal</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for product in Products %}
        <tr>
            <td>{{ product.Product.naam }}</td>
            <td>€ {{ product.Product.prijs }}</span></td>
            <td>{{ product.Product.omschrijving }}</td>
            <td>{{ product.Aantal }}</td>
            <td>
                <a class=\"btn btn-outline-success\" href=\"{{ path('cart_add', {'id': product.Product.id}) }}\">Add</a>
                <a class=\"btn btn-outline-danger\" href=\"{{ path('cart_remove', {'id': product.Product.id}) }}\">Delete</a>
            </td>
        </tr>
        </tbody>
        {% endfor %}
        <tr>
            <th>Totaal: € <span>{{ totaal }}</span></th>
        </tr>
    </table>

    <div>
        <a class=\"btn btn-outline-success\" href=\"{{ path('checkout') }}\">Afrekenen</a>
        <span><a class=\"btn btn-outline-info\" href=\"{{ path('product_index') }}\">Veder winkelen</a></span>
    </div>


{% endblock %}", "cart/index.html.twig", "C:\\xampp\\htdocs\\shoppingcart\\templates\\cart\\index.html.twig");
    }
}
