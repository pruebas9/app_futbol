<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_e545d3b18c3eb335e54f6b7f36f9eac609dd3ae8d21da8546fb48f65908892f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e545d3b18c3eb335e54f6b7f36f9eac609dd3ae8d21da8546fb48f65908892f9->enter($__internal_e545d3b18c3eb335e54f6b7f36f9eac609dd3ae8d21da8546fb48f65908892f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6129f166557e260f42006a1d9d5e178f21ee7e4d7f54c0590bb407acf334f296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6129f166557e260f42006a1d9d5e178f21ee7e4d7f54c0590bb407acf334f296->enter($__internal_6129f166557e260f42006a1d9d5e178f21ee7e4d7f54c0590bb407acf334f296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e545d3b18c3eb335e54f6b7f36f9eac609dd3ae8d21da8546fb48f65908892f9->leave($__internal_e545d3b18c3eb335e54f6b7f36f9eac609dd3ae8d21da8546fb48f65908892f9_prof);

        
        $__internal_6129f166557e260f42006a1d9d5e178f21ee7e4d7f54c0590bb407acf334f296->leave($__internal_6129f166557e260f42006a1d9d5e178f21ee7e4d7f54c0590bb407acf334f296_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
