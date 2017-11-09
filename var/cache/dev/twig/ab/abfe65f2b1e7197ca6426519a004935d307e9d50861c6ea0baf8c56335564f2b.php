<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_d0b2dca285321111120faf896707a5c453896f4fe14e94fc1423946581836749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b2dca285321111120faf896707a5c453896f4fe14e94fc1423946581836749->enter($__internal_d0b2dca285321111120faf896707a5c453896f4fe14e94fc1423946581836749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_466ab861b84549baa9cd6a040c553d7b51106bc0ceb684e8734ee629b12f13df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466ab861b84549baa9cd6a040c553d7b51106bc0ceb684e8734ee629b12f13df->enter($__internal_466ab861b84549baa9cd6a040c553d7b51106bc0ceb684e8734ee629b12f13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d0b2dca285321111120faf896707a5c453896f4fe14e94fc1423946581836749->leave($__internal_d0b2dca285321111120faf896707a5c453896f4fe14e94fc1423946581836749_prof);

        
        $__internal_466ab861b84549baa9cd6a040c553d7b51106bc0ceb684e8734ee629b12f13df->leave($__internal_466ab861b84549baa9cd6a040c553d7b51106bc0ceb684e8734ee629b12f13df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
