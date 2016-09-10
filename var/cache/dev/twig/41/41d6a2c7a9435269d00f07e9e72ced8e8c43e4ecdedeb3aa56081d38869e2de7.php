<?php

/* chamados/new.html.twig */
class __TwigTemplate_aaf0f4234f84eede3200d92fdc470ab40a0424e115e3fd62bb98cc33bc6b4c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamados/new.html.twig", 1);
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
        $__internal_7ab17547f16187f148d2a86e48b65cde2b4c644eb0b521bba2aad569cb861fcb = $this->env->getExtension("native_profiler");
        $__internal_7ab17547f16187f148d2a86e48b65cde2b4c644eb0b521bba2aad569cb861fcb->enter($__internal_7ab17547f16187f148d2a86e48b65cde2b4c644eb0b521bba2aad569cb861fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamados/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab17547f16187f148d2a86e48b65cde2b4c644eb0b521bba2aad569cb861fcb->leave($__internal_7ab17547f16187f148d2a86e48b65cde2b4c644eb0b521bba2aad569cb861fcb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fca4ca7cb69b2022bf247f6b1a41613cbc73b8ba25df4947f258eff448870e1 = $this->env->getExtension("native_profiler");
        $__internal_6fca4ca7cb69b2022bf247f6b1a41613cbc73b8ba25df4947f258eff448870e1->enter($__internal_6fca4ca7cb69b2022bf247f6b1a41613cbc73b8ba25df4947f258eff448870e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamados creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("chamados_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6fca4ca7cb69b2022bf247f6b1a41613cbc73b8ba25df4947f258eff448870e1->leave($__internal_6fca4ca7cb69b2022bf247f6b1a41613cbc73b8ba25df4947f258eff448870e1_prof);

    }

    public function getTemplateName()
    {
        return "chamados/new.html.twig";
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
/*     <h1>Chamados creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('chamados_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
