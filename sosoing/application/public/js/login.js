/*
function regedit(){
	var path = "../templates/default/regedit.html";  
  path = encodeURI(encodeURI(path));//中文转码  
window.showModalDialog(path,"sfdsdf","dialogWidth=570px;dialogHeight=330px;scroll=no;status=no;help=no;");
}
*/
//用户合法性验证
function InputCheck(Regform){
	if(Regform.username.value == ""){
		alert ( "用户名不能为空！");		
		Regform.username.focus();
		return false;
	}
	if(Regform.password.value.length<6){
		alert("密码不能小于6位");
		Regform.password.focus();
		return false;
	}
	if(Regform.password.value == ""){
		alert ("密码不能为空！");
		Regform.password.focus();
		return false;
	}
	if(Regform.repass.value != Regform.password.value){
		alert("密码不一致！");
		Regform.repass.focus();
		return false;
	}
	if(Regform.email.value == ""){
		alert("邮箱不能为空！");
		Regform.email.focus();
		return false;
	}
	if (Regform.img.value == "")
	{
		alert("请输入验证码!");
		Regform.img.focus();
		return false;
	}
	
}


//刷新验证码
function showVerify(){
	document.getElementById("verify").src ="index.php/User/checkpic?r=" 
		+ (Math.random() * 1000);
}



function alertWin(title, w, h){ 
		var titleheight = "22px"; // 提示窗口标题高度 
		var bordercolor = "#666699"; // 提示窗口的边框颜色 
		var titlecolor = "#000000"; // 提示窗口的标题颜色 
		var titlebgcolor = "#D2E9FF"; // 提示窗口的标题背景色 
		var bgcolor = "#FFFFFF"; // 提示内容的背景色 
		
		var iWidth = document.documentElement.clientWidth; 
		var iHeight = document.documentElement.clientHeight; 
		var bgObj = document.createElement("div"); 
		bgObj.style.cssText = "position:absolute;left:0px;top:0px;width:"+iWidth+"px;height:"+Math.max(document.body.clientHeight, iHeight)+"px;filter:Alpha(Opacity=30);opacity:0.3;background-color:#000000;z-index:101;"; 
		document.body.appendChild(bgObj); 
		
		var msgObj=document.createElement("div"); 
		msgObj.style.cssText = "position:absolute;font:11px '宋体';top:"+(iHeight-h)/2+"px;left:"+(iWidth-w)/2+"px;width:"+w+"px;height:"+h+"px;border:5px solid #E0E0E0;background-color:"+bgcolor+";padding:1px;line-height:22px;z-index:102;"; 
		document.body.appendChild(msgObj); 
		

		
		var table = document.createElement("table"); //www.divcss5.com divcss5
		 msgObj.appendChild(table); 
		table.style.cssText = "margin:0px;border:0px;padding:0px;"; 
		table.cellSpacing = 0; 
		var tr = table.insertRow(-1); 
		var titleBar = tr.insertCell(-1); 
		titleBar.style.cssText = "width:"+iWidth+"px;height:"+titleheight+"px;text-align:left;padding:3px;margin:0px;font:bold 13px '宋体';color:"+titlecolor+";border:0px solid " + bordercolor + ";cursor:move;background-color:" + titlebgcolor; 
		titleBar.style.paddingLeft = "10px"; 
		titleBar.innerHTML = title; 
		var moveX = 0; 
		var moveY = 0; 
		var moveTop = 0; 
		var moveLeft = 0; 
		var moveable = false; 
		var docMouseMoveEvent = document.onmousemove; //www.divcss5.com divcss5
		 var docMouseUpEvent = document.onmouseup; 
		titleBar.onmousedown = function() { 
		var evt = getEvent(); 
		moveable = true; 
		moveX = evt.clientX; 
		moveY = evt.clientY; 
		moveTop = parseInt(msgObj.style.top); 
		moveLeft = parseInt(msgObj.style.left); 

document.onmousemove = function() { 
		if (moveable) { 
			var evt = getEvent(); 
			var x = moveLeft + evt.clientX - moveX; //www.divcss5.com divcss5
			var y = moveTop + evt.clientY - moveY; 
			if ( x > 0 &&( x + w < iWidth) && y > 0 && (y + h < iHeight) ) { 
				msgObj.style.left = x + "px"; 
				msgObj.style.top = y + "px"; 
			} 
		} 
}; 
document.onmouseup = function () { 
	if (moveable) { 
		document.onmousemove = docMouseMoveEvent; //www.divcss5.com divcss5
		document.onmouseup = docMouseUpEvent; 
		moveable = false; 
		moveX = 0; 
		moveY = 0; 
		moveTop = 0; 
		moveLeft = 0; 
	} 
}; 
} 

var closeBtn = tr.insertCell(-1); 
closeBtn.style.cssText = "cursor:pointer; padding:2px;background-color:" + titlebgcolor; 
closeBtn.innerHTML = "<span style='font-size:15pt; color:"+titlecolor+";'>×</span>"; 
closeBtn.onclick = function(){ 
document.body.removeChild(bgObj); 
document.body.removeChild(msgObj);  
} 
var msgBox = table.insertRow(-1).insertCell(-1); 
msgBox.style.cssText = "font:10pt '宋体';"; 
msgBox.colSpan = 2; 
var loginname = '<form name="Regform" action="index.php/User/register"  method="post" onsubmit="return InputCheck(this)" >' +
		"  <div style='position:absolute;margin-top:8px;margin-left:30px;font-size:12px;'>" +
		"<font color=red>*</font>账号:</div><div style='margin-top:5px;margin-left:120px;font-size:12px;'>" +
		"<input type = 'text' name='username' style='width:120px;height:15px;font-size:12px;'/>" +
		"<span style='color:#AAAAAA'>(必填，3-15字符长度，支持汉字、字母、数字及_)</span><div/>"
var passwords = "<div style = 'margin-top:20px;margin-left:-90px;font-size:12px;'>" +
		"<font color=red>*</font>密码:</div><div style='margin-top:-18px;font-size:12px;'>" +
		"<input type='password' name='password' style='width:120px;height:15px;font-size:12px;' />" +
		"<span style='color:#AAAAAA'>(必填，不得少于6位)</span></div>";
var secondPasswords = "<div style = 'margin-top:20px;margin-left:-90px;font-size:12px;'>" +
		"<font color=red>*</font>再次输入密码:</div><div style='margin-top:-18px;font-size:12px;'>" +
		"<input type='password' name='repass'  style='width:120px;height:15px;font-size:12px;' />" +
		"<span style='color:#AAAAAA'>(必填)</span></div>";
var emil = "<div style = 'margin-top:20px;margin-left:-90px;font-size:12px;'>" +
		"<font color=red>*</font>电子邮箱:</div><div style='margin-top:-18px;font-size:12px;'>" +
		"<input type='text' name='email' style='width:120px;height:15px;font-size:12px;' />" +
		"<span style='color:#AAAAAA'>(必填)</span></div>";
//验证码
var character = "<div style = 'margin-top:20px;margin-left:-90px;font-size:12px;'>" +
		"<font color=red>*</font>输入右图字符:</div>" +
		"<div style='margin-top:-18px;font-size:12px;'>" +
		"<input type='text' name='img' style='width:50px;height:15px;font-size:12px;' /></div>" +
		"<div style='margin-top:-25px;margin-left:80px;'>" +
		"<img id='verify' src='index.php/User/checkpic' style='width:65px;height:30px;'/>&nbsp;&nbsp;&nbsp;看不清？" +
		"<a href='#' onclick='showVerify()' style='text-decoration:none'>换一张</a>" +
		"</div>";
var xiyi = "<div style='margin-top:20px;margin-left:-40px;'>" +
		"<input class='checkboxs' type='Checkbox'  check='true'/>&nbsp;&nbsp;&nbsp;我已看过并同意" +
		"<a href='##' style='text-decoration:none '>《网络服务使用协议》</a>" +
		"<a href='##' style='text-decoration:none '>《隐私政策声明》</a></div>";
var submits = "<div style= 'margin-top:10px;margin-left:3px'>" +
		"<input type='image'  name='submit' src='application/public/image/but_reg.gif' style='width:140px;height:35px;' />" +
		"<div></form>";
var welcome = "<div style= 'margin-top:-36px;margin-left:170px'>" +
		"<input type='image' name='back'  src='application/public/image/but_return.gif' style='width:140px;height:35px;' /><div>";
msgBox.innerHTML =loginname+passwords+secondPasswords+emil+character+xiyi+submits+welcome;

// 获得事件Event对象，用于兼容IE和FireFox 
function getEvent() { 
return window.event || arguments.callee.caller.arguments[0]; 
					} 
} 


/* ------------------------------------------------------------------------------------- */


String.prototype.jsonToArray = function ()
{
    if (typeof(this) != "object" || this.length < 1) {
        return null;
    } else {
        return eval("(" + this + ")");
    }
}


/** 定义工具对象 */
var Util = new Object;

/**
 * 获取时段(早晨、上午、中午、下午、晚上)
 *
 */
Util.getHours = function()
{
    var D = new Date();

    var hours = D.getHours();
    if (hours > 19 && hours < 5) {
        return '晚上';
    } else if (hours >= 5 && hours < 11) {
        return '上午';
    } else if (hours >= 11 && hours < 2) {
        return '中午';
    } else {
        return '下午';
    }

    alert(D.getHours());
}

/**
 * 验证用户登录
 *
 */
window.onload = function()
{
    addSubmitEvent();
}

function addSubmitEvent()
{
    if (typeof jQuery == "undefined") {
        return false;
    }
    /** 重新获取jquery对象 */
    var $ = jQuery.noConflict();

    var loginForm = document.getElementById("login_form");

    if ((loginForm != null))
    {
        loginForm.onsubmit = function()
        {
            var username = this["username"].value;
            var password = this["password"].value;
            if (!username) {
                alert("用户名不能为空！");
                this["username"].focus();
                return false;
            }
            if (!password) {
                alert("密码不能为空！");
                this["password"].focus();
                return false;
            }

            $.get("/index.php/user/doLogin", {"username": username, "password": password}, function(json) {
                var data = json.jsonToArray();
                if (data.status) {
                    alert(data.msg);
                } else {
                    var html  = "尊敬的用户";
                        html += "<b style='color: red; cursor: pointer' onclick='gotoHome()'>";
                        html += data.data.username;
                        html += "</b>";
                        html += Util.getHours();
                        html += "好|";
                        html += "<b style='cursor: pointer' onclick='logout()'>退出</b>";

                    $("#login_div").html(html);
                }
            });

            return false;
        }
    }
}

/**
 * 退出
 *
 */
function logout()
{
    /** 重新获取jquery对象 */
    var $ = jQuery.noConflict();

    $.get("/index.php/user/logout", null, function(json) {
        var data = json.jsonToArray();
        if (data.status) {
            alert(data.msg);
        } else {
            var html  = '<form id="login_form">';
                html += '<div class="loginList">';
                html += '账号 &nbsp;<input type="text" name="username" value="abc">&nbsp;&nbsp;';
                html += '<input type="checkbox"/>&nbsp;&nbsp;自动登录';
                html += '</div>';
                html += '<div class="loginList">';
                html += '密码 &nbsp;<input type="password" name="password" value="abc">&nbsp;&nbsp;';
                html += '<input id ="login" class="loginButton" type="submit" value="登录" />&nbsp;&nbsp;';
                html += '<a href="#" style="text-decoration:none" onclick="alertWin(\'注册\',550,310);" onfocus="this.blur()">注册</a>';
                html += '</div>';
            $("#login_div").html(html);
            addSubmitEvent();
        }
    });
}

/**
 * 返回用户中心
 *
 */
function gotoHome()
{
    location = "/user/home";
}

