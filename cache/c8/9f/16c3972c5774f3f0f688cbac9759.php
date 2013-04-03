<?php

/* index.html.twig */
class __TwigTemplate_c89f16c3972c5774f3f0f688cbac9759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Welcome to TSUSBOS</h1>
<h2 >The Simple URL Shortener Based On Silex </h2>
<p >To add a new url to be shortened, go to a url formed like this:
    <pre >http://shortener.com/goog?url=http://www.google.com </pre>
    After this, visiting the url
    <pre >http://shortener.com/goog</pre>
    will redirect the user to http://www.google.com .
</p >
<p >
    You can <a href=\"/view/list\">view all available urls on this site here.</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
