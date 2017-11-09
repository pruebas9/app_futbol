<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c662f48c934178a2bd5a348c67af35de9274800e7cb762e85f0eaa2fa14cbeb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c662f48c934178a2bd5a348c67af35de9274800e7cb762e85f0eaa2fa14cbeb0->enter($__internal_c662f48c934178a2bd5a348c67af35de9274800e7cb762e85f0eaa2fa14cbeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2a9f6f462ee7bd198d763980795f143c96368fa084f999548daba7d7f9bc7799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9f6f462ee7bd198d763980795f143c96368fa084f999548daba7d7f9bc7799->enter($__internal_2a9f6f462ee7bd198d763980795f143c96368fa084f999548daba7d7f9bc7799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c662f48c934178a2bd5a348c67af35de9274800e7cb762e85f0eaa2fa14cbeb0->leave($__internal_c662f48c934178a2bd5a348c67af35de9274800e7cb762e85f0eaa2fa14cbeb0_prof);

        
        $__internal_2a9f6f462ee7bd198d763980795f143c96368fa084f999548daba7d7f9bc7799->leave($__internal_2a9f6f462ee7bd198d763980795f143c96368fa084f999548daba7d7f9bc7799_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b49a317fefef6bdf1425602db9b527a3b439b8574b94ae6120c8179a13b3df0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49a317fefef6bdf1425602db9b527a3b439b8574b94ae6120c8179a13b3df0a->enter($__internal_b49a317fefef6bdf1425602db9b527a3b439b8574b94ae6120c8179a13b3df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb96164e90bd1cb982ad3cee5ab9fda69c8d07f1d46e5575f7e1c9588cce8593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb96164e90bd1cb982ad3cee5ab9fda69c8d07f1d46e5575f7e1c9588cce8593->enter($__internal_eb96164e90bd1cb982ad3cee5ab9fda69c8d07f1d46e5575f7e1c9588cce8593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb96164e90bd1cb982ad3cee5ab9fda69c8d07f1d46e5575f7e1c9588cce8593->leave($__internal_eb96164e90bd1cb982ad3cee5ab9fda69c8d07f1d46e5575f7e1c9588cce8593_prof);

        
        $__internal_b49a317fefef6bdf1425602db9b527a3b439b8574b94ae6120c8179a13b3df0a->leave($__internal_b49a317fefef6bdf1425602db9b527a3b439b8574b94ae6120c8179a13b3df0a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc321f0743931641dd788a867bf1b332149ca4def579061ee27e043294eae64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc321f0743931641dd788a867bf1b332149ca4def579061ee27e043294eae64f->enter($__internal_cc321f0743931641dd788a867bf1b332149ca4def579061ee27e043294eae64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5236653c656ff3e9daa7f87ff1f7e8d54dea92e9b0489b27f7b931f5671f447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5236653c656ff3e9daa7f87ff1f7e8d54dea92e9b0489b27f7b931f5671f447a->enter($__internal_5236653c656ff3e9daa7f87ff1f7e8d54dea92e9b0489b27f7b931f5671f447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5236653c656ff3e9daa7f87ff1f7e8d54dea92e9b0489b27f7b931f5671f447a->leave($__internal_5236653c656ff3e9daa7f87ff1f7e8d54dea92e9b0489b27f7b931f5671f447a_prof);

        
        $__internal_cc321f0743931641dd788a867bf1b332149ca4def579061ee27e043294eae64f->leave($__internal_cc321f0743931641dd788a867bf1b332149ca4def579061ee27e043294eae64f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
