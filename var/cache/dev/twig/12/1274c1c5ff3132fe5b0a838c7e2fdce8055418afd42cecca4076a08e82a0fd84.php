<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_8b69451ba9c87040c36b33ab8aac44978b8114a3154566ffccfb87e4bc097d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b69451ba9c87040c36b33ab8aac44978b8114a3154566ffccfb87e4bc097d71->enter($__internal_8b69451ba9c87040c36b33ab8aac44978b8114a3154566ffccfb87e4bc097d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3e0ee77f9061bcc7c2bc85006538bce195855ffee6d82dda6e5c598824322f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0ee77f9061bcc7c2bc85006538bce195855ffee6d82dda6e5c598824322f86->enter($__internal_3e0ee77f9061bcc7c2bc85006538bce195855ffee6d82dda6e5c598824322f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8b69451ba9c87040c36b33ab8aac44978b8114a3154566ffccfb87e4bc097d71->leave($__internal_8b69451ba9c87040c36b33ab8aac44978b8114a3154566ffccfb87e4bc097d71_prof);

        
        $__internal_3e0ee77f9061bcc7c2bc85006538bce195855ffee6d82dda6e5c598824322f86->leave($__internal_3e0ee77f9061bcc7c2bc85006538bce195855ffee6d82dda6e5c598824322f86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
