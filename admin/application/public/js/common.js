var $$ = function(mark, type)
{
    switch (type)
    {
        case "name":
            return document.getElementsByName(mark);
        case "tagName":
            return document.getElementsByTagName(mark);
        default:
            return document.getElementById(mark);
    
    }
}

var addEvent = function(objList, eventType, callback)
{
    var len = objList.length;
    for (var i = 0; i < len; i++)
    {
        objList[i].addEventListener(eventType.substring(2), function(){callback(this)}, false);
    }
}