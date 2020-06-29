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

/* __string_template__893cbceb2e43b86f54ddcfcd34a0d8e73c903457296fb29c1e75eec3915465de */
class __TwigTemplate_d48106e85e72879469ae166579acd9bfd6858fac4fb99ab9d4103ef6f0144b5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Creating a new Customer • delichick_manila</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '0bea56b880164dab9ed147ad67a0d7a3';
    var token_admin_orders = '3c9bd5e0d909889015eded9139d01d25';
    var token_admin_customers = '0bea56b880164dab9ed147ad67a0d7a3';
    var token_admin_customer_threads = '163d17e34c04e7822c545b9a347fc71d';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = 'b0ef8febd37327fa7bdc7301bf806368';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/admin912nyo4fx/index.php/improve/modules/catalog/recommended?_token=n3lCxabQFFpwcTHEmCduccduL-ZcnV-EpazWqL0KmNA';
    var admin_notification_get_link = '/admin912nyo4fx/index.php/common/notifications?_token=n3lCxabQFFpwcTHEmCduccduL-ZcnV-EpazWqL0KmNA';
    var admin_notification_push_link = '/admin912nyo4fx/index.php/common/notifications/ack?_token=n3lCxabQFFpwcTHEmCduccduL-ZcnV-EpazWqL0KmNA';
    var tab_modules_list = 'trustedshopsintegration,steavisgarantis,allinone_rewards,allexport,zendesk';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/admin912nyo4fx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin912nyo4fx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin912nyo4fx\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin912nyo4fx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=n3lCxabQFFpwcTHEmCduccduL-ZcnV-EpazWqL0KmNA\";
var currency = {\"iso_code\":\"PHP\",\"sign\":\"\\u20b1\",\"name\":\"Philippine Piso\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PHP\",\"currencySymbol\":\"\\u20b1\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin912nyo4fx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin912nyo4fx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin912nyo4fx/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin912nyo4fx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin912nyo4fx/themes/default/js/bundle/module/module_card.js?v=1.7.6.5\"></script>


";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-en admincustomers\">



<div id=\"main-div\">
                
      <div class=\" -notoolbar \">

        

        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 101
        $this->displayBlock('content_header', $context, $blocks);
        // line 102
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 104
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 105
        echo "
            
          </div>
        </div>

      </div>
    </div>




";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 101
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
    }

    // line 103
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 104
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__893cbceb2e43b86f54ddcfcd34a0d8e73c903457296fb29c1e75eec3915465de";
    }

    public function getDebugInfo()
    {
        return array (  206 => 116,  201 => 104,  196 => 103,  191 => 102,  186 => 101,  177 => 83,  169 => 116,  156 => 105,  153 => 104,  150 => 103,  147 => 102,  145 => 101,  123 => 83,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__893cbceb2e43b86f54ddcfcd34a0d8e73c903457296fb29c1e75eec3915465de", "");
    }
}
