<?php

/* TcgDatabaseBundle:Edition:new.html.twig */
class __TwigTemplate_1e069bf6d4d98ab5f09e9eb754f90e48 extends Twig_Template
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
        echo "    <h1>Ajout d'une nouvelle édition</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_create"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        <table>
            <tr>
                <td>";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "libelle", array(), "any", false));
        echo "</td>
                <td>";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "libelle", array(), "any", false));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "nbCartes", array(), "any", false));
        echo "</td>
                <td>";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "nbCartes", array(), "any", false));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "starterDeck", array(), "any", false));
        echo "</td>
                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "starterDeck", array(), "any", false));
        echo " Oui</td>
            </tr>
            <tr>
                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "typeEdition", array(), "any", false));
        echo "</td>
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "typeEdition", array(), "any", false));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "icone", array(), "any", false));
        echo "</td>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "icone", array(), "any", false));
        echo "</td>
            </tr>
        </table>
        
        ";
        // line 30
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
        
        <button type=\"submit\">Ajouter</button> <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_list"), "html");
        echo "\">Retour</a>
    </form>

";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Edition:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
