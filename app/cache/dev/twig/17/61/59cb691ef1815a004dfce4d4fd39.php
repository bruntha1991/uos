<?php

/* LoginLoginBundle:Default:halldelete.html.twig */
class __TwigTemplate_176159cb691ef1815a004dfce4d4fd39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:home.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"span10\">
            <h2>Delete hall  </h2>
            <form class=\"form-search\" method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\" data-validate=\"parsley\">
  <input type=\"text\" name=\"hallname\" class=\"input-medium search-query\" placeholder=\"Enter hall name\">
  <button type=\"submit\" class=\"btn\">Delete</button>
</form>
      </div><!--/row-->
      
      ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:halldelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
