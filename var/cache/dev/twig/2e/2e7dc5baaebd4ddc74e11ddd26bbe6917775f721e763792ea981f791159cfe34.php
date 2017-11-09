<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ce478ddfe7f1a9b1b3f9b42f1bc1b4ca8f1856b0a692c4499b20f0f5b7be74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ce478ddfe7f1a9b1b3f9b42f1bc1b4ca8f1856b0a692c4499b20f0f5b7be74->enter($__internal_86ce478ddfe7f1a9b1b3f9b42f1bc1b4ca8f1856b0a692c4499b20f0f5b7be74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_73be3698a11dabd05dc611482170a0eec7f6679b038ac0822fbecda37845fe69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73be3698a11dabd05dc611482170a0eec7f6679b038ac0822fbecda37845fe69->enter($__internal_73be3698a11dabd05dc611482170a0eec7f6679b038ac0822fbecda37845fe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_86ce478ddfe7f1a9b1b3f9b42f1bc1b4ca8f1856b0a692c4499b20f0f5b7be74->leave($__internal_86ce478ddfe7f1a9b1b3f9b42f1bc1b4ca8f1856b0a692c4499b20f0f5b7be74_prof);

        
        $__internal_73be3698a11dabd05dc611482170a0eec7f6679b038ac0822fbecda37845fe69->leave($__internal_73be3698a11dabd05dc611482170a0eec7f6679b038ac0822fbecda37845fe69_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_255124225fe0bb1724768deda17758453e94267dd2c4152e8d571c22abbe4a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255124225fe0bb1724768deda17758453e94267dd2c4152e8d571c22abbe4a2b->enter($__internal_255124225fe0bb1724768deda17758453e94267dd2c4152e8d571c22abbe4a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_020e89b2c9b3741c835854dba9647829708eee41a87809ad3aadfe04c173a0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020e89b2c9b3741c835854dba9647829708eee41a87809ad3aadfe04c173a0f9->enter($__internal_020e89b2c9b3741c835854dba9647829708eee41a87809ad3aadfe04c173a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_020e89b2c9b3741c835854dba9647829708eee41a87809ad3aadfe04c173a0f9->leave($__internal_020e89b2c9b3741c835854dba9647829708eee41a87809ad3aadfe04c173a0f9_prof);

        
        $__internal_255124225fe0bb1724768deda17758453e94267dd2c4152e8d571c22abbe4a2b->leave($__internal_255124225fe0bb1724768deda17758453e94267dd2c4152e8d571c22abbe4a2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
