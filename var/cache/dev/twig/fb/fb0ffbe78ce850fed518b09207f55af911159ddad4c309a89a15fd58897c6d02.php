<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_30dd421df09d1eac4c587d92f2dc63263402d6d37992f28e4ed0f5dbbdc387cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c27848f940dff8bfc4e82380de9e4addb3a768fd53369b1c9cfaa7a51090c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c27848f940dff8bfc4e82380de9e4addb3a768fd53369b1c9cfaa7a51090c82->enter($__internal_9c27848f940dff8bfc4e82380de9e4addb3a768fd53369b1c9cfaa7a51090c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6128c1bcbb764f6230174a75f074535a520192ce46ec8bbaf555824c87d9c952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6128c1bcbb764f6230174a75f074535a520192ce46ec8bbaf555824c87d9c952->enter($__internal_6128c1bcbb764f6230174a75f074535a520192ce46ec8bbaf555824c87d9c952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c27848f940dff8bfc4e82380de9e4addb3a768fd53369b1c9cfaa7a51090c82->leave($__internal_9c27848f940dff8bfc4e82380de9e4addb3a768fd53369b1c9cfaa7a51090c82_prof);

        
        $__internal_6128c1bcbb764f6230174a75f074535a520192ce46ec8bbaf555824c87d9c952->leave($__internal_6128c1bcbb764f6230174a75f074535a520192ce46ec8bbaf555824c87d9c952_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47b8b6a70e08b331946b5ed7188c0f32664528510b94e3763d8f8396392b934d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b8b6a70e08b331946b5ed7188c0f32664528510b94e3763d8f8396392b934d->enter($__internal_47b8b6a70e08b331946b5ed7188c0f32664528510b94e3763d8f8396392b934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e1f3cd3f15b13f70d2ea10a588c7439ddb5d926fb0b361778a54486f20864dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1f3cd3f15b13f70d2ea10a588c7439ddb5d926fb0b361778a54486f20864dc->enter($__internal_6e1f3cd3f15b13f70d2ea10a588c7439ddb5d926fb0b361778a54486f20864dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6e1f3cd3f15b13f70d2ea10a588c7439ddb5d926fb0b361778a54486f20864dc->leave($__internal_6e1f3cd3f15b13f70d2ea10a588c7439ddb5d926fb0b361778a54486f20864dc_prof);

        
        $__internal_47b8b6a70e08b331946b5ed7188c0f32664528510b94e3763d8f8396392b934d->leave($__internal_47b8b6a70e08b331946b5ed7188c0f32664528510b94e3763d8f8396392b934d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
