<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_5b8e727e6fe2776aa23f35e8e63f7dd71889529557ab2c523049dd68e20a2520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8e727e6fe2776aa23f35e8e63f7dd71889529557ab2c523049dd68e20a2520->enter($__internal_5b8e727e6fe2776aa23f35e8e63f7dd71889529557ab2c523049dd68e20a2520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_bd3b307efddfe0e97f74f7d7ec261d61ef5355d57bd0abee47d705d87503229f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3b307efddfe0e97f74f7d7ec261d61ef5355d57bd0abee47d705d87503229f->enter($__internal_bd3b307efddfe0e97f74f7d7ec261d61ef5355d57bd0abee47d705d87503229f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5b8e727e6fe2776aa23f35e8e63f7dd71889529557ab2c523049dd68e20a2520->leave($__internal_5b8e727e6fe2776aa23f35e8e63f7dd71889529557ab2c523049dd68e20a2520_prof);

        
        $__internal_bd3b307efddfe0e97f74f7d7ec261d61ef5355d57bd0abee47d705d87503229f->leave($__internal_bd3b307efddfe0e97f74f7d7ec261d61ef5355d57bd0abee47d705d87503229f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
