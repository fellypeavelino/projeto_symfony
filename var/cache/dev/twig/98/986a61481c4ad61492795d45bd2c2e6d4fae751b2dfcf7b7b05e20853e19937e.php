<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57779c885da76012e83197272fe386fc2191c4993337e87ddc7879ffdfe19e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05b9e03d51955266863bc7383116bec788a6af364e74bc76a6479238c704188d = $this->env->getExtension("native_profiler");
        $__internal_05b9e03d51955266863bc7383116bec788a6af364e74bc76a6479238c704188d->enter($__internal_05b9e03d51955266863bc7383116bec788a6af364e74bc76a6479238c704188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b9e03d51955266863bc7383116bec788a6af364e74bc76a6479238c704188d->leave($__internal_05b9e03d51955266863bc7383116bec788a6af364e74bc76a6479238c704188d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec65804698651cf9f05426180fcd25620087745733227db6379454fe32b9dc5f = $this->env->getExtension("native_profiler");
        $__internal_ec65804698651cf9f05426180fcd25620087745733227db6379454fe32b9dc5f->enter($__internal_ec65804698651cf9f05426180fcd25620087745733227db6379454fe32b9dc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec65804698651cf9f05426180fcd25620087745733227db6379454fe32b9dc5f->leave($__internal_ec65804698651cf9f05426180fcd25620087745733227db6379454fe32b9dc5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22c85418e8d3544c5497599c595740bad0be68893140c4553f02068be31e8538 = $this->env->getExtension("native_profiler");
        $__internal_22c85418e8d3544c5497599c595740bad0be68893140c4553f02068be31e8538->enter($__internal_22c85418e8d3544c5497599c595740bad0be68893140c4553f02068be31e8538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22c85418e8d3544c5497599c595740bad0be68893140c4553f02068be31e8538->leave($__internal_22c85418e8d3544c5497599c595740bad0be68893140c4553f02068be31e8538_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_793f3464eb2b0d792be47e6c02cf62bbf3bc75d2fda44f36834f5d0eda292b90 = $this->env->getExtension("native_profiler");
        $__internal_793f3464eb2b0d792be47e6c02cf62bbf3bc75d2fda44f36834f5d0eda292b90->enter($__internal_793f3464eb2b0d792be47e6c02cf62bbf3bc75d2fda44f36834f5d0eda292b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_793f3464eb2b0d792be47e6c02cf62bbf3bc75d2fda44f36834f5d0eda292b90->leave($__internal_793f3464eb2b0d792be47e6c02cf62bbf3bc75d2fda44f36834f5d0eda292b90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
