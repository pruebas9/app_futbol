<?php

/* default/index.html.twig */
class __TwigTemplate_431e287184e400b5a414ba96219c6c7cdba32936f861bec3f368119dcb57b6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfbe6eb388f24158020bff89330ddd4ed7ecb4f958ef5a9c6ab0282c8490aba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbe6eb388f24158020bff89330ddd4ed7ecb4f958ef5a9c6ab0282c8490aba0->enter($__internal_cfbe6eb388f24158020bff89330ddd4ed7ecb4f958ef5a9c6ab0282c8490aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9311759d13defb41c5a3c9a359c36cafa3d55a308114502534577db1072cfb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9311759d13defb41c5a3c9a359c36cafa3d55a308114502534577db1072cfb27->enter($__internal_9311759d13defb41c5a3c9a359c36cafa3d55a308114502534577db1072cfb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbe6eb388f24158020bff89330ddd4ed7ecb4f958ef5a9c6ab0282c8490aba0->leave($__internal_cfbe6eb388f24158020bff89330ddd4ed7ecb4f958ef5a9c6ab0282c8490aba0_prof);

        
        $__internal_9311759d13defb41c5a3c9a359c36cafa3d55a308114502534577db1072cfb27->leave($__internal_9311759d13defb41c5a3c9a359c36cafa3d55a308114502534577db1072cfb27_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1284c7e1795cd0bf9a213a0e0e1d0f8607229245e1c2e030e7de558a0c6186be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1284c7e1795cd0bf9a213a0e0e1d0f8607229245e1c2e030e7de558a0c6186be->enter($__internal_1284c7e1795cd0bf9a213a0e0e1d0f8607229245e1c2e030e7de558a0c6186be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d8ad9431017ffa53ba599c73f4521a48d659b3b7438a98720fce4f72b71998b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8ad9431017ffa53ba599c73f4521a48d659b3b7438a98720fce4f72b71998b->enter($__internal_1d8ad9431017ffa53ba599c73f4521a48d659b3b7438a98720fce4f72b71998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1d8ad9431017ffa53ba599c73f4521a48d659b3b7438a98720fce4f72b71998b->leave($__internal_1d8ad9431017ffa53ba599c73f4521a48d659b3b7438a98720fce4f72b71998b_prof);

        
        $__internal_1284c7e1795cd0bf9a213a0e0e1d0f8607229245e1c2e030e7de558a0c6186be->leave($__internal_1284c7e1795cd0bf9a213a0e0e1d0f8607229245e1c2e030e7de558a0c6186be_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03a8abf7e54ed4b04beace50cd4206a9fb75a0c92fc4523217c3a9bc40c1e1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a8abf7e54ed4b04beace50cd4206a9fb75a0c92fc4523217c3a9bc40c1e1c3->enter($__internal_03a8abf7e54ed4b04beace50cd4206a9fb75a0c92fc4523217c3a9bc40c1e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc568e86ecc67862c9ac70a0e9cfdb5e84fa13baaa003e0d31922f0500469a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc568e86ecc67862c9ac70a0e9cfdb5e84fa13baaa003e0d31922f0500469a3e->enter($__internal_dc568e86ecc67862c9ac70a0e9cfdb5e84fa13baaa003e0d31922f0500469a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/plugins/fullcalendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/lib/moment.min.js"), "html", null, true);
        echo "\"></script>-->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/fullcalendar/locale/es.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/custom/calendar.js"), "html", null, true);
        echo "\"></script>
    <script>
        //Ejemplos: 
        //http://develoteca.com/usar-full-calendar/
        //http://developer-paradize.blogspot.com.es/2013/06/jquery-fullcalendar-integration-with.html
        //https://es.stackoverflow.com/questions/tagged/fullcalendar
        \$(document).ready(function() {
 
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            \$('#calendar').fullCalendar({
\t\theader: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek'
\t\t},
                
                
                    editable: true,
                    events: [
                        {
                            id: 1,
                            title: 'Partido',
                            start: '2017-11-10 20:00:00',
                            end: '2017-11-10 22:00:00',
                            
                        },                  
                        {
                            id: 2,
                            title: 'Partido',
                            start: '2017-11-15 21:00:00',
                            end: '2017-11-15 22:00:00',
                                                       
                        }                    
                    ],
                    
                    dayClick: function(date, jsEvent, view) {

                        //alert('Clicked on: ' + date.format());
                        console.log(date.format()+\" 21:00:00\");
                        //console.log(\"start: \"+date.start._i);
                        //console.log(\"end: \"+event.end._i);

                        \$.ajax({
                            url: URL + '/add-event',
                            data: {title: 'Pachanga'},
                            type: 'POST',
                            success: function(response){
                                //var obj = JSON.parse(response.events);

                                //console.log(obj[0].title);
                                console.log(response);
                            }
                        });

                        // change the day's background color just for fun
                        \$(this).css('background-color', 'lightgreen');

                    }
                    /*eventClick: function(event) {
                        if (event) {
                            //console.log(\"start: \"+event.start._i);
                            //console.log(\"end: \"+event.end._i);
                            var start = event.start._i;
                            var end = event.end._i;
                            \$.ajax({
                                url: URL + '/get-events',
                                data: {},
                                type: 'POST',
                                success: function(response){
                                    var obj = JSON.parse(response.events);
                                    
                                    console.log(obj[0].title); 
                                    
                                }
                             });
                        }
                    }*/
                    
            });
        });
    </script>

";
        
        $__internal_dc568e86ecc67862c9ac70a0e9cfdb5e84fa13baaa003e0d31922f0500469a3e->leave($__internal_dc568e86ecc67862c9ac70a0e9cfdb5e84fa13baaa003e0d31922f0500469a3e_prof);

        
        $__internal_03a8abf7e54ed4b04beace50cd4206a9fb75a0c92fc4523217c3a9bc40c1e1c3->leave($__internal_03a8abf7e54ed4b04beace50cd4206a9fb75a0c92fc4523217c3a9bc40c1e1c3_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ba141f1ef19382a0614bf1295e6946002a1c16df09fcbf6bb7b62dc8cef493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ba141f1ef19382a0614bf1295e6946002a1c16df09fcbf6bb7b62dc8cef493->enter($__internal_d3ba141f1ef19382a0614bf1295e6946002a1c16df09fcbf6bb7b62dc8cef493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57d2b76f2699ba10bb8c5d1b9407bd6fc1c3cf19c917348d4f26ab4b19731b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d2b76f2699ba10bb8c5d1b9407bd6fc1c3cf19c917348d4f26ab4b19731b23->enter($__internal_57d2b76f2699ba10bb8c5d1b9407bd6fc1c3cf19c917348d4f26ab4b19731b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "<div class=\"container\" style=\"width:80%;\">
    <div id=\"partido\" class=\"col-lg-7 box-default pull-left animated fadeInDown\">
        <h1 class=\"box-header\">Día de partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <div class=\"ibox-content\">
                   <div id=\"calendar\"></div>                  
                </div>
               <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add-partido");
        echo "\"><button class=\"crear-partido btn btn-default pull-right\">Crear partido</button></a>
           </div>
        </div>
    </div>
    
    <div id=\"datos\" class=\"col-lg-4 box-default pull-left animated fadeInDown\">
        <h1 class=\"box-header\">Datos del partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la derecha</p>
           </div>
        </div>
    </div>
</div>
";
        
        $__internal_57d2b76f2699ba10bb8c5d1b9407bd6fc1c3cf19c917348d4f26ab4b19731b23->leave($__internal_57d2b76f2699ba10bb8c5d1b9407bd6fc1c3cf19c917348d4f26ab4b19731b23_prof);

        
        $__internal_d3ba141f1ef19382a0614bf1295e6946002a1c16df09fcbf6bb7b62dc8cef493->leave($__internal_d3ba141f1ef19382a0614bf1295e6946002a1c16df09fcbf6bb7b62dc8cef493_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 108,  204 => 100,  195 => 99,  98 => 12,  94 => 11,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  68 => 6,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel='stylesheet' href=\"{{ asset('/assets/js/fullcalendar/fullcalendar.css') }}\" />
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('/assets/js/plugins/fullcalendar/moment.min.js') }}\"></script>
    <!--<script src=\"{{ asset('/assets/js/lib/moment.min.js') }}\"></script>-->
    <script src=\"{{ asset('/assets/js/fullcalendar/fullcalendar.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/fullcalendar/locale/es.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/custom/calendar.js') }}\"></script>
    <script>
        //Ejemplos: 
        //http://develoteca.com/usar-full-calendar/
        //http://developer-paradize.blogspot.com.es/2013/06/jquery-fullcalendar-integration-with.html
        //https://es.stackoverflow.com/questions/tagged/fullcalendar
        \$(document).ready(function() {
 
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            \$('#calendar').fullCalendar({
\t\theader: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek'
\t\t},
                
                
                    editable: true,
                    events: [
                        {
                            id: 1,
                            title: 'Partido',
                            start: '2017-11-10 20:00:00',
                            end: '2017-11-10 22:00:00',
                            
                        },                  
                        {
                            id: 2,
                            title: 'Partido',
                            start: '2017-11-15 21:00:00',
                            end: '2017-11-15 22:00:00',
                                                       
                        }                    
                    ],
                    
                    dayClick: function(date, jsEvent, view) {

                        //alert('Clicked on: ' + date.format());
                        console.log(date.format()+\" 21:00:00\");
                        //console.log(\"start: \"+date.start._i);
                        //console.log(\"end: \"+event.end._i);

                        \$.ajax({
                            url: URL + '/add-event',
                            data: {title: 'Pachanga'},
                            type: 'POST',
                            success: function(response){
                                //var obj = JSON.parse(response.events);

                                //console.log(obj[0].title);
                                console.log(response);
                            }
                        });

                        // change the day's background color just for fun
                        \$(this).css('background-color', 'lightgreen');

                    }
                    /*eventClick: function(event) {
                        if (event) {
                            //console.log(\"start: \"+event.start._i);
                            //console.log(\"end: \"+event.end._i);
                            var start = event.start._i;
                            var end = event.end._i;
                            \$.ajax({
                                url: URL + '/get-events',
                                data: {},
                                type: 'POST',
                                success: function(response){
                                    var obj = JSON.parse(response.events);
                                    
                                    console.log(obj[0].title); 
                                    
                                }
                             });
                        }
                    }*/
                    
            });
        });
    </script>

{% endblock%}
{% block body %}
<div class=\"container\" style=\"width:80%;\">
    <div id=\"partido\" class=\"col-lg-7 box-default pull-left animated fadeInDown\">
        <h1 class=\"box-header\">Día de partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <div class=\"ibox-content\">
                   <div id=\"calendar\"></div>                  
                </div>
               <a href=\"{{ path('add-partido')}}\"><button class=\"crear-partido btn btn-default pull-right\">Crear partido</button></a>
           </div>
        </div>
    </div>
    
    <div id=\"datos\" class=\"col-lg-4 box-default pull-left animated fadeInDown\">
        <h1 class=\"box-header\">Datos del partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la derecha</p>
           </div>
        </div>
    </div>
</div>
{% endblock %}


", "default/index.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/default/index.html.twig");
    }
}
