<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_e2c0406312cc4b8549265753f4645081b6423186dedc2fa2b874059252e21dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c0406312cc4b8549265753f4645081b6423186dedc2fa2b874059252e21dc8->enter($__internal_e2c0406312cc4b8549265753f4645081b6423186dedc2fa2b874059252e21dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_af14dd9105dc039a6109dabd9ea80d10e0066e4f7aaf91b926f43bbf9d3b9676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af14dd9105dc039a6109dabd9ea80d10e0066e4f7aaf91b926f43bbf9d3b9676->enter($__internal_af14dd9105dc039a6109dabd9ea80d10e0066e4f7aaf91b926f43bbf9d3b9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e2c0406312cc4b8549265753f4645081b6423186dedc2fa2b874059252e21dc8->leave($__internal_e2c0406312cc4b8549265753f4645081b6423186dedc2fa2b874059252e21dc8_prof);

        
        $__internal_af14dd9105dc039a6109dabd9ea80d10e0066e4f7aaf91b926f43bbf9d3b9676->leave($__internal_af14dd9105dc039a6109dabd9ea80d10e0066e4f7aaf91b926f43bbf9d3b9676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
