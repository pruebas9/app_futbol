<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_ddf879123c836b6a0c543292eaa783789b098cac26dcbee9c43805040f9ffa50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf879123c836b6a0c543292eaa783789b098cac26dcbee9c43805040f9ffa50->enter($__internal_ddf879123c836b6a0c543292eaa783789b098cac26dcbee9c43805040f9ffa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b262b0221cdb61e66876c2789f16eb767492ed9f6306a2ea7d01dc515873a936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b262b0221cdb61e66876c2789f16eb767492ed9f6306a2ea7d01dc515873a936->enter($__internal_b262b0221cdb61e66876c2789f16eb767492ed9f6306a2ea7d01dc515873a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddf879123c836b6a0c543292eaa783789b098cac26dcbee9c43805040f9ffa50->leave($__internal_ddf879123c836b6a0c543292eaa783789b098cac26dcbee9c43805040f9ffa50_prof);

        
        $__internal_b262b0221cdb61e66876c2789f16eb767492ed9f6306a2ea7d01dc515873a936->leave($__internal_b262b0221cdb61e66876c2789f16eb767492ed9f6306a2ea7d01dc515873a936_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
