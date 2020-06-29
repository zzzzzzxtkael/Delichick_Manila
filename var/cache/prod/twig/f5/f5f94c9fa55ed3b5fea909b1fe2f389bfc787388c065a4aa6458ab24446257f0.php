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

/* @PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig */
class __TwigTemplate_4593041946d3acbb73276a665a3337a1e51cd0159c7ace56eb0d3cfd2e0b8f3c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_form' => [$this, 'block_customer_form'],
            'customer_form_rest' => [$this, 'block_customer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $context["allowedNameChars"] = "0-9!<>,;?=+()@#\"°{}_\$%:";
        // line 29
        $context["isGuest"] = (((isset($context["isGuest"]) || array_key_exists("isGuest", $context))) ? (_twig_default_filter(($context["isGuest"] ?? null), false)) : (false));
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('customer_form', $context, $blocks);
    }

    public function block_customer_form($context, array $blocks = [])
    {
        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">person</i>
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["customerForm"] ?? null), 'errors');
        echo "

          ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "gender_id", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social title", [], "Admin.Global")]);
        // line 44
        echo "

          ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "first_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global"), "help" => sprintf("%s %s", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info"),         // line 48
($context["allowedNameChars"] ?? null))]);
        // line 49
        echo "

          ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "last_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global"), "help" => sprintf("%s %s", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info"),         // line 53
($context["allowedNameChars"] ?? null))]);
        // line 54
        echo "

          ";
        // line 56
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "email", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global")]);
        // line 58
        echo "

          ";
        // line 60
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "password", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password should be at least %length% characters long.", ["%length%" =>         // line 62
($context["minPasswordLength"] ?? null)], "Admin.Notifications.Info"), "class" => ((        // line 63
($context["isGuest"] ?? null)) ? ("d-none") : (""))]);
        // line 64
        echo "

          ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "birthday", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Birthday", [], "Admin.Orderscustomers.Feature")]);
        // line 68
        echo "

          ";
        // line 70
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "is_enabled", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable customer login.", [], "Admin.Orderscustomers.Help")]);
        // line 73
        echo "

          ";
        // line 75
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "is_partner_offers_subscribed", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer will receive your ads via email.", [], "Admin.Orderscustomers.Help")]);
        // line 78
        echo "

          ";
        // line 80
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "group_ids", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group access", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all the groups that you would like to apply to this customer.", [], "Admin.Orderscustomers.Help")]);
        // line 83
        echo "

          ";
        // line 85
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "default_group_id", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default customer group", [], "Admin.Orderscustomers.Feature"), "help" => sprintf("%s %s", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This group will be the user's default group.", [], "Admin.Orderscustomers.Help"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only the discount for the selected group will be applied to this customer.", [], "Admin.Orderscustomers.Help"))]);
        // line 88
        echo "

          ";
        // line 90
        if (($context["isB2bFeatureActive"] ?? null)) {
            // line 91
            echo "            ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "company_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "Admin.Global")]);
            // line 93
            echo "

            ";
            // line 95
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "siret_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIRET", [], "Admin.Orderscustomers.Feature")]);
            // line 97
            echo "

            ";
            // line 99
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "ape_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature")]);
            // line 101
            echo "

            ";
            // line 103
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "website", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Website", [], "Admin.Orderscustomers.Feature")]);
            // line 105
            echo "

            ";
            // line 107
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "allowed_outstanding_amount", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed outstanding amount", [], "Admin.Orderscustomers.Feature"), "help" => sprintf("%s 0-9", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid characters:", [], "Admin.Orderscustomers.Help"))]);
            // line 110
            echo "

            ";
            // line 112
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "max_payment_days", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum number of payment days", [], "Admin.Orderscustomers.Feature"), "help" => sprintf("%s 0-9", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid characters:", [], "Admin.Orderscustomers.Help"))]);
            // line 115
            echo "

            ";
            // line 117
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["customerForm"] ?? null), "risk_id", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Risk rating", [], "Admin.Orderscustomers.Feature")]);
            // line 119
            echo "
          ";
        }
        // line 121
        echo "
          ";
        // line 122
        $this->displayBlock('customer_form_rest', $context, $blocks);
        // line 125
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        ";
        // line 128
        if (((isset($context["displayInIframe"]) || array_key_exists("displayInIframe", $context)) && (($context["displayInIframe"] ?? null) == true))) {
            // line 129
            echo "          <a href=\"javascript:window.history.back();\" class=\"btn btn-outline-secondary\">
        ";
        } else {
            // line 131
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension')->getPathWithBackUrl("admin_customers_index"), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
        ";
        }
        // line 133
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 122
    public function block_customer_form_rest($context, array $blocks = [])
    {
        // line 123
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["customerForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 123,  224 => 122,  218 => 140,  211 => 136,  204 => 133,  198 => 131,  194 => 129,  192 => 128,  187 => 125,  185 => 122,  182 => 121,  178 => 119,  176 => 117,  172 => 115,  170 => 112,  166 => 110,  164 => 107,  160 => 105,  158 => 103,  154 => 101,  152 => 99,  148 => 97,  146 => 95,  142 => 93,  139 => 91,  137 => 90,  133 => 88,  131 => 85,  127 => 83,  125 => 80,  121 => 78,  119 => 75,  115 => 73,  113 => 70,  109 => 68,  107 => 66,  103 => 64,  101 => 63,  100 => 62,  99 => 60,  95 => 58,  93 => 56,  89 => 54,  87 => 53,  86 => 51,  82 => 49,  80 => 48,  79 => 46,  75 => 44,  73 => 42,  68 => 40,  61 => 36,  53 => 32,  47 => 31,  44 => 30,  42 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/form.html.twig");
    }
}
