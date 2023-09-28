function updateProfile(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-issue.php";
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
        document.getElementById("content").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?CustomerName="+str, true);
        xmlhttp.send();
    
}
function ClickSelectCustomer(strID,strName)

{
    //responseText="";
    respotxt1 = "<input type=\"hidden\" name=\"CustomerID\" value=\""+strID+"\" />";
    respotxt2 = strName;
    // 
    
    document.getElementById("content").innerHTML="";
    document.getElementById("issue-customer").innerHTML=respotxt1+respotxt2;
    
    document.getElementById("submit-bt").innerHTML="<input type='submit' enabled />"; //enable buttom
    
    //alert(str);
}

function findQuotationInvoice(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-issue-find-quotation-invoice.php";
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
        document.getElementById("contentQuotation").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?CustomerName="+str, true);
        xmlhttp.send();
    
}


function ClickSelectQuationInvoice(strID,strName)

{
    //responseText="";
    respotxt1 = "<input type=\"hidden\" name=\"CustomerID\" value=\""+strID+"\" />";
    respotxt2 = strName;
    // 
    
    document.getElementById("content2").innerHTML="";
    //document.getElementById("issue-customer").innerHTML=respotxt1+respotxt2;
    
    //document.getElementById("submit-bt").innerHTML="<input type='submit' enabled />"; //enable buttom
    
    //alert(str);
}

function findQuotation(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-issue-find-quotation-invoice.php";
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
        document.getElementById("contentQuotation").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?QuotationRef="+str, true);
        xmlhttp.send();
    
}


function findInvoice(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-issue-find-quotation-invoice.php";
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
        document.getElementById("contentInvoice").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?InvoiceRef="+str, true);
        xmlhttp.send();
    
}


function findBill(str)
{
    
    AjaxURL =  "../ajax/ajax-siamsoft-issue-find-quotation-invoice.php";
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
        document.getElementById("contentBill").innerHTML=xmlhttp.responseText;
        }
      }
     // use our XML HTTP Request object to send a get to our content php.
        xmlhttp.open("GET",AjaxURL+"?RefID="+str, true);
        xmlhttp.send();
    
}


function ClickSelectBill(strID,Domain1,Price1,Detail1,Qty1,Price2,Detail2,Qty2,Price3,Detail3,Qty3,Price4,Detail4,Qty4,Price5,Detail5,Qty5,Price6,Detail6,Qty6)

{
    //responseText="";
    //respotxt1 = "<input type=\"hidden\" name=\"CustomerID\" value=\""+strID+"\" />";
    //respotxt2 = strName;
    
     respDomain1    = "<input type=\"text\" name=\"Domain1\"  value=\""+Domain1+"\"  />";
     
     respDetail1    = "<input type=\"text\" size=\"70\" name=\"issueDetail[]\" value=\""+Detail1+"\"  />";
     respQty1       = "<input type=\"text\" size=\"3\" name=\"issueQu[]\" value=\""+Qty1+"\"  />";
     respPrice1     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price1+"\"  />";
     ////

     respDetail2    = "<input type=\"text\"  size=\"70\" name=\"issueDetail[]\" value=\""+Detail2+"\"  />";
     respQty2       = "<input type=\"text\"  size=\"3\" name=\"issueQu[]\" value=\""+Qty2+"\"  />";
     respPrice2     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price2+"\"  />";
     ////
     respDetail3    = "<input type=\"text\" size=\"70\" name=\"issueDetail[]\" value=\""+Detail3+"\"  />";
     respQty3       = "<input type=\"text\" size=\"3\" name=\"issueQu[]\" value=\""+Qty3+"\"  />";
     respPrice3     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price3+"\"  />";
     ////
     respDetail4    = "<input type=\"text\" size=\"70\" name=\"issueDetail[]\" value=\""+Detail4+"\"  />";
     respQty4       = "<input type=\"text\"  size=\"3\" name=\"issueQu[]\" value=\""+Qty4+"\"  />";
     respPrice4     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price4+"\"  />";
     ////
     respDetail5    = "<input type=\"text\" size=\"70\" name=\"issueDetail[]\" value=\""+Detail5+"\"  />";
     respQty5       = "<input type=\"text\" size=\"3\" name=\"issueQu[]\" value=\""+Qty5+"\"  />";
     respPrice5     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price5+"\"  />";
     ////
     respDetail6    = "<input type=\"text\" size=\"70\" name=\"issueDetail[]\" value=\""+Detail6+"\"  />";
     respQty6       = "<input type=\"text\" size=\"3\" name=\"issueQu[]\" value=\""+Qty6+"\"  />";
     respPrice6     = "<input type=\"text\" size=\"10\" name=\"issuePrice[]\" value=\""+Price6+"\"  />";
     ////

    // 
    
    document.getElementById("contentBill").innerHTML="";
    //document.getElementById("Domain1").innerHTML=respotxt1+respotxt2;
    document.getElementById("Domain1").innerHTML=respDomain1;
    
    document.getElementById("Detail1").innerHTML=respDetail1;
    document.getElementById("Qty1").innerHTML=respQty1;
    document.getElementById("Price1").innerHTML=respPrice1;
    ///
    document.getElementById("Detail2").innerHTML=respDetail2;
    document.getElementById("Qty2").innerHTML=respQty2;
    document.getElementById("Price2").innerHTML=respPrice2;
    ///
    document.getElementById("Detail3").innerHTML=respDetail3;
    document.getElementById("Qty3").innerHTML=respQty3;
    document.getElementById("Price3").innerHTML=respPrice3;
    ///
    document.getElementById("Detail4").innerHTML=respDetail4;
    document.getElementById("Qty4").innerHTML=respQty4;
    document.getElementById("Price4").innerHTML=respPrice4;
    ///
    document.getElementById("Detail5").innerHTML=respDetail5;
    document.getElementById("Qty5").innerHTML=respQty5;
    document.getElementById("Price5").innerHTML=respPrice5;
    ///
    document.getElementById("Detail6").innerHTML=respDetail6;
    document.getElementById("Qty6").innerHTML=respQty6;
    document.getElementById("Price6").innerHTML=respPrice6;
    ///
    //document.getElementById("submit-bt").innerHTML="<input type='submit' enabled />"; //enable buttom
    
    //alert(str);
}