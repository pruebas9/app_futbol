<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb7db45b757fbc3ac93ad5d4f536673ff6378a07522332d981346b42b563b497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7db45b757fbc3ac93ad5d4f536673ff6378a07522332d981346b42b563b497->enter($__internal_eb7db45b757fbc3ac93ad5d4f536673ff6378a07522332d981346b42b563b497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_af3d0df2341664d4b8e3b7bbaa9c2da1ff8a8e772b05ad838355d55ecd523cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3d0df2341664d4b8e3b7bbaa9c2da1ff8a8e772b05ad838355d55ecd523cb9->enter($__internal_af3d0df2341664d4b8e3b7bbaa9c2da1ff8a8e772b05ad838355d55ecd523cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7db45b757fbc3ac93ad5d4f536673ff6378a07522332d981346b42b563b497->leave($__internal_eb7db45b757fbc3ac93ad5d4f536673ff6378a07522332d981346b42b563b497_prof);

        
        $__internal_af3d0df2341664d4b8e3b7bbaa9c2da1ff8a8e772b05ad838355d55ecd523cb9->leave($__internal_af3d0df2341664d4b8e3b7bbaa9c2da1ff8a8e772b05ad838355d55ecd523cb9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_73d992f0d7f4133b8ef8c79b62f2eda7497b223887d668aa5073a97a60a1561d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d992f0d7f4133b8ef8c79b62f2eda7497b223887d668aa5073a97a60a1561d->enter($__internal_73d992f0d7f4133b8ef8c79b62f2eda7497b223887d668aa5073a97a60a1561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13b445a545c2ab9a07e9fd0c338723db486ef2c1c55eb70148d6cc61803c499c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b445a545c2ab9a07e9fd0c338723db486ef2c1c55eb70148d6cc61803c499c->enter($__internal_13b445a545c2ab9a07e9fd0c338723db486ef2c1c55eb70148d6cc61803c499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_13b445a545c2ab9a07e9fd0c338723db486ef2c1c55eb70148d6cc61803c499c->leave($__internal_13b445a545c2ab9a07e9fd0c338723db486ef2c1c55eb70148d6cc61803c499c_prof);

        
        $__internal_73d992f0d7f4133b8ef8c79b62f2eda7497b223887d668aa5073a97a60a1561d->leave($__internal_73d992f0d7f4133b8ef8c79b62f2eda7497b223887d668aa5073a97a60a1561d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3a98aeff1c852cf9ec995b24ba7bb602a543ae0695019a3e4d8a414cb98bd40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a98aeff1c852cf9ec995b24ba7bb602a543ae0695019a3e4d8a414cb98bd40->enter($__internal_c3a98aeff1c852cf9ec995b24ba7bb602a543ae0695019a3e4d8a414cb98bd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53593011d3d3aaa98ae63b20060ab9c4770aa45f53b26d97161b2cc6f9d2a5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53593011d3d3aaa98ae63b20060ab9c4770aa45f53b26d97161b2cc6f9d2a5ba->enter($__internal_53593011d3d3aaa98ae63b20060ab9c4770aa45f53b26d97161b2cc6f9d2a5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_53593011d3d3aaa98ae63b20060ab9c4770aa45f53b26d97161b2cc6f9d2a5ba->leave($__internal_53593011d3d3aaa98ae63b20060ab9c4770aa45f53b26d97161b2cc6f9d2a5ba_prof);

        
        $__internal_c3a98aeff1c852cf9ec995b24ba7bb602a543ae0695019a3e4d8a414cb98bd40->leave($__internal_c3a98aeff1c852cf9ec995b24ba7bb602a543ae0695019a3e4d8a414cb98bd40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
