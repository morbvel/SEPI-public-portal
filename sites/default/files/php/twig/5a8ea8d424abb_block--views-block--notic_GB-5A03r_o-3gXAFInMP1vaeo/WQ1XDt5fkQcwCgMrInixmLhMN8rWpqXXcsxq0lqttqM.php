<?php

/* themes/SEPI/templates/block--views-block--noticias-destacadas-block-1.html.twig */
class __TwigTemplate_0244a7fc9602f4a7943b4f142a73ed0e06d1d1afadd394c55d9c900020d1f64c extends Twig_Template
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
        $tags = array("trans" => 8);
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
        echo "<div class=\"container\" style=\"padding-left: 25px;\">
  <div class=\"module module-news\">
    <div class=\"relative\">
  \t\t<h2 class=\"module-title\">
        ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "#configuration", array(), "array"), "label", array(), "array"), "html", null, true));
        echo "
  \t\t</h2>
  \t\t<a href=\"/";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["idioma"] ?? null), "html", null, true));
        echo "/sala-de-prensa/busqueda-de-noticias\" class=\"ver-mas enlace-ver-mas\">
  \t\t<span>";
        // line 8
        echo t("más", array());
        echo " <span class=\"hidden-xs\">";
        echo t("noticias", array());
        echo "</span> </span>
  \t\t</a>
  \t</div>
    <div class=\"row\">
      ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/block--views-block--noticias-destacadas-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  58 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/block--views-block--noticias-destacadas-block-1.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/block--views-block--noticias-destacadas-block-1.html.twig");
    }
}
