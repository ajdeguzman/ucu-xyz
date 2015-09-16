<?php

/* C:\xampp\htdocs\ucu-xyz/themes/haha/partials/footer.htm */
class __TwigTemplate_978c3227682e99f2c0f1186c8f071ac2bc2331cfb1392d00a556d3ee36d1d5f8 extends Twig_Template
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
        echo "<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </div>
</footer>

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->

<script src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "@jquery", 1 => "assets/javascript/bootstrap.min.js", 2 => "assets/javascript/clean-blog.min.js"));
        // line 46
        echo "\"></script>

";
        // line 48
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 49
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/haha/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 49,  69 => 48,  65 => 46,  63 => 43,  19 => 1,);
    }
}
