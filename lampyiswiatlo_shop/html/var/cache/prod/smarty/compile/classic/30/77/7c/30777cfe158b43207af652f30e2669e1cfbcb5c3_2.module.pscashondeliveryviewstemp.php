<?php
/* Smarty version 3.1.39, created on 2021-11-15 02:05:34
  from 'module:pscashondeliveryviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6191b25e5c6de1_74721008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30777cfe158b43207af652f30e2669e1cfbcb5c3' => 
    array (
      0 => 'module:pscashondeliveryviewstemp',
      1 => 1636937991,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6191b25e5c6de1_74721008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>

  <br><br>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have chosen the cash on delivery method.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>

  <br><br><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent very soon.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</span>
  <br><br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer support','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</a>.
</p>
<?php }
}
