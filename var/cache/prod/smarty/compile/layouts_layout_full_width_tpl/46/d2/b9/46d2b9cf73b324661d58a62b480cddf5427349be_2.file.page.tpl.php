<?php
/* Smarty version 3.1.33, created on 2020-06-24 18:50:33
  from '/www/wwwroot/shop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef3d8b98ca5f7_21865166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d2b9cf73b324661d58a62b480cddf5427349be' => 
    array (
      0 => '/www/wwwroot/shop/themes/classic/templates/page.tpl',
      1 => 1591214189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3d8b98ca5f7_21865166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10324086035ef3d8b98b73e6_05264533', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9562189445ef3d8b98ba6a1_44057458 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13485768585ef3d8b98b89d3_27746964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9562189445ef3d8b98ba6a1_44057458', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9071295405ef3d8b98c0844_46399328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19272173745ef3d8b98c28d5_04334542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7687717525ef3d8b98bf143_11087189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9071295405ef3d8b98c0844_46399328', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19272173745ef3d8b98c28d5_04334542', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11378107315ef3d8b98c7152_95454383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14899026765ef3d8b98c5bc0_65776823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11378107315ef3d8b98c7152_95454383', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10324086035ef3d8b98b73e6_05264533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10324086035ef3d8b98b73e6_05264533',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13485768585ef3d8b98b89d3_27746964',
  ),
  'page_title' => 
  array (
    0 => 'Block_9562189445ef3d8b98ba6a1_44057458',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7687717525ef3d8b98bf143_11087189',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9071295405ef3d8b98c0844_46399328',
  ),
  'page_content' => 
  array (
    0 => 'Block_19272173745ef3d8b98c28d5_04334542',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14899026765ef3d8b98c5bc0_65776823',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11378107315ef3d8b98c7152_95454383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13485768585ef3d8b98b89d3_27746964', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7687717525ef3d8b98bf143_11087189', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14899026765ef3d8b98c5bc0_65776823', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
