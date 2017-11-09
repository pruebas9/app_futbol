<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_d5535b21756a1c236b56dfa83b42312bd372819a6d8f481e271436fd66b5f808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5535b21756a1c236b56dfa83b42312bd372819a6d8f481e271436fd66b5f808->enter($__internal_d5535b21756a1c236b56dfa83b42312bd372819a6d8f481e271436fd66b5f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_85ef9884e4fbe575cea3837e8acb36f0e664d7944f4ccb082caadd9b681f92ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ef9884e4fbe575cea3837e8acb36f0e664d7944f4ccb082caadd9b681f92ba->enter($__internal_85ef9884e4fbe575cea3837e8acb36f0e664d7944f4ccb082caadd9b681f92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d5535b21756a1c236b56dfa83b42312bd372819a6d8f481e271436fd66b5f808->leave($__internal_d5535b21756a1c236b56dfa83b42312bd372819a6d8f481e271436fd66b5f808_prof);

        
        $__internal_85ef9884e4fbe575cea3837e8acb36f0e664d7944f4ccb082caadd9b681f92ba->leave($__internal_85ef9884e4fbe575cea3837e8acb36f0e664d7944f4ccb082caadd9b681f92ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
