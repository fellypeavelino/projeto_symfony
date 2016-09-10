<?php

/* chamados/index.html.twig */
class __TwigTemplate_4d3618f9299ff692e556adcce6ca1f4c2bcd7c4279b91625cc0ca57fd33d19a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamados/index.html.twig", 1);
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
        $__internal_f7253b0b7f98a2010def3cdb578a44cf772f16b9f794174b1941d022869220cc = $this->env->getExtension("native_profiler");
        $__internal_f7253b0b7f98a2010def3cdb578a44cf772f16b9f794174b1941d022869220cc->enter($__internal_f7253b0b7f98a2010def3cdb578a44cf772f16b9f794174b1941d022869220cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamados/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7253b0b7f98a2010def3cdb578a44cf772f16b9f794174b1941d022869220cc->leave($__internal_f7253b0b7f98a2010def3cdb578a44cf772f16b9f794174b1941d022869220cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1416c9a7fc296d14cc29553814374c7db0de44a9888e6ba248909ebb209f18a5 = $this->env->getExtension("native_profiler");
        $__internal_1416c9a7fc296d14cc29553814374c7db0de44a9888e6ba248909ebb209f18a5->enter($__internal_1416c9a7fc296d14cc29553814374c7db0de44a9888e6ba248909ebb209f18a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamados list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Observacao</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamados_show", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "observacao", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamados_show", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamados_edit", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("chamados_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_1416c9a7fc296d14cc29553814374c7db0de44a9888e6ba248909ebb209f18a5->leave($__internal_1416c9a7fc296d14cc29553814374c7db0de44a9888e6ba248909ebb209f18a5_prof);

    }

    public function getTemplateName()
    {
        return "chamados/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Chamados list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Observacao</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for chamado in chamados %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('chamados_show', { 'id': chamado.id }) }}">{{ chamado.id }}</a></td>*/
/*                 <td>{{ chamado.titulo }}</td>*/
/*                 <td>{{ chamado.observacao }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('chamados_show', { 'id': chamado.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('chamados_edit', { 'id': chamado.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('chamados_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
