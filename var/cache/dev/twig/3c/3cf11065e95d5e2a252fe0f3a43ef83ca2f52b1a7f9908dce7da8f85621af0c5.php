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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig */
class __TwigTemplate_d5f6c3fe5a0988a9401f94026fbea76450179a3bf9515aedb501ed71def3628e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !($context["isShowcaseCardClosed"] ?? $this->getContext($context, "isShowcaseCardClosed"))) {
            // line 27
            echo "  <div id=\"employeesShowcaseCard\" class=\"showcase-card card\">
    <div class=\"helper-card__left helper-card__team shape-one\">
      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/helper-card/team@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your team", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create profiles for your employees with specific rights. SuperAdmin can access the entire store while other people can only be dedicated to the catalog or orders pages.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["helperCardDocumentationLink"] ?? $this->getContext($context, "helperCardDocumentationLink")), "html", null, true);
            echo "\" target=\"_blank\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["showcaseCardName"] ?? $this->getContext($context, "showcaseCardName")), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 40,  70 => 39,  63 => 35,  59 => 34,  55 => 33,  51 => 32,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% if not isShowcaseCardClosed %}
  <div id=\"employeesShowcaseCard\" class=\"showcase-card card\">
    <div class=\"helper-card__left helper-card__team shape-one\">
      <img src=\"{{ asset('themes/new-theme/scss/img/helper-card/team@3x.png') }}\" class=\"img-fluid\">
    </div>
    <div class=\"helper-card__right\">
      <h2>{{ 'Manage your team'|trans({}, 'Admin.Advparameters.Feature') }}</h2>
      <p>{{ 'Create profiles for your employees with specific rights. SuperAdmin can access the entire store while other people can only be dedicated to the catalog or orders pages.'|trans({}, 'Admin.Advparameters.Feature') }}</p>
      <a class=\"btn btn-outline-secondary\" href=\"{{ helperCardDocumentationLink }}\" target=\"_blank\">
        {{ 'Learn more'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"{{ showcaseCardName }}\"
       data-close-url=\"{{ path('admin_close_showcase_card') }}\"
    >
      close
    </i>
  </div>
{% endif %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig");
    }
}
