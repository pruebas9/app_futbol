<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_517dd03865f124be1707306758a67aa46608e1a841bccc21814e7387baa05996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517dd03865f124be1707306758a67aa46608e1a841bccc21814e7387baa05996->enter($__internal_517dd03865f124be1707306758a67aa46608e1a841bccc21814e7387baa05996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9691b7105c037c11ee439a29a5c6aa1b143e03e3b8799ec9a83bfe04c92c32d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9691b7105c037c11ee439a29a5c6aa1b143e03e3b8799ec9a83bfe04c92c32d9->enter($__internal_9691b7105c037c11ee439a29a5c6aa1b143e03e3b8799ec9a83bfe04c92c32d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_517dd03865f124be1707306758a67aa46608e1a841bccc21814e7387baa05996->leave($__internal_517dd03865f124be1707306758a67aa46608e1a841bccc21814e7387baa05996_prof);

        
        $__internal_9691b7105c037c11ee439a29a5c6aa1b143e03e3b8799ec9a83bfe04c92c32d9->leave($__internal_9691b7105c037c11ee439a29a5c6aa1b143e03e3b8799ec9a83bfe04c92c32d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
