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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig */
class __TwigTemplate_015d378f573a0b3f874aeb198f2871e47b7c7c0047eccade7dddcacede499bcd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        list($context["generalForm"], $context["giftOptionsForm"]) =         [$this->getAttribute(($context["form"] ?? null), "general", []), $this->getAttribute(($context["form"] ?? null), "gift_options", [])];
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 34
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig", 34)->display($context);
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig", 37)->display($context);
        // line 38
        echo "    </div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 45,  73 => 43,  70 => 42,  64 => 39,  61 => 38,  58 => 37,  55 => 35,  52 => 34,  46 => 31,  43 => 30,  39 => 25,  37 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderPreferences/order_preferences.html.twig");
    }
}
