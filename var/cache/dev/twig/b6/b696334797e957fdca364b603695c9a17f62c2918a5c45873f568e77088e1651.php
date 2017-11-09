<?php

/* :User:login.html.twig */
class __TwigTemplate_02d7d9892a063cdc5fa7ca748cf7ebd447102a13ab331cfa59ffdcfc8c430650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d856332ca7cc296ec46b4b63a42cea03dc5920a850efeebd4b29416f528ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d856332ca7cc296ec46b4b63a42cea03dc5920a850efeebd4b29416f528ed4->enter($__internal_25d856332ca7cc296ec46b4b63a42cea03dc5920a850efeebd4b29416f528ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:login.html.twig"));

        $__internal_d42f31f7857dce47266fa66b7abee1d4c1c01bb1cc648e62199a8e696ae01895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42f31f7857dce47266fa66b7abee1d4c1c01bb1cc648e62199a8e696ae01895->enter($__internal_d42f31f7857dce47266fa66b7abee1d4c1c01bb1cc648e62199a8e696ae01895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d856332ca7cc296ec46b4b63a42cea03dc5920a850efeebd4b29416f528ed4->leave($__internal_25d856332ca7cc296ec46b4b63a42cea03dc5920a850efeebd4b29416f528ed4_prof);

        
        $__internal_d42f31f7857dce47266fa66b7abee1d4c1c01bb1cc648e62199a8e696ae01895->leave($__internal_d42f31f7857dce47266fa66b7abee1d4c1c01bb1cc648e62199a8e696ae01895_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf0c710b24adb2359586a2c22727e5ecd42200dee7bd549caa9bd384b1d54d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0c710b24adb2359586a2c22727e5ecd42200dee7bd549caa9bd384b1d54d3c->enter($__internal_cf0c710b24adb2359586a2c22727e5ecd42200dee7bd549caa9bd384b1d54d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_21e1ee45dc7f1e1aa73e1177091ef616f7ebee0e7a846a4aabf9755dc9cdc429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e1ee45dc7f1e1aa73e1177091ef616f7ebee0e7a846a4aabf9755dc9cdc429->enter($__internal_21e1ee45dc7f1e1aa73e1177091ef616f7ebee0e7a846a4aabf9755dc9cdc429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-3 box-form\">
    <div class=\"middle-box text-center loginscreen animated fadeInDown\">
        <div>
            <div>

                <h1 class=\"logo-name\">PZ</h1>

            </div>
            <h3>Bienvenido a Pintxos y Zuritos</h3>
            
            <p>Inicia sesión</p>
            
            <form class=\"m-t\" role=\"form\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <input type=\"email\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-success block full-width m-b\">Entrar</button>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\"/>

                <!--<a href=\"#\"><small>Forgot password?</small></a>
                <p class=\"text-muted text-center\"><small>Do not have an account?</small></p>
                <a class=\"btn btn-sm btn-white btn-block\" href=\"register.html\">Create an account</a>-->
            </form>
            <div class=\"clearfix\"></div>
            <!--<p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>-->
        </div>
    </div>
</div>
                    
";
        
        $__internal_21e1ee45dc7f1e1aa73e1177091ef616f7ebee0e7a846a4aabf9755dc9cdc429->leave($__internal_21e1ee45dc7f1e1aa73e1177091ef616f7ebee0e7a846a4aabf9755dc9cdc429_prof);

        
        $__internal_cf0c710b24adb2359586a2c22727e5ecd42200dee7bd549caa9bd384b1d54d3c->leave($__internal_cf0c710b24adb2359586a2c22727e5ecd42200dee7bd549caa9bd384b1d54d3c_prof);

    }

    public function getTemplateName()
    {
        return ":User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
<div class=\"col-lg-3 box-form\">
    <div class=\"middle-box text-center loginscreen animated fadeInDown\">
        <div>
            <div>

                <h1 class=\"logo-name\">PZ</h1>

            </div>
            <h3>Bienvenido a Pintxos y Zuritos</h3>
            
            <p>Inicia sesión</p>
            
            <form class=\"m-t\" role=\"form\" action=\"{{ path('login_check') }}\" method=\"POST\">
                <div class=\"form-group\">
                    <input type=\"email\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username\" value=\"{{ last_username }}\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-success block full-width m-b\">Entrar</button>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\"/>

                <!--<a href=\"#\"><small>Forgot password?</small></a>
                <p class=\"text-muted text-center\"><small>Do not have an account?</small></p>
                <a class=\"btn btn-sm btn-white btn-block\" href=\"register.html\">Create an account</a>-->
            </form>
            <div class=\"clearfix\"></div>
            <!--<p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>-->
        </div>
    </div>
</div>
                    
{% endblock%}
", ":User:login.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/User/login.html.twig");
    }
}
