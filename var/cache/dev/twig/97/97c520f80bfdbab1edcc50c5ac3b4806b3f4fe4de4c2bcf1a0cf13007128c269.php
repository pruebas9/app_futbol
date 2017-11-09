<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_964d048ad7d824e917408b6b3581403a9aa19ce8322beba65cf6e1fbefe8a344 extends Twig_Template
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
        $__internal_8e1a4a4a87e6fc9a9184cacd56bc3505b2a27a8b015f4ccd6462f8fe18f2a0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1a4a4a87e6fc9a9184cacd56bc3505b2a27a8b015f4ccd6462f8fe18f2a0c9->enter($__internal_8e1a4a4a87e6fc9a9184cacd56bc3505b2a27a8b015f4ccd6462f8fe18f2a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8b0321ff518998a0b846ffe861eec948acd94c39862c1657511c83b1b60c632b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0321ff518998a0b846ffe861eec948acd94c39862c1657511c83b1b60c632b->enter($__internal_8b0321ff518998a0b846ffe861eec948acd94c39862c1657511c83b1b60c632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8e1a4a4a87e6fc9a9184cacd56bc3505b2a27a8b015f4ccd6462f8fe18f2a0c9->leave($__internal_8e1a4a4a87e6fc9a9184cacd56bc3505b2a27a8b015f4ccd6462f8fe18f2a0c9_prof);

        
        $__internal_8b0321ff518998a0b846ffe861eec948acd94c39862c1657511c83b1b60c632b->leave($__internal_8b0321ff518998a0b846ffe861eec948acd94c39862c1657511c83b1b60c632b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
