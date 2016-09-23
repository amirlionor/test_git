<?php /* Smarty version Smarty-3.1.20, created on 2016-09-23 09:47:33
         compiled from "/var/www/html/Mythelia/templates/frontOffice/default/account.html" */ ?>
<?php /*%%SmartyHeaderCode:66652739457e4de15bc94c5-26000700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f7cb40a0463fac1d94adbf099dc035ed7bd4fc' => 
    array (
      0 => '/var/www/html/Mythelia/templates/frontOffice/default/account.html',
      1 => 1463578323,
      2 => 'file',
    ),
    '676819e9bbe8fffae0e9f0ea86e9b19fdee252d0' => 
    array (
      0 => '/var/www/html/Mythelia/templates/frontOffice/default/layout.tpl',
      1 => 1463578323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66652739457e4de15bc94c5-26000700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_name' => 0,
    'store_description' => 0,
    'lang_code' => 0,
    'page_title' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page_description' => 0,
    'asset_url' => 0,
    'lang_locale' => 0,
    'image' => 0,
    'id' => 0,
    'class' => 0,
    'title' => 0,
    'content' => 0,
    'folder_information' => 0,
    'URL' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57e4de15f2cbc9_28492022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4de15f2cbc9_28492022')) {function content_57e4de15f2cbc9_28492022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/Mythelia/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_mailto')) include '/var/www/html/Mythelia/vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><!doctype html>
<!--
 ______   __  __     ______     __         __     ______
/\__  _\ /\ \_\ \   /\  ___\   /\ \       /\ \   /\  __ \
\/_/\ \/ \ \  __ \  \ \  __\   \ \ \____  \ \ \  \ \  __ \
   \ \_\  \ \_\ \_\  \ \_____\  \ \_____\  \ \_\  \ \_\ \_\
    \/_/   \/_/\/_/   \/_____/   \/_____/   \/_/   \/_/\/_/


Copyright (c) OpenStudio
email : info@thelia.net
web : http://www.thelia.net

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the
GNU General Public License : http://www.gnu.org/licenses/
-->


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets/dist'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'fo.default'),$_smarty_tpl);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"CUSTOMER",'login_tpl'=>"login"),$_smarty_tpl);?>


    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Account"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array(array('title'=>$_tmp1,'url'=>$_tmp2)), null, 0);?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_name"] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_description"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_description"] = new Smarty_variable($_tmp4, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lang_code"] = new Smarty_variable($_tmp5, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"locale"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lang_locale"] = new Smarty_variable($_tmp6, null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['store_name']->value) {?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia V2'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_name"] = new Smarty_variable($_tmp7, null, 0);?><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['store_description']->value) {?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_description"] = new Smarty_variable($_tmp8, null, 0);?><?php }?>


<!--[if lt IE 7 ]><html class="no-js oldie ie6" lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
"> <![endif]-->
<!--[if IE 7 ]><html class="no-js oldie ie7" lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
"> <![endif]-->
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
" class="no-js"> <!--<![endif]-->
<head>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.head-top"),$_smarty_tpl);?>

    
    <script>(function(H) { H.className=H.className.replace(/\bno-js\b/,'js') } )(document.documentElement);</script>

    <meta charset="utf-8">

    
    <title><?php if ($_smarty_tpl->tpl_vars['page_title']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page_title']->value,$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['breadcrumbs']->value) {?><?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['breadcrumbs']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
 - <?php } ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
<?php } else { ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
<?php }?></title>

    
    <meta name="generator" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia V2'),$_smarty_tpl);?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['page_description']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page_description']->value,$_smarty_tpl);?>
<?php } else { ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['store_description']->value),120),$_smarty_tpl);?>
<?php }?>">
    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('stylesheets', array('file'=>'assets/dist/css/thelia.min.css')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/dist/css/thelia.min.css'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <link rel="stylesheet" href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
">
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/dist/css/thelia.min.css'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.stylesheet"),$_smarty_tpl);?>


    
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"account.stylesheet"),$_smarty_tpl);?>



    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/dist/img/favicon.ico'),$_smarty_tpl);?>
">
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/dist/img/favicon.png'),$_smarty_tpl);?>
" />

    
    <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'All products'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/feed/catalog/%lang",'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>
" />
    <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'All contents'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/feed/content/%lang",'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>
" />
    <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'All brands'),$_smarty_tpl);?>
"   href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/feed/brand/%lang",'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>
" />
    

    
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"assets/dist/js/vendors/html5shiv.min.js")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/html5shiv.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script>window.html5 || document.write('<script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"><\/script>');</script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/html5shiv.min.js"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"assets/dist/js/vendors/respond.min.js")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/respond.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script>window.respond || document.write('<script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"><\/script>');</script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/respond.min.js"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <![endif]-->

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.head-bottom"),$_smarty_tpl);?>

</head>
<body class="page-account" itemscope itemtype="http://schema.org/WebPage">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.body-top"),$_smarty_tpl);?>


    <!-- Accessibility -->
    <a class="sr-only" href="#content"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Skip to content"),$_smarty_tpl);?>
</a>

    <div class="page" role="document">

        <div class="header-container" itemscope itemtype="http://schema.org/WPHeader">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.header-top"),$_smarty_tpl);?>

            <div class="navbar navbar-default navbar-secondary" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div class="container">

                    <div class="navbar-header">
                        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-secondary">
                            <span class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Toggle navigation"),$_smarty_tpl);?>
</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand visible-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
</a>
                    </div>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.navbar-secondary")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.navbar-secondary"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        
                        <nav class="navbar-collapse collapse nav-secondary" role="navigation" aria-label="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Secondary Navigation"),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.navbar-secondary"),$_smarty_tpl);?>

                        </nav>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.navbar-secondary"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>


            <header class="container" role="banner">
                <div class="header row">
                    <h1 class="logo container hidden-xs">
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
">
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/dist/img/logo.png','failsafe'=>true),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_tmp9, null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['image']->value==null) {?>
                                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/dist/img/logo.gif','failsafe'=>true),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_tmp10, null, 0);?>
                            <?php }?>
                            <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
">
                        </a>
                    </h1>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.navbar-primary"),$_smarty_tpl);?>

                </div>
            </header><!-- /.header -->

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.header-bottom"),$_smarty_tpl);?>

        </div><!-- /.header-container -->

        <main class="main-container" role="main">
            <div class="container">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.content-top"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->getSubTemplate ("misc/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div id="content">
    <div class="main">

        <article class="col-main" role="main" aria-labelledby="main-label">

            <h1 id="main-label" class="page-header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"My Account"),$_smarty_tpl);?>
</h1>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"account.top"),$_smarty_tpl);?>

            <div id="account" class="panel-group">
                <div class="panel panel-default account-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#account" href="#account-info">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Personal Information"),$_smarty_tpl);?>

                            </a>
                        </h4>
                    </div>
                    <div id="account-info" class="panel-collapse collapse in">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"customer",'name'=>"customer.info")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer.info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="panel-body">
                            <p class="fn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SHORT']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucwords($_smarty_tpl->tpl_vars['FIRSTNAME']->value),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(mb_strtoupper($_smarty_tpl->tpl_vars['LASTNAME']->value, 'UTF-8'),$_smarty_tpl);?>
</p>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"address",'name'=>"address.default",'default'=>"true")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"address",'name'=>"address.default",'default'=>"true"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <ul class="list-info list-unstyled row">
                                <li class="col-sm-4">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_address'][0][0]->formatAddress(array('address'=>$_smarty_tpl->tpl_vars['ID']->value,'html_tag'=>'address','html_class'=>'adr'),$_smarty_tpl);?>

                                </li>
                                <li class="col-sm-4">
                                    <?php if ($_smarty_tpl->tpl_vars['PHONE']->value!='') {?>
                                        <span class="tel"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PHONE']->value,$_smarty_tpl);?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['CELLPHONE']->value!='') {?>
                                        <span class="mobile"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CELLPHONE']->value,$_smarty_tpl);?>
</span>
                                    <?php }?>
                                    <span class="email"><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['EMAIL']->value,'encode'=>"hex"),$_smarty_tpl);?>
</span>
                                </li>
                                <li class="group-btn col-sm-4">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/update"),$_smarty_tpl);?>
" class="btn btn-link"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Change my account information"),$_smarty_tpl);?>
</a>
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/password"),$_smarty_tpl);?>
" class="btn btn-link"><i class="fa fa-lock"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Change my password"),$_smarty_tpl);?>
</a>
                                </li>
                            </ul>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"address",'name'=>"address.default",'default'=>"true"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer.info"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
                <div class="panel panel-default account-address">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#account" href="#account-address">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"My Address book"),$_smarty_tpl);?>

                            </a>
                        </h4>
                    </div>
                    <div id="account-address" class="panel-collapse collapse">
                        <div class="panel-body">
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/address/create"),$_smarty_tpl);?>
" class="btn btn-link pull-right"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Add a new address"),$_smarty_tpl);?>
</a>
                            <table class="table table-address" role="presentation" summary="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"My Address Books"),$_smarty_tpl);?>
">
                                <tbody>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"address",'name'=>"customer.addresses",'customer'=>"current")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"address",'name'=>"customer.addresses",'customer'=>"current"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <tr class="<?php if ($_smarty_tpl->tpl_vars['DEFAULT']->value==1) {?>address-primary<?php } else { ?>address-additional<?php }?>" id="customer-address-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
                                    <th>
                                        <?php if ($_smarty_tpl->tpl_vars['DEFAULT']->value===1) {?>
                                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['LABEL']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default']->value : $tmp),$_smarty_tpl);?>

                                            <span class="label label-info   "><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Main Address"),$_smarty_tpl);?>
</span>
                                        <?php } else { ?>
                                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['LABEL']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default']->value : $tmp),$_smarty_tpl);?>

                                        <?php }?>
                                    </th>
                                    <td>
                                        <ul class="list-address list-unstyled row">
                                            <li class="col-sm-4">
                                                <span class="fn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SHORT']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"customer.title.info",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucwords($_smarty_tpl->tpl_vars['FIRSTNAME']->value),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(mb_strtoupper($_smarty_tpl->tpl_vars['LASTNAME']->value, 'UTF-8'),$_smarty_tpl);?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['COMPANY']->value) {?>
                                                    <span class="org"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['COMPANY']->value,$_smarty_tpl);?>
</span>
                                                <?php }?>
                                            </li>
                                            <li class="col-sm-4">
                                                <address class="adr">
                                                    <span class="street-address"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS1']->value,$_smarty_tpl);?>
</span><br>
                                                    <?php if ($_smarty_tpl->tpl_vars['ADDRESS2']->value!='') {?>
                                                        <span class="street-address"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS2']->value,$_smarty_tpl);?>
</span><br>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ADDRESS3']->value!='') {?>
                                                        <span class="street-address"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS3']->value,$_smarty_tpl);?>
</span><br>
                                                    <?php }?>
                                                    <span class="postal-code"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ZIPCODE']->value,$_smarty_tpl);?>
</span>
                                                    <span class="locality"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CITY']->value,$_smarty_tpl);?>
,
                                                    <span class="country-name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"customer.country.info",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"customer.country.info",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"customer.country.info",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></span>
                                                    <?php if ($_smarty_tpl->tpl_vars['STATE']->value) {?><span class="state-name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"state",'name'=>"customer.state.info",'id'=>$_smarty_tpl->tpl_vars['STATE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"state",'name'=>"customer.state.info",'id'=>$_smarty_tpl->tpl_vars['STATE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"state",'name'=>"customer.state.info",'id'=>$_smarty_tpl->tpl_vars['STATE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></span><?php }?>
                                                </address>
                                            </li>
                                            <li class="col-sm-4">
                                                <?php if ($_smarty_tpl->tpl_vars['CELLPHONE']->value!='') {?>
                                                    <span class="tel"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CELLPHONE']->value,$_smarty_tpl);?>
</span><br>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['PHONE']->value!='') {?>
                                                    <span class="tel"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PHONE']->value,$_smarty_tpl);?>
</span><br>
                                                <?php }?>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/address/update/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" class="btn btn-primary" data-toggle="tooltip" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Edit this address"),$_smarty_tpl);?>
"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Edit"),$_smarty_tpl);?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['DEFAULT']->value!=1) {?>
                                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/address/delete/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" class="btn btn-primary" data-confirm="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this address ?"),$_smarty_tpl);?>
" data-confirm-callback="address.delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove this address"),$_smarty_tpl);?>
" data-toggle="tooltip"><i class="fa fa-remove"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Cancel"),$_smarty_tpl);?>
</a>
                                            <?php }?>
                                        </div>
                                    </td>
                                </tr>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"address",'name'=>"customer.addresses",'customer'=>"current"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default account-orders">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#account" href="#account-orders">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"My Orders"),$_smarty_tpl);?>

                            </a>
                        </h4>
                    </div>
                    <div id="account-orders" class="panel-collapse collapse">
                        <div class="panel-body table-responsive">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"customer.orders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"customer.orders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <table class="table table-orders table-bordered table-hover" summary="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"List of orders"),$_smarty_tpl);?>
">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Order number"),$_smarty_tpl);?>
</th>
                                    <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Date"),$_smarty_tpl);?>
</th>
                                    <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Amount"),$_smarty_tpl);?>
</th>
                                    <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Status"),$_smarty_tpl);?>
</th>
                                    <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View"),$_smarty_tpl);?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order",'name'=>"customer.orders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"customer.orders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <tr>
                                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
</td>
                                    <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_smarty_tpl->tpl_vars['CREATE_DATE']->value),$_smarty_tpl);?>
</td>
                                    <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TOTAL_TAXED_AMOUNT']->value,'currency_id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value),$_smarty_tpl);?>
</td>
                                    <td>
                                        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['STATUS']->value,$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order-status",'name'=>"order.status",'id'=>$_tmp11)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order-status",'name'=>"order.status",'id'=>$_tmp11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php $_smarty_tpl->tpl_vars["orderStatusCode"] = new Smarty_variable("order_".((string)$_smarty_tpl->tpl_vars['CODE']->value), null, 0);?>
                                            <?php if ($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['orderStatusCode']->value)=='') {?>
                                                <?php $_smarty_tpl->tpl_vars["defaultLabel"] = new Smarty_variable("label-default", null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars["orderStatusLabel"] = new Smarty_variable($_smarty_tpl->tpl_vars['CODE']->value, null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars["defaultLabel"] = new Smarty_variable('', null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars["orderStatusLabel"] = new Smarty_variable($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['orderStatusCode']->value), null, 0);?>
                                            <?php }?>
                                            <span class="label <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultLabel']->value,$_smarty_tpl);?>
 label-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderStatusLabel']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</span>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order-status",'name'=>"order.status",'id'=>$_tmp11), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/order/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" class="btn btn-link" data-toggle="tooltip" title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View order %ref details",'ref'=>$_tmp12),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Order details"),$_smarty_tpl);?>
</a>
                                    </td>
                                </tr>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"customer.orders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </tbody>
                            </table>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"customer.orders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"customer.orders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer.orders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="alert alert-warning">
                                <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Warning"),$_smarty_tpl);?>
!</strong> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You don't have orders yet."),$_smarty_tpl);?>

                            </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer.orders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"account.additional",'fields'=>"id,title,content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"account.additional",'fields'=>"id,title,content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"account.additional")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"account.additional"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="panel panel-default account-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#account" href="#account-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
">
                                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                    </a>
                                </h4>
                            </div>
                            <div id="account-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" class="panel-collapse collapse">
                                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                            </div>
                        </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"account.additional"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"account.additional",'fields'=>"id,title,content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"account.bottom"),$_smarty_tpl);?>

        </article>

    </div><!-- /.layout -->
</div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.content-bottom"),$_smarty_tpl);?>

            </div><!-- /.container -->
        </main><!-- /.main-container -->

        <section class="footer-container" itemscope itemtype="http://schema.org/WPFooter">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.footer-top")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-top"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <section class="footer-block">
                    <div class="container">
                        <div class="blocks row">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.footer-top"),$_smarty_tpl);?>

                        </div>
                    </div>
                </section>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-top"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.footer-top")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.footer-top"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <section class="footer-banner">
                    <div class="container">
                        <div class="banner row banner-col-3">
                            <div class="col col-sm-4">
                                <span class="fa fa-truck fa-flip-horizontal"></span>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Free shipping"),$_smarty_tpl);?>
 <small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders over "."$"."50"),$_smarty_tpl);?>
</small>
                            </div>
                            <div class="col col-sm-4">
                                <span class="fa fa-credit-card"></span>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Secure payment"),$_smarty_tpl);?>
 <small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Multi-payment platform"),$_smarty_tpl);?>
</small>
                            </div>
                            <div class="col col-sm-4">
                                <span class="fa fa-info"></span>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Need help ?"),$_smarty_tpl);?>
 <small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Questions ? See our F.A.Q."),$_smarty_tpl);?>
</small>
                            </div>
                        </div>
                    </div>
                </section><!-- /.footer-banner -->
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.footer-top"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.footer-body")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <section class="footer-block">
                    <div class="container">
                        <div class="blocks row">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.footer-body",'fields'=>"id,class,title,content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.footer-body",'fields'=>"id,class,title,content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.footer-body")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.footer-body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <div class="col col-sm-3">
                                    <section <?php if ($_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
"<?php }?> class="block <?php if ($_smarty_tpl->tpl_vars['class']->value) {?> block-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
<?php }?>">
                                        <div class="block-heading"><h3 class="block-title"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>
</h3></div>
                                        <div class="block-content">
                                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                                        </div>
                                    </section>
                                </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.footer-body"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.footer-body",'fields'=>"id,class,title,content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                </section>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-body"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.footer-bottom")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <footer class="footer-info" role="contentinfo">
                    <div class="container">
                        <div class="info row">
                            <div class="col-lg-9">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.footer-bottom"),$_smarty_tpl);?>

                            </div>
                            <div class="col-lg-3">
                                <section class="copyright"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Copyright"),$_smarty_tpl);?>
 &copy; <time datetime="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y-m-d'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y'),$_smarty_tpl);?>
</time> <a href="http://thelia.net" rel="external">Thelia</a></section>
                            </div>
                        </div>
                    </div>
                </footer>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.footer-bottom"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.footer-bottom")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.footer-bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <footer class="footer-info" role="contentinfo">
                    <div class="container">
                        <div class="info row">
                            <nav class="nav-footer col-lg-9" role="navigation">
                                <ul class="list-unstyled list-inline">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"information_folder_id"),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['folder_information'] = new Smarty_variable($_tmp13, null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['folder_information']->value) {?>
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['folder_information']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['folder_information']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['folder_information']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <?php }?>
                                    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/contact"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Contact Us"),$_smarty_tpl);?>
</a></li>
                                </ul>
                            </nav>
                            <section class="copyright col-lg-3"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Copyright"),$_smarty_tpl);?>
 &copy; <time datetime="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y-m-d'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y'),$_smarty_tpl);?>
</time> <a href="http://thelia.net" rel="external">Thelia</a></section>
                        </div>
                    </div>
                </footer><!-- /.footer-info -->
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.footer-bottom"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </section><!-- /.footer-container -->

    </div><!-- /.page -->

    
    <!-- JavaScript -->

    <!-- Jquery -->
    <!--[if lt IE 9]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><!--<![endif]-->
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"assets/dist/js/vendors/jquery.min.js")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/jquery.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script>window.jQuery || document.write('<script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"><\/script>');</script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/jquery.min.js"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    
    <?php if ($_smarty_tpl->tpl_vars['lang_code']->value!='en') {?>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
.js"></script>
    <?php }?>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"assets/dist/js/vendors/bootstrap.min.js")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/bootstrap.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script>if(typeof($.fn.modal) === 'undefined') { document.write('<script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"><\/script>'); }</script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/bootstrap.min.js"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"assets/dist/js/vendors/bootbox.js")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/bootbox.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"assets/dist/js/vendors/bootbox.js"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-javascript-include"),$_smarty_tpl);?>


    
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"account.after-javascript-include"),$_smarty_tpl);?>



    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.javascript-initialization"),$_smarty_tpl);?>

    <script>
       // fix path for addCartMessage
       // if you use '/' in your URL rewriting, the cart message is not displayed
       // addCartMessageUrl is used in thelia.js to update the mini-cart content
       var addCartMessageUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'ajax/addCartMessage'),$_smarty_tpl);?>
";
    </script>
    
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"account.javascript-initialization"),$_smarty_tpl);?>



    <!-- Custom scripts -->
    <script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/dist/js/thelia.min.js'),$_smarty_tpl);?>
"></script>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.body-bottom"),$_smarty_tpl);?>

</body>
</html>
<?php }} ?>
