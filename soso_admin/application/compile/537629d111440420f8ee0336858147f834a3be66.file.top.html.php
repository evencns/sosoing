<?php /* Smarty version Smarty-3.1.7, created on 2012-06-21 16:54:53
         compiled from "application/views\frame\top.html" */ ?>
<?php /*%%SmartyHeaderCode:151144fe2e15db8c126-58803028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537629d111440420f8ee0336858147f834a3be66' => 
    array (
      0 => 'application/views\\frame\\top.html',
      1 => 1340268415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151144fe2e15db8c126-58803028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_CSS' => 0,
    'URL_IMAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe2e15dc34ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe2e15dc34ea')) {function content_4fe2e15dc34ea($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
general.css" rel="stylesheet" type="text/css" />

<style type="text/css">
#header-div {background: #278296;border-bottom: 1px solid #FFF;}
#logo-div {height: 50px;float: left;}
#license-div {height: 50px;float: left;text-align:center;vertical-align:middle;line-height:50px;}
#license-div a:visited, #license-div a:link {color: #EB8A3D;}
#license-div a:hover {text-decoration: none;color: #EB8A3D;}
#submenu-div {height: 50px;}
#submenu-div ul {margin: 0;padding: 0;list-style-type: none;}
#submenu-div li {float: right;padding: 0 10px;margin: 3px 0;border-left: 1px solid #FFF;}
#submenu-div a:visited, #submenu-div a:link {color: #FFF;text-decoration: none;}
#submenu-div a:hover {color: #F5C29A;}
#loading-div {clear: right;text-align: right;display: block;}
#menu-div {background: #80BDCB;font-weight: bold;height: 24px;line-height:24px;}
#menu-div ul {margin: 0;padding: 0;list-style-type: none;}
#menu-div li {float: left;border-right: 1px solid #192E32;border-left:1px solid #BBDDE5;}
#menu-div a:visited, #menu-div a:link {display:block;padding: 0 20px;text-decoration: none;color: #335B64;background:#9CCBD6;}
#menu-div a:hover {color: #000;background:#80BDCB;}
#submenu-div a.fix-submenu{ clear:both; margin-left:5px; padding:1px 5px; *padding:3px 5px 5px; background:#DDEEF2; color:#278296; }
#submenu-div a.fix-submenu:hover{ padding:1px 5px; *padding:3px 5px 5px; background:#FFF; color:#278296; }
#menu-div li.fix-spacel{ width:30px; border-left:none; }
#menu-div li.fix-spacer{ border-right:none; }
</style>

<script>
function pageReload()
{
    window.top.frames['main-frame'].document.location.reload();
    window.top.frames['header-frame'].document.location.reload();
}
</script>
</head>
<body>
<div id="header-div">
    <div id="logo-div" style="bgcolor:#000000;">
        <a href="/" target="_blank">
            <!--img style="border:0" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
logo.gif" alt="搜搜赢" /-->
        </a>
    </div>
    <div id="license-div" style="bgcolor:#000000;"></div>
    <div id="submenu-div">
        <ul>
            <li>
                <a href="privilege.php?act=modif" target="main-frame">个人设置</a>
            </li>
            <li style="border-left:none;">
                <a href="#" onclick="pageReload()">刷新</a>
            </li>
        </ul>

        <div style="padding:5px 10px 0 0;clear:right;text-align:right;color:#FF9900;width:40%;float:right">
            <a href="privilege.php?act=logout" target="_top" class="fix-submenu">退出</a>
        </div>

        <div id="load-div" style="padding:5px 10px 0 0;text-align:right;color:#FF9900;display:none;width:40%;float:right">
            <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
top_loader.gif" style="vertical-align: middle"> 加载中...
        </div>
    </div>
</div>
<div id="menu-div">
    <ul>
        <li class="fix-spacel">&nbsp;</li>
        <li><a href="#" target="main-frame"></a></li>
        <li><a href="#" target="main-frame"></a></li>
        <li><a href="#" target="main-frame"></a></li>
        <li class="fix-spacer">&nbsp;</li>
    </ul>
    <br class="clear" />
</div>
</body>
</html><?php }} ?>