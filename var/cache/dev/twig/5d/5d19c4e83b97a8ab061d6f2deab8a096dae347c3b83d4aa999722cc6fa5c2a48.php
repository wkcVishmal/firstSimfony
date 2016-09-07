<?php

/* genus/list.html.twig */
class __TwigTemplate_15d7ba957e6fdb7ecbcf898dae0b0e16a92c888cdaf23cb3a225ebab795d2af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/list.html.twig", 1);
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
        $__internal_1d4962f64cd8d08df80a7883e89a21e828d97d7cb34f50a1010aae86a33e3876 = $this->env->getExtension("native_profiler");
        $__internal_1d4962f64cd8d08df80a7883e89a21e828d97d7cb34f50a1010aae86a33e3876->enter($__internal_1d4962f64cd8d08df80a7883e89a21e828d97d7cb34f50a1010aae86a33e3876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4962f64cd8d08df80a7883e89a21e828d97d7cb34f50a1010aae86a33e3876->leave($__internal_1d4962f64cd8d08df80a7883e89a21e828d97d7cb34f50a1010aae86a33e3876_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8303bdce0ee6550b64113be5e1c5c80da1118564ab34b6d988d93af86d34df7e = $this->env->getExtension("native_profiler");
        $__internal_8303bdce0ee6550b64113be5e1c5c80da1118564ab34b6d988d93af86d34df7e->enter($__internal_8303bdce0ee6550b64113be5e1c5c80da1118564ab34b6d988d93af86d34df7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Genus</th>
            <th># of species</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : $this->getContext($context, "genuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["genus"]) {
            // line 12
            echo "                <tr>
                    <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "name", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </tbody>
    </table>
";
        
        $__internal_8303bdce0ee6550b64113be5e1c5c80da1118564ab34b6d988d93af86d34df7e->leave($__internal_8303bdce0ee6550b64113be5e1c5c80da1118564ab34b6d988d93af86d34df7e_prof);

    }

    public function getTemplateName()
    {
        return "genus/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  57 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Genus</th>*/
/*             <th># of species</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for genus in genuses %}*/
/*                 <tr>*/
/*                     <td>{{ genus.name }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
