function changeTAX(str,str2,str3){

	var tmpStr = ""; 
	tmpStr = (parseInt(str2)-(parseInt(str2)*parseInt(str)/100))+parseInt(str3);
	var sf = formatAsMoney(tmpStr)+" �ҷ";
	document.getElementById('vat_amount').innerHTML=sf;
}
function formatAsMoney(mnt) {
    mnt -= 0;
    mnt = (Math.round(mnt*100))/100;
    return (mnt == Math.floor(mnt)) ? mnt + '.00' 
              : ( (mnt*10 == Math.floor(mnt*10)) ? 
                       mnt + '0' : mnt);
}