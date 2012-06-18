try{   
 document.execCommand("BackgroundImageCache", false, true);   
}catch(e){}   
function $(element){   
 if(arguments.length>1){   
  for(var i=0,elements=[],length=arguments.length;i<length;i++)   
   elements.push($(arguments[i]));   
  return elements;   
 }   
 if(typeof element=="string")   
  return document.getElementById(element);   
 else   
  return element;   
}   
var Class={   
 create:function(){   
  return function(){   
   this.initialize.apply(this,arguments);   
  }    
 }   
}   
Object.extend=function(destination,source){   
 for(var property in source){   
  destination[property]=source[property];   
 }   
 return destination;   
}   
var tabMenu=Class.create();   
tabMenu.prototype={   
 initialize:function(container,selfOpt,otherOpt){   
  this.container=$(container);   
    var selfOptions=Object.extend({fontWeight:"bold",fontSize:"12px",color:"#FFBC44"},selfOpt||{});   
  var otherOptions=Object.extend({fontWeight:"normal",fontSize:"12px",color:"#666"},otherOpt||{});   
  //用for循环得到objs数组,主要是为了兼容非IE浏览器把空白也当作子对象   
  for(var i=0,length=this.container.childNodes.length,objs=[];i<length;i++){   
   if(this.container.childNodes[i].nodeType==1)   
    objs.push(this.container.childNodes[i]);   
  }   
  var tabArray=objs[0].getElementsByTagName("li");   
  //用for循环得到divArray数组,主要是为了兼容非IE浏览器把空白也当作子对象   
  var divArray=new Array();   
  for(i=0,length=objs[1].childNodes.length;i<length;i++){   
   if(objs[1].childNodes[i].nodeType==1)   
    divArray.push(objs[1].childNodes[i]);   
  }   
     
  for(i=0,length=tabArray.length;i<length;i++){   
   tabArray[i].length=length;   
   tabArray[i].index=i;   
   tabArray[i].onmouseover=function(){   
    //其它选项卡样式设置   
    for(var j=0;j<this.length;j++){   
     tabArray[j].style.backgroundPosition="-"+tabArray[j].offsetWidth+"px 0";   
     for(var property in selfOptions){   
      tabArray[j].firstChild.style[property]=otherOptions[property];   
     }   
    }   
    //当前选项卡样式   
    this.style.backgroundPosition="0 0";   
    for(var property in selfOptions){   
     this.firstChild.style[property]=selfOptions[property];   
     /*   
      注意this.style.property和selfOptions.property的用法错误   
      style.fontWeight正确   
      style["fontWeight"]正确   
      style["font-weight"]错误   
     */   
    }   
    //隐藏其它选项卡   
    for(j=0;j<this.length;j++){   
     divArray[j].style.display="none";   
    }   
    //显示当前选项卡   
    divArray[this.index].style["display"]="block";   
   }   
  }   
 }   
}   
var tab1=new tabMenu("tab_container1",{fontSize:"14px",color:"#FFBC44",fontWeight:"bold"},{fontWeight:"normal",color:"#666"});