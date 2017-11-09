<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_d6ac975b9a90d4346375f4c8634767b367c2f0ba6ec4a020966dea0506744633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ac975b9a90d4346375f4c8634767b367c2f0ba6ec4a020966dea0506744633->enter($__internal_d6ac975b9a90d4346375f4c8634767b367c2f0ba6ec4a020966dea0506744633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7f500b26d7abc80614b05b8c138f58c58047ec1295ac761f4d3b92fb5b3e2272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f500b26d7abc80614b05b8c138f58c58047ec1295ac761f4d3b92fb5b3e2272->enter($__internal_7f500b26d7abc80614b05b8c138f58c58047ec1295ac761f4d3b92fb5b3e2272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d6ac975b9a90d4346375f4c8634767b367c2f0ba6ec4a020966dea0506744633->leave($__internal_d6ac975b9a90d4346375f4c8634767b367c2f0ba6ec4a020966dea0506744633_prof);

        
        $__internal_7f500b26d7abc80614b05b8c138f58c58047ec1295ac761f4d3b92fb5b3e2272->leave($__internal_7f500b26d7abc80614b05b8c138f58c58047ec1295ac761f4d3b92fb5b3e2272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
