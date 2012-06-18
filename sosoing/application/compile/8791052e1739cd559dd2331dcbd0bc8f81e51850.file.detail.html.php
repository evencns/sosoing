<?php /* Smarty version Smarty-3.1.7, created on 2012-06-15 09:34:27
         compiled from "application/views\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:209574fdae583a72440-48494997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8791052e1739cd559dd2331dcbd0bc8f81e51850' => 
    array (
      0 => 'application/views\\detail.html',
      1 => 1338888678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209574fdae583a72440-48494997',
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
  'unifunc' => 'content_4fdae583bfd15',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdae583bfd15')) {function content_4fdae583bfd15($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>搜搜详情</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/detail.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/footer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/login.css" />
<script language="JavaScript" src="public/js/login.js" language="javascript" charset='gb2312' ></script>
</head>
<body background="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/bg.gif">
	<div class="top">
		<div class="logo"><img width="250px" height="80px" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/logo.gif"> </div>
		        	<div class="login">
		<div class="loginList">账号 &nbsp;<input type="text"/>&nbsp;&nbsp;<input type="checkbox"/>&nbsp;&nbsp;自动登录</div>
		<div class="loginList">密码 &nbsp;<input type="text"/>&nbsp;&nbsp;<input id ="login" class="loginButton" type="button" value="登录" "/>&nbsp;&nbsp;<a href="##" style="text-decoration:none" onclick="alertWin('注册',550,310);" nfocus=this.blur()>注册</a></div>
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
				 <div id="" style=" position: absolute;left: 120px;top: 15px;font-size:14px;"><a href="##" style="text-decoration:none;">首页</a></div>
				 <!--<div id="" style=" position: absolute;left: 210px;top: 92px;font-size:14px;"><h2>|</h2></div>-->
				 <div id="" style=" position: absolute;left: 205px;top: 15px;font-size:14px;"><a href="##" style="text-decoration:none; ">电子产品</a></div>
				 <!--<div id="" style=" position: absolute;left: 320px;top: 92px;font-size:14px;"><h2>|</h2></div>-->
				 <div id="" style=" position: absolute;left: 320px;top: 15px;font-size:14px;"><a href="##" style="text-decoration:none; ">化妆品</a></div>
				 <!--<div id="" style=" position: absolute;left: 426px;top: 92px;font-size:14px;"><h2>|</h2></div>-->
				 <div id="" style=" position: absolute;left: 415px;top: 15px;font-size:14px;"><a href="##" style="text-decoration:none; ">美食</a></div>
				 <!--<div id="" style=" position: absolute;left: 525px;top: 92px;font-size:14px;"><h2>|</h2></div>-->
				 <div id="" style=" position: absolute;left: 500px;top: 15px;font-size:14px;"><a href="channel.php" style="text-decoration:none; ">图书</a></div>
			</div>
		
	</div>
	<div  class="leftcolumn">
		<div class = "fist-context"></div>
		<div class = "box_context"> 
			<div class="img_context"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s7028307.jpg" style="width:180px;height:250px; "/></div>
			<div class="img_font">
				<div class="font_context">副标题：#####</div>
				<div class="font_context">原作名：#####</div>
				<div class="font_context">作者： #####</div>
				<div class="font_context">译者： ####</div>
				<div class="font_context">出版社：######</div>
				<div class="font_context">出版年：######</div>
				<div class="font_context">页数：########</div>
				<div class="font_context">定价：########</div>
				<div class="font_context">装帧：########</div>
				<div class="font_context">ISBN:#########</div>
			</div>
			<div class="evaluate">Here is the book evaluation area.</div>
			<div class="online">
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/qianbi.jpg"/><a href="##" style="text-decoration:none;font-size:13px ">在线阅读</a>
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/qianbi.jpg"/><a href="##" style="text-decoration:none;font-size:13px ">立即下载</a>
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/yuan.jpg"/><a href="##" style="text-decoration:none;font-size:13px ">立即购买</a>
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/+.jpg"/><a href="##" style="text-decoration:none;font-size:13px ">收藏此书</a>
			</div>
			<div class="recommend" >推荐</div>
		    <div class = "introduction">内容简介........</div>
			<div class="introductionContext">&nbsp;&nbsp;
				佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 


			</div>
			<div class = "introduction">作者简介......</div>
			<div class="introductionContext">&nbsp;&nbsp;
			佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 

</div>
		</div> 
		<div class="book_evaluate">
			<div class="tourist_evaluate">书评........(共##页)</div>
			<div class="tourist_Image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
			<div class="tourist_title"><div class="tourist_title_context">我不是为了第一名而存在这个世界。</div></div>
			<div class="tourist_name">刷瓶达人夏娜军(It's decription.) +评分标志</div>
			<div class="tourist_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 

</div>
		</div>
		<div class="book_evaluate">
			
			<div class="tourist_Image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
			<div class="tourist_title"><div class="tourist_title_context">我不是为了第一名而存在这个世界。</div></div>
			<div class="tourist_name">我不是为了第一名而存在这个世界。</div>
			<div class="tourist_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 

</div>
		</div>
		<div class="book_evaluate">
			
			<div class="tourist_Image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
			<div class="tourist_title"><div class="tourist_title_context">我不是为了第一名而存在这个世界。</div></div>
			<div class="tourist_name">我不是为了第一名而存在这个世界。</div>
			<div class="tourist_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 

</div>
		</div>
		 <div class="book_evaluate">
			
			<div class="tourist_Image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
			<div class="tourist_title"><div class="tourist_title_context">我不是为了第一名而存在这个世界。</div></div>
			<div class="tourist_name">我不是为了第一名而存在这个世界。</div>
			<div class="tourist_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		</div>
		<div class="book_evaluate">
			
			<div class="tourist_Image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
			<div class="tourist_title"><div class="tourist_title_context">我不是为了第一名而存在这个世界。</div></div>
			<div class="tourist_name">我不是为了第一名而存在这个世界。</div>
			<div class="tourist_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 

然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		</div>
		<div class="footer">页脚</div>
	</div>
	<div class="rightcolumn">
		<div class="author_recommend">
			此作者其它作品.......
		</div>
		<div class="author_product">
			<div class="author_bookimage"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/2.jpg" width="80px" height="120px"/></div>
			<div class="author_bookName">bookName</div>
			
			<div class="author_bookimage"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/2.jpg" width="80px" height="120px"/></div>
			<div class="author_bookName">bookName</div>
		</div>
		<div class="everyOneLookBook">
			<div class="author_recommend">
				大家都在看.......
			</div>
			<div class="author_product">
				<div class="author_bookimage"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/2.jpg" width="80px" height="120px"/></div>
				<div class="author_bookName">bookName</div>
				<div class="author_bookimage"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/2.jpg" width="80px" height="120px"/></div>
				<div class="author_bookName">bookName</div>
				<div class="author_bookimage"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/2.jpg" width="80px" height="120px"/></div>
				<div class="author_bookName">bookName</div>
			</div>
	</div>
	</div>
	
</body>
</html>
<?php }} ?>