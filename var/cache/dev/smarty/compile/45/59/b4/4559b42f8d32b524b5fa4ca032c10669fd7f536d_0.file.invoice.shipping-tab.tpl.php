<?php
/* Smarty version 3.1.33, created on 2020-06-25 17:06:07
  from '/www/wwwroot/shop/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef511bfabe490_92116347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4559b42f8d32b524b5fa4ca032c10669fd7f536d' => 
    array (
      0 => '/www/wwwroot/shop/pdf/invoice.shipping-tab.tpl',
      1 => 1591214200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef511bfabe490_92116347 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
