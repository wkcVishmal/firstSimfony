<?php

/* base.html.twig */
class __TwigTemplate_4704d8dd3388e89e23e43500a85a25f9f7e728150beff635b7fb7affc99b8535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf1b657bbe5df25b9708e3d5c87ad5d71df3778550ed78b6aecd39eb08c55a0 = $this->env->getExtension("native_profiler");
        $__internal_baf1b657bbe5df25b9708e3d5c87ad5d71df3778550ed78b6aecd39eb08c55a0->enter($__internal_baf1b657bbe5df25b9708e3d5c87ad5d71df3778550ed78b6aecd39eb08c55a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"search-bar\">
    <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
        <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
    </form>
</div>
<header class=\"header\">
    <img class=\"logo-icon\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
    <h1 class=\"logo\">AquaNote</h1>
    <ul class=\"navi\">
        <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
        <li><a href=\"#\">Login</a></li>
    </ul>
</header>
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "<div class=\"footer\">
    <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
</div>
";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "</body>
</html>";
        
        $__internal_baf1b657bbe5df25b9708e3d5c87ad5d71df3778550ed78b6aecd39eb08c55a0->leave($__internal_baf1b657bbe5df25b9708e3d5c87ad5d71df3778550ed78b6aecd39eb08c55a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65fb5604e859b022604d7b924aa95b84613b6e4f2e0d04ccad0713c7d79e7aad = $this->env->getExtension("native_profiler");
        $__internal_65fb5604e859b022604d7b924aa95b84613b6e4f2e0d04ccad0713c7d79e7aad->enter($__internal_65fb5604e859b022604d7b924aa95b84613b6e4f2e0d04ccad0713c7d79e7aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_65fb5604e859b022604d7b924aa95b84613b6e4f2e0d04ccad0713c7d79e7aad->leave($__internal_65fb5604e859b022604d7b924aa95b84613b6e4f2e0d04ccad0713c7d79e7aad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db186649d71f1f0bb21e09d5c83f3195163427a83f4170fa56fafb4611805435 = $this->env->getExtension("native_profiler");
        $__internal_db186649d71f1f0bb21e09d5c83f3195163427a83f4170fa56fafb4611805435->enter($__internal_db186649d71f1f0bb21e09d5c83f3195163427a83f4170fa56fafb4611805435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_db186649d71f1f0bb21e09d5c83f3195163427a83f4170fa56fafb4611805435->leave($__internal_db186649d71f1f0bb21e09d5c83f3195163427a83f4170fa56fafb4611805435_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaef38612592acc50f96c0084a004ead266111602e7197fdef96ae629a3fe1ae = $this->env->getExtension("native_profiler");
        $__internal_eaef38612592acc50f96c0084a004ead266111602e7197fdef96ae629a3fe1ae->enter($__internal_eaef38612592acc50f96c0084a004ead266111602e7197fdef96ae629a3fe1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eaef38612592acc50f96c0084a004ead266111602e7197fdef96ae629a3fe1ae->leave($__internal_eaef38612592acc50f96c0084a004ead266111602e7197fdef96ae629a3fe1ae_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1252bac2a5f03eb5fd8df2c7aa1b4cbf073d6ef705cfc6153da682ecc773e226 = $this->env->getExtension("native_profiler");
        $__internal_1252bac2a5f03eb5fd8df2c7aa1b4cbf073d6ef705cfc6153da682ecc773e226->enter($__internal_1252bac2a5f03eb5fd8df2c7aa1b4cbf073d6ef705cfc6153da682ecc773e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1252bac2a5f03eb5fd8df2c7aa1b4cbf073d6ef705cfc6153da682ecc773e226->leave($__internal_1252bac2a5f03eb5fd8df2c7aa1b4cbf073d6ef705cfc6153da682ecc773e226_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  131 => 32,  125 => 31,  114 => 27,  105 => 9,  101 => 8,  96 => 7,  90 => 6,  78 => 5,  70 => 35,  68 => 31,  63 => 28,  61 => 27,  51 => 20,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}AquaNote!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div class="search-bar">*/
/*     <form method="GET" action="" class="js-sea-search sea-search">*/
/*         <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*     </form>*/
/* </div>*/
/* <header class="header">*/
/*     <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*     <h1 class="logo">AquaNote</h1>*/
/*     <ul class="navi">*/
/*         <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*         <li><a href="#">Login</a></li>*/
/*     </ul>*/
/* </header>*/
/* {% block body %}{% endblock %}*/
/* <div class="footer">*/
/*     <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/* </div>*/
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*     <script src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
