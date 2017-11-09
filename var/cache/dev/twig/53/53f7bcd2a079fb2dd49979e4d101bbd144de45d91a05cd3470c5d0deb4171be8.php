<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_d0308a83ade479b65b25cdaac3e6b6236e308a37cdc4dd38a7884fb60a6e8ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0308a83ade479b65b25cdaac3e6b6236e308a37cdc4dd38a7884fb60a6e8ac6->enter($__internal_d0308a83ade479b65b25cdaac3e6b6236e308a37cdc4dd38a7884fb60a6e8ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9dd72c631eb2c405163206e46b7ae4eef789ddd000ba5a232157e910963fc38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd72c631eb2c405163206e46b7ae4eef789ddd000ba5a232157e910963fc38a->enter($__internal_9dd72c631eb2c405163206e46b7ae4eef789ddd000ba5a232157e910963fc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d0308a83ade479b65b25cdaac3e6b6236e308a37cdc4dd38a7884fb60a6e8ac6->leave($__internal_d0308a83ade479b65b25cdaac3e6b6236e308a37cdc4dd38a7884fb60a6e8ac6_prof);

        
        $__internal_9dd72c631eb2c405163206e46b7ae4eef789ddd000ba5a232157e910963fc38a->leave($__internal_9dd72c631eb2c405163206e46b7ae4eef789ddd000ba5a232157e910963fc38a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
