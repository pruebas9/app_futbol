<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_7da2b8e59a170b5a8fe11332f00696e4c05233eccde6ecbfcf940f5c0707d439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da2b8e59a170b5a8fe11332f00696e4c05233eccde6ecbfcf940f5c0707d439->enter($__internal_7da2b8e59a170b5a8fe11332f00696e4c05233eccde6ecbfcf940f5c0707d439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e5b318a1d31d48ef8318bb7a0eadd8ea7e61056308d70590fb192924529a1655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b318a1d31d48ef8318bb7a0eadd8ea7e61056308d70590fb192924529a1655->enter($__internal_e5b318a1d31d48ef8318bb7a0eadd8ea7e61056308d70590fb192924529a1655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7da2b8e59a170b5a8fe11332f00696e4c05233eccde6ecbfcf940f5c0707d439->leave($__internal_7da2b8e59a170b5a8fe11332f00696e4c05233eccde6ecbfcf940f5c0707d439_prof);

        
        $__internal_e5b318a1d31d48ef8318bb7a0eadd8ea7e61056308d70590fb192924529a1655->leave($__internal_e5b318a1d31d48ef8318bb7a0eadd8ea7e61056308d70590fb192924529a1655_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
