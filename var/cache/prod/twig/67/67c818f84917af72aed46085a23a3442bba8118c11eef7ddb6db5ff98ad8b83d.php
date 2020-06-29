<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Customer/create.html.twig */
class __TwigTemplate_9e4568cf1f7e6032752578f8eb606fdc3645fa44b55450e443d7515202ee477f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Customer/create.html.twig", 29);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creating a new Customer", [], "Admin.Orderscustomers.Feature");
        // line 29
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Customer/create.html.twig", 34)->display($context);
        // line 35
        echo "    </div>
  </div>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/create.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 42,  63 => 40,  60 => 39,  54 => 35,  52 => 34,  48 => 32,  45 => 31,  41 => 29,  39 => 27,  37 => 26,  22 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/create.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/create.html.twig");
    }
}
