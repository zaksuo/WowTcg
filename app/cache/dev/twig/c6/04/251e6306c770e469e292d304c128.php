<?php

/* TcgDatabaseBundle:Carte:show.html.twig */
class __TwigTemplate_c604251e6306c770e469e292d304c128 extends Twig_Template
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
        echo "    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "libelle", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Typecarte</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "typeCarte", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Donnees</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "donnees", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Caracteristiques</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "caracteristiques", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "image", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_list"), "html");
        echo "\">Retour</a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">Modifier</a>
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">Supprimer</a>
";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Carte:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
