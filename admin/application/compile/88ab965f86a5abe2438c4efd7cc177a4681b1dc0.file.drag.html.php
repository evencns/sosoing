<?php /* Smarty version Smarty-3.1.7, created on 2012-06-26 11:04:01
         compiled from "application/views\frame\drag.html" */ ?>
<?php /*%%SmartyHeaderCode:253584fe97b01461434-79912991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ab965f86a5abe2438c4efd7cc177a4681b1dc0' => 
    array (
      0 => 'application/views\\frame\\drag.html',
      1 => 1340698511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253584fe97b01461434-79912991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_IMAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe97b016116b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe97b016116b')) {function content_4fe97b016116b($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<style type="text/css">
body {
  margin: 0;
  padding: 0;
  background: #80BDCB;
  cursor: E-resize;
}
</style>
<script>
var pic = new Image();
pic.src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
arrow_right.gif";

function toggleMenu()
{
  frmBody = parent.document.getElementById('frame-body');
  imgArrow = document.getElementById('img');

  if (frmBody.cols == "0, 10, *")
  {
    frmBody.cols="200, 10, *";
    imgArrow.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
arrow_left.gif";
  }
  else
  {
    frmBody.cols="0, 10, *";
    imgArrow.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
arrow_right.gif";
  }
}

var orgX = 0;
document.onmousedown = function(e)
{
  var evt = Utils.fixEvent(e);
  orgX = evt.clientX;

  if (Browser.isIE) document.getElementById('tbl').setCapture();
}

document.onmouseup = function(e)
{
  var evt = Utils.fixEvent(e);

  frmBody = parent.document.getElementById('frame-body');
  frmWidth = frmBody.cols.substr(0, frmBody.cols.indexOf(','));
  frmWidth = (parseInt(frmWidth) + (evt.clientX - orgX));

  frmBody.cols = frmWidth + ", 10, *";

  if (Browser.isIE) document.releaseCapture();
}

var Browser = new Object();

Browser.isMozilla = (typeof document.implementation != 'undefined') && (typeof document.implementation.createDocument != 'undefined') && (typeof HTMLDocument != 'undefined');
Browser.isIE = window.ActiveXObject ? true : false;
Browser.isFirefox = (navigator.userAgent.toLowerCase().indexOf("firefox") != - 1);
Browser.isSafari = (navigator.userAgent.toLowerCase().indexOf("safari") != - 1);
Browser.isOpera = (navigator.userAgent.toLowerCase().indexOf("opera") != - 1);

var Utils = new Object();

Utils.fixEvent = function(e)
{
  var evt = (typeof e == "undefined") ? window.event : e;
  return evt;
}
</script>
</head>
<body onselect="return false;">
<table height="100%" cellspacing="0" cellpadding="0" id="tbl">
  <tr><td><a href="javascript:toggleMenu();"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
arrow_left.gif" width="10" height="30" id="img" border="0" /></a></td></tr>
</table>
</body>
</html><?php }} ?>