function checkemail(str){
			var passstr=".,!#@$%^&*()_-/\+={}[]:;~0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; //��˹��ѡ���ѧ�����ǹ����Ѻ
			var valOK = true;
			var emailFilter=/^.+@.+\..{2,4}$/;
			var dmOBJ = document.addmember;
			var str=document.addmember.email.value;

			if (!(emailFilter.test(str))) { 
				   alert ("��س���� email ���١��ͧ");
				   document.addmember.email.focus();
				   return false;
			}
			if (str!="") {
					for (i=0; i < str.length & valOK; i++){ valOK = (passstr.indexOf(str.charAt(i))!= -1) }

						if(!valOK){  document.addmember.email.focus(); alert("�������ö���������� !!! ");  return false; }
			}
			if(document.addmember.password.value==""){
					alert("��س���� ���ʼ�ҹ");
					document.addmember.password.focus();
					return false;
			}		
			if(document.addmember.repassword.value==""){
					alert("��س���� �׹�ѹ���ʼ�ҹ");
					document.addmember.repassword.focus();
					return false;
			}	
			if(!(document.addmember.repassword.value==document.addmember.password.value)){
					alert("�׹�ѹ���ʼ�ҹ ���ç�Ѻ�����á");
					document.addmember.repassword.value="";
					document.addmember.repassword.focus();
					return false;
			}
			if(document.addmember.firstname.value==""){
					alert("��س���� ���ͼ��Դ���");
					document.addmember.firstname.focus();
					return false;
			}	
			if(document.addmember.lastname.value==""){
					alert("��س���� ���ʡ��");
					document.addmember.lastname.focus();
					return false;
			}	
			if(document.addmember.membertypeC.checked==true){
				if(document.addmember.companyname.value==""){
					alert("��س���� ���ͺ���ѷ");
					document.addmember.companyname.focus();
					return false;
				}	

			}
			if(document.addmember.billaddress.value==""){
					alert("��س���� ����������͡�����");
					document.addmember.billaddress.focus();
					return false;
			}	
			if(document.addmember.billtumbon.value==""){
					alert("��س���� ࢵ/�Ӻ�");
					document.addmember.billtumbon.focus();
					return false;
			}	
			if(document.addmember.billumper.value==""){
					alert("��س���� �ǧ/�����");
					document.addmember.billumper.focus();
					return false;
			}	
			if(document.addmember.billprovince.value==""){
					alert("��س���� �ѧ��Ѵ");
					document.addmember.billprovince.focus();
					return false;
			}	
			if(document.addmember.billzipcode.value==""){
					alert("��س���� ������ɳ���");
					document.addmember.billzipcode.focus();
					return false;
			}	
			if (document.addmember.billzipcode.value.length<5) {
					alert("��س���� ������ɳ��� 5 ����ѡ�� ��й���� "+document.addmember.billzipcode.value.length+" ����ѡ��");
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
										alert("��س���� ������ɳ�������Ѻ���͡��� ੾�е���Ţ");
										document.addmember.bill_same.checked = false;
										mailchecking();
										document.addmember.billzipcode.focus();
										return false;
									}
							}
			}

	
			if(document.addmember.bill_same.checked == false){
					if(document.addmember.mailaddress.value==""){
						alert("��س���� �����������Ѻ���͡���");
						document.addmember.mailaddress.focus();
						return false;
					}
					if(document.addmember.mailtumbon.value==""){
						alert("��س���� �ǧ/�Ӻ� ����Ѻ���͡���");
						document.addmember.mailtumbon.focus();
						return false;
					}
					if(document.addmember.mailumper.value==""){
						alert("��س����  ࢵ/����� ����Ѻ���͡���");
						document.addmember.mailumper.focus();
						return false;
					}
					if(document.addmember.mailprovince.value==""){
						alert("��س����  �ѧ��Ѵ����Ѻ���͡���");
						document.addmember.mailprovince.focus();
						return false;
					}
					if(document.addmember.mailzipcode.value==""){
						alert("��س����  ������ɳ�������Ѻ���͡���");
						document.addmember.mailzipcode.focus();
																
						return false;
					}
					if (document.addmember.mailzipcode.value.length<5) {
							alert("��س���� ������ɳ��� 5 ����ѡ�� ��й���� "+document.addmember.mailzipcode.value.length+" ����ѡ��");
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
										alert("��س���� ������ɳ�������Ѻ���͡��� ੾�е���Ţ");
										return false;
									}
							}
					}

			}	

			if(document.addmember.tel.value==""){
					alert("��س���� �������Ѿ��");
					document.addmember.tel.focus();
					return false;
			}	
			if(document.addmember.checkSMS.checked == true){
					if(document.addmember.mobliephone.value==""){
					alert("�Թ���Ѻ�����ŷҧ SMS ��س���� �������Ѿ�� ");
					document.addmember.mobliephone.focus();
					return false;
					}
					if (document.addmember.mobliephone.value.length<10) {
							alert("��س���� �������Ѿ�� ��Ͷ�� 10 ����ѡ�� ��й���� "+document.addmember.mobliephone.value.length+" ����ѡ��");
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
										alert("��س���� ������ɳ�������Ѻ���͡��� ੾�е���Ţ");
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
