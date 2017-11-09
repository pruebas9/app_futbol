<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_91db7f76cbd1187983e5c4bb177b3737791491b5043fe52c7c0c87a466c77314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91db7f76cbd1187983e5c4bb177b3737791491b5043fe52c7c0c87a466c77314->enter($__internal_91db7f76cbd1187983e5c4bb177b3737791491b5043fe52c7c0c87a466c77314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d6d70b6416fd3aa0b81e87c3105e139dfab1e35fa2b58c4dbc04914929f9d497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d70b6416fd3aa0b81e87c3105e139dfab1e35fa2b58c4dbc04914929f9d497->enter($__internal_d6d70b6416fd3aa0b81e87c3105e139dfab1e35fa2b58c4dbc04914929f9d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_91db7f76cbd1187983e5c4bb177b3737791491b5043fe52c7c0c87a466c77314->leave($__internal_91db7f76cbd1187983e5c4bb177b3737791491b5043fe52c7c0c87a466c77314_prof);

        
        $__internal_d6d70b6416fd3aa0b81e87c3105e139dfab1e35fa2b58c4dbc04914929f9d497->leave($__internal_d6d70b6416fd3aa0b81e87c3105e139dfab1e35fa2b58c4dbc04914929f9d497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
