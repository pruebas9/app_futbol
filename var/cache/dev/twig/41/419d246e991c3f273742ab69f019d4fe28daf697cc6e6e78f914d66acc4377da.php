<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_45226f1b02c99d78793b8b565a353207afeaaa7a28fae31642407c478b2b828b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45226f1b02c99d78793b8b565a353207afeaaa7a28fae31642407c478b2b828b->enter($__internal_45226f1b02c99d78793b8b565a353207afeaaa7a28fae31642407c478b2b828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fca8d03f8ba8d97095049b0988524e65a4ac2a86bcb69c6d72c4083efe8d5ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca8d03f8ba8d97095049b0988524e65a4ac2a86bcb69c6d72c4083efe8d5ad4->enter($__internal_fca8d03f8ba8d97095049b0988524e65a4ac2a86bcb69c6d72c4083efe8d5ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_45226f1b02c99d78793b8b565a353207afeaaa7a28fae31642407c478b2b828b->leave($__internal_45226f1b02c99d78793b8b565a353207afeaaa7a28fae31642407c478b2b828b_prof);

        
        $__internal_fca8d03f8ba8d97095049b0988524e65a4ac2a86bcb69c6d72c4083efe8d5ad4->leave($__internal_fca8d03f8ba8d97095049b0988524e65a4ac2a86bcb69c6d72c4083efe8d5ad4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
