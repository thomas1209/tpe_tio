<?php
/* Smarty version 4.3.1, created on 2023-06-03 21:49:13
  from 'C:\xampp\htdocs\RollingStones\templates\album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b9939130746_01437559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff17e5dd8b529d7be1c4506f41906718cef6129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RollingStones\\templates\\album.tpl',
      1 => 1685821750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647b9939130746_01437559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="form">
        <form id="seleccionAlbum">
            <select class="albums">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'albums', 'album', false, 'id_album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_album']->value => $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                    <option id="j"><?php echo $_smarty_tpl->tpl_vars['album']->value->titulo_album;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="button" value="Consultar">
        </form>
    </div>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
