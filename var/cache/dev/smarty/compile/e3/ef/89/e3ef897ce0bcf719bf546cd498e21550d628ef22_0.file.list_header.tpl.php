<?php
/* Smarty version 3.1.33, created on 2020-06-24 16:42:30
  from '/www/wwwroot/shop/admin912nyo4fx/themes/default/template/controllers/customer_threads/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef3bab6524000_60838734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ef897ce0bcf719bf546cd498e21550d628ef22' => 
    array (
      0 => '/www/wwwroot/shop/admin912nyo4fx/themes/default/template/controllers/customer_threads/helpers/list/list_header.tpl',
      1 => 1591214190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3bab6524000_60838734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14945724755ef3bab64dd1f7_05818059', "leadin");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "leadin"} */
class Block_14945724755ef3bab64dd1f7_05818059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_14945724755ef3bab64dd1f7_05818059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="CustomerThreadContacts" class="row">
		<?php $_smarty_tpl->_assignInScope('nb_categories', count($_smarty_tpl->tpl_vars['categories']->value));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('total_thread', 0);?>
			<?php $_smarty_tpl->_assignInScope('id_customer_thread', 0);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'tmp2', false, 'tmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tmp']->value => $_smarty_tpl->tpl_vars['tmp2']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['val']->value['id_contact'] == $_smarty_tpl->tpl_vars['tmp2']->value['id_contact']) {?>
					<?php $_smarty_tpl->_assignInScope('total_thread', $_smarty_tpl->tpl_vars['tmp2']->value['total']);?>
					<?php $_smarty_tpl->_assignInScope('id_customer_thread', $_smarty_tpl->tpl_vars['tmp2']->value['id_customer_thread']);?>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-3">
				<div class="panel">
					<div class="panel-heading">
						<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['nb_categories']->value < 6) {?>
						<p><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</p>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['total_thread']->value == 0) {?>
						<span class="message-mail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new messages','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</span>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;id_customer_thread=<?php echo $_smarty_tpl->tpl_vars['id_customer_thread']->value;?>
&amp;viewcustomer_thread" class="button">
							<?php echo $_smarty_tpl->tpl_vars['total_thread']->value;?>

							<?php if ($_smarty_tpl->tpl_vars['total_thread']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New messages','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New message','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
}?>
						</a>
					<?php }?>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="col-lg-3">
			<div id="MeaningStatus" class="panel">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meaning of status','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

				</div>
				<ul class="list-unstyled">
					<li class="text-success"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</li>
					<li class="text-danger"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Closed','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</li>
					<li class="text-warning"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 1','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</li>
					<li class="text-warning"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 2','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3">
			<div id="CustomerService" class="panel">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

				</div>
				<ul class="list-unstyled">
					<?php $_smarty_tpl->_assignInScope('count', 0);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
						<li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</span></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block "leadin"} */
}
