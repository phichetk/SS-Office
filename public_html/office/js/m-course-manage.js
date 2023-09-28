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