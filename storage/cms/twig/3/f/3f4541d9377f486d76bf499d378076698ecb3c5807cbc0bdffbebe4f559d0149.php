<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/admissions/scholarship-grants.htm */
class __TwigTemplate_3f4541d9377f486d76bf499d378076698ecb3c5807cbc0bdffbebe4f559d0149 extends Twig_Template
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
        <div class=\"container\"><h1>Scholarships</h1></div>
    </section>
    <div class=\"container\">
        <div class=\"inner\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"content skel-cell-important\">
                      
                    </div>
                </div>
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-admission"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/admissions/scholarship-grants.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  33 => 13,  19 => 1,);
    }
}
