<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d51d7bd2d000387a4f379bfbe98f408cb3698f0c5647124d935918a37b033b98 extends Twig_Template
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
        $__internal_0bba75bdc877296c27d431031787d930c40fc03b76fb24317b0f3b46a679f296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bba75bdc877296c27d431031787d930c40fc03b76fb24317b0f3b46a679f296->enter($__internal_0bba75bdc877296c27d431031787d930c40fc03b76fb24317b0f3b46a679f296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_344117f64970c0134f77cb6dcf2a9af9ffc847e7b4b9189e8bf4e55617c44c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344117f64970c0134f77cb6dcf2a9af9ffc847e7b4b9189e8bf4e55617c44c0d->enter($__internal_344117f64970c0134f77cb6dcf2a9af9ffc847e7b4b9189e8bf4e55617c44c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_0bba75bdc877296c27d431031787d930c40fc03b76fb24317b0f3b46a679f296->leave($__internal_0bba75bdc877296c27d431031787d930c40fc03b76fb24317b0f3b46a679f296_prof);

        
        $__internal_344117f64970c0134f77cb6dcf2a9af9ffc847e7b4b9189e8bf4e55617c44c0d->leave($__internal_344117f64970c0134f77cb6dcf2a9af9ffc847e7b4b9189e8bf4e55617c44c0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
