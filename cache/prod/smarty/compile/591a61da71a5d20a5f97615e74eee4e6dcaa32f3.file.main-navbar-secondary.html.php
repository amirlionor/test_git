<?php /* Smarty version Smarty-3.1.20, created on 2016-08-23 16:46:00
         compiled from "/var/www/html/Mythelia/local/modules/HookSearch/templates/frontOffice/default/main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:117820324057bc61a89c0b52-81505931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591a61da71a5d20a5f97615e74eee4e6dcaa32f3' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookSearch/templates/frontOffice/default/main-navbar-secondary.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117820324057bc61a89c0b52-81505931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57bc61a89cc9e6_92379235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc61a89cc9e6_92379235')) {function content_57bc61a89cc9e6_92379235($_smarty_tpl) {?><div class="search-container navbar-form navbar-left">
    <form id="form-search" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/search"),$_smarty_tpl);?>
" method="get" role="search" aria-labelledby="search-label">
        <label id="search-label" class="sr-only" for="q"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search a product",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
</label>
        <input type="search" name="q" id="q" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search...",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
" class="form-control" autocomplete="off" aria-required="true" required pattern=".{2,}" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Minimum 2 characters.",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
">
        
    </form>
</div><?php }} ?>
