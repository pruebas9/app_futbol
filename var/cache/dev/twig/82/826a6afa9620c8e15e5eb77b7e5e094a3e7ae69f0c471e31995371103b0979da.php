<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_32bc9c736c8b09c7f80ddc9a113feb95605f650b47505a13799d0800bea68431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bc9c736c8b09c7f80ddc9a113feb95605f650b47505a13799d0800bea68431->enter($__internal_32bc9c736c8b09c7f80ddc9a113feb95605f650b47505a13799d0800bea68431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_180ae9d4ac37ef6a6f828d89d6ae493b0230d2a8ec43fc889b6f72cc9aa14d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180ae9d4ac37ef6a6f828d89d6ae493b0230d2a8ec43fc889b6f72cc9aa14d9d->enter($__internal_180ae9d4ac37ef6a6f828d89d6ae493b0230d2a8ec43fc889b6f72cc9aa14d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32bc9c736c8b09c7f80ddc9a113feb95605f650b47505a13799d0800bea68431->leave($__internal_32bc9c736c8b09c7f80ddc9a113feb95605f650b47505a13799d0800bea68431_prof);

        
        $__internal_180ae9d4ac37ef6a6f828d89d6ae493b0230d2a8ec43fc889b6f72cc9aa14d9d->leave($__internal_180ae9d4ac37ef6a6f828d89d6ae493b0230d2a8ec43fc889b6f72cc9aa14d9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
