<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_939e118154fa926eb4408c34ce251d6fb7281552b9ca07786425c924c4ed2f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939e118154fa926eb4408c34ce251d6fb7281552b9ca07786425c924c4ed2f41->enter($__internal_939e118154fa926eb4408c34ce251d6fb7281552b9ca07786425c924c4ed2f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c7afe744fed97fc6309d9a830ddd894ae04573189dd125f4ed2c4557151d8221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7afe744fed97fc6309d9a830ddd894ae04573189dd125f4ed2c4557151d8221->enter($__internal_c7afe744fed97fc6309d9a830ddd894ae04573189dd125f4ed2c4557151d8221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_939e118154fa926eb4408c34ce251d6fb7281552b9ca07786425c924c4ed2f41->leave($__internal_939e118154fa926eb4408c34ce251d6fb7281552b9ca07786425c924c4ed2f41_prof);

        
        $__internal_c7afe744fed97fc6309d9a830ddd894ae04573189dd125f4ed2c4557151d8221->leave($__internal_c7afe744fed97fc6309d9a830ddd894ae04573189dd125f4ed2c4557151d8221_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
