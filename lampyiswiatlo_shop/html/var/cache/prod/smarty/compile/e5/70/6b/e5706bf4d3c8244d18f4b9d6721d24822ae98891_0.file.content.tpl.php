<?php
/* Smarty version 3.1.39, created on 2022-01-06 20:35:29
  from '/var/www/html/admin-dev/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d74481110f28_37542845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5706bf4d3c8244d18f4b9d6721d24822ae98891' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/content.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d74481110f28_37542845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
