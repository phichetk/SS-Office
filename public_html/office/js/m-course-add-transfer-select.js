var xmlhttp;
function coursefind(str)
{
	xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
		  {
		  alert ("Browser does not support HTTP Request");
		  return;
		  }
	var url="ajax/m-course-add-transfer-select.php";
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
	document.getElementById("coursecode").disabled=true;
}
//var text2=000023;
function CourseOnGo(text2){
	//alert(text2);
	window.location = "main.php?page=14&act=transfer-edit&courseid="+text2;
}

////////////////////////////////////////////////////////



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