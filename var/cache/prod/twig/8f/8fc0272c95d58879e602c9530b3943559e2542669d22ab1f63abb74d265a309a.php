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

/* @PrestaShop/Admin/Module/updates.html.twig */
class __TwigTemplate_af5af981d31c4abd64f09983e231554fc9a02362f31b764f70c102f622195673 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "  ";
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 29)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 30
        echo "  ";
        // line 31
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        // line 33
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 33)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 34
        echo "  ";
        // line 35
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      <div id=\"module-short-list-update\" class=\"module-short-list\">
        <span class=\"module-search-result-title module-search-result-wording\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to update", ["%nbModules%" => twig_length_filter($this->env, ($context["modules"] ?? null))], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        <span class=\"help-box\" data-toggle=\"popover\"
          data-title=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to update", [], "Admin.Modules.Feature"), "html", null, true);
        echo "\"
          data-content=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update these modules to enjoy their latest versions.", [], "Admin.Modules.Help"), "html", null, true);
        echo "\">
        </span>
        ";
        // line 43
        if (((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1) && (($context["level"] ?? null) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
            // line 44
            echo "          <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade All", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
        ";
        }
        // line 46
        echo "      </div>
      ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 47)->display(twig_array_merge($context, ["modules" => ($context["modules"] ?? null), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? null), "category" => "notification"]));
        // line 48
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  89 => 47,  86 => 46,  80 => 44,  78 => 43,  73 => 41,  69 => 40,  64 => 38,  59 => 35,  57 => 34,  54 => 33,  52 => 32,  49 => 31,  47 => 30,  44 => 29,  42 => 28,  39 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/updates.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Module/updates.html.twig");
    }
}
