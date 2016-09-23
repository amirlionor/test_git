<?php /* Smarty version Smarty-3.1.20, created on 2016-09-23 09:47:07
         compiled from "/var/www/html/Mythelia/templates/frontOffice/default/misc/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86083216857e4ddfb864463-64446160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ceccee71cf001adf91b288365f62c7c4c2b255c' => 
    array (
      0 => '/var/www/html/Mythelia/templates/frontOffice/default/misc/breadcrumb.tpl',
      1 => 1463578323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86083216857e4ddfb864463-64446160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57e4ddfb896ae4_51307837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ddfb896ae4_51307837')) {function content_57e4ddfb896ae4_51307837($_smarty_tpl) {?><nav class="nav-breadcrumb" role="navigation" aria-labelledby="breadcrumb-label">
    <strong id="breadcrumb-label" class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You are here:"),$_smarty_tpl);?>
</strong>

    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" >
        <li itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement" ><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" itemprop="item">
            <span itemprop="name"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</span></a>
            <meta itemprop="position" content="1">
        </li>
        <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['breadcrumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration++;
 $_smarty_tpl->tpl_vars['breadcrumb']->last = $_smarty_tpl->tpl_vars['breadcrumb']->iteration === $_smarty_tpl->tpl_vars['breadcrumb']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['title']) {?>
            <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->last) {?>
                <li itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="active"><span itemprop="name"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
</span></li>
            <?php } else { ?>
                <li itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement" >
                    <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['breadcrumb']->value['url'])===null||$tmp==='' ? '#' : $tmp);?>
"  title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
" itemprop="item"><span itemprop="name"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
</span></a>
                    <meta itemprop="position" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['breadcrumb']->key+2,$_smarty_tpl);?>
">
                </li>
            <?php }?>
        <?php }?>
        <?php } ?>
    </ul>
</nav><!-- /.nav-breadcrumb -->
<?php }} ?>
