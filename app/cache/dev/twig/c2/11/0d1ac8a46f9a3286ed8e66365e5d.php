<?php

/* TcgDatabaseBundle:Race:new.html.twig */
class __TwigTemplate_c2110d1ac8a46f9a3286ed8e66365e5d extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "TcgDatabaseBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("race_create"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
        <button type=\"submit\">Créer</button><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("race_list"), "html");
        echo "\">Retour</a>
    </form>
";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Race:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
