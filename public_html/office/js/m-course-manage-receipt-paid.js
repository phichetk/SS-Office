/*
function mcoursemanage(){
	var elemcourse_s1 = document.getElementById('course_s1');
	var elemcourse_s2 = document.getElementById('course_s2');

		if(elemcourse_s1.checked == true){
			document.getElementById('caption_s').innerHTML = "ชื่อ หลักสูตร";
		}

		if(elemcourse_s2.checked == true){
			document.getElementById('caption_s').innerHTML = "รหัส หลักสูตร";
		}

}
*/

function checkbox_for_invoice(zzz){
	var zzz;
	var x=document.getElementById("receipt");

	if(document.getElementById("pupilID"+zzz).checked == true){
		// x.value;
		x.href=x.href+"&PupilID="+zzz;
	}
	if(document.getElementById("pupilID"+zzz).checked == false){
		var getstr = x.href;
		//document.write(getstr.replace("&PupilID="+zzz , ""));
		x.href=getstr.replace("&PupilID="+zzz , "");
	}
}

function Tax_Deduct_From_Total(getmoney){

var Total_Amount_No_VAT=document.getElementById("Total_Amount_No_VAT");
var Total_VAT=document.getElementById("Total_VAT");
var Tax_Deduct_amount = getmoney * Number(Total_Amount_No_VAT.value) /100;
var xxx = Number(Total_Amount_No_VAT.value) + Number(Total_VAT.value)  - Number(Tax_Deduct_amount) ;
var yyy =Total_VAT.value;

var Cash_Amount=document.getElementById("Cash_Amount");
var Transfer_Amount=document.getElementById("Transfer_Amount");
var Cheque_Amount=document.getElementById("Cheque_Amount");

Cash_Amount.value = "";
Transfer_Amount = "";
Cheque_Amount = "";

var Total_Amount_Money=document.getElementById("Total_Amount");
Total_Amount_Money.value = xxx;

var MustPaid=document.getElementById("MustPaid");
MustPaid.innerHTML =formatCurrency(xxx);

}



function PaidMoneyInput(getmoney){
var Cash_Amount=document.getElementById("Cash_Amount");

var Transfer_Amount=document.getElementById("Transfer_Amount");
var Cheque_Amount=document.getElementById("Cheque_Amount");
var Total_Amount_Money=document.getElementById("Total_Amount");

if (isNumberKey(Cash_Amount.value) == false && Cash_Amount.value != ""){Cash_Amount.value ="";Cash_Amount.focus;alert("กรุณาใส่ตัวเลขเท่านั้น");}
if (isNumberKey(Transfer_Amount.value) == false &&  Transfer_Amount.value != ""){Transfer_Amount.value ="";Transfer_Amount.focus;alert("กรุณาใส่ตัวเลขเท่านั้น");}
if (isNumberKey(Cheque_Amount.value) == false && Cheque_Amount.value != "" ){Cheque_Amount.value ="";Cheque_Amount.focus;alert("กรุณาใส่ตัวเลขเท่านั้น");}

var Total_Amount = Number(Total_Amount_Money.value) - Number(Cash_Amount.value)  - Number(Transfer_Amount.value ) - Number(Cheque_Amount.value)  ;

////Total_Amount_Money.value = Total_Amount;
/////alert(Cash_Amount.value);
var MustPaid=document.getElementById("MustPaid");
MustPaid.innerHTML =formatCurrency(Total_Amount);


}

function formatCurrency(num) {
num = num.toString().replace(/\$|\,/g,'');
if(isNaN(num))
num = "0";
sign = (num == (num = Math.abs(num)));
num = Math.floor(num*100+0.50000000001);
cents = num%100;
num = Math.floor(num/100).toString();
if(cents<10)
cents = "0" + cents;
for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
num = num.substring(0,num.length-(4*i+3))+','+
num.substring(num.length-(4*i+3));
return (((sign)?'':'-') + '' + num + '.' + cents);
}

 function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode == 46 )
            return false;

         return true;
      }