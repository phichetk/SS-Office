function checkemail(str){
			var passstr=".,!#@$%^&*()_-/\+={}[]:;~0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; //กำหนดอักษรอังกฤษส่วนนี้ครับ
			var valOK = true;
			var emailFilter=/^.+@.+\..{2,4}$/;
			var dmOBJ = document.addmember;
			var str=document.addmember.email.value;

			if (!(emailFilter.test(str))) { 
				   alert ("กรุณาใส่ email ให้ถูกต้อง");
				   document.addmember.email.focus();
				   return false;
			}
			if (str!="") {
					for (i=0; i < str.length & valOK; i++){ valOK = (passstr.indexOf(str.charAt(i))!= -1) }

						if(!valOK){  document.addmember.email.focus(); alert("ไม่สามารถใช้ภาษาไทยได้ !!! ");  return false; }
			}
			if(document.addmember.password.value==""){
					alert("กรุณาใส่ รหัสผ่าน");
					document.addmember.password.focus();
					return false;
			}		
			if(document.addmember.repassword.value==""){
					alert("กรุณาใส่ ยืนยันรหัสผ่าน");
					document.addmember.repassword.focus();
					return false;
			}	
			if(!(document.addmember.repassword.value==document.addmember.password.value)){
					alert("ยืนยันรหัสผ่าน ไม่ตรงกับครั้งแรก");
					document.addmember.repassword.value="";
					document.addmember.repassword.focus();
					return false;
			}
			if(document.addmember.firstname.value==""){
					alert("กรุณาใส่ ชื่อผู้ติดต่อ");
					document.addmember.firstname.focus();
					return false;
			}	
			if(document.addmember.lastname.value==""){
					alert("กรุณาใส่ นามสกุล");
					document.addmember.lastname.focus();
					return false;
			}	
			if(document.addmember.membertypeC.checked==true){
				if(document.addmember.companyname.value==""){
					alert("กรุณาใส่ ชื่อบริษัท");
					document.addmember.companyname.focus();
					return false;
				}	

			}
			if(document.addmember.billaddress.value==""){
					alert("กรุณาใส่ ที่อยู่ที่ออกใบเสร็จ");
					document.addmember.billaddress.focus();
					return false;
			}	
			if(document.addmember.billtumbon.value==""){
					alert("กรุณาใส่ เขต/ตำบล");
					document.addmember.billtumbon.focus();
					return false;
			}	
			if(document.addmember.billumper.value==""){
					alert("กรุณาใส่ แขวง/อำเภอ");
					document.addmember.billumper.focus();
					return false;
			}	
			if(document.addmember.billprovince.value==""){
					alert("กรุณาใส่ จังหวัด");
					document.addmember.billprovince.focus();
					return false;
			}	
			if(document.addmember.billzipcode.value==""){
					alert("กรุณาใส่ รหัสไปรษณีย์");
					document.addmember.billzipcode.focus();
					return false;
			}	
			if (document.addmember.billzipcode.value.length<5) {
					alert("กรุณาใส่ รหัสไปรษณีย์ 5 ตัวอักษร ขณะนี้มี "+document.addmember.billzipcode.value.length+" ตัวอักษร");
					document.addmember.billzipcode.focus();
					return false;
			}	
			if (document.addmember.billzipcode.value.length==5) {
							var valid = "0123456789";
							var hyphencount = 0;
							for (var i=0; i < document.addmember.billzipcode.value.length; i++) {
								temp = "" + document.addmember.billzipcode.value.substring(i, i+1);
									if (temp == "-") hyphencount++;
									if (valid.indexOf(temp) == "-1") {
										alert("กรุณาใส่ รหัสไปรษณีย์สำหรับส่งเอกสาร เฉพาะตัวเลข");
										document.addmember.bill_same.checked = false;
										mailchecking();
										document.addmember.billzipcode.focus();
										return false;
									}
							}
			}

	
			if(document.addmember.bill_same.checked == false){
					if(document.addmember.mailaddress.value==""){
						alert("กรุณาใส่ ที่อยู่สำหรับส่งเอกสาร");
						document.addmember.mailaddress.focus();
						return false;
					}
					if(document.addmember.mailtumbon.value==""){
						alert("กรุณาใส่ แขวง/ตำบล สำหรับส่งเอกสาร");
						document.addmember.mailtumbon.focus();
						return false;
					}
					if(document.addmember.mailumper.value==""){
						alert("กรุณาใส่  เขต/อำเภอ สำหรับส่งเอกสาร");
						document.addmember.mailumper.focus();
						return false;
					}
					if(document.addmember.mailprovince.value==""){
						alert("กรุณาใส่  จังหวัดสำหรับส่งเอกสาร");
						document.addmember.mailprovince.focus();
						return false;
					}
					if(document.addmember.mailzipcode.value==""){
						alert("กรุณาใส่  รหัสไปรษณีย์สำหรับส่งเอกสาร");
						document.addmember.mailzipcode.focus();
																
						return false;
					}
					if (document.addmember.mailzipcode.value.length<5) {
							alert("กรุณาใส่ รหัสไปรษณีย์ 5 ตัวอักษร ขณะนี้มี "+document.addmember.mailzipcode.value.length+" ตัวอักษร");
							document.addmember.mailzipcode.focus();
							return false;
					}	
					if (document.addmember.mailzipcode.value.length==5) {
							var valid = "0123456789";
							var hyphencount = 0;
							for (var i=0; i < document.addmember.mailzipcode.value.length; i++) {
								temp = "" + document.addmember.mailzipcode.value.substring(i, i+1);
									if (temp == "-") hyphencount++;
									if (valid.indexOf(temp) == "-1") {
										alert("กรุณาใส่ รหัสไปรษณีย์สำหรับส่งเอกสาร เฉพาะตัวเลข");
										return false;
									}
							}
					}

			}	

			if(document.addmember.tel.value==""){
					alert("กรุณาใส่ เบอร์โทรศัพท์");
					document.addmember.tel.focus();
					return false;
			}	
			if(document.addmember.checkSMS.checked == true){
					if(document.addmember.mobliephone.value==""){
					alert("ยินดีรับข้อมูลทาง SMS กรุณาใส่ เบอร์โทรศัพท์ ");
					document.addmember.mobliephone.focus();
					return false;
					}
					if (document.addmember.mobliephone.value.length<10) {
							alert("กรุณาใส่ เบอร์โทรศัพท์ มือถือ 10 ตัวอักษร ขณะนี้มี "+document.addmember.mobliephone.value.length+" ตัวอักษร");
							document.addmember.mobliephone.focus();
							return false;
					}	

					if (document.addmember.mobile.value.length==10) {
							var valid = "0123456789";
							var hyphencount = 0;
							for (var i=0; i < document.addmember.mobile.value.length; i++) {
								temp = "" + document.addmember.mobile.value.substring(i, i+1);
									if (temp == "-") hyphencount++;
									if (valid.indexOf(temp) == "-1") {
										alert("กรุณาใส่ รหัสไปรษณีย์สำหรับส่งเอกสาร เฉพาะตัวเลข");
										return false;
									}
							}
					}
					
			}

		return true;
}

function mailchecking(){
			if(document.addmember.bill_same.checked){

						window.document.addmember.mailaddress.value=window.document.addmember.billaddress.value;
						window.document.addmember.mailaddress.disabled=true;
						window.document.addmember.mailtumbon.value=window.document.addmember.billtumbon.value;
						window.document.addmember.mailtumbon.disabled=true;
						window.document.addmember.mailumper.value=window.document.addmember.billumper.value;
						window.document.addmember.mailumper.disabled=true;
						window.document.addmember.mailprovince.value=window.document.addmember.billprovince.value;
						window.document.addmember.mailprovince.disabled=true;
						window.document.addmember.mailzipcode.value=window.document.addmember.billzipcode.value;
						window.document.addmember.mailzipcode.disabled=true;

			} 
			if(document.addmember.bill_same.checked == false){																												
						window.document.addmember.mailaddress.value='';
						window.document.addmember.mailaddress.disabled=false;
						window.document.addmember.mailtumbon.value='';
						window.document.addmember.mailtumbon.disabled=false;
						window.document.addmember.mailumper.value='';
						window.document.addmember.mailumper.disabled=false;
						window.document.addmember.mailprovince.value='';
						window.document.addmember.mailprovince.disabled=false;
						window.document.addmember.mailzipcode.value='';
						window.document.addmember.mailzipcode.disabled=false;
			}

}
