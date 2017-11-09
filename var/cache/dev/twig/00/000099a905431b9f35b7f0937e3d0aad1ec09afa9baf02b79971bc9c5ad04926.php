<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_45fc1ffa70b36505ebd3180ef3f7d46a6cd761d009e826f8f8baa7e8d5c01a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fc1ffa70b36505ebd3180ef3f7d46a6cd761d009e826f8f8baa7e8d5c01a99->enter($__internal_45fc1ffa70b36505ebd3180ef3f7d46a6cd761d009e826f8f8baa7e8d5c01a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3638a6775d822d3fe6aad73c0b1b261142d9c5e883642ee4a56f148c63188999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3638a6775d822d3fe6aad73c0b1b261142d9c5e883642ee4a56f148c63188999->enter($__internal_3638a6775d822d3fe6aad73c0b1b261142d9c5e883642ee4a56f148c63188999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_45fc1ffa70b36505ebd3180ef3f7d46a6cd761d009e826f8f8baa7e8d5c01a99->leave($__internal_45fc1ffa70b36505ebd3180ef3f7d46a6cd761d009e826f8f8baa7e8d5c01a99_prof);

        
        $__internal_3638a6775d822d3fe6aad73c0b1b261142d9c5e883642ee4a56f148c63188999->leave($__internal_3638a6775d822d3fe6aad73c0b1b261142d9c5e883642ee4a56f148c63188999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
