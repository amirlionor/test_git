<?php /* Smarty version Smarty-3.1.20, created on 2016-08-30 09:26:37
         compiled from "/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-thelia-information.html" */ ?>
<?php /*%%SmartyHeaderCode:154142824657c5352d8dfd42-46563507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eebf40f0eecb1e7681ff2d16cf6ac93e26e1094' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-thelia-information.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154142824657c5352d8dfd42-46563507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THELIA_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57c5352d8eda19_83469453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5352d8eda19_83469453')) {function content_57c5352d8eda19_83469453($_smarty_tpl) {?><div class="table-responsive">
  <table class="table table-striped">
    <tbody>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Current version",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
      <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['THELIA_VERSION']->value,$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Latest version available"),$_smarty_tpl);?>
</th>
      <td><a href="http://thelia.net/#download" id="latest-thelia-version"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Loading...",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></td>
    </tr>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"News"),$_smarty_tpl);?>
</th>
      <td><a href="http://thelia.net/blog" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Click here",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></td>
    </tr>
    </tbody>
  </table>
</div><?php }} ?>
