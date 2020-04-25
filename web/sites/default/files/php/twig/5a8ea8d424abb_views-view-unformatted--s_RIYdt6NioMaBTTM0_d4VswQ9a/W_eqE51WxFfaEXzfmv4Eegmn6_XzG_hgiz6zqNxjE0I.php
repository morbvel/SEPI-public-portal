<?php

/* themes/SEPI/templates/views-view-unformatted--sectores--block_1.html.twig */
class __TwigTemplate_f4d139fa1cfc022a7c3556db80350ccd9989cbb9d3e9c863ca36a949622b7d6c extends Twig_Template
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
        $tags = array("set" => 1, "for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for'),
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
        $context["grid"] = array(0 => "width-2-height-1", 1 => "width-1-height-2", 2 => "width-2-height-1", 3 => "width-1-height-2", 4 => "width-1-height-1", 5 => "width-1-height-2", 6 => "width-1-height-1", 7 => "width-1-height-1", 8 => "width-1-height-1", 9 => "width-1-height-1");
        // line 2
        echo "<ul class=\"sectores hidden-xs hidden-sm row\" aria-hidden=\"true\">
  ";
        // line 3
        $context["aux"] = 0;
        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "    <li class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["grid"] ?? null), ($context["aux"] ?? null), array(), "array"), "html", null, true));
            echo "\">
      ";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
    </li>
    ";
            // line 8
            $context["aux"] = (($context["aux"] ?? null) + 1);
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>

<!-- Tablet y mobile -->
<div class=\"row visible-xs visible-sm sectores-little\">
  <ul class=\"sectores-carrusel slick-sectores\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "      <li class=\"\">
        ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/views-view-unformatted--sectores--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  87 => 17,  84 => 16,  80 => 15,  73 => 10,  67 => 9,  65 => 8,  60 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/views-view-unformatted--sectores--block_1.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/views-view-unformatted--sectores--block_1.html.twig");
    }
}
