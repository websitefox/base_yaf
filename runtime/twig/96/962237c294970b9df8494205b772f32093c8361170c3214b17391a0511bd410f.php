<?php

/* index/index.twig */
class __TwigTemplate_219c6a0d0b152fe433833be25e041996f6ff780e1ae3c29ca2b7d43dfd4a1ff9 extends Twig_Template
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
        echo "</h2>
    <h3>";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " </h3>
    <p>
        新加入：twig模板引擎，think的orm和db 还有    <img src=\"/index/index/Captcha\">
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

    <h2>{{ content }}</h2>
    <h3>{{ name }} </h3>
    <p>
        新加入：twig模板引擎，think的orm和db 还有    <img src=\"/index/index/Captcha\">
    </p>



{% endblock %}", "index/index.twig", "/data/wwwroot/www.qunlang.org/application/views/index/index.twig");
    }
}
