<?php
/* Smarty version 3.1.33, created on 2020-06-29 08:29:55
  from '/www/wwwroot/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef9dec359d9d0_48787924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d348ffe4a534159b83a7332df3762377e6992a2' => 
    array (
      0 => '/www/wwwroot/shop/themes/classic/templates/index.tpl',
      1 => 1591214189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9dec359d9d0_48787924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8037440925ef9dec3593593_34603926', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11803757245ef9dec3594dc0_76887077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4596342605ef9dec3598987_13657618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8029088515ef9dec3597067_68262728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4596342605ef9dec3598987_13657618', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8037440925ef9dec3593593_34603926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8037440925ef9dec3593593_34603926',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11803757245ef9dec3594dc0_76887077',
  ),
  'page_content' => 
  array (
    0 => 'Block_8029088515ef9dec3597067_68262728',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4596342605ef9dec3598987_13657618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11803757245ef9dec3594dc0_76887077', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8029088515ef9dec3597067_68262728', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
