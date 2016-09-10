<?php

/* pedidos/index.html.twig */
class __TwigTemplate_8cb7ef9fae64adc71ce3e78066571275abbe883996d268c6b98951c840923b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedidos/index.html.twig", 1);
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
        $__internal_db05a83c8c9d6d365d30f8eafe2d786c2410da292eca33c92fcda361e332ebbf = $this->env->getExtension("native_profiler");
        $__internal_db05a83c8c9d6d365d30f8eafe2d786c2410da292eca33c92fcda361e332ebbf->enter($__internal_db05a83c8c9d6d365d30f8eafe2d786c2410da292eca33c92fcda361e332ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db05a83c8c9d6d365d30f8eafe2d786c2410da292eca33c92fcda361e332ebbf->leave($__internal_db05a83c8c9d6d365d30f8eafe2d786c2410da292eca33c92fcda361e332ebbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd9d2bb7a91d6ac3277faa56794ab9d14f922c4e6a41e299452df57befe506a = $this->env->getExtension("native_profiler");
        $__internal_dbd9d2bb7a91d6ac3277faa56794ab9d14f922c4e6a41e299452df57befe506a->enter($__internal_dbd9d2bb7a91d6ac3277faa56794ab9d14f922c4e6a41e299452df57befe506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Descricao</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidos_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "descricao", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidos_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidos_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pedidos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_dbd9d2bb7a91d6ac3277faa56794ab9d14f922c4e6a41e299452df57befe506a->leave($__internal_dbd9d2bb7a91d6ac3277faa56794ab9d14f922c4e6a41e299452df57befe506a_prof);

    }

    public function getTemplateName()
    {
        return "pedidos/index.html.twig";
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
/*     <h1>Pedidos list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Descricao</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pedido in pedidos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pedidos_show', { 'id': pedido.id }) }}">{{ pedido.id }}</a></td>*/
/*                 <td>{{ pedido.numero }}</td>*/
/*                 <td>{{ pedido.descricao }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('pedidos_show', { 'id': pedido.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('pedidos_edit', { 'id': pedido.id }) }}">edit</a>*/
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
/*             <a href="{{ path('pedidos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
