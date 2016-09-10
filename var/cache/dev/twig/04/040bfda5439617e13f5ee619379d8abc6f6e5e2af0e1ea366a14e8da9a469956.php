<?php

/* cliente/index.html.twig */
class __TwigTemplate_5231dfbd0172e6d3f7e5a69d8cab946922ccfd625813520d7f48784b85c77fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_9ece5d8c360da55a92cf753959a9c3224464acab8c156abb58f177079146a426 = $this->env->getExtension("native_profiler");
        $__internal_9ece5d8c360da55a92cf753959a9c3224464acab8c156abb58f177079146a426->enter($__internal_9ece5d8c360da55a92cf753959a9c3224464acab8c156abb58f177079146a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ece5d8c360da55a92cf753959a9c3224464acab8c156abb58f177079146a426->leave($__internal_9ece5d8c360da55a92cf753959a9c3224464acab8c156abb58f177079146a426_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53bff0ab1c28e50f38c094a39b9f13e087146b05e0116f554bc5c7c22fa67754 = $this->env->getExtension("native_profiler");
        $__internal_53bff0ab1c28e50f38c094a39b9f13e087146b05e0116f554bc5c7c22fa67754->enter($__internal_53bff0ab1c28e50f38c094a39b9f13e087146b05e0116f554bc5c7c22fa67754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_53bff0ab1c28e50f38c094a39b9f13e087146b05e0116f554bc5c7c22fa67754->leave($__internal_53bff0ab1c28e50f38c094a39b9f13e087146b05e0116f554bc5c7c22fa67754_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
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
/*     <h1>Cliente list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nome</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cliente in clientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('cliente_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a></td>*/
/*                 <td>{{ cliente.nome }}</td>*/
/*                 <td>{{ cliente.email }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('cliente_show', { 'id': cliente.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('cliente_edit', { 'id': cliente.id }) }}">edit</a>*/
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
/*             <a href="{{ path('cliente_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
