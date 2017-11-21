<?php

/* base.html.twig */
class __TwigTemplate_3d4ddf38c9f60dfbb6b3a28c77b4edf6157efaf4011ad6fe79274a87621527fc extends Twig_Template
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
        $__internal_5d101289a4516d3ebeaeca3f772db2082eb5e38f9a9bc65c0d54f768cc225021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d101289a4516d3ebeaeca3f772db2082eb5e38f9a9bc65c0d54f768cc225021->enter($__internal_5d101289a4516d3ebeaeca3f772db2082eb5e38f9a9bc65c0d54f768cc225021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9a2586cf89c63d2534ed2267f6f6fed0feadbc8cdf4cf4ae778f252e702f6408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2586cf89c63d2534ed2267f6f6fed0feadbc8cdf4cf4ae778f252e702f6408->enter($__internal_9a2586cf89c63d2534ed2267f6f6fed0feadbc8cdf4cf4ae778f252e702f6408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 39
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 40
            echo "                            <li>
                                <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                    &nbsp;Entrar
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                    &nbsp;Registro
\t\t\t\t</a>
                            </li>
                        <!-- Cuando se haya iniciado sesión se mostrará esto -->
                        ";
        } else {
            // line 54
            echo "                            <li>
\t\t\t\t<a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_home");
            echo "\">
                                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> 
                                    &nbsp;Inicio
\t\t\t\t</a>
                            </li>
                            <li>
\t\t\t\t<a href=\"";
            // line 61
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
        // line 73
        echo "\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t<!-- Vamos a hacer una sección que sólo se va a ver si hemos iniciado sesión -->
\t\t\t";
        // line 76
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 77
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
            // line 97
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()) == null)) {
                // line 98
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/images/default1.png"), "html", null, true);
                echo "\"/>
                                        ";
            } else {
                // line 100
                echo "                                            <img src=\"#\"/>
                                        ";
            }
            // line 102
            echo "                                    </div>
                                    <!-- Mostramos el nombre del usuario -->
                                    ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                                    
                                    </a>
                                  
                                    
                                </li>
                                <li>
                                    <a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
\t\t\t\t\t<span class=\"fa fa-power-off fa-lg\" aria-hidden=\"true\"></span> 
\t\t\t\t\t&nbsp;Salir          
                                    </a>
\t\t\t\t</li>
                                </ul>
                            ";
        }
        // line 118
        echo "\t\t\t</div>
\t\t</header>
        <section id=\"content\">
            <div class=\"container\">
                <div class=\"col-lg-12\">
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            echo "                        <div class=\"alert alert-success flash-message\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </div>
            </div>
                <div class=\"clearfix\"></div>
                ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "                
        ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "        </section>
        ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "    </body>
</html>
";
        
        $__internal_5d101289a4516d3ebeaeca3f772db2082eb5e38f9a9bc65c0d54f768cc225021->leave($__internal_5d101289a4516d3ebeaeca3f772db2082eb5e38f9a9bc65c0d54f768cc225021_prof);

        
        $__internal_9a2586cf89c63d2534ed2267f6f6fed0feadbc8cdf4cf4ae778f252e702f6408->leave($__internal_9a2586cf89c63d2534ed2267f6f6fed0feadbc8cdf4cf4ae778f252e702f6408_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c03344519078b0783c2d1d11e0ec17734073f2df1e41243bd9e765602d94c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c03344519078b0783c2d1d11e0ec17734073f2df1e41243bd9e765602d94c00->enter($__internal_0c03344519078b0783c2d1d11e0ec17734073f2df1e41243bd9e765602d94c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f902c717d19c63ae81deae5909f61a9c8ea241d7bd26439a7bef02b42ee11a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f902c717d19c63ae81deae5909f61a9c8ea241d7bd26439a7bef02b42ee11a1->enter($__internal_7f902c717d19c63ae81deae5909f61a9c8ea241d7bd26439a7bef02b42ee11a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fútbol";
        
        $__internal_7f902c717d19c63ae81deae5909f61a9c8ea241d7bd26439a7bef02b42ee11a1->leave($__internal_7f902c717d19c63ae81deae5909f61a9c8ea241d7bd26439a7bef02b42ee11a1_prof);

        
        $__internal_0c03344519078b0783c2d1d11e0ec17734073f2df1e41243bd9e765602d94c00->leave($__internal_0c03344519078b0783c2d1d11e0ec17734073f2df1e41243bd9e765602d94c00_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a44daaea95ca3103e2aec6887e51a841a22c947237328e17e23a400cbf9a089f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44daaea95ca3103e2aec6887e51a841a22c947237328e17e23a400cbf9a089f->enter($__internal_a44daaea95ca3103e2aec6887e51a841a22c947237328e17e23a400cbf9a089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79dfa94c688f997cb11f46c4fc2c9f42f422c62f3ac3fdafd9237b058975ebcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dfa94c688f997cb11f46c4fc2c9f42f422c62f3ac3fdafd9237b058975ebcb->enter($__internal_79dfa94c688f997cb11f46c4fc2c9f42f422c62f3ac3fdafd9237b058975ebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">         
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>-->
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/bootstrap.css"), "html", null, true);
        echo "\"/>-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/estilos.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
        ";
        
        $__internal_79dfa94c688f997cb11f46c4fc2c9f42f422c62f3ac3fdafd9237b058975ebcb->leave($__internal_79dfa94c688f997cb11f46c4fc2c9f42f422c62f3ac3fdafd9237b058975ebcb_prof);

        
        $__internal_a44daaea95ca3103e2aec6887e51a841a22c947237328e17e23a400cbf9a089f->leave($__internal_a44daaea95ca3103e2aec6887e51a841a22c947237328e17e23a400cbf9a089f_prof);

    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        $__internal_062d84a36beb74140daacb02fb5aada7d592872828d5824be46358f21f932848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062d84a36beb74140daacb02fb5aada7d592872828d5824be46358f21f932848->enter($__internal_062d84a36beb74140daacb02fb5aada7d592872828d5824be46358f21f932848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6ce659c18dffe25022a89942de0c5ad9a2d4a14d939ad2dded3888f391b3884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ce659c18dffe25022a89942de0c5ad9a2d4a14d939ad2dded3888f391b3884->enter($__internal_e6ce659c18dffe25022a89942de0c5ad9a2d4a14d939ad2dded3888f391b3884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 130
        echo "                ";
        
        $__internal_e6ce659c18dffe25022a89942de0c5ad9a2d4a14d939ad2dded3888f391b3884->leave($__internal_e6ce659c18dffe25022a89942de0c5ad9a2d4a14d939ad2dded3888f391b3884_prof);

        
        $__internal_062d84a36beb74140daacb02fb5aada7d592872828d5824be46358f21f932848->leave($__internal_062d84a36beb74140daacb02fb5aada7d592872828d5824be46358f21f932848_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_06fec264d454c8450c6e423577168522a1085cbb5f5a6271754cfb0b534b6b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fec264d454c8450c6e423577168522a1085cbb5f5a6271754cfb0b534b6b9c->enter($__internal_06fec264d454c8450c6e423577168522a1085cbb5f5a6271754cfb0b534b6b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4af0a14d84b5173db268c4da16e588b91300753df31f36c32f88b05dc6089f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af0a14d84b5173db268c4da16e588b91300753df31f36c32f88b05dc6089f54->enter($__internal_4af0a14d84b5173db268c4da16e588b91300753df31f36c32f88b05dc6089f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4af0a14d84b5173db268c4da16e588b91300753df31f36c32f88b05dc6089f54->leave($__internal_4af0a14d84b5173db268c4da16e588b91300753df31f36c32f88b05dc6089f54_prof);

        
        $__internal_06fec264d454c8450c6e423577168522a1085cbb5f5a6271754cfb0b534b6b9c->leave($__internal_06fec264d454c8450c6e423577168522a1085cbb5f5a6271754cfb0b534b6b9c_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b391daf79794dd8cdb89b51c651dcb943786f2d079a0473fc97c2a5875c0db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b391daf79794dd8cdb89b51c651dcb943786f2d079a0473fc97c2a5875c0db5->enter($__internal_3b391daf79794dd8cdb89b51c651dcb943786f2d079a0473fc97c2a5875c0db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cf9a617faa5ec551395dc5475336e409fd45b947246a7067f046fbc2297e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf9a617faa5ec551395dc5475336e409fd45b947246a7067f046fbc2297e888->enter($__internal_6cf9a617faa5ec551395dc5475336e409fd45b947246a7067f046fbc2297e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "            <script>
                //función twig para sacar la url del proyecto
                var URL = \"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "\";
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <!--<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>-->
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/custom/efectos.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6cf9a617faa5ec551395dc5475336e409fd45b947246a7067f046fbc2297e888->leave($__internal_6cf9a617faa5ec551395dc5475336e409fd45b947246a7067f046fbc2297e888_prof);

        
        $__internal_3b391daf79794dd8cdb89b51c651dcb943786f2d079a0473fc97c2a5875c0db5->leave($__internal_3b391daf79794dd8cdb89b51c651dcb943786f2d079a0473fc97c2a5875c0db5_prof);

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
        return array (  363 => 143,  359 => 142,  355 => 141,  348 => 137,  344 => 135,  335 => 134,  318 => 132,  308 => 130,  299 => 129,  286 => 13,  282 => 12,  278 => 11,  274 => 10,  270 => 9,  267 => 8,  258 => 7,  240 => 6,  228 => 145,  226 => 134,  223 => 133,  221 => 132,  218 => 131,  216 => 129,  211 => 126,  202 => 124,  198 => 123,  191 => 118,  181 => 111,  169 => 104,  165 => 102,  161 => 100,  155 => 98,  153 => 97,  131 => 77,  129 => 76,  124 => 73,  109 => 61,  100 => 55,  97 => 54,  87 => 47,  78 => 41,  75 => 40,  73 => 39,  60 => 29,  43 => 16,  41 => 7,  37 => 6,  30 => 1,);
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
        <title>{% block title %}Fútbol{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">         
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/bootstrap.min.css') }}\"/>-->
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/bootstrap.css') }}\"/>-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/style.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/animate.css') }}\">
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
                                            <img src=\"{{ asset('/assets/images/default1.png')}}\"/>
                                        {% else %}
                                            <img src=\"#\"/>
                                        {% endif %}
                                    </div>
                                    <!-- Mostramos el nombre del usuario -->
                                    {{app.user.name}} {{app.user.surname}}
                                    
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
                <div class=\"col-lg-12\">
                    {% for message in app.session.flashbag().get('message')%}
                        <div class=\"alert alert-success flash-message\">{{message}}</div>
                    {% endfor %}
                </div>
            </div>
                <div class=\"clearfix\"></div>
                {% block content %}
                {% endblock %}
                
        {% block body %}{% endblock %}
        </section>
        {% block javascripts %}
            <script>
                //función twig para sacar la url del proyecto
                var URL = \"{{ app.request.getSchemeAndHttpHost() }}\";
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <!--<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>-->
            <script src=\"{{ asset('/assets/js/jquery-2.1.1.js') }}\"></script>
            <script src=\"{{ asset('/assets/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('/assets/js/custom/efectos.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/base.html.twig");
    }
}
