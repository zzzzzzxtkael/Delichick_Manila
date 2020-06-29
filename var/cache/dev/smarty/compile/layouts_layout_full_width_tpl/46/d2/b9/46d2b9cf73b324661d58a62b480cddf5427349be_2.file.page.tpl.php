<?php
/* Smarty version 3.1.33, created on 2020-06-29 08:29:55
  from '/www/wwwroot/shop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef9dec35b90d0_40201875',
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
function content_5ef9dec35b90d0_40201875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15774114475ef9dec35a5d01_00986524', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15638731555ef9dec35a9220_69874936 extends Smarty_Internal_Block
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
class Block_4023692895ef9dec35a7607_89241273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15638731555ef9dec35a9220_69874936', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_379753235ef9dec35af5e1_38311422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_319423715ef9dec35b1511_05358609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14559577335ef9dec35adff2_37314290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379753235ef9dec35af5e1_38311422', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319423715ef9dec35b1511_05358609', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8851193765ef9dec35b5aa3_77123295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15612676135ef9dec35b4545_19457755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8851193765ef9dec35b5aa3_77123295', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15774114475ef9dec35a5d01_00986524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15774114475ef9dec35a5d01_00986524',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4023692895ef9dec35a7607_89241273',
  ),
  'page_title' => 
  array (
    0 => 'Block_15638731555ef9dec35a9220_69874936',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14559577335ef9dec35adff2_37314290',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_379753235ef9dec35af5e1_38311422',
  ),
  'page_content' => 
  array (
    0 => 'Block_319423715ef9dec35b1511_05358609',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15612676135ef9dec35b4545_19457755',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8851193765ef9dec35b5aa3_77123295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4023692895ef9dec35a7607_89241273', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14559577335ef9dec35adff2_37314290', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15612676135ef9dec35b4545_19457755', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
