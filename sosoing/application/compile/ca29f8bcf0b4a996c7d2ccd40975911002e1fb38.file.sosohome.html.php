<?php /* Smarty version Smarty-3.1.7, created on 2012-06-26 05:32:58
         compiled from "application/views\sosohome.html" */ ?>
<?php /*%%SmartyHeaderCode:283894fda9132aa42b1-86314899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca29f8bcf0b4a996c7d2ccd40975911002e1fb38' => 
    array (
      0 => 'application/views\\sosohome.html',
      1 => 1340681549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283894fda9132aa42b1-86314899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fda9133510ef',
  'variables' => 
  array (
    'URL_CSS' => 0,
    'URL_JS' => 0,
    'URL_IMAGE' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fda9133510ef')) {function content_4fda9133510ef($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜搜赢首页</title>
<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/header.css" />
<link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/soso.css"   />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/footer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/login.css" />
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
                <form id="login_form"  method="post" action="index.php/login/dologin"  />
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

<div class="leftcolumn"> 
    <div class="relation-produ" >
        <div class="dianping">
        <img height="30px" width="200" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/dianping.jpg">
        <div class="dianping_font">热门推荐</div><div class="how_much">更多...</div>
        </div>
        <div class="relation_produ_img">
        名称:正宗杭州蒸饺</br>
         地址：北京市中南海</br>
        电话：010-82321111
        </div>
        <div class="relation_produ_cont" style="text-align:center">
        <a href="http://www.test.com/" target="_blank"> <img src="http://i1.dpfile.com/pc/33efb5a65f92407a587a6aaef780a098/12408858_s.jpg" width="85" height="85" /></a>
        </div>
        
        <div class="relation_produ_img">
        名称:正宗杭州蒸饺</br>
         地址：北京市中南海</br>
        电话：010-82321111
        </div>
        <div class="relation_produ_cont" style="text-align:center" >
        <a href="http://www.test.com/" target="_blank"> <img src="http://i1.dpfile.com/2010-06-07/4459191_m.jpg" width="85" height="85" /></a>
        </div>
        
        <div class="relation_produ_img">
        名称:正宗杭州蒸饺</br>
        地址：北京市中南海</br>
        电话：010-82321111
        </div>
        <div class="relation_produ_cont"><a href="http://www.test.com/" target="_blank"> 
        <img src="http://i2.dpfile.com/pc/a1c94d4645a30a04a80cbc3d48ce43fe(249x249)/thumb.jpg(249x249)/thumb.jpg" width="85" height="85" /></a></div>
        
        <div class="relation_produ_img">
        名称:正宗杭州蒸饺</br>
        地址：北京市中南海</br>
        电话：010-82321111
        </div>
        <div class="relation_produ_cont"><a href="http://www.test.com/" target="_blank"> <img src="http://i3.dpfile.com/2009-09-19/2742989_s.jpg" width="85" height="85" /></a></div>
	
	</div>
	<div class="message-board">
		<div class="pldp">推荐排行</div ><div class="how_much">更多...</div>
	<div class="relation_produ_img ">
		名称:正宗杭州蒸饺</br>
        地址：北京市中南海</br>
		电话：010-82321111
		</div>
		<div class="relation_produ_cont" style="text-align:center">
		<a href="http://www.test.com/" target="_blank"> <img src="http://i1.dpfile.com/pc/33efb5a65f92407a587a6aaef780a098/12408858_s.jpg" width="85" height="85" /></a>
		</div>
	<div class="relation_produ_img">
		名称:正宗杭州蒸饺</br>
        地址：北京市中南海</br>
		电话：010-82321111
		</div>
	    <div class="relation_produ_cont" style="text-align:center;" >
		<a href="http://www.test.com/" target="_blank"> <img src="http://i1.dpfile.com/2010-06-07/4459191_m.jpg" width="85" height="85" /></a>
		</div>
	</div>
</div>
 	<div id = "banner" class="banner" >
 		<div id="imageFx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/634661303840580000.jpg" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/banner.jpg" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/60683238.jpg"/>
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/634656880149173750.jpg" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/634656889592767500.jpg" />
    	<div id="maskFx" ></div>
	</div>
 <div>	
 
	 <script>
				Tpl={
					w:640,h:130,
					__clip__:function (el,x,y,w,h){
						var _=[y,w,h,x];
						for(var i=_.length;i--;)_[i]=_[i]<0?'auto':_[i]+'px';
						el.style.clip="rect("+_.join(" ")+")";
					},
					__timeLine__:function (play,end,len) {
						var play=play||Date,end=end||Date,s=0,t=0,len=(len||480)/10,th,p=Math.pow,
						fx=function(x){return x},c=function(f,t){return +f+(t-f)*s};
						return th=setInterval(function(){play(c,s=fx(t++/len));if(s==1)end(clearInterval(th))},10);
					},
					__createMask__:function (){
						var ranges=[],masks=[],r,c;
						for(var i=0;i<32;i++){
							r=document.createElement('DIV');
							r.className="range";
							masks.push(r.appendChild(document.createElement('DIV')));            
							ranges.push(this.MaskDIV.appendChild(r))
						};
						this.masks=masks;
						this.ranges=ranges
					},
					__setMask__:function (bgImg,col,row){
						var a,b,w=Math.ceil(this.w/col),h=Math.ceil(this.h/row),l=this.ranges.length;
						this.uw=w;
						this.uh=h;
						this.actCount=Math.min(col*row,l);
						for(var i=0;i<l;i++){
							a=this.ranges[i].style;
							b=this.masks[i].style;

							b.width=a.width=w+'px';
							b.height=a.height=h+'px';
							b.background="url("+bgImg+")";
							b.backgroundPosition=(-i%col)*w+' '+parseInt(-i/col)*h;
							b.clip="rect(0 0 0 0)";
							if(i==col*row-1)break
						};
					},
					__fxs__:[
						function (el,x){this.__clip__(el,x(this.uw,0),x(this.uh,0),x(0,this.uw),x(0,this.uh))},
						function (el,x){this.__clip__(el,x(this.uw,0),-1,x(0,this.uw),-1)},
						function (el,x){this.__clip__(el,-1,x(this.uh,0),-1,x(0,this.uh))},
						function (el,x){this.__clip__(el,-1,-1,-1,x(0,this.uh))},
						function (el,x){this.__clip__(el,-1,-1,x(0,this.uw),-1)},
						function (el,x){this.__clip__(el,-1,-1,x(0,this.uw),x(0,this.uh))},
						function (el,x){this.__clip__(el,x(this.uw,0),x(this.uh,0),-1,-1)}
					]
				};
				imgFx=function (shell,mask){
					var arrImgs=shell.getElementsByTagName('IMG');
					var pageBar=document.createElement('DIV');
					pageBar.className='pageBar';
					var num,timer,nextTimer,hover;
					this.nums=[];
					shell.appendChild(pageBar);
					var This=this,pos=0,len=arrImgs.length;
					This.shell=shell;
					This.MaskDIV=mask;
					This.uw=This.w;
					This.uh=This.h;
					This.__createMask__();
					var Case=[[1,1,3]];//不同的[32,1,1],[32,1,1],[1,1,5],[1,1,6],[1,1,1],[1,1,2],[1,8,2],[1,1,0],[1,1,5],[4,2,0],[8,3,0],图片切换效果
					var start=function (){
						var cur=arrImgs[pos%len].src,index=Math.round((Case.length-1)*Math.random());
						var opt=Case[index];
						if(This.prevNum)This.prevNum.className='';
						This.prevNum=This.nums[pos%len];
						This.prevNum.className='current';
						This.__setMask__(cur,opt[0],opt[1]);
						timer=This.__timeLine__(function (x){
							for(var i=This.actCount;i--;){
								This.__fxs__[opt[2]].call(This,This.masks[i],x)
							};
					   },function (){
						   This.shell.style.background='url('+cur+')';
						   pos++;
						   if(!hover)nextTimer=setTimeout(start,5000);
					   });        
					};
					for(var i=0,l=arrImgs.length;i<l;i++){
						num=document.createElement('A');
						num.href="javascript:void(0)";
						num.innerHTML=(i+1);
						this.nums.push(pageBar.appendChild(num));
						num.numIndex=i;
						num.onclick=function (){
							pos=this.numIndex;
							clearTimeout(timer);
							clearTimeout(nextTimer);
							start()
						}
					};
					start()
				};
				imgFx.prototype=Tpl;
				try {document.execCommand("BackgroundImageCache", false, true);}catch(e){};
				
				var _51Fx=new imgFx(
					document.getElementById('imageFx'),
					document.getElementById('maskFx')
				);
	</script>
 </div>
 	</div>

<div  class="rightcolumn">
 	<div class="notice" >
		<div class="dianping"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/dianping.jpg" width="200" height="30px"  /></div>
		<div class="dianping_font">网站公告</div><div class="how_much">更多...</div>
		<div class="dianping_context">
			<ul style="list-style-type=none">
			   <li>点评网年度年度会员大型聚会活动</li>
			   <li>写点评，免费得《上海生活指南》</li>
			   <li>点评网年度年度会员大型聚会活动</li>
			   <li>写点评，免费得《上海生活指南》</li>
			   <li>写点评，免费得《上海生活指南》</li>
		   </ul>
		 </div>
	</div>
	<div class="recommend-top">
	<div class="dianping">
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/dianping.jpg" width="200" height="30px"  />
		</div>
		<div class="dianping_font">
			相关产品
		</div>
		<div class="how_much">
			更多...
		</div>
		<div class="recommend-top-img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/fojiao.jpg"/>
		</div>
		<div class="recommend-top-context">
		  	<a href="#" style="text-decoration:none">佛教艺术之旅（2780）</a></br>
			白天看庙、晚上睡觉、我对美的设想大抵如此...
		</div>
		<div class="recommend-top-contexts">
			<ul>
				<li class="li-top"><a href="#" style="text-decoration:none ">上海排队热门餐厅大搜罗</a></br><div class="li-xia"></div>"轧闹猛"这档子事，阿拉上海人..
				</li>
				<li class="li-top"><a href="#" style="text-decoration:none ">好吃的烤鸭哪里找</a><br /><div class="li-xia">烤鸭是人见人爱的平民美味，油滑...</div>
				</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">华师大后门的美食小吃</a><br /> <div class="li-xia">枣阳路美食一条街的人气就不用多...</div>		
				</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">上海“热粥”小地图</a><br /> <div class="li-xia">天冷喝一碗热气温暖的粥，那种感...</div>
				</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">上海“热粥”小地图</a><br /> <div class="li-xia">天冷喝一碗热气温暖的粥，那种感...</div>
				</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">上海“热粥”小地图</a><br /> <div class="li-xia">天冷喝一碗热气温暖的粥，那种感...</div>
				</li></br>
			</ul>
		</div>
	</div>
	<div class="recommend-hot">
	<div class="dianping_font" >
			<div >热辣点评...</div><div style="margin-left:60px;margin-top:-12px;">(更多)</div>
		</div>
		<div class="recommend-hot-context">
			<ul>
				<li class="li-top"><a href="#" style="text-decoration:none ">给自己写三句话艺术吧。</a></br><div class="li-xia">时间：2012年1月4日周三</div></br>572人参加</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">让我看看你的新年第一照</a><br /><div class="li-xia">时间：2012年1月2日周一</div></br>449人参加</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">敢不敢截图你的豆邮给大家看呢？</a><br /> <div class="li-xia">时间：2012年1月2日周一</div></br>430人参加</li></br>
				<li class="li-top"><a href="#" style="text-decoration:none ">2012了给自己留一张好看的遗照吧</a><br /> <div class="li-xia">时间：2012年12月31日周一</div></br>2320人参加</li></br>
				
			</ul>
		</div>
	</div> 
 </div>
<div  class="conters">
    <div id="tab_container1">
        <div class="cls_tab_nav">
            <ul>
                <li class="cls_tab_nav_li cls_tab_nav_li_first"><a href="/">最新推荐</a></li>
                <li class="cls_tab_nav_li"><a href="/sort/list_1_1.shtml">地铁周边</a></li>
                <li class="cls_tab_nav_li"><a href="#">美食文化</a></li>
                <li class="cls_tab_nav_li"><a href="#">浪漫节日</a></li>
            </ul>
		 </div>
	 <div class="cls_tab_body">
    <div class="cls_div" style="display:block;">
       <div class="content_mode">	
		<div class="content_mode_img" style="text-align:center"> 
		 <a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
			 </div>
				<div class="content_mode_cont" >
				 <div id="f15">位置隐蔽 不好找却好吃的餐馆
					<div id="f13">
						 <ul style="list-style-type:none">
							   <li>  <a href="#"><span>[结婚]</span>结婚这点事儿：红宝书在手 婚礼无忧</a></li>
							   <li> <span>[吃货]</span>过年扫N家店 身上都是幸福的救生圈(图)			</li>
							   <li> <span>[美食]</span>甜言蜜语加甜蜜小点 一起去吃甜甜圈            </li>
							   <li> <span>[美食]</span>甜言蜜语加甜蜜小点 一起去吃甜甜圈            </li>
							</ul>		
						</div>
					</div>
				</div>
			</div>                 
        <div class="content_mode"> 
			<div class="content_mode_img" style="text-align:center">
				<a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
					</div>

						<div class="content_mode_cont" id="f13" >
							<ul style="list-style-type:none">
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼 </li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999	</li>	
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼</li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999</li>
							</ul>
					</div>	
				</div>
			 <div class="content_mode"> 
				<div class="content_mode_img" style="text-align:center">
					<a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
						</div>
							<div class="content_mode_cont" id="f13">
								<ul style="list-style-type:none">
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼 </li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999	</li>	
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼</li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999</li>
							</ul>
							</div>
					  </div>
			<div class="content_mode"> 
				<div class="content_mode_img" style="text-align:center">
					<a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
						</div>
							<div class="content_mode_cont" id="f13" >
								<ul style="list-style-type:none">
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼 </li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999	</li>	
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼</li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999</li>
							</ul>
						</div>
					</div>
			<div class="content_mode"> 
				<div class="content_mode_img" style="text-align:center">
					<a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
						</div>
					<div class="content_mode_cont" id="f13" >
						<ul style="list-style-type:none">
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼 </li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999	</li>	
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼</li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999</li>
							</ul>	 
					   </div>
				 </div>
		<div class="content_mode"> 
			<div class="content_mode_img" style="text-align:center">
					<a href="http://blog.sosoing.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGE']->value;?>
/533157962892.jpg" width="250" height="160" /></a>
						</div>
					 <div class="content_mode_cont" id="f13">
							<ul style="list-style-type:none">
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼 </li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999	</li>	
								<li><span>[地址]</span>朝阳区朝阳北路237号复星国际中心2楼</li>
								<li><span>[标签]</span>其他火锅  朝外大接</li>
								<li><span>[电话]</span>400-888-99999</li>
							</ul>	 
					</div>
				 </div>
			 </div>

        <div class="cls_div">
        <div class="content_mode"> 
        <div class="content_mode_img"> 图片位置</div>
        <div class="content_mode_cont">内容</div>
        </div>
        <div class="content_mode"> 内容模块2</div>
        <div class="content_mode"> 内容模块3</div>
        <div class="content_mode"> 内容模块4</div>
        <div class="content_mode"> 内容模块5</div>
        <div class="content_mode"> 内容模块6</div>
        </div>

        <div class="cls_div">
        <div class="content_mode"> 
        <div class="content_mode_img"> 图片位置</div>
        <div class="content_mode_cont">内容</div>
        </div>
        <div class="content_mode"> 内容模块2</div>
        <div class="content_mode"> 内容模块3</div>
        <div class="content_mode"> 内容模块4</div>
        <div class="content_mode"> 内容模块5</div>
        <div class="content_mode"> 内容模块6</div>
        </div>
        <div class="cls_div">
        <div class="content_mode"> 
        <div class="content_mode_img"> 图片位置</div>
        <div class="content_mode_cont">内容</div>
        </div>
        <div class="content_mode"> 内容模块2</div>
        <div class="content_mode"> 内容模块3</div>
        <div class="content_mode"> 内容模块4</div>
        <div class="content_mode"> 内容模块5</div>
        <div class="content_mode"> 内容模块6</div>
        </div>
        </div>
        <script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/tab.js"></script>
        </div>
</div>
    <div class="footer">
	  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

</body>
</html>
<?php }} ?>