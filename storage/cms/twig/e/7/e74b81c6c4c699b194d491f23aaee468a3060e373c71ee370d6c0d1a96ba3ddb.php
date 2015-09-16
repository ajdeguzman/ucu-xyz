<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/about/campus-map.htm */
class __TwigTemplate_e74b81c6c4c699b194d491f23aaee468a3060e373c71ee370d6c0d1a96ba3ddb extends Twig_Template
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
        <div class=\"container\"><h1>Campus Map</h1></div>
    </section>
    <div class=\"container\">
        <div class=\"inner\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                   <article>
                    <h2>Main Campus</h2>
                    <div class=\"pancontainer\" data-orient=\"center\" data-canzoom=\"yes\" style=\"position: relative; overflow: hidden; cursor: move;\">
                        <img alt=\"Main Campus\" src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ucu_map.png");
        echo "\" class=\"image-responsive\">
                    <div style=\"position: absolute; color: white; padding: 2px 10px; font-size: 12px; left: 0px; top: 0px; display: none; visibility: visible; background: rgb(53, 53, 53);\">1x Magnify</div></div>
 
                     <h2>Vicinity Map</h2>
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.6335119334967!2d120.560681!3d15.980504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913fa5536d48f9%3A0x39b7e2667a1e5088!2sUrdaneta+City+University!5e0!3m2!1sen!2sph!4v1441864239511\" width=\"800\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                    </article>
                </div>
                ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/about/campus-map.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  42 => 19,  32 => 12,  19 => 1,);
    }
}
