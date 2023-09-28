<table width="100%" height="700" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="9" height="10" valign="top"><img src="images/left_top2.gif" width="9" height="10" /></td>
    <td background="images/bg_top2.gif"></td>
    <td width="9" height="10" valign="top"><img src="images/right_top2.gif" width="9" height="10" /></td>
  </tr>
  <tr>
    <td height="46" valign="top" background="images/bg_left2.gif"></td>
    <td valign="top">
	<table width="100%" height="25" border="0" cellpadding="0" cellspacing="0" class="borderB">
      <tr>
        <td height="20" align="center" class="Ar12Bb"><a href="javascript: d.openAll();" class="Ar12Bb">เปิดเมนูทั้งหมด</a></td>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="borderB">
      <tr>
        <td height="24" align="center" class="Ar12Bb"><a href="javascript: d.closeAll();" class="Ar12Bb">ปิดเมนูทั้งหมด</a></td>
      </tr>
    </table></td>
    <td background="images/bg_right2.gif"></td>
  </tr>
  <tr>
    <td valign="top" background="images/bg_left_new.gif"></td>
    <td valign="top" class="style_menu">
		<div "dtree">
                <p align="left">&nbsp;</p>

                <script type="text/javascript">
		d = new dTree('d');

		d.add(0,-1,'MainMenu','#');	
		d.add(10,0,'  ใบเสร็จรับเงิน');						   				   
							d.add(11,10,' จัดการใบเสร็จ','main.php?page=11');
		d.add(20,0,'  ใบภาษี ณ ที่จ่าย');
		                   d.add(21,20,' จัดการใบหัก ณ ที่จ่าย','main.php?page=21');   				   

		
									<?php		if ("admin" ==  $_SESSION["user"]){		?>
		d.add(50,0,'  จัดการผู้ดูแลระบบ');
						   d.add(51,50,' รายการผู้ดูแลระบบ','main.php?page=51');
						   d.add(52,50,' ประวัติการใช้ระบบ','main.php?page=52');
									<?php		}			?>
		//d.add(60,0,'  จัดการใบเสร็จ');
		                 //  d.add(61,60,' สร้างบิลขายพิเศษ','main.php?page=61');	        				   				   
		d.add(100,0,'ออกจากระบบ','main.php?page=logout','','','images/trash.gif');
		document.write(d);
	    </script>
				  <br><br>
                  <div align="center" class="Ar12Bb">
				     เข้าใช้ระบบโดย <br><br>
					 <? echo $_SESSION["user"]; ?>
                  </div>
    </div></td>
    <td background="images/bg_right_new.gif"></td>
  </tr>
  <tr>
    <td width="9" height="10" valign="top"><img src="images/left_down_new.gif" width="9" height="10" /></td>
    <td height="10" background="images/bg_down_new.gif"></td>
    <td><img src="images/right_down_new2.gif" width="9" height="10" /></td>
  </tr>
</table>