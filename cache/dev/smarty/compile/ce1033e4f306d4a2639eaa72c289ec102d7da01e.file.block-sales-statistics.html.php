<?php /* Smarty version Smarty-3.1.20, created on 2016-08-30 09:26:37
         compiled from "/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-sales-statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:125098457757c5352d59ab00-10925610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1033e4f306d4a2639eaa72c289ec102d7da01e' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-sales-statistics.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125098457757c5352d59ab00-10925610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SYMBOL' => 0,
    'defaultCurrency' => 0,
    'salesNoShipping' => 0,
    'orderCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57c5352d610ce6_07124994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5352d610ce6_07124994')) {function content_57c5352d610ce6_07124994($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="#statjour" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Today",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
    <li><a href="#statmois" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This month",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
    <li><a href="#statannee" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This year",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
  </ul>

  <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'defaultCurrency', null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

  <div class="tab-content">
    <div class="tab-pane fade active in" id="statjour">
      <div class="table-responsive">
        <table class="table table-striped">
          <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"today",'endDate'=>"today"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"today",'endDate'=>"today",'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp9, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['salesNoShipping']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Yesterday sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"yesterday",'endDate'=>"yesterday"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>"today",'endDate'=>"today"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp10, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderCount']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Average cart",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['orderCount']->value==0) {?>
                0 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(round(($_smarty_tpl->tpl_vars['salesNoShipping']->value/$_smarty_tpl->tpl_vars['orderCount']->value),"2"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php }?>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="statmois">
      <div class="table-responsive">
        <table class="table table-striped">
          <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_month",'endDate'=>"this_month"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_month",'endDate'=>"this_month",'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp11, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['salesNoShipping']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Previous month sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"last_month",'endDate'=>"last_month"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>"this_month",'endDate'=>"this_month"),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp12, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderCount']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Average cart",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['orderCount']->value==0) {?>
                0 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(round(($_smarty_tpl->tpl_vars['salesNoShipping']->value/$_smarty_tpl->tpl_vars['orderCount']->value),"2"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php }?>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="statannee">
      <div class="table-responsive">
        <table class="table table-striped">
          <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_year",'endDate'=>"this_year"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_year",'endDate'=>"this_year",'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp13, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['salesNoShipping']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Previous year sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"last_year",'endDate'=>"last_year"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>"this_year",'endDate'=>"this_year"),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp14, null, 0);?>
              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderCount']->value,$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Average cart",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['orderCount']->value==0) {?>
                0 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(round(($_smarty_tpl->tpl_vars['salesNoShipping']->value/$_smarty_tpl->tpl_vars['orderCount']->value),"2"),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['defaultCurrency']->value,$_smarty_tpl);?>

              <?php }?>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
