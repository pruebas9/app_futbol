<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43a8ba4919bebbb89148111448a42654498087b1a3f19e4b9e32078af410d70c extends Twig_Template
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
        $__internal_2a4d3b7715b0b3cdb7fdc33740ea10e3aa7d105b97aad97916a5a2e622a3d7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4d3b7715b0b3cdb7fdc33740ea10e3aa7d105b97aad97916a5a2e622a3d7e9->enter($__internal_2a4d3b7715b0b3cdb7fdc33740ea10e3aa7d105b97aad97916a5a2e622a3d7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6b86bb2835a5b17a65e66b0b1fb2ca546690b206fe98141f5b6ee6a2ee5c0bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b86bb2835a5b17a65e66b0b1fb2ca546690b206fe98141f5b6ee6a2ee5c0bc9->enter($__internal_6b86bb2835a5b17a65e66b0b1fb2ca546690b206fe98141f5b6ee6a2ee5c0bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2a4d3b7715b0b3cdb7fdc33740ea10e3aa7d105b97aad97916a5a2e622a3d7e9->leave($__internal_2a4d3b7715b0b3cdb7fdc33740ea10e3aa7d105b97aad97916a5a2e622a3d7e9_prof);

        
        $__internal_6b86bb2835a5b17a65e66b0b1fb2ca546690b206fe98141f5b6ee6a2ee5c0bc9->leave($__internal_6b86bb2835a5b17a65e66b0b1fb2ca546690b206fe98141f5b6ee6a2ee5c0bc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
