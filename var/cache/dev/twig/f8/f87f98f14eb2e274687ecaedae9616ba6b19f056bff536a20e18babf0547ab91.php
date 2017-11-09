<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5d13d56eb6f972064b5c85b863193c5e423e2c3076eff9ce31bae3c8d131b35d extends Twig_Template
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
        $__internal_9a44acbe571ff5e27824ee2e80577132fb00ad056db5da12f08b2f17c6c87aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a44acbe571ff5e27824ee2e80577132fb00ad056db5da12f08b2f17c6c87aed->enter($__internal_9a44acbe571ff5e27824ee2e80577132fb00ad056db5da12f08b2f17c6c87aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_762318cff4ebdd16f90f623616c427c7c9d34e73f5673634ce0d0ea65c6236f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762318cff4ebdd16f90f623616c427c7c9d34e73f5673634ce0d0ea65c6236f3->enter($__internal_762318cff4ebdd16f90f623616c427c7c9d34e73f5673634ce0d0ea65c6236f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9a44acbe571ff5e27824ee2e80577132fb00ad056db5da12f08b2f17c6c87aed->leave($__internal_9a44acbe571ff5e27824ee2e80577132fb00ad056db5da12f08b2f17c6c87aed_prof);

        
        $__internal_762318cff4ebdd16f90f623616c427c7c9d34e73f5673634ce0d0ea65c6236f3->leave($__internal_762318cff4ebdd16f90f623616c427c7c9d34e73f5673634ce0d0ea65c6236f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
