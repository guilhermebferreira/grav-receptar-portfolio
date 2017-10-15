<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_93f49da436a828970b6da717a34e230ce4b82ebc7869412f5e81f982175f3082 extends Twig_Template
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
        // line 1
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"tagcloud\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "      ";
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", array(0 => ($context["taxonomy"] ?? null)), "method") == $context["tax"])) ? ("active") : (""));
                // line 7
                echo "\t      \t";
                if (($context["value"] == 1)) {
                    // line 8
                    echo "\t\t\t    <a class=\"";
                    echo ($context["active"] ?? null);
                    echo "\" title=\"";
                    echo $context["value"];
                    echo " ";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TOPIC");
                    echo "\" href=\"";
                    echo ($context["base_url_absolute"] ?? null);
                    echo "/";
                    echo ($context["taxonomy"] ?? null);
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["tax"], "url");
                    echo "\">";
                    echo $context["tax"];
                    echo "</a>
\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t    <a class=\"";
                    echo ($context["active"] ?? null);
                    echo "\" title=\"";
                    echo $context["value"];
                    echo " ";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TOPICS");
                    echo "\" href=\"";
                    echo ($context["base_url_absolute"] ?? null);
                    echo "/";
                    echo ($context["taxonomy"] ?? null);
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["tax"], "url");
                    echo "\">";
                    echo $context["tax"];
                    echo "</a>
\t\t\t";
                }
                // line 12
                echo "      
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  75 => 12,  57 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
<div class=\"tagcloud\">
    {% for tax,value in taxlist[taxonomy] %}
      {% set active = uri.param(taxonomy) == tax ? 'active' : '' %}
\t      \t{% if value == 1 %}
\t\t\t    <a class=\"{{ active }}\" title=\"{{ value }} {{ 'TOPIC'|t }}\" href=\"{{ base_url_absolute }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
\t\t\t{% else %}
\t\t\t    <a class=\"{{ active }}\" title=\"{{ value }} {{ 'TOPICS'|t }}\" href=\"{{ base_url_absolute }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
\t\t\t{% endif %}
      
    {% endfor %}
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "/home/guilherme/Documentos/grav-receptar/user/themes/receptar/templates/partials/taxonomylist.html.twig");
    }
}
