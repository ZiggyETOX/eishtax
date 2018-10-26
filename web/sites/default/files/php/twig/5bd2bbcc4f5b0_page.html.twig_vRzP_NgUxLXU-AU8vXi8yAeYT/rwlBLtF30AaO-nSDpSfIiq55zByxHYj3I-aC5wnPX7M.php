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
        $tags = array("block" => 72, "if" => 115);
        $filters = array("t" => 71);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array()
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
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 114
        echo "    </header>
    ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 116
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 117
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </aside>
    </div>
    ";
        }
        // line 122
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 123
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 130
            echo "    ";
        }
        // line 131
        echo "    
    <div class=\"MainImage\">
      <aside class=\"container-fluid section clearfix\" role=\"complementary\">
        <img src=\"/sites/default/files/2018-10/slide2_1840_821.4.jpeg\" alt=\"EISHTAX and Accounting\" id=\"mainCoverimage\">
        </aside>
    </div>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 165
        echo "    </div>
    ";
        // line 166
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 167
            echo "    <div class=\"featured-bottom\">
      <aside class=\"";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " clearfix\" role=\"complementary\">
        ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
        ";
            // line 170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
        ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
      </aside>
    </div>
    ";
        }
        // line 175
        echo "    <footer class=\"site-footer\">
      ";
        // line 176
        $this->displayBlock('footer', $context, $blocks);
        // line 193
        echo "    </footer>
  </div>
</div>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "top_header", array())) || $this->getAttribute(($context["page"] ?? null), "top_header_form", array()))) {
            // line 74
            echo "      <nav ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_top_attributes"] ?? null), "html", null, true));
            echo ">
        ";
            // line 75
            if (($context["container_navbar"] ?? null)) {
                // line 76
                echo "        <div class=\"container\">
          ";
            }
            // line 78
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
          ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
            echo "
          ";
            // line 80
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", array())) {
                // line 81
                echo "          <div class=\"form-inline navbar-form float-right\">
            ";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_form", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 85
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 86
                echo "        </div>
        ";
            }
            // line 88
            echo "      </nav>
      ";
        }
        // line 90
        echo "      <nav ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo ">
        ";
        // line 91
        if (($context["container_navbar"] ?? null)) {
            // line 92
            echo "        <div class=\"container\">
          ";
        }
        // line 94
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          ";
        // line 95
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "header_form", array()))) {
            // line 96
            echo "          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
            ";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
            ";
            // line 99
            if ($this->getAttribute(($context["page"] ?? null), "header_form", array())) {
                // line 100
                echo "            <div class=\"form-inline navbar-form float-right\">
              ";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_form", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 104
            echo "          </div>
          ";
        }
        // line 106
        echo "          ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 107
            echo "          <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
          ";
        }
        // line 109
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 110
            echo "        </div>
        ";
        }
        // line 112
        echo "      </nav>
      ";
    }

    // line 123
    public function block_featured($context, array $blocks = array())
    {
        // line 124
        echo "    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " clearfix\" role=\"complementary\">
        ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
      </aside>
    </div>
    ";
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
        // line 139
        echo "      <div id=\"main\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          <main ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 145
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </section>
          </main>
          ";
        // line 148
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 149
            echo "          <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true));
            echo ">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
          ";
        }
        // line 155
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 156
            echo "          <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true));
            echo ">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 158
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
          </div>
          ";
        }
        // line 162
        echo "        </div>
      </div>
      ";
    }

    // line 176
    public function block_footer($context, array $blocks = array())
    {
        // line 177
        echo "      <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 178
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 179
            echo "        <div class=\"site-footer__top clearfix\">
          ";
            // line 180
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
          ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
          ";
            // line 182
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
          ";
            // line 183
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 186
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 187
            echo "        <div class=\"site-footer__bottom\">
          ";
            // line 188
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 191
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
        return array (  366 => 191,  360 => 188,  357 => 187,  354 => 186,  348 => 183,  344 => 182,  340 => 181,  336 => 180,  333 => 179,  331 => 178,  326 => 177,  323 => 176,  317 => 162,  310 => 158,  304 => 156,  301 => 155,  294 => 151,  288 => 149,  286 => 148,  280 => 145,  274 => 142,  269 => 140,  264 => 139,  261 => 138,  253 => 126,  249 => 125,  246 => 124,  243 => 123,  238 => 112,  234 => 110,  231 => 109,  227 => 107,  224 => 106,  220 => 104,  214 => 101,  211 => 100,  209 => 99,  205 => 98,  201 => 96,  199 => 95,  194 => 94,  190 => 92,  188 => 91,  183 => 90,  179 => 88,  175 => 86,  172 => 85,  166 => 82,  163 => 81,  161 => 80,  157 => 79,  152 => 78,  148 => 76,  146 => 75,  141 => 74,  138 => 73,  135 => 72,  128 => 193,  126 => 176,  123 => 175,  116 => 171,  112 => 170,  108 => 169,  104 => 168,  101 => 167,  99 => 166,  96 => 165,  94 => 138,  85 => 131,  82 => 130,  79 => 123,  76 => 122,  69 => 118,  65 => 117,  62 => 116,  60 => 115,  57 => 114,  55 => 72,  51 => 71,  47 => 69,);
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
    
    <div class=\"MainImage\">
      <aside class=\"container-fluid section clearfix\" role=\"complementary\">
        <img src=\"/sites/default/files/2018-10/slide2_1840_821.4.jpeg\" alt=\"EISHTAX and Accounting\" id=\"mainCoverimage\">
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
      <div class=\"{{ container }}\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
        <div class=\"site-footer__top clearfix\">
          {{ page.footer_first }}
          {{ page.footer_second }}
          {{ page.footer_third }}
          {{ page.footer_fourth }}
        </div>
        {% endif %}
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
", "themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig", "/var/www/EishTax/web/themes/custom/eishtax_sass_subtheme/templates/layout/page.html.twig");
    }
}
