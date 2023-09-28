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
		d.add(10,0,'ใบเสร็จรับเงิน');						   				   
							d.add(11,10,'เพิ่มลูกค้าใหม่','main.php?myKey=Receipt-Customer-Add');
                            d.add(12,10,'จัดการลูกค้า','main.php?myKey=Receipt-Customer-List');
                            d.add(13,10,'--');
                            d.add(14,10,'ออกใบเสร็จรับเงิน','main.php?myKey=Receipt-Issue');
                            d.add(15,10,'รายการใบเสร็จรับเงิน','main.php?myKey=Receipt-Report');
                            d.add(16,10,'--');
                            d.add(17,10,'ออกใบเสนอราคา','main.php?myKey=Quotation-Issue');
                            d.add(18,10,'รายการใบเสนอราคา','main.php?myKey=Quotation-Report');
                            d.add(19,10,'--');
                            d.add(20,10,'ออกใบแจ้งหนี้','main.php?myKey=Invoice-Issue');
                            d.add(21,10,'รายการใบแจ้งหนี้','main.php?myKey=Invoice-Report');
                            //d.add(14,10,' รายการหัก','main.php?myKey=report');
			        				   				   
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