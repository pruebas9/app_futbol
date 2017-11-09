<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_f5e67dbcf20340cb16f24c071efcec321089b8b266675f6f46336946ddac6c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e67dbcf20340cb16f24c071efcec321089b8b266675f6f46336946ddac6c87->enter($__internal_f5e67dbcf20340cb16f24c071efcec321089b8b266675f6f46336946ddac6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_eb21334786894b6c3f68a52f6c07731b17c14f1abe2dcb4cdd947ff60affb115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb21334786894b6c3f68a52f6c07731b17c14f1abe2dcb4cdd947ff60affb115->enter($__internal_eb21334786894b6c3f68a52f6c07731b17c14f1abe2dcb4cdd947ff60affb115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f5e67dbcf20340cb16f24c071efcec321089b8b266675f6f46336946ddac6c87->leave($__internal_f5e67dbcf20340cb16f24c071efcec321089b8b266675f6f46336946ddac6c87_prof);

        
        $__internal_eb21334786894b6c3f68a52f6c07731b17c14f1abe2dcb4cdd947ff60affb115->leave($__internal_eb21334786894b6c3f68a52f6c07731b17c14f1abe2dcb4cdd947ff60affb115_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
