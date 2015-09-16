<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/news/single-news.htm */
class __TwigTemplate_c5d35abee15ce1fefd8aa589649d7581c895925e8d302f39cc2758c5b79a560c extends Twig_Template
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
        echo "<header class=\"intro-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\" col-sm-12 col-md-8\">
                <div class=\"post-heading\">
                    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
                    <span class=\"meta\">";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "F d, Y"), "html", null, true);
        echo "</span><br/>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\" col-sm-12 col-md-8\">
                ";
        // line 19
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "
            </div>
        </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/news/single-news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  30 => 7,  26 => 6,  19 => 1,);
    }
}
