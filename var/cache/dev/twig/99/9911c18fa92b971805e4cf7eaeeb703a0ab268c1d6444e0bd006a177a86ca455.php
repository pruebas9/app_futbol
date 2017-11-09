<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_3c62697d08302979d961fd331a9db69cb17f90bd0f1dc18a4a3db4bfb79988d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c62697d08302979d961fd331a9db69cb17f90bd0f1dc18a4a3db4bfb79988d5->enter($__internal_3c62697d08302979d961fd331a9db69cb17f90bd0f1dc18a4a3db4bfb79988d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b93b19f420cb34c3796c5914216ffdc62a260d7db0bb2be3b66295881a3c7b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93b19f420cb34c3796c5914216ffdc62a260d7db0bb2be3b66295881a3c7b89->enter($__internal_b93b19f420cb34c3796c5914216ffdc62a260d7db0bb2be3b66295881a3c7b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3c62697d08302979d961fd331a9db69cb17f90bd0f1dc18a4a3db4bfb79988d5->leave($__internal_3c62697d08302979d961fd331a9db69cb17f90bd0f1dc18a4a3db4bfb79988d5_prof);

        
        $__internal_b93b19f420cb34c3796c5914216ffdc62a260d7db0bb2be3b66295881a3c7b89->leave($__internal_b93b19f420cb34c3796c5914216ffdc62a260d7db0bb2be3b66295881a3c7b89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
