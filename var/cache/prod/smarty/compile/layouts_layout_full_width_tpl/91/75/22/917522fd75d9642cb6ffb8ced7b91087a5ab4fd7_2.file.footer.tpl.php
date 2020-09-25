<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:46:57
  from '/var/www/store/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d2ff1bc6215_65738582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917522fd75d9642cb6ffb8ced7b91087a5ab4fd7' => 
    array (
      0 => '/var/www/store/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d2ff1bc6215_65738582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3997462195f6d2ff1bc4602_66456050', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_3997462195f6d2ff1bc4602_66456050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3997462195f6d2ff1bc4602_66456050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
