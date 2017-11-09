<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_6c4be257f6538b692e10ebb3e58a7bc71cc840938c840eb66a452be44e5f9535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4be257f6538b692e10ebb3e58a7bc71cc840938c840eb66a452be44e5f9535->enter($__internal_6c4be257f6538b692e10ebb3e58a7bc71cc840938c840eb66a452be44e5f9535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b65721f4b146e8f012867009a9f975963a4b05ffa6a62467da2e0c832f533204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65721f4b146e8f012867009a9f975963a4b05ffa6a62467da2e0c832f533204->enter($__internal_b65721f4b146e8f012867009a9f975963a4b05ffa6a62467da2e0c832f533204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6c4be257f6538b692e10ebb3e58a7bc71cc840938c840eb66a452be44e5f9535->leave($__internal_6c4be257f6538b692e10ebb3e58a7bc71cc840938c840eb66a452be44e5f9535_prof);

        
        $__internal_b65721f4b146e8f012867009a9f975963a4b05ffa6a62467da2e0c832f533204->leave($__internal_b65721f4b146e8f012867009a9f975963a4b05ffa6a62467da2e0c832f533204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
