<?php

/* C:\xampp\htdocs\ucu-xyz/themes/haha/partials/navigation.htm */
class __TwigTemplate_7eefbe761db7c9b0c3a58f1726be5dcd9d8b3983ed22aae3981c25870de34fe6 extends Twig_Template
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
        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Blog Demo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active ";
        }
        echo "\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a>
                </li>
                <li class=\"";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about")) {
            echo "active ";
        }
        echo "\">
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->pageFilter("about");
        echo "\">About</a>
                </li>
                <li class=\"";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->pageFilter("posts");
        echo "\">Posts</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/haha/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  60 => 24,  55 => 22,  49 => 21,  44 => 19,  38 => 18,  19 => 1,);
    }
}
