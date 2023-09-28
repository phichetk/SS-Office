function FineDealer(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-wtax.php";
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            //alert("xxxxx");
        document.getElementById("Dealer1").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?CustomerName="+str, true);
        xmlhttp.send();
    
}

function ClickSelectDealer(strID,strName)

{
    //responseText="";
    respotxt1 = "<input type=\"hidden\" name=\"CustomerID\" value=\""+strID+"\" />";
    respotxt2 = strName;
    // 
    
    //document.getElementById("Dealer1").innerHTML="";
    document.getElementById("Dealer1").innerHTML=respotxt1+respotxt2;
    document.getElementById("Dealer2").innerHTML=strID;
    //document.getElementById("submit-bt").innerHTML="<input type='submit' enabled />"; //enable buttom
    
    //alert(strID);
}

