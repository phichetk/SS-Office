var xmlhttp;
function coursefind(str)
{
	xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
		  {
		  alert ("Browser does not support HTTP Request");
		  return;
		  }
	var url="ajax/m-reservaton-add-course-find.php";
	url=url+"?coursecode="+str;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=coursestateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
	xmlhttp.send(null);
}
function coursestateChanged()
{
	if (xmlhttp.readyState==4)
	{
		document.getElementById("courseHint").innerHTML=xmlhttp.responseText;
	}
}
function coursepopulateName(text){
	document.getElementById("coursecode").value = text;
	document.getElementById("courseHint").innerHTML = "";
}

////////////////////////////////////////////////////////

function memberfind(str)
{
	xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
		  {
		  alert ("Browser does not support HTTP Request");
		  return;
		  }
	var url="ajax/m-reservaton-add-member-find.php";
	url=url+"?memberid="+str;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=memberstateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
	xmlhttp.send(null);
}
function memberpopulateName(text){
	document.getElementById("memberid").value = text;
	document.getElementById("memberHint").innerHTML = "";
}

//////////////////////////////////////////////////////
function GetXmlHttpObject()
{
		if (window.XMLHttpRequest)
		  {
		  // code for IE7+, Firefox, Chrome, Opera, Safari
			return new XMLHttpRequest();
		  }
		if (window.ActiveXObject)
		  {
		  // code for IE6, IE5
			return new ActiveXObject("Microsoft.XMLHTTP");
		  }
return null;
}
function memberstateChanged()
{
	if (xmlhttp.readyState==4)
	{
		document.getElementById("memberHint").innerHTML=xmlhttp.responseText;
	}
}
///////////////////////////////

function ValidateForm(){
/*
		var attndCount=0;

	for(x=0;x<document.getElementsByName("pupil_firstname").length;x++){
		if(document.getElementsByName("pupil_firstname")[x].value!=""){
			attndCount=attndCount+1;
		}
	}	
	if(attndCount==0){
		
		window.alert("��س������ͼ�����ͺ�� ���ҧ���� 1 ��ҹ");
		document.getElementsByName("pupil_firstname")[0].focus();
		return false;
	}


*/
	return true;
}


function AddPupilRow(str){

	var tmpStr = ""; 
	var inputNextRow = str;
	for(i=1;i<str;i++){
		var j=i+1;

							tmpStr +=" <table><tr>";
							tmpStr +="<td><input name=\"pupil_firstname["+j+"]\" type=\"text\"  size=\"20\" class=\"borderW_new\"  /></td>";
							tmpStr +="<td><input name=\"pupil_lastname["+j+"]\" type=\"text\"  size=\"20\" class=\"borderW_new\"  /></td>";
							tmpStr +="<td><input name=\"pupil_position["+j+"]\" type=\"text\"  size=\"20\" class=\"borderW_new\"  /></td>";
							tmpStr +="<td><input name=\"pupil_phone["+j+"]\" type=\"text\"  size=\"20\" class=\"borderW_new\"  /></td>";
							tmpStr +="</tr></table>";
	}
	document.getElementById('NextRow3').innerHTML=tmpStr;
}