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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig */
class __TwigTemplate_5b3cca6819dea145aea84cbecd099a6c387b19be7c020d34291f7ccdd0969807 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"col-lg-3 col-md-4 col-sm-6 theme-card-container\">
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  42 => 27,  37 => 29,  35 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig");
    }
}
