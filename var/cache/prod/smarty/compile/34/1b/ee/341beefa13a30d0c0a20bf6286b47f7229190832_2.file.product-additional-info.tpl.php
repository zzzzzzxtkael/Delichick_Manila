<?php
/* Smarty version 3.1.33, created on 2020-06-06 18:05:23
  from '/www/wwwroot/shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edc1323544e70_73997006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '341beefa13a30d0c0a20bf6286b47f7229190832' => 
    array (
      0 => '/www/wwwroot/shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1591214189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edc1323544e70_73997006 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
