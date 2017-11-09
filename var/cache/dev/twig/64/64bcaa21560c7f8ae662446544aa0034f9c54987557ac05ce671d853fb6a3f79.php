<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_9cb5c19e00eccbdc9660a1df133d0f549eda85673de28ac0a91772a811cf3d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb5c19e00eccbdc9660a1df133d0f549eda85673de28ac0a91772a811cf3d0b->enter($__internal_9cb5c19e00eccbdc9660a1df133d0f549eda85673de28ac0a91772a811cf3d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ff05c116f01ae0262143c62fb4c83ef81a88bdf33347605cc16c11d0b7641c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff05c116f01ae0262143c62fb4c83ef81a88bdf33347605cc16c11d0b7641c4f->enter($__internal_ff05c116f01ae0262143c62fb4c83ef81a88bdf33347605cc16c11d0b7641c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9cb5c19e00eccbdc9660a1df133d0f549eda85673de28ac0a91772a811cf3d0b->leave($__internal_9cb5c19e00eccbdc9660a1df133d0f549eda85673de28ac0a91772a811cf3d0b_prof);

        
        $__internal_ff05c116f01ae0262143c62fb4c83ef81a88bdf33347605cc16c11d0b7641c4f->leave($__internal_ff05c116f01ae0262143c62fb4c83ef81a88bdf33347605cc16c11d0b7641c4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
