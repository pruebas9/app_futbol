<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cdd9bdbf7a46ac2bdd9d233619cfd58b4cefc42c012697654b0fbd8345ff8587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd9bdbf7a46ac2bdd9d233619cfd58b4cefc42c012697654b0fbd8345ff8587->enter($__internal_cdd9bdbf7a46ac2bdd9d233619cfd58b4cefc42c012697654b0fbd8345ff8587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4312f0a72f3bfca7a10dcf3b0e4a3c396abf54067f0160228d3444e5390ce518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4312f0a72f3bfca7a10dcf3b0e4a3c396abf54067f0160228d3444e5390ce518->enter($__internal_4312f0a72f3bfca7a10dcf3b0e4a3c396abf54067f0160228d3444e5390ce518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd9bdbf7a46ac2bdd9d233619cfd58b4cefc42c012697654b0fbd8345ff8587->leave($__internal_cdd9bdbf7a46ac2bdd9d233619cfd58b4cefc42c012697654b0fbd8345ff8587_prof);

        
        $__internal_4312f0a72f3bfca7a10dcf3b0e4a3c396abf54067f0160228d3444e5390ce518->leave($__internal_4312f0a72f3bfca7a10dcf3b0e4a3c396abf54067f0160228d3444e5390ce518_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec934481347c820ee76a55d9703adf418dae165a05ce6068aefda80fab5f4f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec934481347c820ee76a55d9703adf418dae165a05ce6068aefda80fab5f4f4b->enter($__internal_ec934481347c820ee76a55d9703adf418dae165a05ce6068aefda80fab5f4f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d55882501e2faaea1d939bcd88bc6876d447787d93498f0f6e1bb9c5f1877698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55882501e2faaea1d939bcd88bc6876d447787d93498f0f6e1bb9c5f1877698->enter($__internal_d55882501e2faaea1d939bcd88bc6876d447787d93498f0f6e1bb9c5f1877698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d55882501e2faaea1d939bcd88bc6876d447787d93498f0f6e1bb9c5f1877698->leave($__internal_d55882501e2faaea1d939bcd88bc6876d447787d93498f0f6e1bb9c5f1877698_prof);

        
        $__internal_ec934481347c820ee76a55d9703adf418dae165a05ce6068aefda80fab5f4f4b->leave($__internal_ec934481347c820ee76a55d9703adf418dae165a05ce6068aefda80fab5f4f4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da7724f406822271f170ee074a7ffc976fc147925a1decc1fd0c645fb663b780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7724f406822271f170ee074a7ffc976fc147925a1decc1fd0c645fb663b780->enter($__internal_da7724f406822271f170ee074a7ffc976fc147925a1decc1fd0c645fb663b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_99710d2eafe09865000afd96bf4255b6b0156536924b05e80aadbdd0eb57b2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99710d2eafe09865000afd96bf4255b6b0156536924b05e80aadbdd0eb57b2fe->enter($__internal_99710d2eafe09865000afd96bf4255b6b0156536924b05e80aadbdd0eb57b2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99710d2eafe09865000afd96bf4255b6b0156536924b05e80aadbdd0eb57b2fe->leave($__internal_99710d2eafe09865000afd96bf4255b6b0156536924b05e80aadbdd0eb57b2fe_prof);

        
        $__internal_da7724f406822271f170ee074a7ffc976fc147925a1decc1fd0c645fb663b780->leave($__internal_da7724f406822271f170ee074a7ffc976fc147925a1decc1fd0c645fb663b780_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de6a25c7ddf4bd965ea7e323c69f9d33e00d6ea1e27ae4cd5bea088419493f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6a25c7ddf4bd965ea7e323c69f9d33e00d6ea1e27ae4cd5bea088419493f88->enter($__internal_de6a25c7ddf4bd965ea7e323c69f9d33e00d6ea1e27ae4cd5bea088419493f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c307a1bb6f28e4148eef7fc7f5f31e8dc00fad48f53b9cdab49a37e5504a8806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c307a1bb6f28e4148eef7fc7f5f31e8dc00fad48f53b9cdab49a37e5504a8806->enter($__internal_c307a1bb6f28e4148eef7fc7f5f31e8dc00fad48f53b9cdab49a37e5504a8806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c307a1bb6f28e4148eef7fc7f5f31e8dc00fad48f53b9cdab49a37e5504a8806->leave($__internal_c307a1bb6f28e4148eef7fc7f5f31e8dc00fad48f53b9cdab49a37e5504a8806_prof);

        
        $__internal_de6a25c7ddf4bd965ea7e323c69f9d33e00d6ea1e27ae4cd5bea088419493f88->leave($__internal_de6a25c7ddf4bd965ea7e323c69f9d33e00d6ea1e27ae4cd5bea088419493f88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
