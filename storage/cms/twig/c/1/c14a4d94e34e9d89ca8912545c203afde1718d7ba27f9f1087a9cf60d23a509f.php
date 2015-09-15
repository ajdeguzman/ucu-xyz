<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/partials/footer.htm */
class __TwigTemplate_c14a4d94e34e9d89ca8912545c203afde1718d7ba27f9f1087a9cf60d23a509f extends Twig_Template
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
        echo "<div class=\"footer\">
                <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 cold-md-6\">
                                                <div class = \"block\">
                                                    <a href=\"/\" class = \"pull-left\"><img class=\"img-responsive\" src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ucu_logo_white_text.png");
        echo "\" alt=\"\"></a>
                                                </div>
                                                <div class=\"block social\" role=\"complementary\">
                                                    <ul class=\"nav nav-pills\" style=\"display: inline-block;\">
                                                          <li><a href=\"http://www.facebook.com/UrdanetaCityUniversityPage\" target=\"_blank\" class=\"ficon-facebook\" title=\"Facebook\"><span class=\"icon-facebook\"></span><span class=\"screen-reader\">Facebook</span></a></li>
                                                          <li><a href=\"https://twitter.com/UCUOfficial\" target=\"_blank\" class=\"ficon-twitter\" title=\"Twitter\"><span class=\"icon-twitter\"></span><span class=\"screen-reader\">Twitter</span></a></li>
                                                          <li><a href=\"http://www.youtube.com/user/UrdanetaCityUniversityPage\" target=\"_blank\" class=\"ficon-youtube\" title=\"Youtube\"><span class=\"icon-youtube\"></span><span class=\"screen-reader\">YouTube</span></a></li>
                                                          <li><a href=\"https://instagram.com/ucuofficial/\" target=\"_blank\" class=\"ficon-rss\" title=\"Instagram\"><span class=\"icon-instagram\"></span></span><span class=\"screen-reader\">Instagram</span></a></li>
                                                    </ul>
                                                </div>
                            </div>
                            <div class=\"col-sm-6 col-md-6\">
                        <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <ul class=\"nav nav-pills nav-primary\">
                                <li><a href=\"/visit\">Visit</a></li>
                                <li><a href=\"/careers\">Careers</a></li>
                                <li><a href=\"http://news.ucu.edu.ph/\">UCU News</a></li>
                                <li><a href=\"http://scribe.ucu.edu.ph/\">UCU Scribe</a></li>
                            </ul>
                        </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <ul class=\"nav\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/administration\">Administration</a></li>
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/highlights\">UCU Highlights</a></li>               
                            <li><a href=\"/activities\">Calendar of Activities</a></li>
                            <li><a href=\"/accreditation\">Accreditation</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6\">
                            <ul class=\"nav\">
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/contact-us\">Websites A-Z</a></li>
                            <li><a href=\"/directory\">Directory</a></li>
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/campus-map\">Campus Map</a></li>
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/contact-us\">Contact us</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                    <div class=\"copy-rights\">
                        <p>&copy; 2016 Urdaneta City University. All Rights Reserved.</p>
                    </div>
                </div>
                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$().UItoTop({ easingType: 'easeOutQuart' });
                    });
                </script>

                <script>
                var menuButton = document.getElementById('menuButton');
                menuButton.addEventListener('click', function (e) {
                    menuButton.classList.toggle('is-active');
                    e.preventDefault();
                });
                </script>
                <div class = \"scrollToTop\">
                    <a href=\"#to-top\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 43,  74 => 42,  69 => 40,  59 => 33,  55 => 32,  26 => 6,  19 => 1,);
    }
}
