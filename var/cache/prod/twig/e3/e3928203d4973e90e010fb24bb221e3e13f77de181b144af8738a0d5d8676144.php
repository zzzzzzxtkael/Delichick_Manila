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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig */
class __TwigTemplate_4aca37ef65aa240cc21459826d8768f30bc5d33c3effea06042a729a764a23d5 extends \Twig\Template
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
        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">visibility_off</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body clearfix\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This note will be displayed to all employees but not to customers.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
      </p>
    </div>

    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])])]);
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? null), "note", []), 'widget');
        echo "

      <button class=\"btn btn-primary float-right mt-3\" type=\"submit\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 44,  61 => 42,  55 => 39,  51 => 38,  44 => 34,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "/www/wwwroot/shop/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/private_note.html.twig");
    }
}
