<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_3bb1922965cd293d35b40893d13e1528bfbab748948187f59209cdb68c21a70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb1922965cd293d35b40893d13e1528bfbab748948187f59209cdb68c21a70d->enter($__internal_3bb1922965cd293d35b40893d13e1528bfbab748948187f59209cdb68c21a70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e570ca426e6dc037938e3badad1d3c09aa2fe0939f844f478cdaf7d8381d6426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e570ca426e6dc037938e3badad1d3c09aa2fe0939f844f478cdaf7d8381d6426->enter($__internal_e570ca426e6dc037938e3badad1d3c09aa2fe0939f844f478cdaf7d8381d6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3bb1922965cd293d35b40893d13e1528bfbab748948187f59209cdb68c21a70d->leave($__internal_3bb1922965cd293d35b40893d13e1528bfbab748948187f59209cdb68c21a70d_prof);

        
        $__internal_e570ca426e6dc037938e3badad1d3c09aa2fe0939f844f478cdaf7d8381d6426->leave($__internal_e570ca426e6dc037938e3badad1d3c09aa2fe0939f844f478cdaf7d8381d6426_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
