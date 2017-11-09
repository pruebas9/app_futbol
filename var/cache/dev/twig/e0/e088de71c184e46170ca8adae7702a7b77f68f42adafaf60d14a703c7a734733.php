<?php

/* :User:register.html.twig */
class __TwigTemplate_31f1b6f96ff1e8777e4233fee91e344f0a8ec0cf11275b10ac05e63801bf52e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User:register.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397ebcc16a45be1f7a283b3c625e63f3e237b9012bed2f073a94242603d3359d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397ebcc16a45be1f7a283b3c625e63f3e237b9012bed2f073a94242603d3359d->enter($__internal_397ebcc16a45be1f7a283b3c625e63f3e237b9012bed2f073a94242603d3359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:register.html.twig"));

        $__internal_bcfe9af8995153f220acd4ff3337252853f90988a9edd4087be823e6cbeec214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfe9af8995153f220acd4ff3337252853f90988a9edd4087be823e6cbeec214->enter($__internal_bcfe9af8995153f220acd4ff3337252853f90988a9edd4087be823e6cbeec214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397ebcc16a45be1f7a283b3c625e63f3e237b9012bed2f073a94242603d3359d->leave($__internal_397ebcc16a45be1f7a283b3c625e63f3e237b9012bed2f073a94242603d3359d_prof);

        
        $__internal_bcfe9af8995153f220acd4ff3337252853f90988a9edd4087be823e6cbeec214->leave($__internal_bcfe9af8995153f220acd4ff3337252853f90988a9edd4087be823e6cbeec214_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64230bdbbd0bfc7fa77b5f275f18894ffd0849bc0321d1d7a2a4558195e68a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64230bdbbd0bfc7fa77b5f275f18894ffd0849bc0321d1d7a2a4558195e68a67->enter($__internal_64230bdbbd0bfc7fa77b5f275f18894ffd0849bc0321d1d7a2a4558195e68a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a34ec2adc4cdd670495022ac5743e5b0b6fb2d7df9d46a821045a67484b6e530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34ec2adc4cdd670495022ac5743e5b0b6fb2d7df9d46a821045a67484b6e530->enter($__internal_a34ec2adc4cdd670495022ac5743e5b0b6fb2d7df9d46a821045a67484b6e530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom/email_check.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a34ec2adc4cdd670495022ac5743e5b0b6fb2d7df9d46a821045a67484b6e530->leave($__internal_a34ec2adc4cdd670495022ac5743e5b0b6fb2d7df9d46a821045a67484b6e530_prof);

        
        $__internal_64230bdbbd0bfc7fa77b5f275f18894ffd0849bc0321d1d7a2a4558195e68a67->leave($__internal_64230bdbbd0bfc7fa77b5f275f18894ffd0849bc0321d1d7a2a4558195e68a67_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_086e7428b342a4f6007a5f02ea5e74c991a21323d2102cdb8cc36b2d7d6b79eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086e7428b342a4f6007a5f02ea5e74c991a21323d2102cdb8cc36b2d7d6b79eb->enter($__internal_086e7428b342a4f6007a5f02ea5e74c991a21323d2102cdb8cc36b2d7d6b79eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a11dd379e33e7fcb2b79e62cdcf1e665dd462099c26ada7154ccae1a65e9c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a11dd379e33e7fcb2b79e62cdcf1e665dd462099c26ada7154ccae1a65e9c82->enter($__internal_5a11dd379e33e7fcb2b79e62cdcf1e665dd462099c26ada7154ccae1a65e9c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"col-lg-4 box-form\">
        <div class=\"middle-box text-center loginscreen animated fadeInDown\">
        <div>
            <div>

                <h1 class=\"logo-name\">PZ</h1>

            </div>
            <h3>Bienvenido a Pintxos y Zuritos</h3>
            
            <p>Regístrate como usuario</p>
            
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
        

";
        
        $__internal_5a11dd379e33e7fcb2b79e62cdcf1e665dd462099c26ada7154ccae1a65e9c82->leave($__internal_5a11dd379e33e7fcb2b79e62cdcf1e665dd462099c26ada7154ccae1a65e9c82_prof);

        
        $__internal_086e7428b342a4f6007a5f02ea5e74c991a21323d2102cdb8cc36b2d7d6b79eb->leave($__internal_086e7428b342a4f6007a5f02ea5e74c991a21323d2102cdb8cc36b2d7d6b79eb_prof);

    }

    public function getTemplateName()
    {
        return ":User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  94 => 20,  90 => 19,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/custom/email_check.js') }}\"></script>
{% endblock %}
{% block content %}
    <div class=\"col-lg-4 box-form\">
        <div class=\"middle-box text-center loginscreen animated fadeInDown\">
        <div>
            <div>

                <h1 class=\"logo-name\">PZ</h1>

            </div>
            <h3>Bienvenido a Pintxos y Zuritos</h3>
            
            <p>Regístrate como usuario</p>
            
            {{ form_start(form, {'action':'', 'method':'POST'}) }}
            {{ form_errors(form) }}
            {{ form_end(form) }}
        </div>
    </div>
        

{% endblock%}
", ":User:register.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/User/register.html.twig");
    }
}
