<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56dae25f5b42e94a2e789dcc304214f7730574a318cbbade2212416e7c6ba55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dae25f5b42e94a2e789dcc304214f7730574a318cbbade2212416e7c6ba55b->enter($__internal_56dae25f5b42e94a2e789dcc304214f7730574a318cbbade2212416e7c6ba55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8f40c5dd9a61d08735b8a231d15090881ef5bb436934a876d924bc016093f1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f40c5dd9a61d08735b8a231d15090881ef5bb436934a876d924bc016093f1bc->enter($__internal_8f40c5dd9a61d08735b8a231d15090881ef5bb436934a876d924bc016093f1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56dae25f5b42e94a2e789dcc304214f7730574a318cbbade2212416e7c6ba55b->leave($__internal_56dae25f5b42e94a2e789dcc304214f7730574a318cbbade2212416e7c6ba55b_prof);

        
        $__internal_8f40c5dd9a61d08735b8a231d15090881ef5bb436934a876d924bc016093f1bc->leave($__internal_8f40c5dd9a61d08735b8a231d15090881ef5bb436934a876d924bc016093f1bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d7f7c64bf98c093a7692de825a664c5fcd1e7b3fdfd7b7a330abb0309d2411b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7f7c64bf98c093a7692de825a664c5fcd1e7b3fdfd7b7a330abb0309d2411b->enter($__internal_9d7f7c64bf98c093a7692de825a664c5fcd1e7b3fdfd7b7a330abb0309d2411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0eae8ec78e2a4596e1c1e7bb2a3a6df48016fd085cc0e239fbbe30ccd3e8e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eae8ec78e2a4596e1c1e7bb2a3a6df48016fd085cc0e239fbbe30ccd3e8e70->enter($__internal_e0eae8ec78e2a4596e1c1e7bb2a3a6df48016fd085cc0e239fbbe30ccd3e8e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e0eae8ec78e2a4596e1c1e7bb2a3a6df48016fd085cc0e239fbbe30ccd3e8e70->leave($__internal_e0eae8ec78e2a4596e1c1e7bb2a3a6df48016fd085cc0e239fbbe30ccd3e8e70_prof);

        
        $__internal_9d7f7c64bf98c093a7692de825a664c5fcd1e7b3fdfd7b7a330abb0309d2411b->leave($__internal_9d7f7c64bf98c093a7692de825a664c5fcd1e7b3fdfd7b7a330abb0309d2411b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f36a0dd6a8bd59c0884d040a60a51cda7d4ebeac5ee8522ba35ce22abdd757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f36a0dd6a8bd59c0884d040a60a51cda7d4ebeac5ee8522ba35ce22abdd757a->enter($__internal_7f36a0dd6a8bd59c0884d040a60a51cda7d4ebeac5ee8522ba35ce22abdd757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22e218ac22625a0f0186e3c6e0bdbe1c005ffe1e937508f5b4ce693114e56f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e218ac22625a0f0186e3c6e0bdbe1c005ffe1e937508f5b4ce693114e56f2a->enter($__internal_22e218ac22625a0f0186e3c6e0bdbe1c005ffe1e937508f5b4ce693114e56f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_22e218ac22625a0f0186e3c6e0bdbe1c005ffe1e937508f5b4ce693114e56f2a->leave($__internal_22e218ac22625a0f0186e3c6e0bdbe1c005ffe1e937508f5b4ce693114e56f2a_prof);

        
        $__internal_7f36a0dd6a8bd59c0884d040a60a51cda7d4ebeac5ee8522ba35ce22abdd757a->leave($__internal_7f36a0dd6a8bd59c0884d040a60a51cda7d4ebeac5ee8522ba35ce22abdd757a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_982865167df39c69cd72e309d8237e34c83a1b34d9553e67b4706300db2fd77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982865167df39c69cd72e309d8237e34c83a1b34d9553e67b4706300db2fd77e->enter($__internal_982865167df39c69cd72e309d8237e34c83a1b34d9553e67b4706300db2fd77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de2e8b22243b5677b255a7f5c2347d28f25adc30877a7c555946537e21e9ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2e8b22243b5677b255a7f5c2347d28f25adc30877a7c555946537e21e9ad0c->enter($__internal_de2e8b22243b5677b255a7f5c2347d28f25adc30877a7c555946537e21e9ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_de2e8b22243b5677b255a7f5c2347d28f25adc30877a7c555946537e21e9ad0c->leave($__internal_de2e8b22243b5677b255a7f5c2347d28f25adc30877a7c555946537e21e9ad0c_prof);

        
        $__internal_982865167df39c69cd72e309d8237e34c83a1b34d9553e67b4706300db2fd77e->leave($__internal_982865167df39c69cd72e309d8237e34c83a1b34d9553e67b4706300db2fd77e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
