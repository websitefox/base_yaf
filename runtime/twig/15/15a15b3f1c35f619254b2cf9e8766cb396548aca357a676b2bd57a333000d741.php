<?php

/* layout.twig */
class __TwigTemplate_279715bd95d46aae3fcb86d542c396e274f84f74bcba6f1d624396ff952d2bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"static/assets/Home/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"static/assets/Home/css/modern-business.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"static/assets/Home/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src='/static/assets/Common/nprogress/nprogress.js'></script>
    <link rel='stylesheet' href='/static/assets/Common/nprogress/nprogress.css'/>

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">群狼小站</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"about.html\">About</a>
                </li>
                <li>
                    <a href=\"services.html\">Services</a>
                </li>
                <li>
                    <a href=\"contact.html\">Contact</a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"blog-home-1.html\">Blog Home 1</a>
                        </li>
                        <li>
                            <a href=\"blog-home-2.html\">Blog Home 2</a>
                        </li>
                        <li>
                            <a href=\"blog-post.html\">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"full-width.html\">Full Width Page</a>
                        </li>
                        <li>
                            <a href=\"sidebar.html\">Sidebar Page</a>
                        </li>
                        <li>
                            <a href=\"faq.html\">FAQ</a>
                        </li>
                        <li>
                            <a href=\"404.html\">404</a>
                        </li>
                        <li>
                            <a href=\"pricing.html\">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>



<!-- Page Content -->
<div class=\"container\">
    <!--------------------------
                  | Your Page Content Here |
                  -------------------------->
    ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "


    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=\"static/assets/Home/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"static/assets/Home/js/bootstrap.min.js\"></script>

<!-- Script to Activate the Carousel -->
<script>
    NProgress.start();
    NProgress.done();
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 129,  194 => 12,  156 => 130,  154 => 129,  34 => 12,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}{% endblock %}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"static/assets/Home/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"static/assets/Home/css/modern-business.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"static/assets/Home/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src='/static/assets/Common/nprogress/nprogress.js'></script>
    <link rel='stylesheet' href='/static/assets/Common/nprogress/nprogress.css'/>

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">群狼小站</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"about.html\">About</a>
                </li>
                <li>
                    <a href=\"services.html\">Services</a>
                </li>
                <li>
                    <a href=\"contact.html\">Contact</a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"blog-home-1.html\">Blog Home 1</a>
                        </li>
                        <li>
                            <a href=\"blog-home-2.html\">Blog Home 2</a>
                        </li>
                        <li>
                            <a href=\"blog-post.html\">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"full-width.html\">Full Width Page</a>
                        </li>
                        <li>
                            <a href=\"sidebar.html\">Sidebar Page</a>
                        </li>
                        <li>
                            <a href=\"faq.html\">FAQ</a>
                        </li>
                        <li>
                            <a href=\"404.html\">404</a>
                        </li>
                        <li>
                            <a href=\"pricing.html\">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>



<!-- Page Content -->
<div class=\"container\">
    <!--------------------------
                  | Your Page Content Here |
                  -------------------------->
    {% block content %}{% endblock %}



    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=\"static/assets/Home/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"static/assets/Home/js/bootstrap.min.js\"></script>

<!-- Script to Activate the Carousel -->
<script>
    NProgress.start();
    NProgress.done();
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>", "layout.twig", "/data/wwwroot/www.qunlang.org/application/views/layout.twig");
    }
}
