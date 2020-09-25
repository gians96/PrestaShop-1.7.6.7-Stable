<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:54:44
  from '/var/www/store/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d31c40b2905_43764502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dfe2ec946fc85992016416e8603447572b675fb' => 
    array (
      0 => '/var/www/store/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d31c40b2905_43764502 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
