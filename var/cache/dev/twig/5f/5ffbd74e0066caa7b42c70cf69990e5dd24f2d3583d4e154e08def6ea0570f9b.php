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
        $__internal_92dbff67aab089152a20673a61c53708bed1febf6b230f4b3943b5de5f1027ec = $this->env->getExtension("native_profiler");
        $__internal_92dbff67aab089152a20673a61c53708bed1febf6b230f4b3943b5de5f1027ec->enter($__internal_92dbff67aab089152a20673a61c53708bed1febf6b230f4b3943b5de5f1027ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        </style>
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
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
                            }
                        }
                    }
                })                
            });   
        });        
    </script>
</html>
";
        
        $__internal_92dbff67aab089152a20673a61c53708bed1febf6b230f4b3943b5de5f1027ec->leave($__internal_92dbff67aab089152a20673a61c53708bed1febf6b230f4b3943b5de5f1027ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e776aaca1b32ca402abbe9947743e2a93b9c72a406045729d06619ed264e67de = $this->env->getExtension("native_profiler");
        $__internal_e776aaca1b32ca402abbe9947743e2a93b9c72a406045729d06619ed264e67de->enter($__internal_e776aaca1b32ca402abbe9947743e2a93b9c72a406045729d06619ed264e67de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e776aaca1b32ca402abbe9947743e2a93b9c72a406045729d06619ed264e67de->leave($__internal_e776aaca1b32ca402abbe9947743e2a93b9c72a406045729d06619ed264e67de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77b7491f5f49aa2e036a795243c37091614a9dafd61b5a8aded57689a50df9e8 = $this->env->getExtension("native_profiler");
        $__internal_77b7491f5f49aa2e036a795243c37091614a9dafd61b5a8aded57689a50df9e8->enter($__internal_77b7491f5f49aa2e036a795243c37091614a9dafd61b5a8aded57689a50df9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77b7491f5f49aa2e036a795243c37091614a9dafd61b5a8aded57689a50df9e8->leave($__internal_77b7491f5f49aa2e036a795243c37091614a9dafd61b5a8aded57689a50df9e8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_40cb25fab66191b5f11ad5408e6379c2eff107b080932b7cdcb9054193f6d2cb = $this->env->getExtension("native_profiler");
        $__internal_40cb25fab66191b5f11ad5408e6379c2eff107b080932b7cdcb9054193f6d2cb->enter($__internal_40cb25fab66191b5f11ad5408e6379c2eff107b080932b7cdcb9054193f6d2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40cb25fab66191b5f11ad5408e6379c2eff107b080932b7cdcb9054193f6d2cb->leave($__internal_40cb25fab66191b5f11ad5408e6379c2eff107b080932b7cdcb9054193f6d2cb_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f5c73bef1cd79faec4d155d53f20e5d1def431131304b1ae1e459004c3b4348 = $this->env->getExtension("native_profiler");
        $__internal_3f5c73bef1cd79faec4d155d53f20e5d1def431131304b1ae1e459004c3b4348->enter($__internal_3f5c73bef1cd79faec4d155d53f20e5d1def431131304b1ae1e459004c3b4348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f5c73bef1cd79faec4d155d53f20e5d1def431131304b1ae1e459004c3b4348->leave($__internal_3f5c73bef1cd79faec4d155d53f20e5d1def431131304b1ae1e459004c3b4348_prof);

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
        return array (  173 => 24,  162 => 23,  151 => 6,  139 => 5,  73 => 27,  69 => 26,  66 => 25,  63 => 24,  61 => 23,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         }            */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
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
/*                             }*/
/*                         }*/
/*                     }*/
/*                 })                */
/*             });   */
/*         });        */
/*     </script>*/
/* </html>*/
/* */
