<?php

/* C:\xampp\htdocs\ucu-xyz/themes/haha/partials/ajax/posts.htm */
class __TwigTemplate_3ee0deb82466dce473b1600c35a680dd788533e0cc301cc6bf71d744ee2f0965 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <div class=\"post-preview\">
        <a href=\"";
            // line 3
            echo $this->env->getExtension('CMS')->pageFilter("post", array("slug" => $this->getAttribute($context["post"], "slug", array())));
            echo "\">
            <h2 class=\"post-title\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
            </h2>
            <h3 class=\"post-subtitle\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
            echo "
            </h3>
        </a>
        <span class=\"post-meta\">Published on ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "F jS, Y"), "html", null, true);
            echo "</span> <br/>
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "            <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter("category", array("slug" => $this->getAttribute($context["category"], "slug", array())));
                echo "\">
                <span class=\"label label-primary\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
    <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/haha/partials/ajax/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  56 => 14,  51 => 13,  47 => 12,  43 => 11,  37 => 8,  31 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
