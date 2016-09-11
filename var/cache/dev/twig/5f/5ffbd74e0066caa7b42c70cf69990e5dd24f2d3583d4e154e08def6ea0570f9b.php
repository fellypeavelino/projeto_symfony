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
        $__internal_a9178c60dc0be891db08f262ec78fcc0c888630c8d6b4ec9e83f71e4b9ecb27b = $this->env->getExtension("native_profiler");
        $__internal_a9178c60dc0be891db08f262ec78fcc0c888630c8d6b4ec9e83f71e4b9ecb27b->enter($__internal_a9178c60dc0be891db08f262ec78fcc0c888630c8d6b4ec9e83f71e4b9ecb27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            \$(\"#search\").click(function(){
                var url = window.location.href;
                if(url.indexOf(\"?\") == -1){
                    window.location.href = url+\"?email=\"+\$(\".typeahead\").val();
                }else{
                    url = url.split(\"&\")[0];
                    window.location.href = url+\"&email=\"+\$(\".typeahead\").val();
                }
            });
        }); 
        function doTypeHeader(array){
            \$('.typeahead').typeahead({ source:array })
        }     
    </script>
</html>
";
        
        $__internal_a9178c60dc0be891db08f262ec78fcc0c888630c8d6b4ec9e83f71e4b9ecb27b->leave($__internal_a9178c60dc0be891db08f262ec78fcc0c888630c8d6b4ec9e83f71e4b9ecb27b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d8c68474a8cd8a65b98c72d825c00217c27b46459326cdc84f4943604182bc6 = $this->env->getExtension("native_profiler");
        $__internal_8d8c68474a8cd8a65b98c72d825c00217c27b46459326cdc84f4943604182bc6->enter($__internal_8d8c68474a8cd8a65b98c72d825c00217c27b46459326cdc84f4943604182bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d8c68474a8cd8a65b98c72d825c00217c27b46459326cdc84f4943604182bc6->leave($__internal_8d8c68474a8cd8a65b98c72d825c00217c27b46459326cdc84f4943604182bc6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97226a41c46623199c6d0e66635a565e9c72937a36dab9248b58289b6538ca10 = $this->env->getExtension("native_profiler");
        $__internal_97226a41c46623199c6d0e66635a565e9c72937a36dab9248b58289b6538ca10->enter($__internal_97226a41c46623199c6d0e66635a565e9c72937a36dab9248b58289b6538ca10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97226a41c46623199c6d0e66635a565e9c72937a36dab9248b58289b6538ca10->leave($__internal_97226a41c46623199c6d0e66635a565e9c72937a36dab9248b58289b6538ca10_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_72947f8717acfc5f03176e27867600faaabc6b0effd6d8ebe59f33a981fb9ce1 = $this->env->getExtension("native_profiler");
        $__internal_72947f8717acfc5f03176e27867600faaabc6b0effd6d8ebe59f33a981fb9ce1->enter($__internal_72947f8717acfc5f03176e27867600faaabc6b0effd6d8ebe59f33a981fb9ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72947f8717acfc5f03176e27867600faaabc6b0effd6d8ebe59f33a981fb9ce1->leave($__internal_72947f8717acfc5f03176e27867600faaabc6b0effd6d8ebe59f33a981fb9ce1_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8eb824bb00079c44b04163a4d843ae8d96c6cd8e7d778b5f4d9b0db1535a87d = $this->env->getExtension("native_profiler");
        $__internal_f8eb824bb00079c44b04163a4d843ae8d96c6cd8e7d778b5f4d9b0db1535a87d->enter($__internal_f8eb824bb00079c44b04163a4d843ae8d96c6cd8e7d778b5f4d9b0db1535a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8eb824bb00079c44b04163a4d843ae8d96c6cd8e7d778b5f4d9b0db1535a87d->leave($__internal_f8eb824bb00079c44b04163a4d843ae8d96c6cd8e7d778b5f4d9b0db1535a87d_prof);

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
        return array (  205 => 35,  194 => 34,  183 => 6,  171 => 5,  88 => 39,  84 => 38,  80 => 37,  77 => 36,  74 => 35,  72 => 34,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*             $("#search").click(function(){*/
/*                 var url = window.location.href;*/
/*                 if(url.indexOf("?") == -1){*/
/*                     window.location.href = url+"?email="+$(".typeahead").val();*/
/*                 }else{*/
/*                     url = url.split("&")[0];*/
/*                     window.location.href = url+"&email="+$(".typeahead").val();*/
/*                 }*/
/*             });*/
/*         }); */
/*         function doTypeHeader(array){*/
/*             $('.typeahead').typeahead({ source:array })*/
/*         }     */
/*     </script>*/
/* </html>*/
/* */
