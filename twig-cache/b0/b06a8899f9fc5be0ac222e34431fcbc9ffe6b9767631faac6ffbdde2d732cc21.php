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

/* _global/index.html */
class __TwigTemplate_ab0665f13d63ac1096002d1e5bb6662846f04597b77402765a81daa7b878a87d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Auctions</title>

        <link rel=\"stylesheet\" href=\"/assets/css/main.css\" type=\"text/css\">
    </head>
    <body>
        <header>
            NAVIGACIJA
        </header>

        <!-- MAIN START -->
        <main>
            ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 20
        echo "        </main>
        <!-- MAIN END -->

        <div class=\"bookmarks\">Loading bookmarks...</div>

        <footer>
            &copy; 2021 Bogdan Jovanović
        </footer>

        <script src=\"/assets/js/bookmark.js\"></script>
    </body>
</html>
";
        $extension = $this->env->getExtension('\voku\twig\MinifyHtmlExtension');
        echo $extension->compress($this->env, ob_get_clean());
    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  78 => 18,  60 => 20,  58 => 18,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\views\\_global\\index.html");
    }
}
