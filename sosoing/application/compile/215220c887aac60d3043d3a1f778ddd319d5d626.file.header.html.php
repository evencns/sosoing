<?php /* Smarty version Smarty-3.1.7, created on 2012-06-27 04:52:54
         compiled from "application/views\header.html" */ ?>
<?php /*%%SmartyHeaderCode:204444fe97cceecb1d7-66912470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215220c887aac60d3043d3a1f778ddd319d5d626' => 
    array (
      0 => 'application/views\\header.html',
      1 => 1340765569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204444fe97cceecb1d7-66912470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe97ccef1c9a',
  'variables' => 
  array (
    'URL_CSS' => 0,
    'URL_JS' => 0,
    'URL_IMAGE' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe97ccef1c9a')) {function content_4fe97ccef1c9a($_smarty_tpl) {?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜搜赢首页</title>
<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/detail.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/channel.css" />
<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/soso.css"   />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/footer.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/login.css"   />
<script src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/login.js"></script>
 </head>

 <body background="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/bg.gif" >
  <div class="top">
    <div class="logo">
        <a href="/" alt="搜搜赢", title="搜搜赢">
            <img width="250px" height="80px" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/logo.gif"> 
        </a>
    </div>
        <div class="login" id="login_div">
            <?php if (!$_smarty_tpl->tpl_vars['user']->value['username']){?>
                <form id="login_form"  method="post"   />
                <div class="loginList">账号 &nbsp;<input type="text" name="username" >&nbsp;&nbsp;
				<input type="checkbox"/>&nbsp;&nbsp;自动登录</div>
                <div class="loginList">密码 &nbsp;<input type="password" name="password" >&nbsp;&nbsp;
				<input id ="login" class="loginButton" type="submit" value="登录" />&nbsp;&nbsp;<a href="#" style="text-decoration:none" onclick="alertWin('注册',550,310);" onfocus="this.blur()">注册</a></div>
                </form>
            <?php }else{ ?>
                <script>
                    var html  = "尊敬的用户";
                        html += "<b style='color: orange; cursor: pointer' onclick='gotoHome()'>";
                        html += "<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
";
                        html += "</b>";
                        html += Util.getHours();
                        html += "好！|";
                        html += "<b style='cursor: pointer' onclick='logout()'>退出</b>";
                    $("#login_div").html(html);
                </script>	
            <?php }?>
        </div>
        <div class="shoushou">
            <form action="#" name="search">
                <table border="0" cellpadding="0" cellspacing="0" class="tab_search">
                    <tr>
                        <td>
                            <input type="text" name="q" title="Search" class="searchinput" id="searchinput" onkeydown="if (event.keyCode==13) {}" onblur="if(this.value=='')value='- 搜索你喜欢的 -';" onfocus="if(this.value=='-搜索你喜欢的 -')value='';" value="- 搜索你喜欢的 -" size="10"/>
                            </td>
                        <td>
                            <input type="image" width="21" height="17" class="searchaction" onclick="if(document.forms['search'].searchinput.value=='- Search Products -')document.forms['search'].searchinput.value='';" alt="Search" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/magglass.gif" border="0" hspace="2"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="navigation">
            <img  width="1200px" height="40px" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/navigation.gif">

            <div style=" position: absolute;left: 120px;top: 15px;font-size:14px; color: #666666">
                <a href="index.php" style="text-decoration:none;"> 首页</a>
            </div>

            <div style=" position: absolute;left: 205px;top: 15px;font-size:14px;color: #666666">
                <a href="#" style="text-decoration:none; ">电子产品</a>
            </div>

            <div style=" position: absolute;left: 320px;top: 15px;font-size:14px;color: #666666">
                <a href="#" style="text-decoration:none; ">化妆品</a>
            </div>

            <div style=" position: absolute;left: 415px;top: 15px;font-size:14px;color: #666666">
                <a href="/index.php/channel" style="text-decoration:none; ">图书</a>
            </div>

            <div style=" position: absolute;left: 500px;top: 15px;font-size:14px;color: #666666">
                <a href="#" style="text-decoration:none; ">美食</a>
            </div>
        </div>
    </div>
</div>
 </body>
</html>
<?php }} ?>