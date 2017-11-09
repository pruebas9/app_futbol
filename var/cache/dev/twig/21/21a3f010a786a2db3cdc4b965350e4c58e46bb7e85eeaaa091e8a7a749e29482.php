<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30a80548c92d1bfa626270fe2a42bb98e058d70f5d00697dbaac93e585217c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30a80548c92d1bfa626270fe2a42bb98e058d70f5d00697dbaac93e585217c0->enter($__internal_a30a80548c92d1bfa626270fe2a42bb98e058d70f5d00697dbaac93e585217c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_020644c952d7683776aef0f5bec9ab446b93d4d3bddaf97165f84b73564d61f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020644c952d7683776aef0f5bec9ab446b93d4d3bddaf97165f84b73564d61f9->enter($__internal_020644c952d7683776aef0f5bec9ab446b93d4d3bddaf97165f84b73564d61f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30a80548c92d1bfa626270fe2a42bb98e058d70f5d00697dbaac93e585217c0->leave($__internal_a30a80548c92d1bfa626270fe2a42bb98e058d70f5d00697dbaac93e585217c0_prof);

        
        $__internal_020644c952d7683776aef0f5bec9ab446b93d4d3bddaf97165f84b73564d61f9->leave($__internal_020644c952d7683776aef0f5bec9ab446b93d4d3bddaf97165f84b73564d61f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12f45b59ab7af2499591ddccc3c5c688f995df120aaa4ae2080e643201ce3ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f45b59ab7af2499591ddccc3c5c688f995df120aaa4ae2080e643201ce3ad8->enter($__internal_12f45b59ab7af2499591ddccc3c5c688f995df120aaa4ae2080e643201ce3ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce563f3f28d82fabba89ea80261120ff93efb133be2d212c176927e367315106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce563f3f28d82fabba89ea80261120ff93efb133be2d212c176927e367315106->enter($__internal_ce563f3f28d82fabba89ea80261120ff93efb133be2d212c176927e367315106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ce563f3f28d82fabba89ea80261120ff93efb133be2d212c176927e367315106->leave($__internal_ce563f3f28d82fabba89ea80261120ff93efb133be2d212c176927e367315106_prof);

        
        $__internal_12f45b59ab7af2499591ddccc3c5c688f995df120aaa4ae2080e643201ce3ad8->leave($__internal_12f45b59ab7af2499591ddccc3c5c688f995df120aaa4ae2080e643201ce3ad8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_38b96b581096cdcd0c19ada2ebf4937772c4e66d923d4e64d267b0a2907fa1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b96b581096cdcd0c19ada2ebf4937772c4e66d923d4e64d267b0a2907fa1b3->enter($__internal_38b96b581096cdcd0c19ada2ebf4937772c4e66d923d4e64d267b0a2907fa1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baa57f2082b50cdcb920a6c1afb2b8b320d2907da0262143aca46fb47d7d435b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa57f2082b50cdcb920a6c1afb2b8b320d2907da0262143aca46fb47d7d435b->enter($__internal_baa57f2082b50cdcb920a6c1afb2b8b320d2907da0262143aca46fb47d7d435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_baa57f2082b50cdcb920a6c1afb2b8b320d2907da0262143aca46fb47d7d435b->leave($__internal_baa57f2082b50cdcb920a6c1afb2b8b320d2907da0262143aca46fb47d7d435b_prof);

        
        $__internal_38b96b581096cdcd0c19ada2ebf4937772c4e66d923d4e64d267b0a2907fa1b3->leave($__internal_38b96b581096cdcd0c19ada2ebf4937772c4e66d923d4e64d267b0a2907fa1b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
