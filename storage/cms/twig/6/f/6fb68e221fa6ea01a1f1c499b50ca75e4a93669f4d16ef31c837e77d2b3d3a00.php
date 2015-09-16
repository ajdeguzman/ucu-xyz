<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/about/university-hymn.htm */
class __TwigTemplate_6fb68e221fa6ea01a1f1c499b50ca75e4a93669f4d16ef31c837e77d2b3d3a00 extends Twig_Template
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
        echo "<div id=\"content\" role=\"main\">
    <section class=\"page-header\">
        <div class=\"container\"><h1>UCU Hymn</h1></div>
    </section>
    <div class=\"container\">
        <div class=\"inner\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"content skel-cell-important\">
                        <article>
                            <h2>UCU Hymn</h2>
                            <p>Dr. William Hollis</p>
                            <p>
                                <p>Let's praise our dear alma mater</p>
                                <p>With Gratefulness and sincerity</p>
                                <p>Urdaneta City University</p>
                                <p>Shine brightly in the sky</p>
                                <p>We give to you our loyalty</p>
                                <p>We will support and stand by you</p>
                                <p>Your noble cause will be remembered</p>
                                <p>We will carry on forever more!</p>
                                <p>Your light will always shine</p>
                                <p>In our hearts</p>
                                <p>Your legacy we will sing</p>
                                <p>We will proclaim your mission and vision</p>
                                <p>To our city you are a blessing</p>
                                <p>Coda:</p>
                                <p>UCU, we dedicate to you</p>
                                <p>Our commitment for we love you!</p>
                            </p>
                        </article>

                    </div>
                </div>
                ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/about/university-hymn.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 36,  55 => 35,  19 => 1,);
    }
}
