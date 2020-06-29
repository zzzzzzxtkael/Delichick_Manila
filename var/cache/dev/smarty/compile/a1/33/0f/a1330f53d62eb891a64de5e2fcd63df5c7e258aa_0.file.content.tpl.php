<?php
/* Smarty version 3.1.33, created on 2020-06-24 16:36:05
  from '/www/wwwroot/shop/admin912nyo4fx/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef3b935a2edf1_74255664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1330f53d62eb891a64de5e2fcd63df5c7e258aa' => 
    array (
      0 => '/www/wwwroot/shop/admin912nyo4fx/themes/default/template/content.tpl',
      1 => 1591214190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3b935a2edf1_74255664 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
