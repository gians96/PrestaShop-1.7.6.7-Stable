<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:47:39
  from '/var/www/store/admin127bchcmh/themes/default/template/controllers/carriers/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d301bb41343_67302843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89ce2734ca185fe09dd9ca43298e1196fbf807f' => 
    array (
      0 => '/var/www/store/admin127bchcmh/themes/default/template/controllers/carriers/helpers/list/list_header.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d301bb41343_67302843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12216756035f6d301bb3e771_53994188', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_12216756035f6d301bb3e771_53994188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_12216756035f6d301bb3e771_53994188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['showHeaderAlert']->value) {?>
			<div class="alert alert-info">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your online store needs to have a proper carrier registered in PrestaShop as soon as you start shipping your products. This means sending yours parcels using your local postal service, or having a contract with a private carrier which in turn will ship your parcels to your customers. In order to have PrestaShop suggest the most adequate carrier to your customers during their order checkout process, you need to register all the carriers with which you have chosen to work.','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop comes with a number of carrier modules that you can activate. You can also buy carrier modules on the PrestaShop Addons marketplace. Recommended modules are listed below: install the module that matches your carrier, and configure it!','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If there is no existing module for your carrier, then you can register that carrier by hand using the information that it can provide you: shipping rates, regional zones, size and weight limits, etc. Click on the "Add new carrier" button below to open the Carrier Wizard, which will help you register a new carrier in a few steps.','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note: DO NOT register a new carrier if there already exists a module for it! Using a module will be much faster and more accurate!','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
</p>
			</div>
		<?php }?>
	<?php
}
}
/* {/block "preTable"} */
}
