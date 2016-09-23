<?php /* Smarty version Smarty-3.1.20, created on 2016-09-23 09:46:45
         compiled from "/var/www/html/Mythelia/local/modules/HookNavigation/templates/frontOffice/default/main-footer-bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:141612643557e4dde5c74c33-06589448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30412ed413fcba901d0a0a3c1f3d7abbfa2d45b1' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookNavigation/templates/frontOffice/default/main-footer-bottom.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141612643557e4dde5c74c33-06589448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bottomFolderId' => 0,
    'URL' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57e4dde5c82927_32056942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4dde5c82927_32056942')) {function content_57e4dde5c82927_32056942($_smarty_tpl) {?><nav class="nav-footer" role="navigation">
    <ul class="list-unstyled list-inline">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['URL']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</nav><?php }} ?>
