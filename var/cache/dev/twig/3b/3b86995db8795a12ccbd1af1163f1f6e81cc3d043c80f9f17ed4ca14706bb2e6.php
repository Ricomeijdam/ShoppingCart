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

/* checkout/index.html.twig */
class __TwigTemplate_bdf98f97e737c63e1cf0ecfe086eb184f885ef807a0c34458b2900c3ee1eb4ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/index.html.twig", 1);
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
    <table class=\"table\">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Prijs</th>
            <th>Omschrijving</th>
            <th>Aantal</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 18), "naam", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td>€ ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 19), "prijs", [], "any", false, false, false, 19), "html", null, true);
            echo "</span></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 20), "omschrijving", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "Aantal", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <tr>
            <th>Totaal: € <span>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totaal"]) || array_key_exists("totaal", $context) ? $context["totaal"] : (function () { throw new RuntimeError('Variable "totaal" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</span></th>
        </tr>
    </table>

    <div>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 32, $this->source); })()), 'widget');
        echo "
        <input class=\"btn btn-success ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 33, $this->source); })())) < 1)) {
            echo "disabled";
        }
        echo "\" type=\"submit\" value=\"Krijg de tering wesley\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  130 => 33,  126 => 32,  122 => 31,  114 => 26,  111 => 25,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
    <table class=\"table\">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Prijs</th>
            <th>Omschrijving</th>
            <th>Aantal</th>
        </tr>
        </thead>
        <tbody>
        {% for product in Products %}
        <tr>
            <td>{{ product.Product.naam }}</td>
            <td>€ {{ product.Product.prijs }}</span></td>
            <td>{{ product.Product.omschrijving }}</td>
            <td>{{ product.Aantal }}</td>
        </tr>
        </tbody>
        {% endfor %}
        <tr>
            <th>Totaal: € <span>{{ totaal }}</span></th>
        </tr>
    </table>

    <div>
        {{ form_start(our_form) }}
        {{ form_widget(our_form) }}
        <input class=\"btn btn-success {% if Products|length < 1 %}disabled{% endif %}\" type=\"submit\" value=\"Krijg de tering wesley\">
        {{ form_end(our_form) }}
    </div>

{% endblock %}", "checkout/index.html.twig", "C:\\xampp\\htdocs\\shoppingcart\\templates\\checkout\\index.html.twig");
    }
}
