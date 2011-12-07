<?php

/* TcgDatabaseBundle:Race:edit.html.twig */
class __TwigTemplate_4684ddf6825b5d6cdbc96f7ad852869a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>TcgRace edit</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("race_update", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'edit_form'));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'edit_form'));
        echo "
    <button type=\"submit\">Modifier</button>
</form>

<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("race_list"), "html");
        echo "\">Retour</a>
<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("race_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
    <button type=\"submit\">Supprimer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "TcgDatabaseBundle:Race:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
