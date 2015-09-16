<?php

/* C:\xampp\htdocs\ucu-xyz/themes/haha/pages/post.htm */
class __TwigTemplate_01d2cdb53e2ea28cb9e3c3c5fabd85ae0727d901f1936f56e99c68bf937cb9fd extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"
            ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "isEmpty", array(), "method")) {
            // line 3
            echo "                background-image: url('";
            echo $this->env->getExtension('CMS')->themeFilter("/assets/images/post-sample-image.jpg");
            echo "')
            ";
        } else {
            // line 5
            echo "                background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "first", array(), "method"), "getPath", array(), "method"), "html", null, true);
            echo "')
            ";
        }
        // line 6
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"post-heading\">
                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
                    <span class=\"meta\">Published on ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "F jS, Y"), "html", null, true);
        echo "</span><br/>
                    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                    <a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter("category", array("slug" => $this->getAttribute($context["category"], "slug", array())));
            echo "\">
                        <span class=\"label label-primary\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 28
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "
            </div>
        </div>
        <div class=\"row\">
            <hr/>
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("comments"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "            </div>
        </div>
    </div>
</article>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/haha/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  90 => 34,  81 => 28,  69 => 18,  60 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  36 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
