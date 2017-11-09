<?php

/* :User:jugadores.html.twig */
class __TwigTemplate_5bd02eec0a00f50e40312dbbcaa8a1cf02af6cf9075516893e565aef58c7dfff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User:jugadores.html.twig", 1);
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
        $__internal_f167b37c64b7f831299f5775b6e858a983e599e72f16ec063f457bf69a365f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f167b37c64b7f831299f5775b6e858a983e599e72f16ec063f457bf69a365f91->enter($__internal_f167b37c64b7f831299f5775b6e858a983e599e72f16ec063f457bf69a365f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:jugadores.html.twig"));

        $__internal_bd0f9a8bd6595cb0023d4ae82ea83258a0524eb9f22782f686552b9f75a05801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0f9a8bd6595cb0023d4ae82ea83258a0524eb9f22782f686552b9f75a05801->enter($__internal_bd0f9a8bd6595cb0023d4ae82ea83258a0524eb9f22782f686552b9f75a05801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:jugadores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f167b37c64b7f831299f5775b6e858a983e599e72f16ec063f457bf69a365f91->leave($__internal_f167b37c64b7f831299f5775b6e858a983e599e72f16ec063f457bf69a365f91_prof);

        
        $__internal_bd0f9a8bd6595cb0023d4ae82ea83258a0524eb9f22782f686552b9f75a05801->leave($__internal_bd0f9a8bd6595cb0023d4ae82ea83258a0524eb9f22782f686552b9f75a05801_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba0086806056d1e19e8ed78e36f3749577402aaa36b7109e75011b28cfd07a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0086806056d1e19e8ed78e36f3749577402aaa36b7109e75011b28cfd07a46->enter($__internal_ba0086806056d1e19e8ed78e36f3749577402aaa36b7109e75011b28cfd07a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e8ad84e90ac0c5276eacf6e035ef42392aeffd1f9d65177d8ba439ab8dfbc17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ad84e90ac0c5276eacf6e035ef42392aeffd1f9d65177d8ba439ab8dfbc17f->enter($__internal_e8ad84e90ac0c5276eacf6e035ef42392aeffd1f9d65177d8ba439ab8dfbc17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"col-lg-12 wrapper wrapper-content contact-wrapper animated fadeInRight\">
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "            <div class=\"col-lg-4\">
                 
                
                <div class=\"contact-box\">
                    <a href=\"#\">
                    <div class=\"col-sm-4\">
                        <div class=\"text-center\">
                            <img alt=\"image\" class=\"img-circle m-t-xs img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/images/a3.jpg"), "html", null, true);
            echo "\">
                            <div class=\"m-t-xs font-bold\">Jugador de fútbol</div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <h3><strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</strong></h3>
                        <p><i class=\"fa fa-map-marker\"></i> Riviera State 32/106</p>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title=\"Phone\">P:</abbr> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                        </address>
                    </div>
                    <div class=\"clearfix\"></div>
                        </a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    
        </div>
</div>
        

";
        
        $__internal_e8ad84e90ac0c5276eacf6e035ef42392aeffd1f9d65177d8ba439ab8dfbc17f->leave($__internal_e8ad84e90ac0c5276eacf6e035ef42392aeffd1f9d65177d8ba439ab8dfbc17f_prof);

        
        $__internal_ba0086806056d1e19e8ed78e36f3749577402aaa36b7109e75011b28cfd07a46->leave($__internal_ba0086806056d1e19e8ed78e36f3749577402aaa36b7109e75011b28cfd07a46_prof);

    }

    public function getTemplateName()
    {
        return ":User:jugadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  84 => 26,  75 => 20,  67 => 15,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"col-lg-12 wrapper wrapper-content contact-wrapper animated fadeInRight\">
        <div class=\"row\">
            {% for user in users %}
            <div class=\"col-lg-4\">
                 
                
                <div class=\"contact-box\">
                    <a href=\"#\">
                    <div class=\"col-sm-4\">
                        <div class=\"text-center\">
                            <img alt=\"image\" class=\"img-circle m-t-xs img-responsive\" src=\"{{ asset('/assets/images/a3.jpg')}}\">
                            <div class=\"m-t-xs font-bold\">Jugador de fútbol</div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <h3><strong>{{user.name}}</strong></h3>
                        <p><i class=\"fa fa-map-marker\"></i> Riviera State 32/106</p>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title=\"Phone\">P:</abbr> {{user.email}}
                        </address>
                    </div>
                    <div class=\"clearfix\"></div>
                        </a>
                </div>
            </div>
            {% endfor %}    
        </div>
</div>
        

{% endblock%}
", ":User:jugadores.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/User/jugadores.html.twig");
    }
}
