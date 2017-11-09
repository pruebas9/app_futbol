<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_93a67f81e81d70842b98dc3d061532be3c48768a991afca8a32f49a3dca90a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a67f81e81d70842b98dc3d061532be3c48768a991afca8a32f49a3dca90a83->enter($__internal_93a67f81e81d70842b98dc3d061532be3c48768a991afca8a32f49a3dca90a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d988cc04e4d67d21e10a6ba9d54dbeb578dcc565b34195f72102ca1d0b9ef426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d988cc04e4d67d21e10a6ba9d54dbeb578dcc565b34195f72102ca1d0b9ef426->enter($__internal_d988cc04e4d67d21e10a6ba9d54dbeb578dcc565b34195f72102ca1d0b9ef426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_93a67f81e81d70842b98dc3d061532be3c48768a991afca8a32f49a3dca90a83->leave($__internal_93a67f81e81d70842b98dc3d061532be3c48768a991afca8a32f49a3dca90a83_prof);

        
        $__internal_d988cc04e4d67d21e10a6ba9d54dbeb578dcc565b34195f72102ca1d0b9ef426->leave($__internal_d988cc04e4d67d21e10a6ba9d54dbeb578dcc565b34195f72102ca1d0b9ef426_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
