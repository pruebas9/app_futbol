<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_44f24dfeb28d5f706afc8c865087e3aa0bd35d023cf3cd86469e8c0fea3135df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f24dfeb28d5f706afc8c865087e3aa0bd35d023cf3cd86469e8c0fea3135df->enter($__internal_44f24dfeb28d5f706afc8c865087e3aa0bd35d023cf3cd86469e8c0fea3135df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dcf75b605d31e6de9cbf31b265d39c5e06de851a012fd776acc01a8da88d2adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf75b605d31e6de9cbf31b265d39c5e06de851a012fd776acc01a8da88d2adb->enter($__internal_dcf75b605d31e6de9cbf31b265d39c5e06de851a012fd776acc01a8da88d2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_44f24dfeb28d5f706afc8c865087e3aa0bd35d023cf3cd86469e8c0fea3135df->leave($__internal_44f24dfeb28d5f706afc8c865087e3aa0bd35d023cf3cd86469e8c0fea3135df_prof);

        
        $__internal_dcf75b605d31e6de9cbf31b265d39c5e06de851a012fd776acc01a8da88d2adb->leave($__internal_dcf75b605d31e6de9cbf31b265d39c5e06de851a012fd776acc01a8da88d2adb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
