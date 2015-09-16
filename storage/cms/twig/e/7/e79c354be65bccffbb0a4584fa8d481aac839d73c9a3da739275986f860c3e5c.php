<?php

/* C:\xampp\htdocs\ucu-xyz/themes/ucu/pages/about/seal-and-symbols.htm */
class __TwigTemplate_e79c354be65bccffbb0a4584fa8d481aac839d73c9a3da739275986f860c3e5c extends Twig_Template
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
        <div class=\"container\"><h1>Seal and Symbols</h1></div>
    </section>
    <div class=\"container\">
        <div class=\"inner\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <article>
                        <h2>The UCU Logo</h2>
                        <img alt=\"The UCU Logo\" src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ucu_seal.png");
        echo "\"  class=\"img-responsive center-block\">
                        
                        <p>Composed of an open book and a torch from which sunrays emanate, the University seal is a fitting embodiment of the strength and endurance that the institution has maintained since its inception in 1966 as the first community college in the country.</p>
                        <p>The book's yellow border signifies UCU's pledge to its students of providing transformative education, inculcating in them the golden ideals of character building. This is made manifest in the university's emphasis of valuing hard work, of perfecting one's chosen craft, of continuing one's quest for knowledge and wisdom, and of practicing one's service-orientedness.</p>
                        <p>Encased in this gilded edge, the open book echoes the founder's philosophy of ensuring that high quality education is equitable and accessible to people from all walks of life. The different gradations of blue and red represent the synergistic fusion of the efforts of various individuals—from the non-teaching staff, the faculty, and up to the administrators—who work for the continuous improvement of UCU.</p>
                        <p>The torch with its red flame symbolizes the students of the university who are passionately committed to enhancing and tapping their full potentials—in the academic field, in technical and skills training, and in cultural and social enrichment.</p>
                        <p>This intense zeal is further passed to the sun's golden rays, bursting out of the university's dedication to banish the cobwebs of ignorance through education. UCU believes that like gold which will never be tarnished with rust, quality education is a gift that the school will forever endow to humanity. Hence, the sun's rays move outwards, following the university's desire to reach out, as an institution and through its students, especially in promoting community development, nation-building, and global brotherhood.</p>

                        <h2>The Orata Monument</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro reiciendis qui, sint sequi dolores dolorum sed temporibus provident impedit, natus amet sit, nisi sunt deserunt vero iusto ipsa explicabo! Doloribus!</p>
                        
                    </article>
                </div>
               ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ucu-xyz/themes/ucu/pages/about/seal-and-symbols.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 25,  47 => 24,  31 => 11,  19 => 1,);
    }
}
