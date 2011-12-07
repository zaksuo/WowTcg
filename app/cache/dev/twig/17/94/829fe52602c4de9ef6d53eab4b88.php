<?php

/* TcgDatabaseBundle:TcgCaracteristiques:show.html.twig */
class __TwigTemplate_1794829fe52602c4de9ef6d53eab4b88 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>TcgCaracteristiques</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Cout</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "cout", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Couticone</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "coutIcone", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Attaque</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "attaque", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Vie</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "vie", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Id</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caracteristiques"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caracteristiques_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caracteristiques_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "TcgDatabaseBundle:TcgCaracteristiques:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
