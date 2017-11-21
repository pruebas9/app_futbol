<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_362494a63577fb3eaaa29cf596efb91b351d99947df3f47a5eb89b5b0534a231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_60641afce66a8d07845f29864ed21f33c9a6895d422196074fdc7956ccbd6ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60641afce66a8d07845f29864ed21f33c9a6895d422196074fdc7956ccbd6ace->enter($__internal_60641afce66a8d07845f29864ed21f33c9a6895d422196074fdc7956ccbd6ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de3d331ac85bfeda3dd5dce9b3331e9cefd9b585d74e07f959813922226dd7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3d331ac85bfeda3dd5dce9b3331e9cefd9b585d74e07f959813922226dd7ef->enter($__internal_de3d331ac85bfeda3dd5dce9b3331e9cefd9b585d74e07f959813922226dd7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60641afce66a8d07845f29864ed21f33c9a6895d422196074fdc7956ccbd6ace->leave($__internal_60641afce66a8d07845f29864ed21f33c9a6895d422196074fdc7956ccbd6ace_prof);

        
        $__internal_de3d331ac85bfeda3dd5dce9b3331e9cefd9b585d74e07f959813922226dd7ef->leave($__internal_de3d331ac85bfeda3dd5dce9b3331e9cefd9b585d74e07f959813922226dd7ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54b0d1e2f1a92f959a0a3880805e34f9e83db44aadb1925decb094beb0a097b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b0d1e2f1a92f959a0a3880805e34f9e83db44aadb1925decb094beb0a097b0->enter($__internal_54b0d1e2f1a92f959a0a3880805e34f9e83db44aadb1925decb094beb0a097b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a02a9c812362923e9d116cfb2ca301c920119801c6661db7ee74d55f4ac7f439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02a9c812362923e9d116cfb2ca301c920119801c6661db7ee74d55f4ac7f439->enter($__internal_a02a9c812362923e9d116cfb2ca301c920119801c6661db7ee74d55f4ac7f439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a02a9c812362923e9d116cfb2ca301c920119801c6661db7ee74d55f4ac7f439->leave($__internal_a02a9c812362923e9d116cfb2ca301c920119801c6661db7ee74d55f4ac7f439_prof);

        
        $__internal_54b0d1e2f1a92f959a0a3880805e34f9e83db44aadb1925decb094beb0a097b0->leave($__internal_54b0d1e2f1a92f959a0a3880805e34f9e83db44aadb1925decb094beb0a097b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a592cf313078ce6f7d40f991f617d7fb43d23f7aa5e8d7a44159f4a7a45ebd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a592cf313078ce6f7d40f991f617d7fb43d23f7aa5e8d7a44159f4a7a45ebd8->enter($__internal_9a592cf313078ce6f7d40f991f617d7fb43d23f7aa5e8d7a44159f4a7a45ebd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b67c25acc54a99f81f90b10554d9761f745ab4d60789b57ea6fe314a4a61f718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67c25acc54a99f81f90b10554d9761f745ab4d60789b57ea6fe314a4a61f718->enter($__internal_b67c25acc54a99f81f90b10554d9761f745ab4d60789b57ea6fe314a4a61f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b67c25acc54a99f81f90b10554d9761f745ab4d60789b57ea6fe314a4a61f718->leave($__internal_b67c25acc54a99f81f90b10554d9761f745ab4d60789b57ea6fe314a4a61f718_prof);

        
        $__internal_9a592cf313078ce6f7d40f991f617d7fb43d23f7aa5e8d7a44159f4a7a45ebd8->leave($__internal_9a592cf313078ce6f7d40f991f617d7fb43d23f7aa5e8d7a44159f4a7a45ebd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4896b44aad7de79f81eba0e3b77f5f8c60da313328f8c6e9fe040046a047937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4896b44aad7de79f81eba0e3b77f5f8c60da313328f8c6e9fe040046a047937->enter($__internal_d4896b44aad7de79f81eba0e3b77f5f8c60da313328f8c6e9fe040046a047937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a00464cd35c03791e2f36da07950459de5d431311fab3a38fe645b342bcfa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a00464cd35c03791e2f36da07950459de5d431311fab3a38fe645b342bcfa99->enter($__internal_6a00464cd35c03791e2f36da07950459de5d431311fab3a38fe645b342bcfa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a00464cd35c03791e2f36da07950459de5d431311fab3a38fe645b342bcfa99->leave($__internal_6a00464cd35c03791e2f36da07950459de5d431311fab3a38fe645b342bcfa99_prof);

        
        $__internal_d4896b44aad7de79f81eba0e3b77f5f8c60da313328f8c6e9fe040046a047937->leave($__internal_d4896b44aad7de79f81eba0e3b77f5f8c60da313328f8c6e9fe040046a047937_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
