<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f168ae829ef71c3026d63d7c1bac1a94a0bb0e1dacb4fbb6f247258d931261db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f168ae829ef71c3026d63d7c1bac1a94a0bb0e1dacb4fbb6f247258d931261db->enter($__internal_f168ae829ef71c3026d63d7c1bac1a94a0bb0e1dacb4fbb6f247258d931261db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_681f3f2c62176c43bd4d5d4ec547424ee143701cb2602a3e70aafe6c834a64ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681f3f2c62176c43bd4d5d4ec547424ee143701cb2602a3e70aafe6c834a64ff->enter($__internal_681f3f2c62176c43bd4d5d4ec547424ee143701cb2602a3e70aafe6c834a64ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-inverse\">
\t\t<div class=\"container-fluid\">
                    <div clas=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toogle collapse\" data-toogle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Navegación</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_home");
        echo "\">
                            <!--<span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>-->
                            <span class=\"fa fa-futbol-o\" aria-hidden=\"true\"></span>
                            PZ fútbol
\t\t\t</a>
                    </div>
\t\t\t\t\t\t
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t
\t\t\t<!--Vamos a indicar que esto se vea solo cuando no se haya iniciado sesión-->
\t\t\t";
        // line 40
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 41
            echo "                            <li>
                                <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                    &nbsp;Entrar
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                    &nbsp;Registro
\t\t\t\t</a>
                            </li>
                        <!-- Cuando se haya iniciado sesión se mostrará esto -->
                        ";
        } else {
            // line 55
            echo "                            <li>
\t\t\t\t<a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_home");
            echo "\">
                                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> 
                                    &nbsp;Inicio
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jugadores");
            echo "\">
                                    <span class=\"fa fa-users\" aria-hidden=\"true\"></span> 
                                    &nbsp;Jugadores
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tasks\" aria-hidden=\"true\"></span> 
                                    &nbsp;Pabellones
\t\t\t\t</a>
                            </li>
                        ";
        }
        // line 74
        echo "\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t<!-- Vamos a hacer una sección que sólo se va a ver si hemos iniciado sesión -->
\t\t\t";
        // line 77
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 78
            echo "                            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> 
                                        &nbsp;Mensajes privados
\t\t\t\t\t<span class=\"label label-success label-notifications-msg\"></span>
                                    </a>
\t\t\t\t</li>
\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> 
\t\t\t\t\t&nbsp;Notificaciones
                                        <span class=\"label label-success label-notifications\"></span>
                                    </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t
                                    <!-- Mostrar el avatar del usuario -->
                                    <div class=\"avatar\">
                                        ";
            // line 98
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()) == null)) {
                // line 99
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/images/default.png"), "html", null, true);
                echo "\"/>
                                        ";
            } else {
                // line 101
                echo "                                            <img src=\"#\"/>
                                        ";
            }
            // line 103
            echo "                                    </div>
                                    <!-- Mostramos el nombre del usuario -->
                                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                                    <span class=\"caret\"></span>
                                    </a>
                                  
                                    
                                </li>
                                <li>
                                    <a href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
\t\t\t\t\t<span class=\"fa fa-power-off fa-lg\" aria-hidden=\"true\"></span> 
\t\t\t\t\t&nbsp;Salir          
                                    </a>
\t\t\t\t</li>
                                </ul>
                            ";
        }
        // line 119
        echo "\t\t\t</div>
\t\t</header>
                <section id=\"content\">
                    <div class=\"container\">
                        <div class=\"col-lg-10\">
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 125
            echo "                                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                        </div>
                    </div>
                        <div class=\"clearfix\"></div>
                        ";
        // line 130
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "                </section>
        ";
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "        
        ";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "    </body>
</html>
";
        
        $__internal_f168ae829ef71c3026d63d7c1bac1a94a0bb0e1dacb4fbb6f247258d931261db->leave($__internal_f168ae829ef71c3026d63d7c1bac1a94a0bb0e1dacb4fbb6f247258d931261db_prof);

        
        $__internal_681f3f2c62176c43bd4d5d4ec547424ee143701cb2602a3e70aafe6c834a64ff->leave($__internal_681f3f2c62176c43bd4d5d4ec547424ee143701cb2602a3e70aafe6c834a64ff_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_66baa5c3abef74dec6ba71e63ade41e9eef42ffb4ee04ebe859825cb302be43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66baa5c3abef74dec6ba71e63ade41e9eef42ffb4ee04ebe859825cb302be43f->enter($__internal_66baa5c3abef74dec6ba71e63ade41e9eef42ffb4ee04ebe859825cb302be43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a025521cb062802f88279b94055f67c8a6bb05ee59b54c692990084ba874fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a025521cb062802f88279b94055f67c8a6bb05ee59b54c692990084ba874fad->enter($__internal_7a025521cb062802f88279b94055f67c8a6bb05ee59b54c692990084ba874fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "App_f la aplicación de fútbol";
        
        $__internal_7a025521cb062802f88279b94055f67c8a6bb05ee59b54c692990084ba874fad->leave($__internal_7a025521cb062802f88279b94055f67c8a6bb05ee59b54c692990084ba874fad_prof);

        
        $__internal_66baa5c3abef74dec6ba71e63ade41e9eef42ffb4ee04ebe859825cb302be43f->leave($__internal_66baa5c3abef74dec6ba71e63ade41e9eef42ffb4ee04ebe859825cb302be43f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e70b79f6c84c24b64d164a3401b23831d83346344fa081a9b43edd2dbfa433d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e70b79f6c84c24b64d164a3401b23831d83346344fa081a9b43edd2dbfa433d->enter($__internal_1e70b79f6c84c24b64d164a3401b23831d83346344fa081a9b43edd2dbfa433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_220fa818160e9d0b6b97c6a214897ba7960ef3dfb96edfc1294148074de8909d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220fa818160e9d0b6b97c6a214897ba7960ef3dfb96edfc1294148074de8909d->enter($__internal_220fa818160e9d0b6b97c6a214897ba7960ef3dfb96edfc1294148074de8909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">          
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\"/>-->
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/animate.css"), "html", null, true);
        echo "\">-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/estilos.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
        ";
        
        $__internal_220fa818160e9d0b6b97c6a214897ba7960ef3dfb96edfc1294148074de8909d->leave($__internal_220fa818160e9d0b6b97c6a214897ba7960ef3dfb96edfc1294148074de8909d_prof);

        
        $__internal_1e70b79f6c84c24b64d164a3401b23831d83346344fa081a9b43edd2dbfa433d->leave($__internal_1e70b79f6c84c24b64d164a3401b23831d83346344fa081a9b43edd2dbfa433d_prof);

    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        $__internal_299611ed23ccf218ec5c3e2129e2eac20afab280ef7ed1de0fce3f840c85561b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299611ed23ccf218ec5c3e2129e2eac20afab280ef7ed1de0fce3f840c85561b->enter($__internal_299611ed23ccf218ec5c3e2129e2eac20afab280ef7ed1de0fce3f840c85561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_99f0b1b98e855d93d3430259bc08348f2d1b5684d9971d4b5284c384dc8b203b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f0b1b98e855d93d3430259bc08348f2d1b5684d9971d4b5284c384dc8b203b->enter($__internal_99f0b1b98e855d93d3430259bc08348f2d1b5684d9971d4b5284c384dc8b203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 131
        echo "                        ";
        
        $__internal_99f0b1b98e855d93d3430259bc08348f2d1b5684d9971d4b5284c384dc8b203b->leave($__internal_99f0b1b98e855d93d3430259bc08348f2d1b5684d9971d4b5284c384dc8b203b_prof);

        
        $__internal_299611ed23ccf218ec5c3e2129e2eac20afab280ef7ed1de0fce3f840c85561b->leave($__internal_299611ed23ccf218ec5c3e2129e2eac20afab280ef7ed1de0fce3f840c85561b_prof);

    }

    // line 133
    public function block_body($context, array $blocks = array())
    {
        $__internal_85641bd67515046573fb9869acbb19630f97b23f8ae0fa48e769560a8bbe7128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85641bd67515046573fb9869acbb19630f97b23f8ae0fa48e769560a8bbe7128->enter($__internal_85641bd67515046573fb9869acbb19630f97b23f8ae0fa48e769560a8bbe7128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf4af539369fe5dc634b30b1513377a7646fdac0d3a35c9cd9a0a91c5f62968c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4af539369fe5dc634b30b1513377a7646fdac0d3a35c9cd9a0a91c5f62968c->enter($__internal_cf4af539369fe5dc634b30b1513377a7646fdac0d3a35c9cd9a0a91c5f62968c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf4af539369fe5dc634b30b1513377a7646fdac0d3a35c9cd9a0a91c5f62968c->leave($__internal_cf4af539369fe5dc634b30b1513377a7646fdac0d3a35c9cd9a0a91c5f62968c_prof);

        
        $__internal_85641bd67515046573fb9869acbb19630f97b23f8ae0fa48e769560a8bbe7128->leave($__internal_85641bd67515046573fb9869acbb19630f97b23f8ae0fa48e769560a8bbe7128_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6a252a23e462ddb7b83a3c6e56ab9d068750248bc7fc49f04ec0f25ac0a85d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a252a23e462ddb7b83a3c6e56ab9d068750248bc7fc49f04ec0f25ac0a85d5->enter($__internal_b6a252a23e462ddb7b83a3c6e56ab9d068750248bc7fc49f04ec0f25ac0a85d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9c880cc1edcf1ed5cdbe4b4b17ab8db3b6ea960fb3d725d2ed2a6d670c489a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c880cc1edcf1ed5cdbe4b4b17ab8db3b6ea960fb3d725d2ed2a6d670c489a3->enter($__internal_a9c880cc1edcf1ed5cdbe4b4b17ab8db3b6ea960fb3d725d2ed2a6d670c489a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "            <script>
                //función twig para sacar la url del proyecto
                var URL = \"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "\";
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a9c880cc1edcf1ed5cdbe4b4b17ab8db3b6ea960fb3d725d2ed2a6d670c489a3->leave($__internal_a9c880cc1edcf1ed5cdbe4b4b17ab8db3b6ea960fb3d725d2ed2a6d670c489a3_prof);

        
        $__internal_b6a252a23e462ddb7b83a3c6e56ab9d068750248bc7fc49f04ec0f25ac0a85d5->leave($__internal_b6a252a23e462ddb7b83a3c6e56ab9d068750248bc7fc49f04ec0f25ac0a85d5_prof);

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
        return array (  360 => 143,  356 => 142,  349 => 138,  345 => 136,  336 => 135,  319 => 133,  309 => 131,  300 => 130,  287 => 13,  283 => 12,  279 => 11,  275 => 10,  271 => 9,  268 => 8,  259 => 7,  241 => 6,  229 => 145,  227 => 135,  224 => 134,  222 => 133,  219 => 132,  217 => 130,  212 => 127,  203 => 125,  199 => 124,  192 => 119,  182 => 112,  170 => 105,  166 => 103,  162 => 101,  156 => 99,  154 => 98,  132 => 78,  130 => 77,  125 => 74,  110 => 62,  101 => 56,  98 => 55,  88 => 48,  79 => 42,  76 => 41,  74 => 40,  60 => 29,  43 => 16,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}App_f la aplicación de fútbol{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">          
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/bootstrap.min.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/bootstrap.css') }}\"/>
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/style.css') }}\"/>-->
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/animate.css') }}\">-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/estilos.css') }}\"/>
            <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/favicon.ico') }}\" />
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-inverse\">
\t\t<div class=\"container-fluid\">
                    <div clas=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toogle collapse\" data-toogle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Navegación</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{path('user_home')}}\">
                            <!--<span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>-->
                            <span class=\"fa fa-futbol-o\" aria-hidden=\"true\"></span>
                            PZ fútbol
\t\t\t</a>
                    </div>
\t\t\t\t\t\t
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t
\t\t\t<!--Vamos a indicar que esto se vea solo cuando no se haya iniciado sesión-->
\t\t\t{% if app.user == null %}
                            <li>
                                <a href=\"{{ path('login')}}\">
                                    <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                    &nbsp;Entrar
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"{{ path('register')}}\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                    &nbsp;Registro
\t\t\t\t</a>
                            </li>
                        <!-- Cuando se haya iniciado sesión se mostrará esto -->
                        {% else %}
                            <li>
\t\t\t\t<a href=\"{{ path('user_home')}}\">
                                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> 
                                    &nbsp;Inicio
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"{{ path('jugadores')}}\">
                                    <span class=\"fa fa-users\" aria-hidden=\"true\"></span> 
                                    &nbsp;Jugadores
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tasks\" aria-hidden=\"true\"></span> 
                                    &nbsp;Pabellones
\t\t\t\t</a>
                            </li>
                        {% endif %}
\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t<!-- Vamos a hacer una sección que sólo se va a ver si hemos iniciado sesión -->
\t\t\t{% if app.user != null %}
                            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> 
                                        &nbsp;Mensajes privados
\t\t\t\t\t<span class=\"label label-success label-notifications-msg\"></span>
                                    </a>
\t\t\t\t</li>
\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> 
\t\t\t\t\t&nbsp;Notificaciones
                                        <span class=\"label label-success label-notifications\"></span>
                                    </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t
                                    <!-- Mostrar el avatar del usuario -->
                                    <div class=\"avatar\">
                                        {% if app.user.image == null %}
                                            <img src=\"{{ asset('/assets/images/default.png')}}\"/>
                                        {% else %}
                                            <img src=\"#\"/>
                                        {% endif %}
                                    </div>
                                    <!-- Mostramos el nombre del usuario -->
                                    {{app.user.name}} {{app.user.surname}}
                                    <span class=\"caret\"></span>
                                    </a>
                                  
                                    
                                </li>
                                <li>
                                    <a href=\"{{path('logout')}}\">
\t\t\t\t\t<span class=\"fa fa-power-off fa-lg\" aria-hidden=\"true\"></span> 
\t\t\t\t\t&nbsp;Salir          
                                    </a>
\t\t\t\t</li>
                                </ul>
                            {% endif %}
\t\t\t</div>
\t\t</header>
                <section id=\"content\">
                    <div class=\"container\">
                        <div class=\"col-lg-10\">
                            {% for message in app.session.flashbag().get('message')%}
                                <div class=\"alert alert-success\">{{message}}</div>
                            {% endfor %}
                        </div>
                    </div>
                        <div class=\"clearfix\"></div>
                        {% block content %}
                        {% endblock %}
                </section>
        {% block body %}{% endblock %}
        
        {% block javascripts %}
            <script>
                //función twig para sacar la url del proyecto
                var URL = \"{{ app.request.getSchemeAndHttpHost() }}\";
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"{{ asset('/assets/js/jquery-2.1.1.js') }}\"></script>
            <script src=\"{{ asset('/assets/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/base.html.twig");
    }
}
