<?php /* Smarty version Smarty-3.1.7, created on 2012-06-26 06:07:33
         compiled from "application/views\channel.html" */ ?>
<?php /*%%SmartyHeaderCode:298364fe83ccba1af27-81731688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13025d2b885f7fd7fc49b102287ab8df948ec438' => 
    array (
      0 => 'application/views\\channel.html',
      1 => 1340683652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298364fe83ccba1af27-81731688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe83ccbb9f9b',
  'variables' => 
  array (
    'URL_CSS' => 0,
    'URL_JS' => 0,
    'URL_IMAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe83ccbb9f9b')) {function content_4fe83ccbb9f9b($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>频道页</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/channel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/login.css" />
<script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/login.js" language="javascript" charset='utf-8' ></script>

</head>
<body  >
<div class="top">
	<div class="logo"><img width="250px" height="80px" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/logo.gif"></div>
			<div class="login">
		<div class="loginList">账号 &nbsp;<input type="text"/>&nbsp;&nbsp;<input type="checkbox"/>&nbsp;&nbsp;自动登录</div>
		<div class="loginList">密码 &nbsp;<input type="text"/>&nbsp;&nbsp;<input id ="login" class="loginButton" type="button" value="登录" /> &nbsp;&nbsp;<a href="#" style="text-decoration:none" onclick="alertWin('注册',550,310);" nfocus=this.blur()>注册</a></div>
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

            <div id="" style=" position: absolute;left: 120px;top: 15px;font-size:14px;">
                <a href="/" style="text-decoration:none;"> 首页</a>
            </div>

            <div id="" style=" position: absolute;left: 205px;top: 15px;font-size:14px;">
                <a href="#" style="text-decoration:none; ">电子产品</a>
            </div>

            <div id="" style=" position: absolute;left: 320px;top: 15px;font-size:14px;">
                <a href="#" style="text-decoration:none; ">化妆品</a>
            </div>

            <div id="" style=" position: absolute;left: 415px;top: 15px;font-size:14px;">
                <a href="/index.php/channel" style="text-decoration:none; ">图书</a>
            </div>

            <div id="" style="position: absolute;left: 500px;top: 15px;font-size:14px;">
                <a href="#" style="text-decoration:none; ">美食</a>
            </div>
        </div>
    </div>
</div>

<div class="recommend_main">
	<div class="recommend_left">
		<div class="recommend_produ_img"><a href="/index.php/detail"><img width="90"  height="120" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s6974202.jpg"  /></a></div>
		<div class="recommend_produ_info">
			<div class="recommend_produ_info_lie"><h2>史蒂夫·乔布斯传</h2></div>
			<div class="recommend_produ_info_lie">作者：<a href="#" style="text-decoration:none">[美]沃尔特·艾沙克森</a> </div>
			<div class="recommend_produ_info_hang">译者：<a href="#" style="text-decoration:none">管延折/魏群/余倩/赵萌萌</a></div>
			<div class="recommend_produ_info_lie">出版社：中信出版社  </div>
			<div class="recommend_produ_info_hang">出版年:2011-10-24</div>
			<div class="recommend_produ_info_lie">标签：<a href="#" style="text-decoration:none">平装、原装版、乔布斯、热门书籍、2011最畅销书籍、苹果、苹果公司的发展史、ipod、iphone4s的流程</a></div>
			<div class="recommend_produ_info_lie">分享：</div>
		</div>
		<div class="recommend_produ_edge">
			<div class="recommend_produ_edge_toll"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/qianbi.jpg" /></div>
			<div class="recommend_produ_edge_toll1"><a href="#" style="text-decoration:none;font-size:13px">在线阅读</a></div>
			<div class="recommend_produ_edge_tol2"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/qianbi.jpg"/></div>
			<div class="recommend_produ_edge_tol3"><a href="#" style="text-decoration:none;font-size:13px">立即下载</a></div>
			<div class="recommend_produ_edge_tol4"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/yuan.jpg"/></div>
			<div class="recommend_produ_edge_tol5"><a href="#" style="text-decoration:none;font-size:13px">立即购买</a></div>
			<div class="recommend_produ_edge_tol6"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/+.jpg"/></div>
			<div class="recommend_produ_edge_tol7"><a href="#" style="text-decoration:none;font-size:13px">收藏此书</a></div>
			<div class="recommend_produ_edge_tol8"><a href="#" style="text-decoration:none">推荐</a></div>
		</div>
		<div class="recomend_content">
			<div class="introduction">内容简介......</div>
			<div class="introduction_content">
				<span class="short">
						这本乔布斯唯一授权的官方传记，在2011年上半年由美国出版商西蒙舒斯特对外发布出版消息以来，备受全球媒体和业界瞩目，这本书的全球出版日期最终确定为2011年11月21日，简体中文版也将同步上市。
						<br>
						&#12288;&#12288;两年多的时间，与乔布斯40多次的面对面倾谈，以及与乔布斯一百多个家庭成员、 朋友、竞争对手、同事的不受限的采访，造就了这本独家传记。
						<br>
						&#12288;&#12288;尽管乔布斯给予本书的采访和创作全面的配合，但他对内容从不干涉，也不要求出版前阅读全文的权利。对于任何资源和关联的人，他都不设限，甚至鼓励他所熟知的人袒露出自己的心声。
						<br>
						&#12288;&#12288;“我已经做了很多并不值得自豪的事情，比如23岁时就让我的女友怀了孕，以及我对这件事的处理方式”，他说， “对我而言，没有什么不可以对外袒露的。”
						<br>
						&#12288;&#12288;谈及和他共过事的人以及竞争对手，他直言不讳，甚至尖酸刻薄。他的激情、精力、欲望、完美主义、艺术修养、残暴还有对掌控权...
						<a class="j a_show_full" href="javascript:void(0)">(展开全部)</a>
				</span>
			</div>
		</div> 
	</div>
</div>
<div class="rightcolumn">
 	<div class="hot_tags">
		<div class="hot_tags_title">热门标签.....</div>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[文学]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">小说</a></p></li>
				<li><p><a href="#" style="text-decoration:none">随笔</a></p></li>
				<li><p><a href="#" style="text-decoration:none">日本文学</a></p></li>
				<li><p><a href="#" style="text-decoration:none">童话</a></p></li>
				<li><p><a href="#" style="text-decoration:none">诗歌</a></p></li>
				<li><p><a href="#" style="text-decoration:none">名著</a></p></li>
				<li><p><a href="#" style="text-decoration:none">（更多）</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[流行]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">漫画</a></p></li>
				<li><p><a href="#" style="text-decoration:none">绘本</a></p></li>
				<li><p><a href="#" style="text-decoration:none">青春</a></p></li>
				<li><p><a href="#" style="text-decoration:none">科幻</a></p></li>
				<li><p><a href="#" style="text-decoration:none">武侠</a></p></li>
				<li><p><a href="#" style="text-decoration:none">言情</a></p></li>
				<li><p><a href="#" style="text-decoration:none">（更多）</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[文化]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">历史</a></p></li>
				<li><p><a href="#" style="text-decoration:none">哲学</a></p></li>
				<li><p><a href="#" style="text-decoration:none">设计</a></p></li>
				<li><p><a href="#" style="text-decoration:none">建筑</a></p></li>
				<li><p><a href="#" style="text-decoration:none">电影</a></p></li>
				<li><p><a href="#" style="text-decoration:none">回忆录</a></p></li>
				<li><p><a href="#" style="text-decoration:none">(更多)</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[生活]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">旅行</a></p></li>
				<li><p><a href="#" style="text-decoration:none">励志</a></p></li>
				<li><p><a href="#" style="text-decoration:none">教育</a></p></li>
				<li><p><a href="#" style="text-decoration:none">美食</a></p></li>
				<li><p><a href="#" style="text-decoration:none">灵修</a></p></li>
				<li><p><a href="#" style="text-decoration:none">健康</a></p></li>
				<li><p><a href="#" style="text-decoration:none">（更多）</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[经营]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">经济学</a></p></li>
				<li><p><a href="#" style="text-decoration:none">管理</a></p></li>
				<li><p><a href="#" style="text-decoration:none">商业</a></p></li>
				<li><p><a href="#" style="text-decoration:none">营销</a></p></li>
				<li><p><a href="#" style="text-decoration:none">理财</a></p></li>
				<li><p><a href="#" style="text-decoration:none">股票</a></p></li>
				<li><p><a href="#" style="text-decoration:none">（更多）</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
		<div class="table_type">
			<ul class="tables_about">
				<li><p><a href="#" style="text-decoration:none">[科技]</a></p></li>
				<li><p><a href="#" style="text-decoration:none">科普</a></p></li>
				<li><p><a href="#" style="text-decoration:none">互联网</a></p></li>
				<li><p><a href="#" style="text-decoration:none">交互设计</a></p></li>
				<li><p><a href="#" style="text-decoration:none">算法</a></p></li>
				<li><p><a href="#" style="text-decoration:none">通信</a></p></li>
				<li><p><a href="#" style="text-decoration:none">神经网络</a></p></li>
				<li><p><a href="#" style="text-decoration:none">（更多）</a></p></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/tiaowen.jpg" width="213px" height="1px"/>
	</div>
	
</div>

<div class="like_product" > 
	<div class="like_product_title">喜欢读史蒂夫·乔布斯传的人也喜欢</div>
	
	<ul class="piclist">
		<li>
			<img  src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s6584764.jpg"/> 
			<p><a href="http://www.test.com" style="text-decoration:none">浪潮之巅</a></p>
		</li>
		<li>
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s4528546.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">Facebook效应</a></p>
		</li>
		<li>
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s4146437.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">世界因你而改变</a></p>
		</li>
		<li>
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/s4146437.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">民主的细节</a></p>
		</li>
		<li>
			<img src="http://img1.douban.com/spic/s3806874.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">异类</a></p>
		</li>
		<li>
			<img src="http://img1.douban.com/spic/s4669554.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">黑客画家</a></p>
		</li>
		<li>
			<img src="http://img1.douban.com/spic/s2364283.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">激荡三十年</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s4477716.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">1988我想和这个世界谈谈</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s2965268.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">三双鞋</a></p>
		</li>
		<li>
			<img src="http://img1.douban.com/spic/s2364283.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">白夜之城</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s2965269.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">中国近代史</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s2965271.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">中国近代史</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s2965272.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">中国近代史</a></p>
		</li>
		<li>
			<img src="http://img3.douban.com/spic/s2965273.jpg"/>
			<p><a href="http://www.test.com" style="text-decoration:none">中国近代史</a></p>
		</li>
	</ul>
</div>
 	<div class="user_message">
		<div class="user_message_title">用户评论......（共##条）</div>
		<div class="user_message_image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
		<div class="user_message_ss"><div class="user_message__context">我不是为了第一名而存在这个世界。</div></div>
		<div class="user_message_name">刷屏达人夏娜军（我曾爱豆瓣想到就心酸）+用户等级</div>
		<div class="user_message_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 
		然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		<div class="user_message_image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
		<div class="user_message_ss"><div class="user_message__context">我不是为了第一名而存在这个世界。</div></div>
		<div class="user_message_name">刷屏达人夏娜军（我曾爱豆瓣想到就心酸）+用户等级</div>
		<div class="user_message_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 
		然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		<div class="user_message_image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
		<div class="user_message_ss"><div class="user_message__context">我不是为了第一名而存在这个世界。</div></div>
		<div class="user_message_name">刷屏达人夏娜军（我曾爱豆瓣想到就心酸）+用户等级</div>
		<div class="user_message_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 
		然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		<div class="user_message_image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
		<div class="user_message_ss"><div class="user_message__context">我不是为了第一名而存在这个世界。</div></div>
		<div class="user_message_name">刷屏达人夏娜军（我曾爱豆瓣想到就心酸）+用户等级</div>
		<div class="user_message_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 
		然而，就在芜湖新政被叫停次日，又有网友爆料称，浙江省宁波市象山县已悄然变通“限购令”。这一传言很快在网上传开，但象山县一直处于沉默之中。 
		</div>
		<div class="user_message_image"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/kehu.jpg" width="50px" height="50px" /></div>
		<div class="user_message_ss"><div class="user_message__context">我不是为了第一名而存在这个世界。</div></div>
		<div class="user_message_name">刷屏达人夏娜军（我曾爱豆瓣想到就心酸）+用户等级</div>
		<div class="user_message_context">佛山新政、芜湖新政――近5个月里，两宗涉嫌“救市”或“放松”的地方楼市新政先后被叫停，进一步显示出中央对楼市调控的决心。 
			</div>
	</div>
	<div class="footer" style="margin-top:60px">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</body>
</html>
<?php }} ?>