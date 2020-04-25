<?php

/* themes/SEPI/templates/region--header.html.twig */
class __TwigTemplate_89b13e8dffa9debf34da7acb62a721030c6fb6c69bc6d2878c94639e651b6881 extends Twig_Template
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
        $tags = array("trans" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
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

        // line 1
        echo "<div class=\"row\">
  <nav class=\"navbar navbar-default\">
    <div class=\"menu-desktop hidden-xs\">
      <h1 style=\"display:none;\" aria-hidden=\"true\">";
        // line 4
        echo t("Idiomas y enlaces superiores", array());
        echo "</h1>
      <div class=\"first-row\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"menu-idiomas col-sm-4 col-md-3\">
\t\t\t\t\t\t  <ul class=\"nav navbar-nav navbar-left idiomas\"  role=\"menubar\">
  \t\t\t\t\t\t\t<li role=\"menuitem\" class=\"\" title=\"Bienvenidos\"><a href=\"/es";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">ES</a></li>
  \t\t\t\t\t\t\t<li role=\"menuitem\" class=\"\" title=\"Benvinguts\"><a href=\"/ca";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">CA</a></li>
  \t\t\t\t\t\t\t<li role=\"menuitem\" class=\"\" title=\"Ongi etorri\"><a href=\"/eu";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">EU</a></li>
  \t\t\t\t\t\t\t<li role=\"menuitem\" class=\"\" title=\"Benvidos\"><a href=\"/gl";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">GL</a></li>
                <li role=\"menuitem\" class=\"\" title=\"Benvinguts\"><a href=\"/va";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">VA</a></li>
  \t\t\t\t\t\t\t<li role=\"menuitem\" class=\"\" title=\"Welcome\"><a href=\"/en";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\" class=\"language_menu_link\">EN</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
            <div class=\"menu-otros col-sm-offset-2 col-md-offset-3 col-sm-6\">
\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "enlacessuperiores", array()), "html", null, true));
        echo "
              ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "enlacessuperioresingles", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
          </div>
        </div>
      </div>

      <header class=\"second-row\">
        <div class=\"container\">
          <div class=\"row\">
            <h1 style=\"display:none;\" aria-hidden=\"true\"> ";
        // line 29
        echo t("Sociedad Estatal de Participaciones estatales", array());
        echo "</h1>
              <a class=\"navbar-brand navbar-left\"  href=\"/";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["idioma"] ?? null), "html", null, true));
        echo "\">
                <img src=\"/sites/default/files/2017-08/header_logo_0.png\" alt=\"";
        // line 31
        echo t("Sociedad Estatal de Participaciones Industriales", array());
        echo "\" class=\"\">
              </a>
              <a class=\"pull-right link-ministerio\" href=\"http://www.minhafp.gob.es/es-ES/Paginas/Home.aspx\" target=\"_blank\">
                <img src=\"/sites/default/files/2017-08/header_logo_ministerio.png\" alt=\"";
        // line 34
        echo t("Logo Ministerio", array());
        echo "\" class=\"\">
              </a>
           </div>
         </div>
      </header>

      <div class=\"third-row col-sm-12\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"menu-principal  col-sm-12 col-md-8\">
              ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "menuprincipal", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-4 col-sm-12\">
              ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "sepi_search", array()), "html", null, true));
        echo "
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class=\"container-fluid visible-xs\" aria-hidden=\"true\">
      <div class=\"row\">
        <div class=\"menu-mobil \">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"modal\" data-target=\"#submenu-sepi\" aria-expanded=\"false\">
                <span class=\"hidden\" aria-hidden=\"true\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <h1 class=\"hidden\" aria-hidden=\"true\">";
        // line 66
        echo t("Sociedad Estatal de Participaciones estatales", array());
        echo "</h1>
            <a class=\"navbar-brand\" href=\"/\">
              <img src=\"/sites/default/files/2017-08/header_logo_0.png\" alt=\"";
        // line 68
        echo t("Sociedad Estatal de Participaciones Industriales", array());
        echo "\" class=\"\">
            </a>
          </div>

          <div class=\"modal fade\" id=\"submenu-sepi\">
            <div class=\"modal-dialog\" role=\"document\" tabindex=\"-1\" >
              <div class=\"modal-nav-content\">

                <div class=\"modal-nav-body\">
                  <div class=\"boton-cerrar col-xs-12\">
                    <button type=\"button\" class=\"close pull-left\" data-dismiss=\"modal\"><span>&times;</span></button>
                  </div>
                </div>

                <form action=\"/general/busqueda\" method=\"get\" id=\"search_block_form_mobile\" class=\"navbar-form buscador-mobile-lupa col-xs-12 pull-right\" role=\"search\">
                  <div class=\"input-group custom-input-group\">
                    <label class=\"hidden\" aria-hidden=\"true\" for=\"form_id\">Hidden Form id</label><input type=\"hidden\" name=\"form_id\" id=\"edit-search-theme-form-mobile\" value=\"search_form\"/>
                    <label class=\"hidden\" aria-hidden=\"true\" for=\"f[0]\">Hidden términos</label><input type=\"hidden\" name=\"f[0]\" id=\"edit-search-theme-form-mobile-2\" value=\"language:";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["idioma"] ?? null), "html", null, true));
        echo "\"/>
                    <label class=\"hidden\" aria-hidden=\"true\" for=\"edit-keys-mobile\">Hidden keys</label><input data-drupal-selector=\"edit-keys-mobile\" title=\"\" type=\"text\" id=\"edit-keys-mobile\" name=\"keys\" class=\"form-control\" placeholder=\"";
        // line 86
        echo t("Buscar...", array());
        echo "\">
                    <span class=\"input-group-addon\">
                      <button type=\"submit\" class=\"boton-buscar-lupa\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                      </button>
                    </span>
                  </div>
                </form>

                <div class=\"menu-principal col-xs-12\">
                  ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "menuprincipalmobile", array()), "html", null, true));
        echo "
                </div>

                <div class=\"menu-otros  col-xs-12 \">
                  ";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "enlacessuperioresmobile", array()), "html", null, true));
        echo "
                  ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "enlacessuperioresinglesmobile", array()), "html", null, true));
        echo "
                </div>

                <div class=\"menu-idiomas col-xs-12\">
                  <ul class=\"nav navbar-nav navbar-left idiomas\"  role=\"menubar\">
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/es";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">ES</a></li>
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/ca";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">CA</a></li>
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/eu";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">EU</a></li>
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/gl";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">GL</a></li>
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/va";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">VA</a></li>
                  <li role=\"menuitem\" class=\"col-xs-2\"><a class=\"language_menu_link\" href=\"/en";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["curr_path"] ?? null), "html", null, true));
        echo "\">EN</a></li>
                  </ul>
                </div>

                <div class=\"logo-ministerio \">
                   <a class=\"\" href=\"http://www.minhafp.gob.es/en-GB/Paginas/Home.aspx\" target=\"_blank\">
                     <img src=\"/sites/default/files/2017-08/header_logo_ministerio.png\" alt=\"";
        // line 117
        echo t("Logo Ministerio", array());
        echo "\" class=\"\">
                   </a>
                 </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 117,  236 => 111,  232 => 110,  228 => 109,  224 => 108,  220 => 107,  216 => 106,  208 => 101,  204 => 100,  197 => 96,  184 => 86,  180 => 85,  160 => 68,  155 => 66,  133 => 47,  127 => 44,  114 => 34,  108 => 31,  104 => 30,  100 => 29,  88 => 20,  84 => 19,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/region--header.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/region--header.html.twig");
    }
}
