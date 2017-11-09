<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_e291d0307169655e37905325dd59a51fb42bcbe5078bb020e6be99c2933c413b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e291d0307169655e37905325dd59a51fb42bcbe5078bb020e6be99c2933c413b->enter($__internal_e291d0307169655e37905325dd59a51fb42bcbe5078bb020e6be99c2933c413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5fc135f9f16f3c17b0ce60e62dd713494ff210e2e7095b5e18479784bb534d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc135f9f16f3c17b0ce60e62dd713494ff210e2e7095b5e18479784bb534d40->enter($__internal_5fc135f9f16f3c17b0ce60e62dd713494ff210e2e7095b5e18479784bb534d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e291d0307169655e37905325dd59a51fb42bcbe5078bb020e6be99c2933c413b->leave($__internal_e291d0307169655e37905325dd59a51fb42bcbe5078bb020e6be99c2933c413b_prof);

        
        $__internal_5fc135f9f16f3c17b0ce60e62dd713494ff210e2e7095b5e18479784bb534d40->leave($__internal_5fc135f9f16f3c17b0ce60e62dd713494ff210e2e7095b5e18479784bb534d40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
