<?php
/* Smarty version 3.1.43, created on 2022-11-23 15:21:28
  from '/Applications/MAMP/htdocs/prestashop/login/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637e2c687a8d10_28693843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14f6457c09ace34f094f2faa3c83fe9776b29e7a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/login/themes/default/template/content.tpl',
      1 => 1669212904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637e2c687a8d10_28693843 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
