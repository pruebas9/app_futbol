<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_b87e6b1b9a0e18053e7558ed1f26af3c365ad66483e2c68b95a9fd80284aa9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87e6b1b9a0e18053e7558ed1f26af3c365ad66483e2c68b95a9fd80284aa9be->enter($__internal_b87e6b1b9a0e18053e7558ed1f26af3c365ad66483e2c68b95a9fd80284aa9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b9e72534d8e15dbcee13005fed70b2a8c12c82de05ef192f8aad7dec2ab03913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e72534d8e15dbcee13005fed70b2a8c12c82de05ef192f8aad7dec2ab03913->enter($__internal_b9e72534d8e15dbcee13005fed70b2a8c12c82de05ef192f8aad7dec2ab03913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b87e6b1b9a0e18053e7558ed1f26af3c365ad66483e2c68b95a9fd80284aa9be->leave($__internal_b87e6b1b9a0e18053e7558ed1f26af3c365ad66483e2c68b95a9fd80284aa9be_prof);

        
        $__internal_b9e72534d8e15dbcee13005fed70b2a8c12c82de05ef192f8aad7dec2ab03913->leave($__internal_b9e72534d8e15dbcee13005fed70b2a8c12c82de05ef192f8aad7dec2ab03913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
