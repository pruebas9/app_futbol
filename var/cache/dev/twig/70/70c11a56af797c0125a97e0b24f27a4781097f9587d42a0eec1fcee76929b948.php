<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_2a4ab63497dfd941c349f03d7a62b4f270b86df02e6a236102049b0427b4d2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4ab63497dfd941c349f03d7a62b4f270b86df02e6a236102049b0427b4d2bc->enter($__internal_2a4ab63497dfd941c349f03d7a62b4f270b86df02e6a236102049b0427b4d2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2ad78c649c4492268d99ad3e8c2559d3df277bfd595c0a19d70d5fe073f57880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad78c649c4492268d99ad3e8c2559d3df277bfd595c0a19d70d5fe073f57880->enter($__internal_2ad78c649c4492268d99ad3e8c2559d3df277bfd595c0a19d70d5fe073f57880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2a4ab63497dfd941c349f03d7a62b4f270b86df02e6a236102049b0427b4d2bc->leave($__internal_2a4ab63497dfd941c349f03d7a62b4f270b86df02e6a236102049b0427b4d2bc_prof);

        
        $__internal_2ad78c649c4492268d99ad3e8c2559d3df277bfd595c0a19d70d5fe073f57880->leave($__internal_2ad78c649c4492268d99ad3e8c2559d3df277bfd595c0a19d70d5fe073f57880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
