<?php
/* Smarty version 4.3.1, created on 2023-06-05 21:30:30
  from 'C:\xampp\htdocs\RollingStones\templates\afterLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e37d674cca5_24780690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13db6145d164d03f57bc1174b5713e01476f6a63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\afterLogin.tpl',
      1 => 1685993419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647e37d674cca5_24780690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
<h3>¡Hola <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h3>
<p>Accede a la pestaña Albums, ya podrás ver la información:</p>
<a href="<?php echo BASE_URL;?>
albums">Ver todos los albums</a>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
