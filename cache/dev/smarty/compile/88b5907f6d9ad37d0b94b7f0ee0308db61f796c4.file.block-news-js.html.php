<?php /* Smarty version Smarty-3.1.20, created on 2016-08-30 09:26:37
         compiled from "/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-news-js.html" */ ?>
<?php /*%%SmartyHeaderCode:80548077657c5352d9df4b0-52420139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b5907f6d9ad37d0b94b7f0ee0308db61f796c4' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-news-js.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80548077657c5352d9df4b0-52420139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57c5352d9e21f2_15369418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5352d9e21f2_15369418')) {function content_57c5352d9e21f2_15369418($_smarty_tpl) {?><script>
(function($){
    $(".feed-list").load("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_viewurl'][0][0]->generateAdminViewUrlFunction(array('view'=>'ajax/thelia_news_feed'),$_smarty_tpl);?>
");
}(jQuery));
</script><?php }} ?>
