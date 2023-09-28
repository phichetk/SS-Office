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