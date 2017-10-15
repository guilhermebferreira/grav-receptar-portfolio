<?php

/* item.html.twig */
class __TwigTemplate_8f872c7a2e2b692ebab1f025de2efb445bdd61d852180fea4eb3e0e68cbab6e6 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "2112705373")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% set singular = true %}
{% set template_body_classes = 'is-singular not-front-page single single-format-standard single-post not-scrolled ' %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/home/guilherme/Documentos/grav-receptar/user/themes/receptar/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_8f872c7a2e2b692ebab1f025de2efb445bdd61d852180fea4eb3e0e68cbab6e6_2112705373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        $context["singular"] = true;
        // line 10
        $context["template_body_classes"] = "is-singular not-front-page single single-format-standard single-post not-scrolled ";
        // line 12
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 13
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 17)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  109 => 16,  105 => 1,  102 => 13,  100 => 12,  98 => 10,  96 => 9,  93 => 6,  91 => 5,  89 => 4,  87 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% set singular = true %}
{% set template_body_classes = 'is-singular not-front-page single single-format-standard single-post not-scrolled ' %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/home/guilherme/Documentos/grav-receptar/user/themes/receptar/templates/item.html.twig");
    }
}
