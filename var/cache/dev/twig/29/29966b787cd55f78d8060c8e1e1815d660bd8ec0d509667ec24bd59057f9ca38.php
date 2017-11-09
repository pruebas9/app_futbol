<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_ca06d460a80b3bed04b6fa1f601c818478f224545181b3afbd17b35e8eec4014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca06d460a80b3bed04b6fa1f601c818478f224545181b3afbd17b35e8eec4014->enter($__internal_ca06d460a80b3bed04b6fa1f601c818478f224545181b3afbd17b35e8eec4014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6e0ac99213312bb47e50e45c5fe1ec98f6599cfb9563839e76fd9eb4095c6291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0ac99213312bb47e50e45c5fe1ec98f6599cfb9563839e76fd9eb4095c6291->enter($__internal_6e0ac99213312bb47e50e45c5fe1ec98f6599cfb9563839e76fd9eb4095c6291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ca06d460a80b3bed04b6fa1f601c818478f224545181b3afbd17b35e8eec4014->leave($__internal_ca06d460a80b3bed04b6fa1f601c818478f224545181b3afbd17b35e8eec4014_prof);

        
        $__internal_6e0ac99213312bb47e50e45c5fe1ec98f6599cfb9563839e76fd9eb4095c6291->leave($__internal_6e0ac99213312bb47e50e45c5fe1ec98f6599cfb9563839e76fd9eb4095c6291_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
