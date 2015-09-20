<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/home.htm */
class __TwigTemplate_70fce2d4dfc08aa36e0ff80e2108509d3271e63a2df6114cc0ff4b6ab58e1586 extends Twig_Template
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
        echo "<div class=\"banner\">
    <div>
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("advanced"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
    <div class=\"clearfix\"> </div>
</div>

<div class=\"news-events\">
    <div class=\"container\">
            <section class=\"component-row\">
                <div class=\"container\">
                    <div class=\"row outer\">
                        <div>
                            <h4 class=\"block-header\">UNIVERSITY NEWS</h4>
                            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "                            <div class=\"col-sm-4\">
                                <div class=\"block block-thumbnail\">
                                    <a  href=\"";
            // line 18
            echo $this->env->getExtension('CMS')->pageFilter("home");
            echo "/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\" class=\"thumbnail\">
                                    ";
            // line 19
            if (($this->getAttribute($context["post"], "image", array()) == null)) {
                // line 20
                echo "                                    <img src='storage/app/media/default_news_cover.png'  alt=\"\">
                                    ";
            } else {
                // line 22
                echo "                                    <img src='storage/app/media";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
                echo "'  alt=\"\">
                                    ";
            }
            // line 24
            echo "                                    <div class=\"caption-news\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h4></div>
                                    </a>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </div>
                        <div>
                            <div class=\"col-sm-4\">
                            <h4 class=\"block-header\">EVENTS</h4>
                                <div class=\"block events-list\">
                                    <ul class=\"media-list\">
                                        <li class=\"media\">
                                            <div class=\"media-left\">
                                                <div class=\"date\">
                                                    <span class=\"month\">SEP</span> <span class=\"day\">23</span>
                                                </div>
                                            </div>
                                            <div class=\"media-body\">
                                                <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">College of Computer Studies IT Congress 2015</a></h4>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-left\">
                                                <div class=\"date\">
                                                    <span class=\"month\">SEP</span> <span class=\"day\">28</span>
                                                </div>
                                            </div>
                                            <div class=\"media-body\">
                                                <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">42nd Capping and Candle Lightning Ceremony</a></h4>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-left\">
                                                <div class=\"date\">
                                                    <span class=\"month\">OCT</span> <span class=\"day\">2</span>
                                                </div>
                                            </div>
                                            <div class=\"media-body\">
                                                <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">General Assembly and Leadership Summit</a></h4>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"more-link\"><a href=\"http://events.ucu.edu.ph\">More events</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</div>
<link href='";
        // line 75
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/swipebox.css");
        echo "' rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<script src=\"";
        // line 76
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.swipebox.min.js"));
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 76,  126 => 75,  78 => 29,  66 => 24,  60 => 22,  56 => 20,  54 => 19,  48 => 18,  44 => 16,  40 => 15,  27 => 4,  23 => 3,  19 => 1,);
    }
}
