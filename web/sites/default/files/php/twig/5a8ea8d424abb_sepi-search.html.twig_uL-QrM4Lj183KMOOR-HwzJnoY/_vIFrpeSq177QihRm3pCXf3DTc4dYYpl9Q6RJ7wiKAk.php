<?php

/* modules/custom/form_themming/templates/sepi-search.html.twig */
class __TwigTemplate_415a42c8e02e5615987376ede520cddb05258169e0fa6cc48baaf07aed243c55 extends Twig_Template
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
        echo "<div id=\"abrir-buscador-desktop\">
  <div class=\"form-inline input-group custom-input-group col-sm-12 formulario-buscador\">
    <label class=\"hidden\" aria-hidden=\"true\" for=\"edit-search-theme-form\">Hidden formulario id</label><input type=\"hidden\" name=\"form_id\" id=\"edit-search-theme-form\" value=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "#form_id", array(), "array"), "html", null, true));
        echo "\"/>
    <label class=\"hidden\" aria-hidden=\"true\" for=\"edit-search-theme-form-2\">Hidden language</label><input type=\"hidden\" name=\"f[0]\" id=\"edit-search-theme-form-2\" value=\"language:";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "language", array(), "array"), "#value", array(), "array"), "html", null, true));
        echo "\"/>
    <button type=\"submit\" class=\"btn btn-default pull-right\">
      <span class=\"glyphicon glyphicon-search\"></span>
    </button>
    <label class=\"hidden\" aria-hidden=\"true\" for=\"edit-keys-search\">Hidden Keys</label><input data-drupal-selector=\"edit-keys-search\" type=\"text\" id=\"edit-keys-search\" name=\"keys\" class=\"form-control\" placeholder=\"";
        // line 8
        echo t("Buscar...", array());
        echo "\">
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/form_themming/templates/sepi-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/form_themming/templates/sepi-search.html.twig", "/Users/miguel/Sites/SEPI/web/modules/custom/form_themming/templates/sepi-search.html.twig");
    }
}
