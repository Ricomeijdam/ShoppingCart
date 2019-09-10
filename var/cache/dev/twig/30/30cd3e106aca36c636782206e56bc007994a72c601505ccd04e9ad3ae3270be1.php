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

/* emails/checkout.html.twig */
class __TwigTemplate_a97418a301642634246322751303bbae29b7b785aba1e4011bdf652599fdffc1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/checkout.html.twig"));

        // line 1
        echo "<p>Hallo ";
        echo twig_escape_filter($this->env, (isset($context["Naam"]) || array_key_exists("Naam", $context) ? $context["Naam"] : (function () { throw new RuntimeError('Variable "Naam" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</p>

<strong>Hier is uw bestellijst</strong>

<table>
    <tr>
        <th>Naam</th>
        <th>Product Prijs</th>
        <th>Aantal</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "        <tr>
            <td>
                <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 14), "naam", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
            </td>
            <td>€";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "Product", [], "any", false, false, false, 16), "prijs", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>
                <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "Aantal", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  75 => 18,  70 => 16,  65 => 14,  61 => 12,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Hallo {{ Naam }}</p>

<strong>Hier is uw bestellijst</strong>

<table>
    <tr>
        <th>Naam</th>
        <th>Product Prijs</th>
        <th>Aantal</th>
    </tr>
    {% for product in Products %}
        <tr>
            <td>
                <p>{{ product.Product.naam }}</p>
            </td>
            <td>€{{ product.Product.prijs }}</td>
            <td>
                <p>{{ product.Aantal }}</p>
            </td>
        </tr>
    {% endfor %}
</table>", "emails/checkout.html.twig", "C:\\xampp\\htdocs\\shoppingcart\\templates\\emails\\checkout.html.twig");
    }
}
