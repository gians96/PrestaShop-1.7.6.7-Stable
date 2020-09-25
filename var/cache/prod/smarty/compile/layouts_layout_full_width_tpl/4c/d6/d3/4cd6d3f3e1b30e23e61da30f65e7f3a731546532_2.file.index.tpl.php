<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:40:00
  from '/var/www/store/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d2e50e72fe9_79418756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd6d3f3e1b30e23e61da30f65e7f3a731546532' => 
    array (
      0 => '/var/www/store/themes/classic/templates/index.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d2e50e72fe9_79418756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20240242145f6d2e50e71008_13297069', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20075379415f6d2e50e714e4_56301022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9714071595f6d2e50e71fd9_05036952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18693241855f6d2e50e71ba9_50070040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9714071595f6d2e50e71fd9_05036952', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20240242145f6d2e50e71008_13297069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20240242145f6d2e50e71008_13297069',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20075379415f6d2e50e714e4_56301022',
  ),
  'page_content' => 
  array (
    0 => 'Block_18693241855f6d2e50e71ba9_50070040',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9714071595f6d2e50e71fd9_05036952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20075379415f6d2e50e714e4_56301022', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18693241855f6d2e50e71ba9_50070040', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
