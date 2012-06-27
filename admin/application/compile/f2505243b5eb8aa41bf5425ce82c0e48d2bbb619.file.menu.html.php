<?php /* Smarty version Smarty-3.1.7, created on 2012-06-26 11:04:01
         compiled from "application/views\frame\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:98514fe97b01502001-59528309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2505243b5eb8aa41bf5425ce82c0e48d2bbb619' => 
    array (
      0 => 'application/views\\frame\\menu.html',
      1 => 1340698511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98514fe97b01502001-59528309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_CSS' => 0,
    'URL_IMAGE' => 0,
    'menu' => 0,
    'name' => 0,
    'one' => 0,
    'i' => 0,
    'URL_JS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe97b0161d3e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe97b0161d3e')) {function content_4fe97b0161d3e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
general.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body {background: #80BDCB;}
#tabbar-div {background: #278296;padding-left: 10px;height: 21px;padding-top: 0px;}
#tabbar-div p {margin: 1px 0 0 0;}
.tab-front {background: #80BDCB;line-height: 20px;font-weight: bold;padding: 4px 15px 4px 18px;border-right: 2px solid #335b64;cursor: pointer;}
.tab-back {color: #F4FAFB;line-height: 20px;padding: 4px 15px 4px 18px;cursor: hand;cursor: pointer;}
.tab-hover {color: #F4FAFB;line-height: 20px;padding: 4px 15px 4px 18px;cursor: hand;cursor: pointer;background: #2F9DB5;}
#top-div{padding: 3px 0 2px;background: #BBDDE5;margin: 5px;text-align: center;}
#main-div {border: 1px solid #345C65;padding: 5px;margin: 5px;background: #FFF;}
#menu-list {padding: 0;margin: 0;}
#menu-list ul {padding: 0;margin: 0;list-style-type: none;color: #335B64;}
#menu-list li {padding-left: 16px;line-height: 16px;cursor: hand;cursor: pointer;}
#main-div a:visited, #menu-list a:link, #menu-list a:hover {color: #335B64text-decoration: none;}
#menu-list a:active {color: #EB8A3D;}
#help-title {font-size: 14px;color: #000080;margin: 5px 0;padding: 0px;}
#help-content {margin: 0;padding: 0;}
.tips {color: #CC0000;}
.link {color: #000099;}
</style>

</head>

<body>
<div id="tabbar-div">
    <p>
        <span style="float:right; padding: 3px 5px;" >
			<img id="toggleImg" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_minus.gif" width="9" height="9" border="0"/>
        </span>
        <span class="tab-front" id="menu-tab">菜单</span>
    </p>
</div>
<div id="main-div">
    <div id="menu-list">
        <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
$_smarty_tpl->tpl_vars['one']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['one']->key;
?>
        <ul>
            <li class="explode">
                <img name="menu_plus" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_minus.gif" style="margin-right: 5px">
                <a name="menu_text"><b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b></a>
            </li>
            <li class="explode">
                <ul>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <li class="menu-item" style="margin-left: 15px">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="main-frame"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                    </li>
                <?php } ?>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </div>
    <div id="help-div" style="display:none">
        <h1 id="help-title"></h1>
        <div id="help-content"></div>
    </div>
</div>
</body>
</html>
<script src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
common.js"></script>
<script>
window.onload = function ()
{
	document.getElementById("toggleImg").onclick = function ()
	{
		var type = "none";
		if (this.src.indexOf("menu_minus.gif") > -1) {
			this.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_plus.gif";
		} else {
			type = "";
			this.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_minus.gif";
		}
		menu(type);
		menuImg(type == "none" ? "plus" : "minus");
	}

	var list = document.getElementsByName("menu_plus");
	var list_text = document.getElementsByName("menu_text");
	for (var i in list) {
		list[i].onclick = function ()
		{
			if (this.src.indexOf("menu_minus.gif") > -1) {
				this.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_plus.gif";

				var list = this.parentNode.parentNode.children;
				var len = list.length;
				var k = 0;
				for (var j in list)
				{
					if (list[j].tagName == "LI") {
						++k
						if (k == 2)
						{
							list[j].style.display = "none";
						}
					}
				}
			} else {
				this.src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_minus.gif";

				var list = this.parentNode.parentNode.children;
				var len = list.length;
				var k = 0;
				for (var j in list)
				{
					if (list[j].tagName == "LI") {
						++k
						if (k == 2)
						{
							list[j].style.display = "";
						}
					}
				}
			}
		}
	}
}
function menu(type)
{
	var parentTag = document.getElementById("menu-list");
	var childList = parentTag.children;
	var length = childList.length;
	for (var i in childList)
	{
		if (childList[i].tagName == "UL") {
			var list = childList[i].children;
			var len = list.length;
			var k = 0;
			for (var j in list)
			{
				if (list[j].tagName == "LI") {
					++k
					if (k == 2)
					{
						list[j].style.display = type;
					}
				}
			}
		}
	}
}

function menuImg(type)
{
	var list = document.getElementsByName("menu_plus");
	for (var i in list)	{
		list[i].src = "<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
menu_" + type + ".gif";
	}
}
</script><?php }} ?>