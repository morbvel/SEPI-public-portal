<?php

/* themes/SEPI/templates/views-view-fields--fundacion_sepi.html.twig */
class __TwigTemplate_315bf6e3101c3047e387586cd99cdc91ca41b283db2782c3b704f54a96a34523 extends Twig_Template
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
        $tags = array("set" => 6, "if" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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
        echo "<div class=\"fundacion";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "counter", array()), "content", array()), "html", null, true));
        echo " col col-sm-6\">
  <div class=\"image-resizer zoom\">
    <img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_image", array()), "content", array()), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_image_1", array()), "content", array()), "html", null, true));
        echo "\" />
  </div>
  <h2 class=\"module-subtitle\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</h2>
  ";
        // line 6
        $context["descripcion_aux"] = $this->getAttribute(($context["fields"] ?? null), "field_descripcion", array());
        // line 7
        echo "  ";
        $context["body"] = array("#type" => "processed_text", "#text" => $this->getAttribute(        // line 9
($context["descripcion_aux"] ?? null), "content", array()), "#format" => $this->getAttribute(        // line 10
($context["descripcion_aux"] ?? null), "format", array()));
        // line 12
        echo "  <div class=\"default-text\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div>
  ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_secundaria", array()), "content", array())) {
            // line 14
            echo "  <div class=\"relative visible-md-inline-block visible-lg-inline-block\">
    <img src=\"";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_secundaria", array()), "content", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_secundaria_1", array()), "content", array()), "html", null, true));
            echo "\" class=\"pull-right\">
  </div>
  ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/views-view-fields--fundacion_sepi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  77 => 15,  74 => 14,  72 => 13,  67 => 12,  65 => 10,  64 => 9,  62 => 7,  60 => 6,  56 => 5,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/views-view-fields--fundacion_sepi.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/views-view-fields--fundacion_sepi.html.twig");
    }
}
