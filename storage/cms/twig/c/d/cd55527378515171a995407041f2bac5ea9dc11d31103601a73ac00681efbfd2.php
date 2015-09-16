<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/about/contact-us.htm */
class __TwigTemplate_cd55527378515171a995407041f2bac5ea9dc11d31103601a73ac00681efbfd2 extends Twig_Template
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
        <div class=\"container\"><h1>Contact Us</h1></div>
    </section>
    <div class=\"container\">
        <div class=\"inner\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <p class=\"lead\">The UCU public website is maintained by the College of Computer Studies Solutions. We strive to keep the content on this site accurate and accessible.
                    </p>
                    <div class=\"basic_content\"><p>If you have questions or comments regarding the content, design, or accessibility of this website, please contact us:</p>
                    <p>  Email: <a href=\"mailto:info@ucu.edu.ph\">info@ucu.edu.ph</a></p></div>
                </div>
                ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "            </div>
        </div>
        <section class=\"page-width\">
        </section>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/about/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 14,  19 => 1,);
    }
}
