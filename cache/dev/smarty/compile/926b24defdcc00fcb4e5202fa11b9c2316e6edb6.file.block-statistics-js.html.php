<?php /* Smarty version Smarty-3.1.20, created on 2016-08-30 09:26:37
         compiled from "/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-statistics-js.html" */ ?>
<?php /*%%SmartyHeaderCode:61671047857c5352d94df29-05503391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926b24defdcc00fcb4e5202fa11b9c2316e6edb6' => 
    array (
      0 => '/var/www/html/Mythelia/local/modules/HookAdminHome/templates/backOffice/default/block-statistics-js.html',
      1 => 1463582718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61671047857c5352d94df29-05503391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asset_url' => 0,
    'langcode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_57c5352d96a350_81524032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5352d96a350_81524032')) {function content_57c5352d96a350_81524032($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jqplot/jquery.jqplot.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/jquery.jqplot.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/jquery.jqplot.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jqplot/plugins/jqplot.highlighter.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.highlighter.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script type="text/javascript" src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.highlighter.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jqplot/plugins/jqplot.barRenderer.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.barRenderer.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script type="text/javascript" src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.barRenderer.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jqplot/plugins/jqplot.pieRenderer.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.pieRenderer.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script type="text/javascript" src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jqplot/plugins/jqplot.pieRenderer.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/moment-with-locales.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/moment-with-locales.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/moment-with-locales.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script>
jQuery(function($) {
  <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['langcode'] = new Smarty_variable(substr($_tmp15,0,2), null, 0);?>

  var jQplotDate = moment();

  $('#date-picker').val(moment().format('MM/YYYY'));

  $('#date-picker').datetimepicker({
    locale: "<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['langcode']->value,$_smarty_tpl);?>
",
    viewMode: 'months',
    format: 'MM/YYYY'
  }).on('dp.change', function (e) {
    // e.date is a moment.js date
    jQplotDate = e.date;

    statInputActive(true);

    retrieveJQPlotJson(
        jQplotDate,
        function () {
          statInputActive(false);
        },
        0
    );
  });

  $("#span-calendar").click(function (e) {
    $('#date-picker').focus();
  });

  function statInputActive(type) {
    $('#date-picker').attr('readonly', type);
    $('.js-stats-refresh').attr('disabled', type)
  }

  var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home/stats'),$_smarty_tpl);?>
";
  var jQplotData; // json data
  var jQPlotInstance; // global instance

  

  var jQPlotsOptions = {
    animate: true,
    axesDefaults: {
      tickOptions: {showMark: true, showGridline: true}
    },
    axes: {
      xaxis: {
        borderColor: '#ccc',
        ticks: [],
        tickOptions: {showGridline: false}
      },
      yaxis: {
        tickOptions: {showGridline: true, showMark: false, showLabel: false, shadow: false}
      }
    },
    seriesDefaults: {
      lineWidth: 3,
      shadow: false,
      markerOptions: {shadow: false, style: 'filledCircle', size: 12}
    },
    grid: {
      background: '#FFF',
      shadow: false,
      borderColor: '#FFF'
    },
    highlighter: {
      show: true,
      sizeAdjust: 7,
      tooltipLocation: 'n',
      tooltipContentEditor: function (str, seriesIndex, pointIndex, plot) {

        // Return axis value : data value
        //return jQPlotsOptions.axes.xaxis.ticks[pointIndex][1] + ': ' + plot.data[seriesIndex][pointIndex][1];
        return plot.data[seriesIndex][pointIndex][1];
      }
    }
  };

  // Get initial data Json
  retrieveJQPlotJson(jQplotDate);

  $('[data-toggle="jqplot"]').click(function () {

    $(this).toggleClass('active');
    jsonSuccessLoad();

  });

  $('.js-stats-refresh').click(function (e) {
    statInputActive(true);

    retrieveJQPlotJson(
        jQplotDate,
        function () {
          statInputActive(false);
        },
        1
    );
  });

  /**
   * @param {moment} moment date
   * @param {function=} callback
   * @param {number=} flush
   */
  function retrieveJQPlotJson(moment, callback, flush) {

    if (typeof flush === "undefined") {
      flush = 0;
    }

    // JS month range is [0..11], the url requires a PHP month range [1..12]
    $.getJSON(url, {month: moment.month() + 1, year: moment.year(), flush: flush})
        .done(function (data) {
          jQplotData = data;
          jsonSuccessLoad();
          if (callback) {
            callback();
          }
        })
        .fail(jsonFailLoad);
  }

  function initJqplotData(json) {
    var series = [];
    var seriesColors = [];
    $('[data-toggle="jqplot"].active').each(function (i) {
      var position = $(this).index();
      series.push(json.series[position].data);
      seriesColors.push(json.series[position].color);
    });

    // Number of days to display ( = data.length in one serie)
    var days = json.series[0].data.length;

    // Add days to xaxis
    var ticks = [];
    for (var i = 1; i < (days + 1); i++) {
      ticks.push([i - 1, i]);
    }
    jQPlotsOptions.axes.xaxis.ticks = ticks;

    // Graph title
    jQPlotsOptions.title = json.title;

    // Graph series colors
    jQPlotsOptions.seriesColors = seriesColors;

    return series;
  }

  function jsonFailLoad(data) {
    $('#jqplot').html('<div class="alert alert-danger">An error occurred while reading from JSON file</div>');
  }

  function jsonSuccessLoad() {

    // Init jQPlot
    var series = initJqplotData(jQplotData);

    // Start jQPlot
    if (jQPlotInstance) {
      jQPlotInstance.destroy();
    }
    jQPlotInstance = $.jqplot("jqplot", series, jQPlotsOptions);

    $(window).bind('resize', function (event, ui) {
      jQPlotInstance.replot({resetAxes: true});
    });

  }
  
});
</script><?php }} ?>
