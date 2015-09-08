<?php

/* C:\xampp\htdocs\admin_ucu/themes/ucu/pages/about/campus-map.htm */
class __TwigTemplate_c1dc3381e85bbb531454fcc663d421cddccea652fd6d2da63f6f4b5560f4fbce extends Twig_Template
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
                    <h3>Main Campus</h3>
                    <div class=\"pancontainer\" data-orient=\"center\" data-canzoom=\"yes\" style=\"position: relative; overflow: hidden; cursor: move;\">
                        <img alt=\"Main Campus\" src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ucu_map.png");
        echo "\" class=\"image-responsive\">
                    <div style=\"position: absolute; color: white; padding: 2px 10px; font-size: 12px; left: 0px; top: 0px; display: none; visibility: visible; background: rgb(53, 53, 53);\">1x Magnify</div><img src=\"/resources/js/images/zoomin.png\" title=\"Zoom In\" style=\"width: 64px; height: 64px; cursor: pointer; position: absolute; top: 5px; right: 61px; opacity: 1;\"><img src=\"/resources/js/images/zoomout.png\" title=\"Zoom Out\" style=\"width: 64px; height: 64px; cursor: pointer; position: absolute; top: 5px; right: 0px; opacity: 0.1;\"></div>
<!-- 
                     <h3>Vicinity Map</h3>
                 -->
                    </article>
                </div>
                <div class=\"col-sm-4\">
                        <div id=\"sidebar\">
                            <!-- Sidebar -->
                            <section>
                                <h2>Contents</h2>
                                <ul class=\"sidebar-list\">
                                    <li><a href=\"history\">History</a></li>
                                    <li><a href=\"vmgo\">Vision and Mission</a></li>
                                    <li><a href=\"administration\">Administration</a></li>
                                    <li><a href=\"hymn\">UCU Hymn</a></li>
                                    <li><a href=\"highlights\">UCU Highlights</a></li>
                                    <li><a href=\"maps\">Campus Map</a></li>
                                    <li><a href=\"seal\">UCU Seal and Symbols</a></li>
                                    <li><a href=\"contact-us\">Contact Us</a></li>
                                </ul>
                            </section>
                        </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\admin_ucu/themes/ucu/pages/about/campus-map.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
