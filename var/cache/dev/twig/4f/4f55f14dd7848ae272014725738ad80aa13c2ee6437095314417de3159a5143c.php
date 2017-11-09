<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_725d6e778b797043d6cbf755cac867558d5223d0deb419c2ed04711cc6839af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725d6e778b797043d6cbf755cac867558d5223d0deb419c2ed04711cc6839af2->enter($__internal_725d6e778b797043d6cbf755cac867558d5223d0deb419c2ed04711cc6839af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_22cebc7858d838cca7d4e6f9525196cf4c5b1899ca4dc9642a8db91fda37b736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cebc7858d838cca7d4e6f9525196cf4c5b1899ca4dc9642a8db91fda37b736->enter($__internal_22cebc7858d838cca7d4e6f9525196cf4c5b1899ca4dc9642a8db91fda37b736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_725d6e778b797043d6cbf755cac867558d5223d0deb419c2ed04711cc6839af2->leave($__internal_725d6e778b797043d6cbf755cac867558d5223d0deb419c2ed04711cc6839af2_prof);

        
        $__internal_22cebc7858d838cca7d4e6f9525196cf4c5b1899ca4dc9642a8db91fda37b736->leave($__internal_22cebc7858d838cca7d4e6f9525196cf4c5b1899ca4dc9642a8db91fda37b736_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
