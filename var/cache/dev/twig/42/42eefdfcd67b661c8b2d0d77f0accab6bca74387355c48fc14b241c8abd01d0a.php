<?php

/* :default:index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a99d59fcb24e9a03b70fbaaeccf77a75a75060071376e2717df4110df27f450d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99d59fcb24e9a03b70fbaaeccf77a75a75060071376e2717df4110df27f450d->enter($__internal_a99d59fcb24e9a03b70fbaaeccf77a75a75060071376e2717df4110df27f450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_94856d5bbb5248bedb26c9af2348bcd10226f42d1bfcda6cc451f1e2ee004100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94856d5bbb5248bedb26c9af2348bcd10226f42d1bfcda6cc451f1e2ee004100->enter($__internal_94856d5bbb5248bedb26c9af2348bcd10226f42d1bfcda6cc451f1e2ee004100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a99d59fcb24e9a03b70fbaaeccf77a75a75060071376e2717df4110df27f450d->leave($__internal_a99d59fcb24e9a03b70fbaaeccf77a75a75060071376e2717df4110df27f450d_prof);

        
        $__internal_94856d5bbb5248bedb26c9af2348bcd10226f42d1bfcda6cc451f1e2ee004100->leave($__internal_94856d5bbb5248bedb26c9af2348bcd10226f42d1bfcda6cc451f1e2ee004100_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff315bce41e72acc691ab48ea136f3f8cead2a8988aae5893efb72ca8a9381f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff315bce41e72acc691ab48ea136f3f8cead2a8988aae5893efb72ca8a9381f->enter($__internal_9ff315bce41e72acc691ab48ea136f3f8cead2a8988aae5893efb72ca8a9381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_647b02b3716bd48d22e1a17a970f713a89f35a7839c8ce0b914321701d1c26c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647b02b3716bd48d22e1a17a970f713a89f35a7839c8ce0b914321701d1c26c0->enter($__internal_647b02b3716bd48d22e1a17a970f713a89f35a7839c8ce0b914321701d1c26c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div id=\"partido\" class=\"col-lg-7 box-default pull-left\">
        <h1 class=\"box-header\">Partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la izquierda</p>
           </div>
        </div>
    </div>
    
    <div id=\"datos\" class=\"col-lg-4 box-default pull-left\">
        <h1 class=\"box-header\">Datos del partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la derecha</p>
           </div>
        </div>
    </div>
</div>
";
        
        $__internal_647b02b3716bd48d22e1a17a970f713a89f35a7839c8ce0b914321701d1c26c0->leave($__internal_647b02b3716bd48d22e1a17a970f713a89f35a7839c8ce0b914321701d1c26c0_prof);

        
        $__internal_9ff315bce41e72acc691ab48ea136f3f8cead2a8988aae5893efb72ca8a9381f->leave($__internal_9ff315bce41e72acc691ab48ea136f3f8cead2a8988aae5893efb72ca8a9381f_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div id=\"partido\" class=\"col-lg-7 box-default pull-left\">
        <h1 class=\"box-header\">Partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la izquierda</p>
           </div>
        </div>
    </div>
    
    <div id=\"datos\" class=\"col-lg-4 box-default pull-left\">
        <h1 class=\"box-header\">Datos del partido</h1>
        <div class=\"box-content\">
           <div class=\"col-lg-12 publication-item\">
               <p>Aquí va el contenido de la derecha</p>
           </div>
        </div>
    </div>
</div>
{% endblock %}


", ":default:index.html.twig", "/home/hugo/proyectos/app_futbol/app/Resources/views/default/index.html.twig");
    }
}
