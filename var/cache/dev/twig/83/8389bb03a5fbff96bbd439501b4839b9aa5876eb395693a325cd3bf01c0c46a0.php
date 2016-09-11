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
        $__internal_bc1c201e38e8cf07dccffa1d8ecd3ba547cf3a969c1d1109d7f8f338e9ca0516 = $this->env->getExtension("native_profiler");
        $__internal_bc1c201e38e8cf07dccffa1d8ecd3ba547cf3a969c1d1109d7f8f338e9ca0516->enter($__internal_bc1c201e38e8cf07dccffa1d8ecd3ba547cf3a969c1d1109d7f8f338e9ca0516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamados/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1c201e38e8cf07dccffa1d8ecd3ba547cf3a969c1d1109d7f8f338e9ca0516->leave($__internal_bc1c201e38e8cf07dccffa1d8ecd3ba547cf3a969c1d1109d7f8f338e9ca0516_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96240ea3b65581d815e32f517839cbb5bb48c89536c32d0e19f232300a3392b2 = $this->env->getExtension("native_profiler");
        $__internal_96240ea3b65581d815e32f517839cbb5bb48c89536c32d0e19f232300a3392b2->enter($__internal_96240ea3b65581d815e32f517839cbb5bb48c89536c32d0e19f232300a3392b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style type=\"text/css\">
        .typeahead li {
            width: 500px;
        }
        .pointer{
            cursor: pointer;
        }
    </style>
    <h1>lista de Chamados</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-offset-2 custyle\">
                <table class=\"table table-striped custab\">
                <thead>
                    <div class=\"input-group\">
                      <input type=\"text\" class=\"form-control typeahead\" placeholder=\"emails\" aria-describedby=\"basic-addon2\">
                      <span class=\"input-group-addon\" id=\"basic-addon2\">
                          <i class=\"glyphicon glyphicon-search\"></i>
                      </span>
                    </div>
                    <tr>
                        <th>Titulo</th>
                        <th>Observacao</th>
                        <th>Cliente</th>
                        <th>Pedido</th>
                    </tr>
                </thead>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "titulo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "observacao", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chamado"], "cliente", array()), "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chamado"], "pedidos", array()), "numero", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </table>            
            </div>
            <dir class=\"col-lg-6\">
                <ul class=\"pagination\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["keys"] => $context["page"]) {
            // line 44
            echo "                    <li>
                        <a href=\"/chamados?page=";
            // line 45
            echo twig_escape_filter($this->env, $context["keys"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
                </ul>            
            </dir>
        </div>
    </div>
    <script type=\"text/javascript\">
        var array = [";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            echo "'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chamado"], "cliente", array()), "email", array()), "html", null, true);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
    </script>
    <!--<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Observacao</th>
                <th>Cliente</th>
                <th>Pedido</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            // line 68
            echo "            <tr>
                <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamados_show", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "observacao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chamado"], "cliente", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chamado"], "pedidos", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamados_show", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 80
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
        // line 86
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("chamados_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>-->
";
        
        $__internal_96240ea3b65581d815e32f517839cbb5bb48c89536c32d0e19f232300a3392b2->leave($__internal_96240ea3b65581d815e32f517839cbb5bb48c89536c32d0e19f232300a3392b2_prof);

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
        return array (  212 => 91,  205 => 86,  193 => 80,  187 => 77,  180 => 73,  176 => 72,  172 => 71,  168 => 70,  162 => 69,  159 => 68,  155 => 67,  129 => 53,  121 => 47,  110 => 45,  107 => 44,  103 => 43,  97 => 39,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  73 => 32,  69 => 31,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <style type="text/css">*/
/*         .typeahead li {*/
/*             width: 500px;*/
/*         }*/
/*         .pointer{*/
/*             cursor: pointer;*/
/*         }*/
/*     </style>*/
/*     <h1>lista de Chamados</h1>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-md-offset-2 custyle">*/
/*                 <table class="table table-striped custab">*/
/*                 <thead>*/
/*                     <div class="input-group">*/
/*                       <input type="text" class="form-control typeahead" placeholder="emails" aria-describedby="basic-addon2">*/
/*                       <span class="input-group-addon" id="basic-addon2">*/
/*                           <i class="glyphicon glyphicon-search"></i>*/
/*                       </span>*/
/*                     </div>*/
/*                     <tr>*/
/*                         <th>Titulo</th>*/
/*                         <th>Observacao</th>*/
/*                         <th>Cliente</th>*/
/*                         <th>Pedido</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 {% for chamado in chamados %}*/
/*                     <tr>*/
/*                         <td>{{ chamado.titulo }}</td>*/
/*                         <td>{{ chamado.observacao }}</td>*/
/*                         <td>{{ chamado.cliente.email }}</td>*/
/*                         <td>{{ chamado.pedidos.numero }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </table>            */
/*             </div>*/
/*             <dir class="col-lg-6">*/
/*                 <ul class="pagination">*/
/*                 {% for keys,page in pages %}*/
/*                     <li>*/
/*                         <a href="/chamados?page={{ keys }}">{{ page }}</a>*/
/*                     </li>*/
/*                 {% endfor %}    */
/*                 </ul>            */
/*             </dir>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         var array = [{% for chamado in chamados %}'{{ chamado.cliente.email }}',{% endfor %}]*/
/*     </script>*/
/*     <!--<table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Observacao</th>*/
/*                 <th>Cliente</th>*/
/*                 <th>Pedido</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for chamado in chamados %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('chamados_show', { 'id': chamado.id }) }}">{{ chamado.id }}</a></td>*/
/*                 <td>{{ chamado.titulo }}</td>*/
/*                 <td>{{ chamado.observacao }}</td>*/
/*                 <td>{{ chamado.cliente.email }}</td>*/
/*                 <td>{{ chamado.pedidos.numero }}</td>*/
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
/*     </ul>-->*/
/* {% endblock %}*/
/* */
