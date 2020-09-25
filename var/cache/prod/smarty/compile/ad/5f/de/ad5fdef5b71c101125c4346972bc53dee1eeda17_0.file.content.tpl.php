<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:47:39
  from '/var/www/store/admin127bchcmh/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d301bc9a5f3_31506512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5fdef5b71c101125c4346972bc53dee1eeda17' => 
    array (
      0 => '/var/www/store/admin127bchcmh/themes/default/template/content.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d301bc9a5f3_31506512 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
