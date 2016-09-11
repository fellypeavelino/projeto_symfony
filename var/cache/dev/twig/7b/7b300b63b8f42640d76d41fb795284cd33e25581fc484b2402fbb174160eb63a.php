<?php

/* base.html.twig */
class __TwigTemplate_8f9b8cf9f33d85b00827f29d5292c189473b40f1c854140d5ac228172e9a275c extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  172 => 35,  167 => 34,  162 => 6,  156 => 5,  85 => 39,  81 => 38,  77 => 37,  74 => 36,  71 => 35,  69 => 34,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
