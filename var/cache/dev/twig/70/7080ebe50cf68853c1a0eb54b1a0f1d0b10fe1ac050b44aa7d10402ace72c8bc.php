<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1cdfa9f4d924590f3a68b3366c3e5ddcbca72aa0c91e63ca41a123ebd646f20f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_b82dbee48f4287ad080c32f5ebf6019b1110c61970209948878fdd143834c3d6 = $this->env->getExtension("native_profiler");
        $__internal_b82dbee48f4287ad080c32f5ebf6019b1110c61970209948878fdd143834c3d6->enter($__internal_b82dbee48f4287ad080c32f5ebf6019b1110c61970209948878fdd143834c3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82dbee48f4287ad080c32f5ebf6019b1110c61970209948878fdd143834c3d6->leave($__internal_b82dbee48f4287ad080c32f5ebf6019b1110c61970209948878fdd143834c3d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaf6c6449e57972eaf83348affb6b7d81aaed9c668223348a172cfcd4932fae7 = $this->env->getExtension("native_profiler");
        $__internal_aaf6c6449e57972eaf83348affb6b7d81aaed9c668223348a172cfcd4932fae7->enter($__internal_aaf6c6449e57972eaf83348affb6b7d81aaed9c668223348a172cfcd4932fae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aaf6c6449e57972eaf83348affb6b7d81aaed9c668223348a172cfcd4932fae7->leave($__internal_aaf6c6449e57972eaf83348affb6b7d81aaed9c668223348a172cfcd4932fae7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8400c1e4e79e2c0b98bb50ddf3693c7b24937d025d8e2befc5b19478ef8cb02 = $this->env->getExtension("native_profiler");
        $__internal_c8400c1e4e79e2c0b98bb50ddf3693c7b24937d025d8e2befc5b19478ef8cb02->enter($__internal_c8400c1e4e79e2c0b98bb50ddf3693c7b24937d025d8e2befc5b19478ef8cb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8400c1e4e79e2c0b98bb50ddf3693c7b24937d025d8e2befc5b19478ef8cb02->leave($__internal_c8400c1e4e79e2c0b98bb50ddf3693c7b24937d025d8e2befc5b19478ef8cb02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7062b978157d00ccb5fcd12c742dfd61d526d23e26fbe655a7ff9335ee64eef = $this->env->getExtension("native_profiler");
        $__internal_d7062b978157d00ccb5fcd12c742dfd61d526d23e26fbe655a7ff9335ee64eef->enter($__internal_d7062b978157d00ccb5fcd12c742dfd61d526d23e26fbe655a7ff9335ee64eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7062b978157d00ccb5fcd12c742dfd61d526d23e26fbe655a7ff9335ee64eef->leave($__internal_d7062b978157d00ccb5fcd12c742dfd61d526d23e26fbe655a7ff9335ee64eef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
