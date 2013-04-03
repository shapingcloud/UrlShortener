<?php

/* layout.html.twig */
class __TwigTemplate_177b711f8b82de2ec950729c8134a93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">
    <head>
        <link rel=\"stylesheet\" href=\"style.css\" />
        <title>Welcome to TSUSBOS - The Simple URL Shortener Based On Silex</title>
    </head>
    <body>
        <div id=\"content\">";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    </body>
</html>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  18 => 1,  29 => 4,  26 => 3,);
    }
}
