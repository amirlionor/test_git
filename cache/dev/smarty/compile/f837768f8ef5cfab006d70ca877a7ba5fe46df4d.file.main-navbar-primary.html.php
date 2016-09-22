<?php /* Smarty version Smarty-3.1.20, created on 2016-08-30 09:26:40
         compiled from "/var/www/html/Mythelia/local/modules/HookSearch/templates/frontOffice/default/main-navbar-primary.html" */ ?>
<?php /*%%SmartyHeaderCode:68611406757c53530b33828-36520163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f837768f8ef5cfab006d70ca877a7ba5fe46df4d' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookSearch/templates/frontOffice/default/main-navbar-primary.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68611406757c53530b33828-36520163',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57c53530b3d3f0_09645185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c53530b3d3f0_09645185')) {function content_57c53530b3d3f0_09645185($_smarty_tpl) {?><div class="search-container navbar-form navbar-left">
    <form id="form-search" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/search"),$_smarty_tpl);?>
" method="get" role="search" aria-labelledby="search-label">
    <label id="search-label" class="sr-only" for="q"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search a product",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
</label>
    <div class="input-group">
        <input type="search" name="q" id="q" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search...",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
" class="form-control" autocomplete="off" aria-required="true" required pattern=".{2,}" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Minimum 2 characters.",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
">
        <div class="input-group-btn">
            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i> <span class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
</span></button>
        </div>
    </div>
    </form>
</div><?php }} ?>
