<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e45d4adf5b05e6cb14e32dded5a020c2dd7a861afd2f3a2fc18b2d3a4c0418bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fbe3843c190040395508dbe22f35ed337fa8ec7c6bfd4e831816214e2ddef27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbe3843c190040395508dbe22f35ed337fa8ec7c6bfd4e831816214e2ddef27->enter($__internal_0fbe3843c190040395508dbe22f35ed337fa8ec7c6bfd4e831816214e2ddef27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbe3843c190040395508dbe22f35ed337fa8ec7c6bfd4e831816214e2ddef27->leave($__internal_0fbe3843c190040395508dbe22f35ed337fa8ec7c6bfd4e831816214e2ddef27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4aee5cae096e7b7082ed0f6b2cbb1b7d92722ec80759f69bcdc459ca486bdbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aee5cae096e7b7082ed0f6b2cbb1b7d92722ec80759f69bcdc459ca486bdbb7->enter($__internal_4aee5cae096e7b7082ed0f6b2cbb1b7d92722ec80759f69bcdc459ca486bdbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4aee5cae096e7b7082ed0f6b2cbb1b7d92722ec80759f69bcdc459ca486bdbb7->leave($__internal_4aee5cae096e7b7082ed0f6b2cbb1b7d92722ec80759f69bcdc459ca486bdbb7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_776609736a5ade852ced6f904135357e9f3fff8a4102d50302246adbb64754c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776609736a5ade852ced6f904135357e9f3fff8a4102d50302246adbb64754c2->enter($__internal_776609736a5ade852ced6f904135357e9f3fff8a4102d50302246adbb64754c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_776609736a5ade852ced6f904135357e9f3fff8a4102d50302246adbb64754c2->leave($__internal_776609736a5ade852ced6f904135357e9f3fff8a4102d50302246adbb64754c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5eae7bfa30a7b48bdcccac33ae707b91b4b341ae73a3290d17b1ee9f1b2e9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5eae7bfa30a7b48bdcccac33ae707b91b4b341ae73a3290d17b1ee9f1b2e9ac->enter($__internal_a5eae7bfa30a7b48bdcccac33ae707b91b4b341ae73a3290d17b1ee9f1b2e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a5eae7bfa30a7b48bdcccac33ae707b91b4b341ae73a3290d17b1ee9f1b2e9ac->leave($__internal_a5eae7bfa30a7b48bdcccac33ae707b91b4b341ae73a3290d17b1ee9f1b2e9ac_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/prueba-programador/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
