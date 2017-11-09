<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_6a6a83217e08e206a111bc9387d7d86ed4f1cedb9022f82dd852d886123d4df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6a83217e08e206a111bc9387d7d86ed4f1cedb9022f82dd852d886123d4df6->enter($__internal_6a6a83217e08e206a111bc9387d7d86ed4f1cedb9022f82dd852d886123d4df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b27eca09f51762404a2c00d829d6f0f7db6c43d0b1b17098d75c780b21551b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27eca09f51762404a2c00d829d6f0f7db6c43d0b1b17098d75c780b21551b16->enter($__internal_b27eca09f51762404a2c00d829d6f0f7db6c43d0b1b17098d75c780b21551b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6a6a83217e08e206a111bc9387d7d86ed4f1cedb9022f82dd852d886123d4df6->leave($__internal_6a6a83217e08e206a111bc9387d7d86ed4f1cedb9022f82dd852d886123d4df6_prof);

        
        $__internal_b27eca09f51762404a2c00d829d6f0f7db6c43d0b1b17098d75c780b21551b16->leave($__internal_b27eca09f51762404a2c00d829d6f0f7db6c43d0b1b17098d75c780b21551b16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
