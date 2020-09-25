<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:40:00
  from '/var/www/store/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d2e50e793c6_24707689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf6010d7f28c79acbfefc2afb877a8e44dfabf7' => 
    array (
      0 => '/var/www/store/themes/classic/templates/page.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d2e50e793c6_24707689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11719133165f6d2e50e75741_59230404', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6518387015f6d2e50e761a2_43181107 extends Smarty_Internal_Block
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
class Block_8415479895f6d2e50e75bf6_04578632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6518387015f6d2e50e761a2_43181107', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9211279115f6d2e50e77572_16276874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12075369555f6d2e50e77bc5_72200112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_158169995f6d2e50e77113_15734440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9211279115f6d2e50e77572_16276874', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12075369555f6d2e50e77bc5_72200112', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7420625375f6d2e50e788d1_16958248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18756413815f6d2e50e784c5_05822232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7420625375f6d2e50e788d1_16958248', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11719133165f6d2e50e75741_59230404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11719133165f6d2e50e75741_59230404',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8415479895f6d2e50e75bf6_04578632',
  ),
  'page_title' => 
  array (
    0 => 'Block_6518387015f6d2e50e761a2_43181107',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_158169995f6d2e50e77113_15734440',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9211279115f6d2e50e77572_16276874',
  ),
  'page_content' => 
  array (
    0 => 'Block_12075369555f6d2e50e77bc5_72200112',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18756413815f6d2e50e784c5_05822232',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7420625375f6d2e50e788d1_16958248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8415479895f6d2e50e75bf6_04578632', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158169995f6d2e50e77113_15734440', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18756413815f6d2e50e784c5_05822232', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
