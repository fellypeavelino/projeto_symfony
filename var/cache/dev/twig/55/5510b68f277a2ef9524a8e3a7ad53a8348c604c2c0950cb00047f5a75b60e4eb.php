<?php

/* pedidos/edit.html.twig */
class __TwigTemplate_f71b5ea05fc6e59f41c969a43c8f94488950c76ca2d6588924f8f5d0f9cd1414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedidos/edit.html.twig", 1);
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
        $__internal_a75c2f18992da7b58b0de4ff92ffaa1d10fbd1fa1b97837c4bd32820144a8754 = $this->env->getExtension("native_profiler");
        $__internal_a75c2f18992da7b58b0de4ff92ffaa1d10fbd1fa1b97837c4bd32820144a8754->enter($__internal_a75c2f18992da7b58b0de4ff92ffaa1d10fbd1fa1b97837c4bd32820144a8754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedidos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75c2f18992da7b58b0de4ff92ffaa1d10fbd1fa1b97837c4bd32820144a8754->leave($__internal_a75c2f18992da7b58b0de4ff92ffaa1d10fbd1fa1b97837c4bd32820144a8754_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be3d533618c94bf3ec16f6dc698bcf23f018ce405b510c85d90237848fb1141c = $this->env->getExtension("native_profiler");
        $__internal_be3d533618c94bf3ec16f6dc698bcf23f018ce405b510c85d90237848fb1141c->enter($__internal_be3d533618c94bf3ec16f6dc698bcf23f018ce405b510c85d90237848fb1141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedidos edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pedidos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_be3d533618c94bf3ec16f6dc698bcf23f018ce405b510c85d90237848fb1141c->leave($__internal_be3d533618c94bf3ec16f6dc698bcf23f018ce405b510c85d90237848fb1141c_prof);

    }

    public function getTemplateName()
    {
        return "pedidos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Pedidos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pedidos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
