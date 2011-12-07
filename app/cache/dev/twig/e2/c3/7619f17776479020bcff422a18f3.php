<?php

/* TcgHomeBundle:Default:index.html.twig */
class __TwigTemplate_e2c37619f17776479020bcff422a18f3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "TcgHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
