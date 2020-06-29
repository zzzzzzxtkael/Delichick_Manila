<?php
/* Smarty version 3.1.33, created on 2020-06-24 16:21:56
  from '/www/wwwroot/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef3b5e4e4a058_79861523',
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
function content_5ef3b5e4e4a058_79861523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11211908535ef3b5e4e3e4f2_40753231', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6541538235ef3b5e4e3fc47_51347456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9524889515ef3b5e4e43450_90788541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13190916555ef3b5e4e41ec2_79486304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9524889515ef3b5e4e43450_90788541', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11211908535ef3b5e4e3e4f2_40753231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11211908535ef3b5e4e3e4f2_40753231',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6541538235ef3b5e4e3fc47_51347456',
  ),
  'page_content' => 
  array (
    0 => 'Block_13190916555ef3b5e4e41ec2_79486304',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9524889515ef3b5e4e43450_90788541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6541538235ef3b5e4e3fc47_51347456', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13190916555ef3b5e4e41ec2_79486304', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
