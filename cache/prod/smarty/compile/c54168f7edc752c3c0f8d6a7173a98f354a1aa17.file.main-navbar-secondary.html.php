<?php /* Smarty version Smarty-3.1.20, created on 2016-08-23 16:46:00
         compiled from "/var/www/html/Mythelia/local/modules/HookCurrency/templates/frontOffice/default/main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:158655449657bc61a8902169-96529370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54168f7edc752c3c0f8d6a7173a98f354a1aa17' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookCurrency/templates/frontOffice/default/main-navbar-secondary.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158655449657bc61a8902169-96529370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ISOCODE' => 0,
    'SYMBOL' => 0,
    'NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57bc61a8913112_66415599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc61a8913112_66415599')) {function content_57bc61a8913112_66415599($_smarty_tpl) {?><ul class="nav navbar-nav navbar-currency navbar-left">
    <li class="dropdown">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/currency"),$_smarty_tpl);?>
" class="language-label dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
</a>
        <ul class="dropdown-menu">
            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp11)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ISOCODE']->value,$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp12,'currency'=>$_tmp13),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp11), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </li>
</ul><?php }} ?>
