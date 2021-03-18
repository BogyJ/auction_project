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

/* Category/show.html */
class __TwigTemplate_b34fe19dcc66a20b46338e403b1ae0798b982dc0d57dd8ec8106892378564aa7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Category/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 4));
        echo "</h1>
    <ul>
        ";
        // line 6
        if (($context["auctionsInCategory"] ?? null)) {
            // line 7
            echo "        <p>Spisak aukcija u ovoj kategoriji su:</p>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["auctionsInCategory"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
                // line 9
                echo "                <li>
                    <a href=\"/auction/";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", [], "any", false, false, false, 11));
                echo "
                    </a><br>
                    ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "description", [], "any", false, false, false, 13));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            <p>Nema aktivnih aukcija za izabranu kategoriju!</p>
        ";
        }
        // line 18
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  88 => 16,  85 => 15,  77 => 13,  72 => 11,  68 => 10,  65 => 9,  61 => 8,  58 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Category/show.html", "C:\\xampp\\htdocs\\views\\Category\\show.html");
    }
}
