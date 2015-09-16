<?php

/* C:\xampp\htdocs\ucu-xyz/themes/haha/pages/home.htm */
class __TwigTemplate_3e299b14af1c0b438742603a7b8d930a31049ef5adc7cd701749b0d695c9a55c extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"background-image: url('";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/home-bg.jpg");
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                <div class=\"post-preview\">
                    <a href=\"";
            // line 18
            echo $this->env->getExtension('CMS')->pageFilter("post", array("slug" => $this->getAttribute($context["post"], "slug", array())));
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
            echo "
                        </h3>
                    </a>
                    <span class=\"post-meta\">Published on ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "F jS, Y"), "html", null, true);
            echo "</span> <br/>
                    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "                    <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter("category", array("slug" => $this->getAttribute($context["category"], "slug", array())));
                echo "\">
                            <span class=\"label label-primary\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </div>
                <hr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <h2>No posts found.</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            <ul class=\"pager\">
                <li class=\"next\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('CMS')->pageFilter("posts");
        echo "\">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/haha/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  102 => 37,  95 => 35,  88 => 32,  79 => 29,  74 => 28,  70 => 27,  66 => 26,  60 => 23,  54 => 20,  49 => 18,  46 => 17,  41 => 16,  28 => 6,  19 => 1,);
    }
}
