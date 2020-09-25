<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:59:31
  from '/var/www/store/modules/ps_wirepayment/views/templates/hook/infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d32e3350037_07093025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4da9824b5ccea913046a56fdffbea7ce5a477ce' => 
    array (
      0 => '/var/www/store/modules/ps_wirepayment/views/templates/hook/infos.tpl',
      1 => 1593027171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d32e3350037_07093025 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
  <img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
  <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
