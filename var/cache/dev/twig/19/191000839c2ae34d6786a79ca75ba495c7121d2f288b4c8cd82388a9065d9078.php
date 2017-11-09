<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_9aec8c75e2033c38cd975499278a21ceecac7dcd45e20492b5e23c5fbf274564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aec8c75e2033c38cd975499278a21ceecac7dcd45e20492b5e23c5fbf274564->enter($__internal_9aec8c75e2033c38cd975499278a21ceecac7dcd45e20492b5e23c5fbf274564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_304346bd77a1d00267d998dbea82ab2f7cfb1ba76ff44f52706e775e403f3d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304346bd77a1d00267d998dbea82ab2f7cfb1ba76ff44f52706e775e403f3d8f->enter($__internal_304346bd77a1d00267d998dbea82ab2f7cfb1ba76ff44f52706e775e403f3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9aec8c75e2033c38cd975499278a21ceecac7dcd45e20492b5e23c5fbf274564->leave($__internal_9aec8c75e2033c38cd975499278a21ceecac7dcd45e20492b5e23c5fbf274564_prof);

        
        $__internal_304346bd77a1d00267d998dbea82ab2f7cfb1ba76ff44f52706e775e403f3d8f->leave($__internal_304346bd77a1d00267d998dbea82ab2f7cfb1ba76ff44f52706e775e403f3d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
