<?php

/* genus/show.html.twig */
class __TwigTemplate_0e410df6d96a9d29ba71596ac39b7f20497e37643570d1694b2cd542dc2e8fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59351c5c9d13b0627b22eda4fda30e9be59f832bb6d400349e7c0b60703cc786 = $this->env->getExtension("native_profiler");
        $__internal_59351c5c9d13b0627b22eda4fda30e9be59f832bb6d400349e7c0b60703cc786->enter($__internal_59351c5c9d13b0627b22eda4fda30e9be59f832bb6d400349e7c0b60703cc786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59351c5c9d13b0627b22eda4fda30e9be59f832bb6d400349e7c0b60703cc786->leave($__internal_59351c5c9d13b0627b22eda4fda30e9be59f832bb6d400349e7c0b60703cc786_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de288d03384fc63bd6ca00ddb2779e312e33a9628f54ebefbfe88f06e5d44b03 = $this->env->getExtension("native_profiler");
        $__internal_de288d03384fc63bd6ca00ddb2779e312e33a9628f54ebefbfe88f06e5d44b03->enter($__internal_de288d03384fc63bd6ca00ddb2779e312e33a9628f54ebefbfe88f06e5d44b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_de288d03384fc63bd6ca00ddb2779e312e33a9628f54ebefbfe88f06e5d44b03->leave($__internal_de288d03384fc63bd6ca00ddb2779e312e33a9628f54ebefbfe88f06e5d44b03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c37672bbb7aabd4b8b80a018a96f25188525c27dc67838f3e1e30fd1d923837 = $this->env->getExtension("native_profiler");
        $__internal_0c37672bbb7aabd4b8b80a018a96f25188525c27dc67838f3e1e30fd1d923837->enter($__internal_0c37672bbb7aabd4b8b80a018a96f25188525c27dc67838f3e1e30fd1d923837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>Octopodinae</dd>
                <dt>Known Species:</dt>
                <dd>289</dd>
                <dt>Fun Fact:</dt>
                <dd>Octopuses can change the color of their body in just three-tenths of a second!</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_0c37672bbb7aabd4b8b80a018a96f25188525c27dc67838f3e1e30fd1d923837->leave($__internal_0c37672bbb7aabd4b8b80a018a96f25188525c27dc67838f3e1e30fd1d923837_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c564f1b1e4b55285ce40e617962099804ba70bc187729009b6da3100f508007 = $this->env->getExtension("native_profiler");
        $__internal_4c564f1b1e4b55285ce40e617962099804ba70bc187729009b6da3100f508007->enter($__internal_4c564f1b1e4b55285ce40e617962099804ba70bc187729009b6da3100f508007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show_notes", array("genusName" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "';

        ReactDOM.render(
                <NoteSection url={notesUrl} />,
                document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_4c564f1b1e4b55285ce40e617962099804ba70bc187729009b6da3100f508007->leave($__internal_4c564f1b1e4b55285ce40e617962099804ba70bc187729009b6da3100f508007_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  95 => 30,  86 => 25,  80 => 24,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Genus {{ name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="genus-name">{{ name }}</h2>*/
/* */
/*     <div class="sea-creature-container">*/
/*         <div class="genus-photo"></div>*/
/*         <div class="genus-details">*/
/*             <dl class="genus-details-list">*/
/*                 <dt>Subfamily:</dt>*/
/*                 <dd>Octopodinae</dd>*/
/*                 <dt>Known Species:</dt>*/
/*                 <dd>289</dd>*/
/*                 <dt>Fun Fact:</dt>*/
/*                 <dd>Octopuses can change the color of their body in just three-tenths of a second!</dd>*/
/*             </dl>*/
/*         </div>*/
/*     </div>*/
/*     <div id="js-notes-wrapper"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>*/
/* */
/*     <script type="text/babel" src="{{ asset('js/notes.react.js') }}"></script>*/
/*     <script type="text/babel">*/
/*         var notesUrl = '{{ path('genus_show_notes', {'genusName': name}) }}';*/
/* */
/*         ReactDOM.render(*/
/*                 <NoteSection url={notesUrl} />,*/
/*                 document.getElementById('js-notes-wrapper')*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
