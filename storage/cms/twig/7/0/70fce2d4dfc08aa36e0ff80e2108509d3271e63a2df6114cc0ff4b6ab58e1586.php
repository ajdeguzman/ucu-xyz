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
    <div class=\"container-fluids\">
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
                <section class=\"component-row\"><div class=\"container\"><div class=\"row outer\">
                     ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                            <div class=\"col-sm-4\">
                                <div class=\"block block-thumbnail\">
                                    <a  href=\"";
            // line 13
            echo $this->env->getExtension('CMS')->pageFilter("home");
            echo "/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\" class=\"thumbnail\">
                                    <img src='";
            // line 14
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/events_1.jpg");
            echo "'  alt=\"\">
                                    <div class=\"caption-news\"><h4>";
            // line 15
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
        // line 20
        echo "                    <div class=\"col-sm-4\">
                        <div class=\"block events-list\">
                            <h3 class=\"block-header\">Events</h3>
                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <div class=\"date\">
                                            <span class=\"month\">AUG</span> <span class=\"day\">17</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <div class=\"date\">
                                            <span class=\"month\">AUG</span> <span class=\"day\">18</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <div class=\"date\">
                                            <span class=\"month\">AUG</span> <span class=\"day\">19</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4><a href=\"http://events.ucu.edu.ph/?event_ID=90096\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"more-link\"><a href=\"http://events.ucu.edu.ph\">More events</a></div>
                        </div>
                    </div>
                    </div><!-- /.row -->
                </div>
            </section>
        </div>
        </div>
        <div class=\"index-about\">
            <div class=\"container\">
                <h3>About</h3>
                <p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
                amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
            </div>
        </div>
        <div class=\"testimonials\">
            <div class=\"testimonials-info\">
                <div class=\"col-md-6 testimonials-text\">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque unde quis aperiam natus quam nemo dolorem impedit</h5>
                </div>
            </div>
        </div>

        <link href='";
        // line 78
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/swipebox.css");
        echo "' rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <script src=\"";
        // line 79
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.swipebox.min.js"));
        echo "\"></script>
<script type=\"text/javascript\">
                                                                jQuery(function(\$) {
                                                                \$(\".swipebox\").swipebox();
                                                                });
</script>
    <div class=\"services\">
    <div class=\"container\">
    <h3>School Services</h3>
            <div class=\"services-top-info\">
                    <div class=\"port-folio-bottom\">
                        <div id=\"portfoliolist\">
                            <div class=\"col-md-3 portfolio-wrapper\">
                                <h4><span>Library</span></h4>
                                <a href=\"images/b-w1.jpg\" class=\"b-link-stripe b-animate-go  swipebox\">
                                <img src=\"http://placehold.it/248x249\" alt=\"\" class=\"img-responsive\"><div class=\"b-wrapper\">
                                    <h2 class=\"b-animate b-from-left    b-delay03\">
                                    <!-- <img src=\"images/Dumbbell.png\" alt=\"\"> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href=\"single.html\">Read More</a></span>
                            </div>
                            <div class=\"col-md-3 portfolio-wrapper\">
                                <h4><span>Canteen</span></h4>
                                <a href=\"images/b-w2.jpg\" class=\"b-link-stripe b-animate-go  swipebox\">
                                <img src=\"http://placehold.it/248x249\" alt=\"\" class=\"img-responsive\"><div class=\"b-wrapper\">
                                    <h2 class=\"b-animate b-from-left    b-delay03\">
                                    <!-- <img src=\"images/Dumbbell.png\" alt=\"\"> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href=\"single.html\">Read More</a></span>
                            </div>
                            <div class=\"col-md-3 portfolio-wrapper\">
                                <h4><span>Gym</span></h4>
                                <a href=\"images/b-w3.jpg\" class=\"b-link-stripe b-animate-go  swipebox\">
                                <img src=\"http://placehold.it/248x249\" alt=\"\" class=\"img-responsive\"><div class=\"b-wrapper\">
                                    <h2 class=\"b-animate b-from-left    b-delay03\">
                                    <!-- <img src=\"images/Dumbbell.png\" alt=\"\"> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href=\"single.html\">Read More</a></span>
                            </div>
                            <div class=\"col-md-3 portfolio-wrapper\">
                                <h4><span>Security</span></h4>
                                <a href=\"images/b-w4.jpg\" class=\"b-link-stripe b-animate-go  swipebox\">
                                <img src=\"http://placehold.it/248x249\" alt=\"\" class=\"img-responsive\"><div class=\"b-wrapper\">
                                    <h2 class=\"b-animate b-from-left    b-delay03\">
                                    <!-- <img src=\"images/Dumbbell.png\" alt=\"\"> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href=\"single.html\">Read More</a></span>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    </div>
            </div>
    </div>";
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
        return array (  128 => 79,  124 => 78,  64 => 20,  53 => 15,  49 => 14,  43 => 13,  39 => 11,  35 => 10,  27 => 4,  23 => 3,  19 => 1,);
    }
}
