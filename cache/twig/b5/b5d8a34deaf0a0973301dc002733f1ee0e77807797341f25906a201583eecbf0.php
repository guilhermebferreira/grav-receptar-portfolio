<?php

/* blog.html.twig */
class __TwigTemplate_1648aa9f1ec526eba6bc434cd4f24f5e5f8acf86ea0d9ef2b3a742c808d181ef extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1750580360")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
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

    {% block slider %}
      {% include 'partials/slider.html.twig' %}
    {% endblock %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {% block navbar %}
        {% include 'partials/categorias.html.twig' %}
    {% endblock %}


    {{ page.content }}

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          {% for child in collection %}
            {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
          {% endfor %}
        </div>

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

    {% endblock %}

{% endembed %}
", "blog.html.twig", "/home/guilherme/Documentos/grav-receptar-portfolio/user/themes/receptar/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_1648aa9f1ec526eba6bc434cd4f24f5e5f8acf86ea0d9ef2b3a742c808d181ef_1750580360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 8
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 9
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 11
        if ((($context["base_url"] ?? null) == "/")) {
            // line 12
            $context["base_url"] = "";
        }
        // line 15
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 16
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("partials/slider.html.twig", "blog.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 24
        echo "

    ";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            echo "            ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 30)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 31
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>

        ";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 35
            echo "        ";
            $this->loadTemplate("pagination.html.twig", "blog.html.twig", 35)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 36
            echo "        ";
        }
        // line 37
        echo "
    ";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->loadTemplate("partials/categorias.html.twig", "blog.html.twig", 22)->display($context);
        // line 23
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 23,  212 => 22,  209 => 21,  204 => 37,  201 => 36,  198 => 35,  196 => 34,  192 => 32,  178 => 31,  175 => 30,  158 => 29,  152 => 26,  148 => 24,  146 => 21,  143 => 20,  140 => 19,  136 => 5,  133 => 4,  130 => 3,  126 => 1,  123 => 16,  121 => 15,  118 => 12,  116 => 11,  114 => 9,  112 => 8,  110 => 7,  19 => 1,);
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

    {% block slider %}
      {% include 'partials/slider.html.twig' %}
    {% endblock %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {% block navbar %}
        {% include 'partials/categorias.html.twig' %}
    {% endblock %}


    {{ page.content }}

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          {% for child in collection %}
            {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
          {% endfor %}
        </div>

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

    {% endblock %}

{% endembed %}
", "blog.html.twig", "/home/guilherme/Documentos/grav-receptar-portfolio/user/themes/receptar/templates/blog.html.twig");
    }
}
