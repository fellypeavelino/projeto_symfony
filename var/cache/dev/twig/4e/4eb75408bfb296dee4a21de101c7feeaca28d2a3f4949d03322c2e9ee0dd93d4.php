<?php

/* pedidos/new.html.twig */
class __TwigTemplate_514547f5c5fbdf98a81cd890bee256c463af5e634252d4f9925b15cf9167a8eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedidos/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20a492ce69cfbc9ce236ca1ba43403a43d86c9297a248224501586cc97d55f1a = $this->env->getExtension("native_profiler");
        $__internal_20a492ce69cfbc9ce236ca1ba43403a43d86c9297a248224501586cc97d55f1a->enter($__internal_20a492ce69cfbc9ce236ca1ba43403a43d86c9297a248224501586cc97d55f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a492ce69cfbc9ce236ca1ba43403a43d86c9297a248224501586cc97d55f1a->leave($__internal_20a492ce69cfbc9ce236ca1ba43403a43d86c9297a248224501586cc97d55f1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c602a16cbe81ef449fb8b98c0322e72c9448bbdfb77d1068296f10f486a08d7 = $this->env->getExtension("native_profiler");
        $__internal_5c602a16cbe81ef449fb8b98c0322e72c9448bbdfb77d1068296f10f486a08d7->enter($__internal_5c602a16cbe81ef449fb8b98c0322e72c9448bbdfb77d1068296f10f486a08d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedidos creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pedidos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5c602a16cbe81ef449fb8b98c0322e72c9448bbdfb77d1068296f10f486a08d7->leave($__internal_5c602a16cbe81ef449fb8b98c0322e72c9448bbdfb77d1068296f10f486a08d7_prof);

    }

    public function getTemplateName()
    {
        return "pedidos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Pedidos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pedidos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
