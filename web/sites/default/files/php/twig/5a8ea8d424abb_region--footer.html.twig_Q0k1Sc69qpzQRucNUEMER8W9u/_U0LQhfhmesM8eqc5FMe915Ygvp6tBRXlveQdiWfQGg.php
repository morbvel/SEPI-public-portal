<?php

/* themes/SEPI/templates/region--footer.html.twig */
class __TwigTemplate_c0a8eb14e6b34e77bd69a50a1fbc7bd4badae4c40ae42ed8ff0d374574797a19 extends Twig_Template
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
        $tags = array("trans" => 19, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if'),
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
        echo "  <footer class=\"module-footer\">
    <div class=\"row\">
      <div class=\"footer\" id=\"footer\">
        <div class=\"container\">
          <div class=\"footer-newsletter  col-xs-12 col-md-5 pull-right-md\">
            ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "newslettersepiformblock", array()), "html", null, true));
        echo "
          </div>

          <div class=\"footer-links col-xs-12 col-md-7 pull-left\">
            <div class=\"row\">
              ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["elements"] ?? null), "piedepagina", array()), "html", null, true));
        echo "
            </div>
          </div>

          <div class=\"footer-logos col-md-7 pull-left\">
            <div class=\"row\">
              <div class=\"center-content-vertical\">
                <a href=\"http://transparencia.gob.es/\" target=\"_blank\" class=\"col-xs-6 col-sm-2\">
  \t\t\t\t\t\t\t\t<img src=\"/sites/default/files/2017-08/footer-logo-1.png\" alt=\"";
        // line 19
        echo t("Portal de la transparencia", array());
        echo "\">
  \t\t\t\t\t\t\t</a>
                <a href=\"http://administracion.gob.es/pag_Home/index.html#.VNC1Ptocbct\" target=\"_blank\" class=\"col-xs-6 col-sm-2\">
  \t\t\t\t\t\t\t\t<img src=\"/sites/default/files/2017-08/footer-logo-2.gif\" alt=\"";
        // line 22
        echo t("Administración, punto de acceso general", array());
        echo "\">
  \t\t\t\t\t\t\t</a>
                ";
        // line 24
        if ((($context["idioma"] ?? null) != "en")) {
            // line 25
            echo "                  <a href=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["idioma"] ?? null), "html", null, true));
            echo "/datos_abiertos\"  class=\"col-xs-6 col-sm-2 datos-abiertos\">
    \t\t\t\t\t\t\t\t<img src=\"/sites/default/files/2017-11/p_logo_escalagrises_0.png\" alt=\"";
            // line 26
            echo t("Datos abiertos", array());
            echo "\" style=\"width: 100px;\">
    \t\t\t\t\t\t\t</a>
                ";
        }
        // line 29
        echo "              </div>
            </div>
          </div>

        </div>
      </div>

      <div class=\"copyright\" id=\"copyright\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"copyright-text text-center\">
              <p>";
        // line 40
        echo t("© SEPI - Sociedad Estatal de participaciones industriales. Todos los derechos reservados.", array());
        echo "</p>
              <img src=\"/sites/default/files/2017-08/header_logo_ministerio.png\" class=\"visible-xs logo-gobierno-footer\" alt=\"";
        // line 41
        echo t("Sociedad Estatal de participaciones industriales", array());
        echo "\" />
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  106 => 40,  93 => 29,  87 => 26,  82 => 25,  80 => 24,  75 => 22,  69 => 19,  58 => 11,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/region--footer.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/region--footer.html.twig");
    }
}
