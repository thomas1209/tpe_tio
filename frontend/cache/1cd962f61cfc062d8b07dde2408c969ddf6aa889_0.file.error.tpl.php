<?php
/* Smarty version 4.3.1, created on 2023-06-13 20:11:07
  from 'C:\xampp\htdocs\RollingStones\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6488b13b00ead6_34548664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd962f61cfc062d8b07dde2408c969ddf6aa889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\error.tpl',
      1 => 1686679864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6488b13b00ead6_34548664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h5>Error</h5>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
