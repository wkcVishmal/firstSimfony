<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0de7cce20f5ec4c38e09ef52f682d2aa2e8815cdc474a5e1a8fa9d85a9d35502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d373b96c937df17c9d400be677bc0a7b8a0add200f8b302c13eb94fd969b47b = $this->env->getExtension("native_profiler");
        $__internal_6d373b96c937df17c9d400be677bc0a7b8a0add200f8b302c13eb94fd969b47b->enter($__internal_6d373b96c937df17c9d400be677bc0a7b8a0add200f8b302c13eb94fd969b47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d373b96c937df17c9d400be677bc0a7b8a0add200f8b302c13eb94fd969b47b->leave($__internal_6d373b96c937df17c9d400be677bc0a7b8a0add200f8b302c13eb94fd969b47b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24fc248a6e0d7731786917f7b18dc1835a4b3de54def121247e60477f791e0ba = $this->env->getExtension("native_profiler");
        $__internal_24fc248a6e0d7731786917f7b18dc1835a4b3de54def121247e60477f791e0ba->enter($__internal_24fc248a6e0d7731786917f7b18dc1835a4b3de54def121247e60477f791e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24fc248a6e0d7731786917f7b18dc1835a4b3de54def121247e60477f791e0ba->leave($__internal_24fc248a6e0d7731786917f7b18dc1835a4b3de54def121247e60477f791e0ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15c8c11186f82c4b146517f25f5b88144398d7e4107519533a72587d62ddc64a = $this->env->getExtension("native_profiler");
        $__internal_15c8c11186f82c4b146517f25f5b88144398d7e4107519533a72587d62ddc64a->enter($__internal_15c8c11186f82c4b146517f25f5b88144398d7e4107519533a72587d62ddc64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15c8c11186f82c4b146517f25f5b88144398d7e4107519533a72587d62ddc64a->leave($__internal_15c8c11186f82c4b146517f25f5b88144398d7e4107519533a72587d62ddc64a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_433b71903a5c76124b8931a36a292928d46b0ec399a9005e9380e60bb2ecd7a3 = $this->env->getExtension("native_profiler");
        $__internal_433b71903a5c76124b8931a36a292928d46b0ec399a9005e9380e60bb2ecd7a3->enter($__internal_433b71903a5c76124b8931a36a292928d46b0ec399a9005e9380e60bb2ecd7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_433b71903a5c76124b8931a36a292928d46b0ec399a9005e9380e60bb2ecd7a3->leave($__internal_433b71903a5c76124b8931a36a292928d46b0ec399a9005e9380e60bb2ecd7a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
