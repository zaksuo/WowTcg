<?php

/* TcgDatabaseBundle:Edition:show.html.twig */
class __TwigTemplate_bbbdb177c613bb719aadf91ec3739c9d extends Twig_Template
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
        echo "    <h1>Edition</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "libelle", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Nbcartes</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nbCartes", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Starterdeck</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "starterDeck", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Icone</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "icone", array(), "any", false), "html");
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_list"), "html");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
                Edit
            </a>
        </li>
        <li>
            <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edition_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
                <button type=\"submit\">Delete</button>
            </form>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Edition:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
