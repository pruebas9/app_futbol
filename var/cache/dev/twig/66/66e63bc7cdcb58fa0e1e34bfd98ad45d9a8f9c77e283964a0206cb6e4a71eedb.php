<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_cd5eecc420bd2d4b9c645639252f763bc1754edd58cfb2dc1c9be39bb52b1f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5eecc420bd2d4b9c645639252f763bc1754edd58cfb2dc1c9be39bb52b1f9f->enter($__internal_cd5eecc420bd2d4b9c645639252f763bc1754edd58cfb2dc1c9be39bb52b1f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_71df29d9e0573ef050eb68058d5c6eb3856a6b81d4f99d39621db83e6cabca2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71df29d9e0573ef050eb68058d5c6eb3856a6b81d4f99d39621db83e6cabca2c->enter($__internal_71df29d9e0573ef050eb68058d5c6eb3856a6b81d4f99d39621db83e6cabca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cd5eecc420bd2d4b9c645639252f763bc1754edd58cfb2dc1c9be39bb52b1f9f->leave($__internal_cd5eecc420bd2d4b9c645639252f763bc1754edd58cfb2dc1c9be39bb52b1f9f_prof);

        
        $__internal_71df29d9e0573ef050eb68058d5c6eb3856a6b81d4f99d39621db83e6cabca2c->leave($__internal_71df29d9e0573ef050eb68058d5c6eb3856a6b81d4f99d39621db83e6cabca2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
