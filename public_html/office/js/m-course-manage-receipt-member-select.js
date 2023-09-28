var xmlhttp;
function memberfind(str)
{
	xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
		  {
		  alert ("Browser does not support HTTP Request");
		  return;
		  }
	var url="ajax/m-course-manage-receipt-member-select.php";
	url=url+"?membercode="+str;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=memberstateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
	xmlhttp.send(null);
}
function memberstateChanged()
{
	if (xmlhttp.readyState==4)
	{
		document.getElementById("memberHint").innerHTML=xmlhttp.responseText;
	}
}
function memberpopulateName(text){

	document.getElementById("membercode").value = text;
	document.getElementById("memberHint").innerHTML = "";
	document.getElementById("membercode").disabled=true;
}
//var text2=000023;
function MemberOnGo(text2){
	//alert(text2);
    window.location = "main.php?page=13&act=receipt-view&ReceiptID=0000000013&PriceSelected=1&memberid="+text2;
	//window.location = "main.php?page=14&act=transfer-edit&memberid="+text2;
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
		
		window.alert("กรุณาใส่ชื่อผู้เข้าอบรม อย่างน้อย 1 ท่าน");
		document.getElementsByName("pupil_firstname")[0].focus();
		return false;
	}


*/
	return true;
}