<?php

/* themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig */
class __TwigTemplate_bda1848893f06385116bac06e388552ef496fc73dfd357cd7b03fce99ede8627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'featured' => array($this, 'block_featured'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 74, "if" => 117);
        $filters = array("t" => 73);
        $functions = array("attach_library" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("eishtax_sass_subtheme/draggable"), "html", null, true));
        echo "
";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("eishtax_sass_subtheme/tweenmax"), "html", null, true));
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      ";
        // line 74
        $this->displayBlock('head', $context, $blocks);
        // line 116
        echo "    </header>
    ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 118
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </aside>
    </div>
    ";
        }
        // line 124
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 125
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 132
            echo "    ";
        }
        // line 133
        echo "    <div id=\"MainImage\">
      <aside class=\"container-fluid section clearfix\" role=\"complementary\">
        <img src=\"/sites/default/files/inline-images/tableMountain.jpg\" data-entity-type=\"file\" data-entity-uuid=\"8d37d686-ada6-4b49-9d9c-b416f5e71cba\" alt=\"EISHTAX and Accounting\" id=\"mainCoverimage\">
        <div id=\"mainCoverText\">
          <div id=\"topText\">
            <div class=\"heading\">
              Eish Tax and Accounting
            </div>
            <div class=\"subHeading\">
              Happiness is ... a tax refund
            </div>
          </div>
          <div id=\"botText\">
            <a href=\"\" class=\"coverButton\">
              Online Business registraion
            </a>
          </div>
        </div>
      </aside>
    </div>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 154
        $this->displayBlock('content', $context, $blocks);
        // line 181
        echo "    </div>
    ";
        // line 182
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 183
            echo "    <div class=\"featured-bottom\">
      <aside class=\"";
            // line 184
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " clearfix\" role=\"complementary\">
        ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
        ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
        ";
            // line 187
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
      </aside>
    </div>
    ";
        }
        // line 191
        echo "    <footer class=\"site-footer\">
      ";
        // line 192
        $this->displayBlock('footer', $context, $blocks);
        // line 211
        echo "    </footer>
  </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js\"></script>
<script type=\"text/javascript\">
jQuery(document).ready(function() {

    if (\$(window).width() > 752) {
      \$(\"#MainImage\").mousemove(function(e) {
        parallaxIt(e, \"#topText\", -150);
        parallaxIt(e, \"#mainCoverimage\", -30);
        parallaxIt(e, \"#botText\", -70);
      });

      function parallaxIt(e, target, movement) {
        var \$this = \$(\"#MainImage\");
        var relX = e.pageX - \$this.offset().left;
        var relY = e.pageY - \$this.offset().top;

        TweenMax.to(target, 1, {
          x: (relX - \$this.width() / 2) / \$this.width() * movement,
          y: (relY - \$this.height() / 2) / \$this.height() * movement
        });
      }

      // \$(\"#container-40x-pages\").mousemove(function(e) {
      //   parallaxItH(e, \".image-front\", -70);
      //   parallaxItVH(e, \".background-image\", -30);
      //   parallaxItVH(e, \".text\", -150);
      // });

      // function parallaxItVH(e, target, movement, page) {
      //   var \$this = \$(\"#container-40x-pages\");
      //   var relX = e.pageX - \$this.offset().left;
      //   var relY = e.pageY - \$this.offset().top;

      //   TweenMax.to(target, 1, {
      //     x: (relX - \$this.width() / 2) / \$this.width() * movement,
      //     y: (relY - \$this.height() / 2) / \$this.height() * movement
      //   });
      // }

      // function parallaxItH(e, target, movement, page) {
      //   var \$this = \$(\"#container-40x-pages\");
      //   var relX = e.pageX - \$this.offset().left;
      //   var relY = e.pageY - \$this.offset().top;

      //   TweenMax.to(target, 1, {
      //     x: (relX - \$this.width() / 2) / \$this.width() * movement,
      //     //y: (relY - \$this.height() / 2) / \$this.height() * movement
      //   });
      // }
    }
  });

</script>
";
    }

    // line 74
    public function block_head($context, array $blocks = array())
    {
        // line 75
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "top_header", array())) || $this->getAttribute(($context["page"] ?? null), "top_header_form", array()))) {
            // line 76
            echo "      <nav ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_top_attributes"] ?? null), "html", null, true));
            echo ">
        ";
            // line 77
            if (($context["container_navbar"] ?? null)) {
                // line 78
                echo "        <div class=\"container\">
          ";
            }
            // line 80
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
          ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
            echo "
          ";
            // line 82
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", array())) {
                // line 83
                echo "          <div class=\"form-inline navbar-form float-right\">
            ";
                // line 84
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_form", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 87
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 88
                echo "        </div>
        ";
            }
            // line 90
            echo "      </nav>
      ";
        }
        // line 92
        echo "      <nav ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo ">
        ";
        // line 93
        if (($context["container_navbar"] ?? null)) {
            // line 94
            echo "        <div class=\"container\">
          ";
        }
        // line 96
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          ";
        // line 97
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "header_form", array()))) {
            // line 98
            echo "          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
            ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
            ";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "header_form", array())) {
                // line 102
                echo "            <div class=\"form-inline navbar-form float-right\">
              ";
                // line 103
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_form", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 106
            echo "          </div>
          ";
        }
        // line 108
        echo "          ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 109
            echo "          <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
          ";
        }
        // line 111
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "      </nav>
      ";
    }

    // line 125
    public function block_featured($context, array $blocks = array())
    {
        // line 126
        echo "    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " clearfix\" role=\"complementary\">
        ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
      </aside>
    </div>
    ";
    }

    // line 154
    public function block_content($context, array $blocks = array())
    {
        // line 155
        echo "      <div id=\"main\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 156
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          <main ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 161
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </section>
          </main>
          ";
        // line 164
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 165
            echo "          <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true));
            echo ">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 167
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
          ";
        }
        // line 171
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 172
            echo "          <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true));
            echo ">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
          </div>
          ";
        }
        // line 178
        echo "        </div>
      </div>
      ";
    }

    // line 192
    public function block_footer($context, array $blocks = array())
    {
        // line 193
        echo "      <div class=\"container-fluid\">
        ";
        // line 194
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 195
            echo "        <div class=\"site-footer__top clearfix\">
          ";
            // line 196
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
          ";
            // line 197
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
          ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
          ";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 202
        echo "      </div>
      <div class=\"";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 204
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 205
            echo "        <div class=\"site-footer__bottom\">
          ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 209
        echo "      </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 209,  440 => 206,  437 => 205,  435 => 204,  431 => 203,  428 => 202,  422 => 199,  418 => 198,  414 => 197,  410 => 196,  407 => 195,  405 => 194,  402 => 193,  399 => 192,  393 => 178,  386 => 174,  380 => 172,  377 => 171,  370 => 167,  364 => 165,  362 => 164,  356 => 161,  350 => 158,  345 => 156,  340 => 155,  337 => 154,  329 => 128,  325 => 127,  322 => 126,  319 => 125,  314 => 114,  310 => 112,  307 => 111,  303 => 109,  300 => 108,  296 => 106,  290 => 103,  287 => 102,  285 => 101,  281 => 100,  277 => 98,  275 => 97,  270 => 96,  266 => 94,  264 => 93,  259 => 92,  255 => 90,  251 => 88,  248 => 87,  242 => 84,  239 => 83,  237 => 82,  233 => 81,  228 => 80,  224 => 78,  222 => 77,  217 => 76,  214 => 75,  211 => 74,  148 => 211,  146 => 192,  143 => 191,  136 => 187,  132 => 186,  128 => 185,  124 => 184,  121 => 183,  119 => 182,  116 => 181,  114 => 154,  91 => 133,  88 => 132,  85 => 125,  82 => 124,  75 => 120,  71 => 119,  68 => 118,  66 => 117,  63 => 116,  61 => 74,  57 => 73,  51 => 70,  47 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
* @file
* Bootstrap Barrio's theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template normally located in the
* core/modules/system directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
* - logo: The url of the logo image, as defined in theme settings.
* - site_name: The name of the site. This is empty when displaying the site
* name has been disabled in the theme settings.
* - site_slogan: The slogan of the site. This is empty when displaying the site
* slogan has been disabled in theme settings.
* Page content (in order of occurrence in the default page.html.twig):
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.top_header: Items for the top header region.
* - page.top_header_form: Items for the top header form region.
* - page.header: Items for the header region.
* - page.header_form: Items for the header form region.
* - page.highlighted: Items for the highlighted region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.featured_top: Items for the featured top region.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.featured_bottom_first: Items for the first featured bottom region.
* - page.featured_bottom_second: Items for the second featured bottom region.
* - page.featured_bottom_third: Items for the third featured bottom region.
* - page.footer_first: Items for the first footer column.
* - page.footer_second: Items for the second footer column.
* - page.footer_third: Items for the third footer column.
* - page.footer_fourth: Items for the fourth footer column.
* - page.footer_fifth: Items for the fifth footer column.
* - page.breadcrumb: Items for the breadcrumb region.
*
* Theme variables:
* - navbar_top_attributes: Items for the header region.
* - navbar_attributes: Items for the header region.
* - content_attributes: Items for the header region.
* - sidebar_first_attributes: Items for the highlighted region.
* - sidebar_second_attributes: Items for the primary menu region.
* - sidebar_collapse: If the sidebar_first will collapse.
*
* @see template_preprocess_page()
* @see bootstrap_barrio_preprocess_page()
* @see html.html.twig
*/
#}
{{ attach_library('eishtax_sass_subtheme/draggable') }}
{{ attach_library('eishtax_sass_subtheme/tweenmax') }}
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
      {% block head %}
      {% if page.secondary_menu or page.top_header or page.top_header_form %}
      <nav {{ navbar_top_attributes }}>
        {% if container_navbar %}
        <div class=\"container\">
          {% endif %}
          {{ page.secondary_menu }}
          {{ page.top_header }}
          {% if page.top_header_form %}
          <div class=\"form-inline navbar-form float-right\">
            {{ page.top_header_form }}
          </div>
          {% endif %}
          {% if container_navbar %}
        </div>
        {% endif %}
      </nav>
      {% endif %}
      <nav {{ navbar_attributes }}>
        {% if container_navbar %}
        <div class=\"container\">
          {% endif %}
          {{ page.header }}
          {% if page.primary_menu or page.header_form %}
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
            {{ page.primary_menu }}
            {% if page.header_form %}
            <div class=\"form-inline navbar-form float-right\">
              {{ page.header_form }}
            </div>
            {% endif %}
          </div>
          {% endif %}
          {% if sidebar_collapse %}
          <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
          {% endif %}
          {% if container_navbar %}
        </div>
        {% endif %}
      </nav>
      {% endblock %}
    </header>
    {% if page.highlighted %}
    <div class=\"highlighted\">
      <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
        {{ page.highlighted }}
      </aside>
    </div>
    {% endif %}
    {% if page.featured_top %}
    {% block featured %}
    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
        {{ page.featured_top }}
      </aside>
    </div>
    {% endblock %}
    {% endif %}
    <div id=\"MainImage\">
      <aside class=\"container-fluid section clearfix\" role=\"complementary\">
        <img src=\"/sites/default/files/inline-images/tableMountain.jpg\" data-entity-type=\"file\" data-entity-uuid=\"8d37d686-ada6-4b49-9d9c-b416f5e71cba\" alt=\"EISHTAX and Accounting\" id=\"mainCoverimage\">
        <div id=\"mainCoverText\">
          <div id=\"topText\">
            <div class=\"heading\">
              Eish Tax and Accounting
            </div>
            <div class=\"subHeading\">
              Happiness is ... a tax refund
            </div>
          </div>
          <div id=\"botText\">
            <a href=\"\" class=\"coverButton\">
              Online Business registraion
            </a>
          </div>
        </div>
      </aside>
    </div>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      {% block content %}
      <div id=\"main\" class=\"{{ container }}\">
        {{ page.breadcrumb }}
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          <main {{ content_attributes }}>
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              {{ page.content }}
            </section>
          </main>
          {% if page.sidebar_first %}
          <div {{ sidebar_first_attributes }}>
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
          {% endif %}
          {% if page.sidebar_second %}
          <div {{ sidebar_second_attributes }}>
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
          {% endif %}
        </div>
      </div>
      {% endblock %}
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
    <div class=\"featured-bottom\">
      <aside class=\"{{ container }} clearfix\" role=\"complementary\">
        {{ page.featured_bottom_first }}
        {{ page.featured_bottom_second }}
        {{ page.featured_bottom_third }}
      </aside>
    </div>
    {% endif %}
    <footer class=\"site-footer\">
      {% block footer %}
      <div class=\"container-fluid\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
        <div class=\"site-footer__top clearfix\">
          {{ page.footer_first }}
          {{ page.footer_second }}
          {{ page.footer_third }}
          {{ page.footer_fourth }}
        </div>
        {% endif %}
      </div>
      <div class=\"{{ container }}\">
        {% if page.footer_fifth %}
        <div class=\"site-footer__bottom\">
          {{ page.footer_fifth }}
        </div>
        {% endif %}
      </div>
      {% endblock %}
    </footer>
  </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js\"></script>
<script type=\"text/javascript\">
jQuery(document).ready(function() {

    if (\$(window).width() > 752) {
      \$(\"#MainImage\").mousemove(function(e) {
        parallaxIt(e, \"#topText\", -150);
        parallaxIt(e, \"#mainCoverimage\", -30);
        parallaxIt(e, \"#botText\", -70);
      });

      function parallaxIt(e, target, movement) {
        var \$this = \$(\"#MainImage\");
        var relX = e.pageX - \$this.offset().left;
        var relY = e.pageY - \$this.offset().top;

        TweenMax.to(target, 1, {
          x: (relX - \$this.width() / 2) / \$this.width() * movement,
          y: (relY - \$this.height() / 2) / \$this.height() * movement
        });
      }

      // \$(\"#container-40x-pages\").mousemove(function(e) {
      //   parallaxItH(e, \".image-front\", -70);
      //   parallaxItVH(e, \".background-image\", -30);
      //   parallaxItVH(e, \".text\", -150);
      // });

      // function parallaxItVH(e, target, movement, page) {
      //   var \$this = \$(\"#container-40x-pages\");
      //   var relX = e.pageX - \$this.offset().left;
      //   var relY = e.pageY - \$this.offset().top;

      //   TweenMax.to(target, 1, {
      //     x: (relX - \$this.width() / 2) / \$this.width() * movement,
      //     y: (relY - \$this.height() / 2) / \$this.height() * movement
      //   });
      // }

      // function parallaxItH(e, target, movement, page) {
      //   var \$this = \$(\"#container-40x-pages\");
      //   var relX = e.pageX - \$this.offset().left;
      //   var relY = e.pageY - \$this.offset().top;

      //   TweenMax.to(target, 1, {
      //     x: (relX - \$this.width() / 2) / \$this.width() * movement,
      //     //y: (relY - \$this.height() / 2) / \$this.height() * movement
      //   });
      // }
    }
  });

</script>
", "themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig", "/var/www/EishTax/web/themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig");
    }
}
