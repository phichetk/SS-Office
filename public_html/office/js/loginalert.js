	function check(document){
		if(document.username.value==""){
			alert("��س���� Login Name");
			document.username.focus();
			return false;
		}
				if(document.fullname.value==""){
			document.fullname.value=document.username.value;
		}
		if(document.password.value==""){
			alert("��س���� ���ʼ�ҹ");
			document.password.focus();
			return false;
		}		
		if(document.repassword.value==""){
			alert("��س���� �׹�ѹ���ʼ�ҹ");
			document.repassword.focus();
			return false;
		}	
		if(document.repassword.value!=document.password.value){
			alert("�׹�ѹ���ʼ�ҹ ���ç�Ѻ�����á");
			document.repassword.value="";
			document.repassword.focus();
			return false;
		}
	return true;
	}


	function checkforloginedit(document){
		if((document.password.value=="") && (document.repassword.value!=document.password.value)){
			alert("�׹�ѹ���ʼ�ҹ passwordpassword���ç�Ѻ�����á!!!!");
			document.password.focus();
			return false;
		}
		if((document.repassword.value=="")  && (document.password.value!=document.repassword.value)){
			alert("�׹�ѹ���ʼ�ҹ ���ç�Ѻ�����á");
			document.repassword.focus();
			return false;
		}
	return true;
	}

	function checkeditpass(document){
		if((document.password.value=="") && (document.repassword.value!=document.password.value)){
			alert("�׹�ѹ���ʼ�ҹ passwordpassword���ç�Ѻ�����á!!!!");
			document.password.focus();
			return false;
		}
		if((document.repassword.value=="")  && (document.password.value!=document.repassword.value)){
			alert("�׹�ѹ���ʼ�ҹ ���ç�Ѻ�����á");
			document.repassword.focus();
			return false;
		}
	return true;
	}
