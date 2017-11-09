<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_6c1e49a07eaa5ea48c15295db75439fc676a366485b52df053fca148c02f4e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1e49a07eaa5ea48c15295db75439fc676a366485b52df053fca148c02f4e63->enter($__internal_6c1e49a07eaa5ea48c15295db75439fc676a366485b52df053fca148c02f4e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_55febf28a178109abea5ad2b9f66834337b06c595b7e843c258660e8ee0791b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55febf28a178109abea5ad2b9f66834337b06c595b7e843c258660e8ee0791b9->enter($__internal_55febf28a178109abea5ad2b9f66834337b06c595b7e843c258660e8ee0791b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6c1e49a07eaa5ea48c15295db75439fc676a366485b52df053fca148c02f4e63->leave($__internal_6c1e49a07eaa5ea48c15295db75439fc676a366485b52df053fca148c02f4e63_prof);

        
        $__internal_55febf28a178109abea5ad2b9f66834337b06c595b7e843c258660e8ee0791b9->leave($__internal_55febf28a178109abea5ad2b9f66834337b06c595b7e843c258660e8ee0791b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
