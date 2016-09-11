<?php

/* base.html.twig */
class __TwigTemplate_b98984c45b6ee88110798d79f0158b36eedfb9262dfa1d56179ff60ce8dde11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8e783c75ab4b20813968cca1b1ad306bc0fa1484792cf935f1284568b9360bd = $this->env->getExtension("native_profiler");
        $__internal_c8e783c75ab4b20813968cca1b1ad306bc0fa1484792cf935f1284568b9360bd->enter($__internal_c8e783c75ab4b20813968cca1b1ad306bc0fa1484792cf935f1284568b9360bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
        .red{
            color:red;
            }
        .form-area
        {
            background-color: #FAFAFA;
            padding: 10px 40px 60px;
            margin: 10px 0px 60px;
            border: 1px solid GREY;
        }  
        .custab{
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }          
        </style>
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/typeahead.bundle.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){ 
            \$('#characterLeft').text('140 characters left');
            \$('#message').keydown(function () {
                var max = 140;
                var len = \$(this).val().length;
                if (len >= max) {
                    \$('#characterLeft').text('You have reached the limit');
                    \$('#characterLeft').addClass('red');
                    \$('#btnSubmit').addClass('disabled');            
                } 
                else {
                    var ch = max - len;
                    \$('#characterLeft').text(ch + ' characters left');
                    \$('#btnSubmit').removeClass('disabled');
                    \$('#characterLeft').removeClass('red');            
                }
            }); 
            \$(\"#form_numero_pedido\").keyup(function(){
                \$.ajax({
                    url:\"/pedidos/validAjax?id=\"+\$(\"#form_numero_pedido\").val(),
                    type:\"GET\",
                    dataType:\"JSON\",
                    success:function(data){
                        if(data.success){
                            \$(\".error\").remove();
                            \$(\"#submit\").attr(\"disabled\",false);
                        }else{
                            if(\$(\".error\").length == 0){
                                var error = \"<label class='error'>número do pedido não foi encontrado</label>\";
                                \$(\"#form div\").eq(3).append(error);
                                 \$(\"#submit\").attr(\"disabled\",true);
                            }
                        }
                    }
                });
            });
            \$(\"#form_email\").blur(function(){
                \$.ajax({
                    url:\"/cliente/validEmailAjax?email=\"+\$(\"#form_email\").val(),
                    type:\"GET\",
                    dataType:\"JSON\",
                    success:function(data){
                        if(!data.success){
                            \$(\".error\").remove();
                            \$(\"#submit\").attr(\"disabled\",false);
                        }else{
                            if(\$(\".error\").length == 0){
                                var error = \"<label class='error'>E-mail já foi cadastrado</label>\";
                                \$(\"#form div\").eq(1).append(error);
                                \$(\"#submit\").attr(\"disabled\",true);
                            }
                        }
                    }
                })                
            });  
            if (typeof array != \"undefined\") {
                doTypeHeader(array);
            } 
        }); 
        function doTypeHeader(array){
            \$('.typeahead').typeahead({ source:array })
        }     
    </script>
</html>
";
        
        $__internal_c8e783c75ab4b20813968cca1b1ad306bc0fa1484792cf935f1284568b9360bd->leave($__internal_c8e783c75ab4b20813968cca1b1ad306bc0fa1484792cf935f1284568b9360bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f5259adfcd52160c3ca74dfa2d3746218a09b31ab7291adedaa17f390bc18b = $this->env->getExtension("native_profiler");
        $__internal_e2f5259adfcd52160c3ca74dfa2d3746218a09b31ab7291adedaa17f390bc18b->enter($__internal_e2f5259adfcd52160c3ca74dfa2d3746218a09b31ab7291adedaa17f390bc18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e2f5259adfcd52160c3ca74dfa2d3746218a09b31ab7291adedaa17f390bc18b->leave($__internal_e2f5259adfcd52160c3ca74dfa2d3746218a09b31ab7291adedaa17f390bc18b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63955182e6e8b57bb44a623a1b8d81e28212ce5f1ab069c9812a34e785c596bb = $this->env->getExtension("native_profiler");
        $__internal_63955182e6e8b57bb44a623a1b8d81e28212ce5f1ab069c9812a34e785c596bb->enter($__internal_63955182e6e8b57bb44a623a1b8d81e28212ce5f1ab069c9812a34e785c596bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63955182e6e8b57bb44a623a1b8d81e28212ce5f1ab069c9812a34e785c596bb->leave($__internal_63955182e6e8b57bb44a623a1b8d81e28212ce5f1ab069c9812a34e785c596bb_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_68bde583a2a629b00406de4aaaf55b699569bc0f2c7bfec60ed870621ce3d189 = $this->env->getExtension("native_profiler");
        $__internal_68bde583a2a629b00406de4aaaf55b699569bc0f2c7bfec60ed870621ce3d189->enter($__internal_68bde583a2a629b00406de4aaaf55b699569bc0f2c7bfec60ed870621ce3d189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68bde583a2a629b00406de4aaaf55b699569bc0f2c7bfec60ed870621ce3d189->leave($__internal_68bde583a2a629b00406de4aaaf55b699569bc0f2c7bfec60ed870621ce3d189_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e8b2ce18ee96dd87634d0ff59de304ca201788b9ff0df773ac47bbb4d9d265a = $this->env->getExtension("native_profiler");
        $__internal_9e8b2ce18ee96dd87634d0ff59de304ca201788b9ff0df773ac47bbb4d9d265a->enter($__internal_9e8b2ce18ee96dd87634d0ff59de304ca201788b9ff0df773ac47bbb4d9d265a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e8b2ce18ee96dd87634d0ff59de304ca201788b9ff0df773ac47bbb4d9d265a->leave($__internal_9e8b2ce18ee96dd87634d0ff59de304ca201788b9ff0df773ac47bbb4d9d265a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 35,  185 => 34,  174 => 6,  162 => 5,  88 => 39,  84 => 38,  80 => 37,  77 => 36,  74 => 35,  72 => 34,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <style type="text/css">*/
/*         .red{*/
/*             color:red;*/
/*             }*/
/*         .form-area*/
/*         {*/
/*             background-color: #FAFAFA;*/
/*             padding: 10px 40px 60px;*/
/*             margin: 10px 0px 60px;*/
/*             border: 1px solid GREY;*/
/*         }  */
/*         .custab{*/
/*             border: 1px solid #ccc;*/
/*             padding: 5px;*/
/*             margin: 5% 0;*/
/*             box-shadow: 3px 3px 2px #ccc;*/
/*             transition: 0.5s;*/
/*         }*/
/*         .custab:hover{*/
/*             box-shadow: 3px 3px 0px transparent;*/
/*             transition: 0.5s;*/
/*         }          */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/typeahead.bundle.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){ */
/*             $('#characterLeft').text('140 characters left');*/
/*             $('#message').keydown(function () {*/
/*                 var max = 140;*/
/*                 var len = $(this).val().length;*/
/*                 if (len >= max) {*/
/*                     $('#characterLeft').text('You have reached the limit');*/
/*                     $('#characterLeft').addClass('red');*/
/*                     $('#btnSubmit').addClass('disabled');            */
/*                 } */
/*                 else {*/
/*                     var ch = max - len;*/
/*                     $('#characterLeft').text(ch + ' characters left');*/
/*                     $('#btnSubmit').removeClass('disabled');*/
/*                     $('#characterLeft').removeClass('red');            */
/*                 }*/
/*             }); */
/*             $("#form_numero_pedido").keyup(function(){*/
/*                 $.ajax({*/
/*                     url:"/pedidos/validAjax?id="+$("#form_numero_pedido").val(),*/
/*                     type:"GET",*/
/*                     dataType:"JSON",*/
/*                     success:function(data){*/
/*                         if(data.success){*/
/*                             $(".error").remove();*/
/*                             $("#submit").attr("disabled",false);*/
/*                         }else{*/
/*                             if($(".error").length == 0){*/
/*                                 var error = "<label class='error'>número do pedido não foi encontrado</label>";*/
/*                                 $("#form div").eq(3).append(error);*/
/*                                  $("#submit").attr("disabled",true);*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/*             $("#form_email").blur(function(){*/
/*                 $.ajax({*/
/*                     url:"/cliente/validEmailAjax?email="+$("#form_email").val(),*/
/*                     type:"GET",*/
/*                     dataType:"JSON",*/
/*                     success:function(data){*/
/*                         if(!data.success){*/
/*                             $(".error").remove();*/
/*                             $("#submit").attr("disabled",false);*/
/*                         }else{*/
/*                             if($(".error").length == 0){*/
/*                                 var error = "<label class='error'>E-mail já foi cadastrado</label>";*/
/*                                 $("#form div").eq(1).append(error);*/
/*                                 $("#submit").attr("disabled",true);*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 })                */
/*             });  */
/*             if (typeof array != "undefined") {*/
/*                 doTypeHeader(array);*/
/*             } */
/*         }); */
/*         function doTypeHeader(array){*/
/*             $('.typeahead').typeahead({ source:array })*/
/*         }     */
/*     </script>*/
/* </html>*/
/* */
