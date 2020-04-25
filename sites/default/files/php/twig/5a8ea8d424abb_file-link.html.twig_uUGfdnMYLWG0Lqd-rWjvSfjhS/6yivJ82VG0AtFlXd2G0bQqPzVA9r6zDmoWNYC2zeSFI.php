<?php

/* themes/SEPI/templates/file-link.html.twig */
class __TwigTemplate_dbfc29b9010c025098cd996464077ec4c2cac8588ee7e976a9a5d682e6397e2f extends Twig_Template
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
        $tags = array("set" => 20, "if" => 21, "trans" => 26);
        $filters = array("upper" => 32);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('upper'),
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

        // line 18
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["link"] ?? null), "url", array()), "html", null, true));
        echo "\" class=\"descargas default-text col-xs-6 col-sm-4 col-md-3\" target=\"_blank\">
      <span class=\"descargas-icon-img col-xs-2 col-sm-3\">
        ";
        // line 20
        $context["file"] = "";
        // line 21
        echo "        ";
        if (twig_in_filter("file", $this->getAttribute($this->getAttribute($this->getAttribute(($context["icon"] ?? null), "#attributes", array(), "array"), "class", array(), "array"), 2, array(), "array"))) {
            // line 22
            echo "          ";
            $context["file"] = "pdf";
            // line 23
            echo "        ";
        } elseif (twig_in_filter("picture", $this->getAttribute($this->getAttribute($this->getAttribute(($context["icon"] ?? null), "#attributes", array(), "array"), "class", array(), "array"), 2, array(), "array"))) {
            // line 24
            echo "          ";
            $context["file"] = "img";
            // line 25
            echo "        ";
        }
        // line 26
        echo "        <img src=\"/sites/default/files/2017-11/ico_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["file"] ?? null), "html", null, true));
        echo "_descargas.png\" alt=\"";
        echo t("Icono descargas", array());
        echo "\">

      </span>
      <p class=\"descargas-text col-xs-10 col-sm-9\">
        <span class=\"descarga-name\">";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["link"] ?? null), "text", array()), "html", null, true));
        echo "</span>
        <br />
        <span class=\"descarga-weight\">(";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, ($context["file"] ?? null)), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["file_size"] ?? null), "html", null, true));
        echo ")</span>
      </p>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  76 => 30,  66 => 26,  63 => 25,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  49 => 20,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/file-link.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/file-link.html.twig");
    }
}
