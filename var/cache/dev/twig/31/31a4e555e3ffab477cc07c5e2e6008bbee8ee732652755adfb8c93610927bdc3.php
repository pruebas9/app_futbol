<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_510c1a61f03bc21bef48938b0afd0a7f42fa7a08618748bd1e5d79aa922cce8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510c1a61f03bc21bef48938b0afd0a7f42fa7a08618748bd1e5d79aa922cce8c->enter($__internal_510c1a61f03bc21bef48938b0afd0a7f42fa7a08618748bd1e5d79aa922cce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b091f4119d0f7e0430a9f18cad7a30caa483e3476337ba6e94ca155036b28e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b091f4119d0f7e0430a9f18cad7a30caa483e3476337ba6e94ca155036b28e3f->enter($__internal_b091f4119d0f7e0430a9f18cad7a30caa483e3476337ba6e94ca155036b28e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_510c1a61f03bc21bef48938b0afd0a7f42fa7a08618748bd1e5d79aa922cce8c->leave($__internal_510c1a61f03bc21bef48938b0afd0a7f42fa7a08618748bd1e5d79aa922cce8c_prof);

        
        $__internal_b091f4119d0f7e0430a9f18cad7a30caa483e3476337ba6e94ca155036b28e3f->leave($__internal_b091f4119d0f7e0430a9f18cad7a30caa483e3476337ba6e94ca155036b28e3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
