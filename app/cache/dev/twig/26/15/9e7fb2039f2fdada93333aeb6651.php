<?php

/* TcgDatabaseBundle:Edition:index.html.twig */
class __TwigTemplate_26159e7fb2039f2fdada93333aeb6651 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Liste des éditions</h1>

    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_new"), "html");
        echo "\">Ajouter une édition</a>
    
    <ul class=\"edition_list\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'entities'));
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">
                <img class=\"edition_icon\" src=\"/bundles/tcgcollection/images/edition/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo ".png\"><br />
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "libelle", array(), "any", false), "html");
            echo "</a><br />
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nbCartes", array(), "any", false), "html");
            echo " Cartes<br />
                ";
            // line 17
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Edition:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
