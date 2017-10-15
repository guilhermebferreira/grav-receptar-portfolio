<?php

/* partials/categorias.html.twig */
class __TwigTemplate_8a703761656ee7e0000beb57ca297318fb2e91456eb82133545ef430f4ee54a9 extends Twig_Template
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
        echo "<div id=\"navbar\" >
<aside class=\"widget widget_tag_cloud\">
    ";
        // line 3
        $this->loadTemplate("partials/taxonomylist.html.twig", "partials/categorias.html.twig", 3)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "category")));
        // line 4
        echo "</aside>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/categorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"navbar\" >
<aside class=\"widget widget_tag_cloud\">
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'category'} %}
</aside>
</div>", "partials/categorias.html.twig", "/home/guilherme/Documentos/grav-receptar/user/themes/receptar/templates/partials/categorias.html.twig");
    }
}
