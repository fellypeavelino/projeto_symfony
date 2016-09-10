<?php

/* cliente/new.html.twig */
class __TwigTemplate_21178f22abd0a1709b25b04fc11b1eb505ff466833707021e74434255dc9198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
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
        $__internal_e727d2067a391220e9d57d3871b49e1d5df2384dc261333e9d6c107fe7eb553b = $this->env->getExtension("native_profiler");
        $__internal_e727d2067a391220e9d57d3871b49e1d5df2384dc261333e9d6c107fe7eb553b->enter($__internal_e727d2067a391220e9d57d3871b49e1d5df2384dc261333e9d6c107fe7eb553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e727d2067a391220e9d57d3871b49e1d5df2384dc261333e9d6c107fe7eb553b->leave($__internal_e727d2067a391220e9d57d3871b49e1d5df2384dc261333e9d6c107fe7eb553b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a23c22999172c0c5bd6443fe913ca240df83eb9d0c6339e0e41c71efd348464 = $this->env->getExtension("native_profiler");
        $__internal_1a23c22999172c0c5bd6443fe913ca240df83eb9d0c6339e0e41c71efd348464->enter($__internal_1a23c22999172c0c5bd6443fe913ca240df83eb9d0c6339e0e41c71efd348464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 7
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
<div class=\"col-md-5\">
    <div class=\"form-area\"> 
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br/>
        <button type=\"submit\" disabled=true id=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">
            Submit Form
        </button>
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
</div>
    <!--<ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>-->
";
        
        $__internal_1a23c22999172c0c5bd6443fe913ca240df83eb9d0c6339e0e41c71efd348464->leave($__internal_1a23c22999172c0c5bd6443fe913ca240df83eb9d0c6339e0e41c71efd348464_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  74 => 18,  66 => 13,  62 => 12,  57 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* <ul>*/
/* {% for error in errors %}*/
/*     <li>{{ error.message }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* <div class="col-md-5">*/
/*     <div class="form-area"> */
/*     {{ form_start(form, { 'attr': {'role':"form"} }) }}*/
/*         {{ form_widget(form) }}*/
/*         <br/>*/
/*         <button type="submit" disabled=true id="submit" name="submit" class="btn btn-primary pull-right">*/
/*             Submit Form*/
/*         </button>*/
/*     {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* </div>*/
/*     <!--<ul>*/
/*         <li>*/
/*             <a href="{{ path('cliente_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>-->*/
/* {% endblock %}*/
/* */
/* */
