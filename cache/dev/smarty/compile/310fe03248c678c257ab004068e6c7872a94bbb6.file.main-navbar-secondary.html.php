<?php /* Smarty version Smarty-3.1.20, created on 2016-09-23 09:46:45
         compiled from "/var/www/html/Mythelia/local/modules/HookLang/templates/frontOffice/default/main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:119362588557e4dde556ea24-22249143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '310fe03248c678c257ab004068e6c7872a94bbb6' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookLang/templates/frontOffice/default/main-navbar-secondary.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119362588557e4dde556ea24-22249143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOCALE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57e4dde55819d3_77218321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4dde55819d3_77218321')) {function content_57e4dde55819d3_77218321($_smarty_tpl) {?><ul class="nav navbar-nav navbar-lang navbar-left">
    <li class="dropdown">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/login"),$_smarty_tpl);?>
" class="language-label dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"title"),$_smarty_tpl);?>
</a>
        <ul class="dropdown-menu">
            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"lang_available",'exclude'=>$_tmp14)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"lang_available",'exclude'=>$_tmp14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOCALE']->value,$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp15,'lang'=>$_tmp16),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"lang_available",'exclude'=>$_tmp14), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </li>
</ul><?php }} ?>
