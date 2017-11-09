<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_bf88503b9eb1043d89d08587220e0eae8dc54e2ab1b31d7928d72041a28c4f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf88503b9eb1043d89d08587220e0eae8dc54e2ab1b31d7928d72041a28c4f91->enter($__internal_bf88503b9eb1043d89d08587220e0eae8dc54e2ab1b31d7928d72041a28c4f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_856182a6622e8d0d6e75d3d203d1ef9fb16b4d363283ab9ace19d93dd9911b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856182a6622e8d0d6e75d3d203d1ef9fb16b4d363283ab9ace19d93dd9911b87->enter($__internal_856182a6622e8d0d6e75d3d203d1ef9fb16b4d363283ab9ace19d93dd9911b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bf88503b9eb1043d89d08587220e0eae8dc54e2ab1b31d7928d72041a28c4f91->leave($__internal_bf88503b9eb1043d89d08587220e0eae8dc54e2ab1b31d7928d72041a28c4f91_prof);

        
        $__internal_856182a6622e8d0d6e75d3d203d1ef9fb16b4d363283ab9ace19d93dd9911b87->leave($__internal_856182a6622e8d0d6e75d3d203d1ef9fb16b4d363283ab9ace19d93dd9911b87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
