<?php

/* index/index.twig */
class __TwigTemplate_127cd69a502389299e6969acd29f65fd7476f91ca65a8415cbdaf6717f3a102c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index/index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学习yaf";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "嗯嗯二若若</h2>
    <h3>";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " </h3>
    <p>
        新加入：twig模板引擎，think的orm和db123
    </p>



";
    }

    public function getTemplateName()
    {
        return "index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 11,  50 => 10,  47 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}学习yaf{% endblock %}

{% block head %}
    {{ parent() }}

{% endblock %}
{% block content %}

    <h2>{{ content }}嗯嗯二若若</h2>
    <h3>{{ name }} </h3>
    <p>
        新加入：twig模板引擎，think的orm和db123
    </p>



{% endblock %}", "index/index.twig", "/data/wwwroot/www.qunlang.org/application/modules/Admin/views/index/index.twig");
    }
}
