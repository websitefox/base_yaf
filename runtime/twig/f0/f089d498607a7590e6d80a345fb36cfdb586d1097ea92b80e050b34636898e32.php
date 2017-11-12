<?php

/* error/error.twig */
class __TwigTemplate_69deb4b950c3c2b4a767a7296adf003eddd6052e020b17d32d33a680bfba6b11 extends Twig_Template
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
        echo "<?php
echo \"Error Msg:\"  . \$exception->getMessage();
?>
";
    }

    public function getTemplateName()
    {
        return "error/error.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
echo \"Error Msg:\"  . \$exception->getMessage();
?>
", "error/error.twig", "/data/wwwroot/www.qunlang.org/application/views/error/error.twig");
    }
}
