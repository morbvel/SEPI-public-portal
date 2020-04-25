<?php

/* themes/SEPI/templates/views-view-fields--noticias-destacadas.html.twig */
class __TwigTemplate_ddbab8c979493eeaa36990386170a55be8ad39a1fb4175d321fd81d88a2f9c40 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 3, "trans" => 16);
        $filters = array("replace" => 1, "date" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('replace', 'date'),
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
        $context["contador"] = twig_replace_filter($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "counter", array()), "content", array()), array(" " => ""));
        // line 2
        echo "
";
        // line 3
        if ((($context["contador"] ?? null) == 1)) {
            // line 4
            echo "  <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "path", array()), "content", array()), "html", null, true));
            echo "\" title=\"\" class=\"news new-big col-xs-12 col-md-6 col-sm-4 col \">
    ";
            // line 5
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva", array()), "content", array()))) {
                // line 6
                echo "    <div class=\"image-resizer image-background zoom\">
      <div class=\"degradado\">

      </div>
      <img src=\"";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva", array()), "content", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva_1", array()), "content", array()), "html", null, true));
                echo "\" style=\"z-index: -1\">
    </div>
    ";
            }
            // line 13
            echo "    <div class=\"image-text \">
      <h3 class=\"new-headline\">";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
            echo "</h3>
      ";
            // line 15
            if ((($context["idioma"] ?? null) != "en")) {
                // line 16
                echo "        <p class=\"new-date\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "d"), "html", null, true));
                echo " ";
                echo t("DE", array());
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "F"), array("January" => "Enero", "February" => "Febrero", "March" => "Marzo", "April" => "Abril", "May" => "Mayo", "June" => "Junio", "July" => "Julio", "August" => "Agosto", "September" => "Septiembre", "October" => "Octubre", "November" => "Noviembre", "December" => "Diciembre")), "html", null, true));
                // line 29
                echo " ";
                echo t("DE", array());
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "Y"), "html", null, true));
                echo "</p>
      ";
            } else {
                // line 31
                echo "        <p class=\"new-date\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "d"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "F"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "Y"), "html", null, true));
                echo "</p>
      ";
            }
            // line 33
            echo "    </div>
  </a>

";
        } else {
            // line 37
            echo "  <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "path", array()), "content", array()), "html", null, true));
            echo "\" title=\"\" class=\"new new-little col-xs-12 col-md-3 col-sm-4 col noticia_sin_url\">
    ";
            // line 38
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva", array()), "content", array()))) {
                // line 39
                echo "    <div class=\"image-resizer zoom\">
      <img src=\"";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva", array()), "content", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_distributiva_1", array()), "content", array()), "html", null, true));
                echo "\">
    </div>
    ";
            }
            // line 43
            echo "    <h3 class=\"new-headline titulo-noticia-destacada\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
            echo "</h3>
\t";
            // line 44
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_resumen", array()), "content", array()))) {
                // line 45
                echo "    ";
                $context["descripcion_aux"] = $this->getAttribute(($context["fields"] ?? null), "field_resumen", array());
                // line 46
                echo "        ";
                $context["body"] = array("#type" => "processed_text", "#text" => $this->getAttribute(                // line 48
($context["descripcion_aux"] ?? null), "content", array()), "#format" => $this->getAttribute(                // line 49
($context["descripcion_aux"] ?? null), "format", array()));
                // line 51
                echo "
    <div class=\"new-excerpt visible-md-inline-block visible-lg-inline-block cuerpo-noticia-destacada\">";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
                echo "</div>
\t";
            }
            // line 54
            echo "    ";
            if ((($context["idioma"] ?? null) != "en")) {
                // line 55
                echo "    <p class=\"new-date fecha-noticia-destacadas\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "d"), "html", null, true));
                echo " ";
                echo t("DE", array());
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "F"), array("January" => "Enero", "February" => "Febrero", "March" => "Marzo", "April" => "Abril", "May" => "Mayo", "June" => "Junio", "July" => "Julio", "August" => "Agosto", "September" => "Septiembre", "October" => "Octubre", "November" => "Noviembre", "December" => "Diciembre")), "html", null, true));
                // line 68
                echo " ";
                echo t("DE", array());
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "Y"), "html", null, true));
                echo "</p>
    ";
            } else {
                // line 70
                echo "      <p class=\"new-date\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "d"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "F"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "Y"), "html", null, true));
                echo "</p>
    ";
            }
            // line 72
            echo "  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/views-view-fields--noticias-destacadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 72,  170 => 70,  162 => 68,  155 => 55,  152 => 54,  147 => 52,  144 => 51,  142 => 49,  141 => 48,  139 => 46,  136 => 45,  134 => 44,  129 => 43,  121 => 40,  118 => 39,  116 => 38,  111 => 37,  105 => 33,  95 => 31,  87 => 29,  80 => 16,  78 => 15,  74 => 14,  71 => 13,  63 => 10,  57 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/views-view-fields--noticias-destacadas.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/views-view-fields--noticias-destacadas.html.twig");
    }
}
