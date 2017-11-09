<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3c768095f3e6521bcc35e96ed2452d4a1838b333986531d83c90cdcb78e99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3c768095f3e6521bcc35e96ed2452d4a1838b333986531d83c90cdcb78e99d->enter($__internal_2b3c768095f3e6521bcc35e96ed2452d4a1838b333986531d83c90cdcb78e99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_51834c63eb3244a903d8ccba3d20f146f59bf6a7fc999df4d89d3e5a19201556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51834c63eb3244a903d8ccba3d20f146f59bf6a7fc999df4d89d3e5a19201556->enter($__internal_51834c63eb3244a903d8ccba3d20f146f59bf6a7fc999df4d89d3e5a19201556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3c768095f3e6521bcc35e96ed2452d4a1838b333986531d83c90cdcb78e99d->leave($__internal_2b3c768095f3e6521bcc35e96ed2452d4a1838b333986531d83c90cdcb78e99d_prof);

        
        $__internal_51834c63eb3244a903d8ccba3d20f146f59bf6a7fc999df4d89d3e5a19201556->leave($__internal_51834c63eb3244a903d8ccba3d20f146f59bf6a7fc999df4d89d3e5a19201556_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89a53075ab8a0e587f604689618b20103d9b3a89c16a05d9dc2a88fc6b367b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a53075ab8a0e587f604689618b20103d9b3a89c16a05d9dc2a88fc6b367b54->enter($__internal_89a53075ab8a0e587f604689618b20103d9b3a89c16a05d9dc2a88fc6b367b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b25074522fc77a40602838aaa478ef3ccff8244875031156d67227d63c03eceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25074522fc77a40602838aaa478ef3ccff8244875031156d67227d63c03eceb->enter($__internal_b25074522fc77a40602838aaa478ef3ccff8244875031156d67227d63c03eceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b25074522fc77a40602838aaa478ef3ccff8244875031156d67227d63c03eceb->leave($__internal_b25074522fc77a40602838aaa478ef3ccff8244875031156d67227d63c03eceb_prof);

        
        $__internal_89a53075ab8a0e587f604689618b20103d9b3a89c16a05d9dc2a88fc6b367b54->leave($__internal_89a53075ab8a0e587f604689618b20103d9b3a89c16a05d9dc2a88fc6b367b54_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b50c499bf2a6a0c7d09f52bc5ae356e08b82c5888115b0d51f81ea776bf65cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50c499bf2a6a0c7d09f52bc5ae356e08b82c5888115b0d51f81ea776bf65cf6->enter($__internal_b50c499bf2a6a0c7d09f52bc5ae356e08b82c5888115b0d51f81ea776bf65cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_318ddec963f23ba19e66b5cdc9e4b1ada4ca136151e376936f88c285b288e150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318ddec963f23ba19e66b5cdc9e4b1ada4ca136151e376936f88c285b288e150->enter($__internal_318ddec963f23ba19e66b5cdc9e4b1ada4ca136151e376936f88c285b288e150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_318ddec963f23ba19e66b5cdc9e4b1ada4ca136151e376936f88c285b288e150->leave($__internal_318ddec963f23ba19e66b5cdc9e4b1ada4ca136151e376936f88c285b288e150_prof);

        
        $__internal_b50c499bf2a6a0c7d09f52bc5ae356e08b82c5888115b0d51f81ea776bf65cf6->leave($__internal_b50c499bf2a6a0c7d09f52bc5ae356e08b82c5888115b0d51f81ea776bf65cf6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaf52bf3d8b6d4be7e83871c2313e61c6f334bf6d1723f8dfd8084441b6d2748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf52bf3d8b6d4be7e83871c2313e61c6f334bf6d1723f8dfd8084441b6d2748->enter($__internal_eaf52bf3d8b6d4be7e83871c2313e61c6f334bf6d1723f8dfd8084441b6d2748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b36c3d90e052f3792debd75732f08b4ff65bc44d8ea3c199b6e38c11ff38d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b36c3d90e052f3792debd75732f08b4ff65bc44d8ea3c199b6e38c11ff38d30->enter($__internal_9b36c3d90e052f3792debd75732f08b4ff65bc44d8ea3c199b6e38c11ff38d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9b36c3d90e052f3792debd75732f08b4ff65bc44d8ea3c199b6e38c11ff38d30->leave($__internal_9b36c3d90e052f3792debd75732f08b4ff65bc44d8ea3c199b6e38c11ff38d30_prof);

        
        $__internal_eaf52bf3d8b6d4be7e83871c2313e61c6f334bf6d1723f8dfd8084441b6d2748->leave($__internal_eaf52bf3d8b6d4be7e83871c2313e61c6f334bf6d1723f8dfd8084441b6d2748_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
