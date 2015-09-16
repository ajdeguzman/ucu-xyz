<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/layouts/default.htm */
class __TwigTemplate_7558c04ac9f0e9c7958e3a5342edce982a46631715ea505d8b57fbae227e76d8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | Urdaneta City University</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Urdaneta City University\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href='";
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.css");
        echo "' rel=\"stylesheet\">
        <link href='";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/theme.css");
        echo "' rel=\"stylesheet\">
        <link href='";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/yamm.css");
        echo "' rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href='";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/font.css");
        echo "' rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href='";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/timeline.css");
        echo "' rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>
    <body>
                    <header id=\"site-header\" class=\"light\">
                            <div class=\"navbar navbar-default navbar-static-top yamm\">
                                <div class=\"container\">
                                    <div class=\"navbar-header\">
                                        <h1>
                                        <a  href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/\" class=\"navbar-brand\" title=\"UCU\" rel=\"home\">
                                        <span class=\"navbar-brand-blue\"><img alt=\"Urdaneta City University\" src='";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ucu_logo_white_text.png");
        echo "'></span>
                                        </a>
                                        </h1>
                             <button class=\"menu-button navbar-toggle\" id=\"menuButton\" data-toggle=\"collapse\" data-target=\"#main-nav\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"burger-icon\"></span>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class=\"collapse navbar-collapse\" id=\"main-nav\">
                                        <nav id=\"primary-nav\" role=\"navigation\">
                                            <ul class=\"nav navbar-nav\">
                                                    <li>
                                                        <a  href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/\" style=\"font-weight:600\">Home</a>
                                                    </li>
                                                    <li class=\"dropdown yamm-fw\">
                                                        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">About <b class=\"caret\"></b></a>
                                                        <ul class=\"dropdown-menu\">
                                                           <li>
                                                                <div class=\"yamm-content\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-sm-7\">
                                                                            <div class=\"caption hidden-xs\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\">
                                                                                        <img src='";
        // line 50
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/about_menu.jpg");
        echo "' alt=\"\">
                                                                                    </div>
                                                                                    <div class=\"col-sm-6\"><div class=\"description\"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque </p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-sm-5\">
                                                                            <div class=\"subnav\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/history\" class=\"\">History</a></li>
                                                                                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/vmgo\" class=\"\">Vision &amp; Mission</a></li>
                                                                                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/administration\" class=\"\">Administration</a></li>
                                                                                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/university-hymn\" class=\"\">University Hymn</a></li>
                                                                                    </ul></div>
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 66
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/highlights\" class=\"\">UCU Highlights</a></li>
                                                                                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/campus-map\" class=\"\">Campus Map</a></li>
                                                                                        <li><a href=\"";
        // line 68
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/seal-and-symbols\" class=\"\">UCU Seal & Symbols</a></li>
                                                                                        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/about-ucu/contact-us\" class=\"\">Contact Us</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class=\"dropdown yamm-fw\">
                                                        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Admissions <b class=\"caret\"></b></a>
                                                        <ul class=\"dropdown-menu\">
                                                           <li>
                                                                <div class=\"yamm-content\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-sm-7\">
                                                                            <div class=\"caption hidden-xs\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\">
                                                                                        <img src='";
        // line 89
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/admissions_menu.jpg");
        echo "' alt=\"\">
                                                                                    </div>
                                                                                    <div class=\"col-sm-6\"><div class=\"description\"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque </p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-sm-5\">
                                                                            <div class=\"subnav\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/application-procedures\" aria-describedby=\"campus-life\" class=\"\">Application and Enrolment Procedures</a></li>
                                                                                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/scholarships\" class=\"\">Scholarship Grants</a></li>
                                                                                        <li><a href=\"";
        // line 101
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/graduates\" class=\"\">Graduate</a></li>
                                                                                        <li><a href=\"";
        // line 102
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/undergraduates\" class=\"\">Undergraduate</a></li>
                                                                                    </ul></div>
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/law\" class=\"\">Law</a></li>
                                                                                        <li><a href=\"";
        // line 106
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/admission/entrance-examination\" class=\"\">Entrance Examination</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class=\"dropdown yamm-fw\">
                                                        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Academics <b class=\"caret\"></b></a>
                                                        <ul class=\"dropdown-menu\">
                                                           <li>
                                                                <div class=\"yamm-content\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-sm-7\">
                                                                            <div class=\"caption hidden-xs\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\">
                                                                                        <img src='";
        // line 126
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/academics_menu.jpg");
        echo "' alt=\"\">
                                                                                    </div>
                                                                                    <div class=\"col-sm-6\"><div class=\"description\"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque </p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-sm-5\">
                                                                            <div class=\"subnav\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 136
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/graduate-school\" aria-describedby=\"campus-life\" class=\"\">Graduate School</a></li>
                                                                                        <li><a href=\"";
        // line 137
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/colleges\" class=\"\">Colleges</a></li>
                                                                                        <li><a href=\"";
        // line 138
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/cpd\" class=\"\">Center for Continuing and Professional Development</a></li>
                                                                                        <li><a href=\"";
        // line 139
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/research-extensions\" class=\"\">Research &amp; Extensions</a></li>
                                                                                    </ul></div>
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 142
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/faculty-profile\" class=\"\">Faculty Profile</a></li>
                                                                                        <li><a href=\"";
        // line 143
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/academic-calendar\" class=\"\">Academic Calendar</a></li>
                                                                                        <li><a href=\"";
        // line 144
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/opac\" class=\"\">UCU OPAC</a></li>
                                                                                        <li><a href=\"";
        // line 145
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/academics/library\" class=\"\">Libraries</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class=\"dropdown yamm-fw\">
                                                        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Campus Life <b class=\"caret\"></b></a>
                                                        <ul class=\"dropdown-menu\">
                                                           <li>
                                                                <div class=\"yamm-content\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-sm-7\">
                                                                            <div class=\"caption hidden-xs\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\">
                                                                                        <img src='";
        // line 165
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/campuslife_menu.jpg");
        echo "' alt=\"\">
                                                                                    </div>
                                                                                    <div class=\"col-sm-6\"><div class=\"description\"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque </p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-sm-5\">
                                                                            <div class=\"subnav\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 175
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/student-development\" aria-describedby=\"campus-life\" class=\"\">Student Development</a></li>
                                                                                        <li><a href=\"/campus-life/guidance-counseling\" class=\"\">Guidance and Counseling</a></li>
                                                                                        <li><a href=\"";
        // line 177
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/student-organizations\" class=\"\">Student Organizations</a></li>
                                                                                    </ul></div>
                                                                                    <div class=\"col-sm-6\"><ul class=\"list-unstyled\">
                                                                                        <li><a href=\"";
        // line 180
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/arts-culture\" class=\"\">Arts &amp; Culture</a></li>
                                                                                        <li><a href=\"";
        // line 181
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/civic-welfare\" class=\"\">Civil Welfare</a></li>
                                                                                        <li><a href=\"";
        // line 182
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/athletics\" class=\"\">Athletics</a></li>
                                                                                        <li><a href=\"";
        // line 183
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/campus-life/publications\" class=\"\">Publications</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>

                                            </ul>
                                            </nav><!-- /.primary-nav -->
                                            <div id=\"audience-nav\">
                                                <div class=\"\">
                                                    <h3 class=\"visible-xs\">More</h3>
                                                    <ul class=\"nav navbar-nav\">
                                                        <li><a href=\"";
        // line 200
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/students\">Students</a></li>
                                                        <li><a href=\"";
        // line 201
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/faculty\">Faculty &amp; Staff</a></li>
                                                        <li><a href=\"http://alumni.ucu.edu/\">Alumni</a></li>
                                                        <li><a href=\"http://my.ucu.edu/\">MyUCU</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div><!-- /.navbar-collapse -->
                                            </div><!-- /.container -->
                                        </div>
                                    </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 214
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 215
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 219
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 220
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 223
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js", 14 => "assets/javascript/bootstrap.js", 15 => "assets/javascript/modernizr.js", 16 => "assets/javascript/easing.js", 17 => "assets/javascript/move-top.js", 18 => "assets/javascript/main.js"));
        // line 242
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.dropdown-toggle').dropdown();
        });
   </script>
        ";
        // line 248
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 249
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 250
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 250,  409 => 249,  402 => 248,  394 => 242,  392 => 223,  387 => 220,  383 => 219,  377 => 215,  375 => 214,  359 => 201,  355 => 200,  335 => 183,  331 => 182,  327 => 181,  323 => 180,  317 => 177,  312 => 175,  299 => 165,  276 => 145,  272 => 144,  268 => 143,  264 => 142,  258 => 139,  254 => 138,  250 => 137,  246 => 136,  233 => 126,  210 => 106,  206 => 105,  200 => 102,  196 => 101,  192 => 100,  188 => 99,  175 => 89,  152 => 69,  148 => 68,  144 => 67,  140 => 66,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  109 => 50,  94 => 38,  79 => 26,  75 => 25,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
