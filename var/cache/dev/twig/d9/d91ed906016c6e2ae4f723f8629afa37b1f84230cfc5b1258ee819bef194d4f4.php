<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_47973365faf5f0d633782cdc186b3c9e10614f65d1d25bda40aed29c66fed34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47973365faf5f0d633782cdc186b3c9e10614f65d1d25bda40aed29c66fed34b->enter($__internal_47973365faf5f0d633782cdc186b3c9e10614f65d1d25bda40aed29c66fed34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ab4fea26dfe8a8cafe22c34fa221440034b55eb01840701c271ab4d3e78a498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4fea26dfe8a8cafe22c34fa221440034b55eb01840701c271ab4d3e78a498c->enter($__internal_ab4fea26dfe8a8cafe22c34fa221440034b55eb01840701c271ab4d3e78a498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_47973365faf5f0d633782cdc186b3c9e10614f65d1d25bda40aed29c66fed34b->leave($__internal_47973365faf5f0d633782cdc186b3c9e10614f65d1d25bda40aed29c66fed34b_prof);

        
        $__internal_ab4fea26dfe8a8cafe22c34fa221440034b55eb01840701c271ab4d3e78a498c->leave($__internal_ab4fea26dfe8a8cafe22c34fa221440034b55eb01840701c271ab4d3e78a498c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
