<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_fae5d231f4586aa43a3048cbbfd4f4a4d4cdbe67e52eda508c66744ff9ababc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae5d231f4586aa43a3048cbbfd4f4a4d4cdbe67e52eda508c66744ff9ababc3->enter($__internal_fae5d231f4586aa43a3048cbbfd4f4a4d4cdbe67e52eda508c66744ff9ababc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2fec3e039830795f5f43378ab1db868b3cb9cbb2f52b1c5e18e0453e87dc3520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fec3e039830795f5f43378ab1db868b3cb9cbb2f52b1c5e18e0453e87dc3520->enter($__internal_2fec3e039830795f5f43378ab1db868b3cb9cbb2f52b1c5e18e0453e87dc3520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fae5d231f4586aa43a3048cbbfd4f4a4d4cdbe67e52eda508c66744ff9ababc3->leave($__internal_fae5d231f4586aa43a3048cbbfd4f4a4d4cdbe67e52eda508c66744ff9ababc3_prof);

        
        $__internal_2fec3e039830795f5f43378ab1db868b3cb9cbb2f52b1c5e18e0453e87dc3520->leave($__internal_2fec3e039830795f5f43378ab1db868b3cb9cbb2f52b1c5e18e0453e87dc3520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
