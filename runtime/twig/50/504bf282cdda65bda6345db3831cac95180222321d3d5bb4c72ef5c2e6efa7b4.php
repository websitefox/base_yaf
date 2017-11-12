<?php

/* index/index.html */
class __TwigTemplate_72503f22e469c526170b68dced04f3c6e8d9555a14457dff042d20809fdb2821 extends Twig_Template
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
        echo "<?php echo include './application/modules/Admin/views/public/header.html' ?>
<?php
    echo \$this->getViewPath();

?>
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo include './application/modules/Admin/views/public/header.html' ?>
<?php
    echo \$this->getViewPath();

?>
", "index/index.html", "/data/wwwroot/www.qunlang.org/application/modules/Admin/views/index/index.html");
    }
}
