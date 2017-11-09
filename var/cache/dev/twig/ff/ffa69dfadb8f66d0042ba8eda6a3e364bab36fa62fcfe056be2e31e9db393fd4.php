<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a23b65a554e9daeea3cfaa5a4709fe1eeb5d7291f8c8867e243a8dc1e7b864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a23b65a554e9daeea3cfaa5a4709fe1eeb5d7291f8c8867e243a8dc1e7b864->enter($__internal_97a23b65a554e9daeea3cfaa5a4709fe1eeb5d7291f8c8867e243a8dc1e7b864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c81ad472a7523f3600cab3f015cd1afca3d27fda04eaca0a18d5fce3d8520bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81ad472a7523f3600cab3f015cd1afca3d27fda04eaca0a18d5fce3d8520bfa->enter($__internal_c81ad472a7523f3600cab3f015cd1afca3d27fda04eaca0a18d5fce3d8520bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_97a23b65a554e9daeea3cfaa5a4709fe1eeb5d7291f8c8867e243a8dc1e7b864->leave($__internal_97a23b65a554e9daeea3cfaa5a4709fe1eeb5d7291f8c8867e243a8dc1e7b864_prof);

        
        $__internal_c81ad472a7523f3600cab3f015cd1afca3d27fda04eaca0a18d5fce3d8520bfa->leave($__internal_c81ad472a7523f3600cab3f015cd1afca3d27fda04eaca0a18d5fce3d8520bfa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae0d212e5b29614fbb7a29a44cb2bbb63c4c3e2ba3d92590998c0f458360bd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0d212e5b29614fbb7a29a44cb2bbb63c4c3e2ba3d92590998c0f458360bd69->enter($__internal_ae0d212e5b29614fbb7a29a44cb2bbb63c4c3e2ba3d92590998c0f458360bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5c392e4c8d4eb840711b99bf7c1b2960706e1428d6f536c9a0b8bd9c4286c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c392e4c8d4eb840711b99bf7c1b2960706e1428d6f536c9a0b8bd9c4286c06->enter($__internal_c5c392e4c8d4eb840711b99bf7c1b2960706e1428d6f536c9a0b8bd9c4286c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c5c392e4c8d4eb840711b99bf7c1b2960706e1428d6f536c9a0b8bd9c4286c06->leave($__internal_c5c392e4c8d4eb840711b99bf7c1b2960706e1428d6f536c9a0b8bd9c4286c06_prof);

        
        $__internal_ae0d212e5b29614fbb7a29a44cb2bbb63c4c3e2ba3d92590998c0f458360bd69->leave($__internal_ae0d212e5b29614fbb7a29a44cb2bbb63c4c3e2ba3d92590998c0f458360bd69_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_70523dbec5ed05eca5c861c03333d3e3cdcbd483d9bc3d31f29788c619f91765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70523dbec5ed05eca5c861c03333d3e3cdcbd483d9bc3d31f29788c619f91765->enter($__internal_70523dbec5ed05eca5c861c03333d3e3cdcbd483d9bc3d31f29788c619f91765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0652f0f052e17fb5ca90a5bc3c019d9ea138b6be1e7e3a34d5f2b7a64a1760a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0652f0f052e17fb5ca90a5bc3c019d9ea138b6be1e7e3a34d5f2b7a64a1760a->enter($__internal_e0652f0f052e17fb5ca90a5bc3c019d9ea138b6be1e7e3a34d5f2b7a64a1760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e0652f0f052e17fb5ca90a5bc3c019d9ea138b6be1e7e3a34d5f2b7a64a1760a->leave($__internal_e0652f0f052e17fb5ca90a5bc3c019d9ea138b6be1e7e3a34d5f2b7a64a1760a_prof);

        
        $__internal_70523dbec5ed05eca5c861c03333d3e3cdcbd483d9bc3d31f29788c619f91765->leave($__internal_70523dbec5ed05eca5c861c03333d3e3cdcbd483d9bc3d31f29788c619f91765_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a82df0ec84dc88354cf603b564683771da0185c1f9b420405ad68dab9e84fcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82df0ec84dc88354cf603b564683771da0185c1f9b420405ad68dab9e84fcd4->enter($__internal_a82df0ec84dc88354cf603b564683771da0185c1f9b420405ad68dab9e84fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dbe62da34db59beebd4e511b0b5a2eeb53e20fc18658d841f6fa99c69f9ef2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbe62da34db59beebd4e511b0b5a2eeb53e20fc18658d841f6fa99c69f9ef2f->enter($__internal_8dbe62da34db59beebd4e511b0b5a2eeb53e20fc18658d841f6fa99c69f9ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8dbe62da34db59beebd4e511b0b5a2eeb53e20fc18658d841f6fa99c69f9ef2f->leave($__internal_8dbe62da34db59beebd4e511b0b5a2eeb53e20fc18658d841f6fa99c69f9ef2f_prof);

        
        $__internal_a82df0ec84dc88354cf603b564683771da0185c1f9b420405ad68dab9e84fcd4->leave($__internal_a82df0ec84dc88354cf603b564683771da0185c1f9b420405ad68dab9e84fcd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/hugo/proyectos/app_futbol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
