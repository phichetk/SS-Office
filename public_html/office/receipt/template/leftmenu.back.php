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
        <td height="20" align="center" class="Ar12Bb"><a href="javascript: d.openAll();" class="Ar12Bb">�Դ���ٷ�����</a></td>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="borderB">
      <tr>
        <td height="24" align="center" class="Ar12Bb"><a href="javascript: d.closeAll();" class="Ar12Bb">�Դ���ٷ�����</a></td>
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
		d.add(10,0,'  ������Ѻ�Թ');						   				   
							d.add(11,10,' �Ѵ��������','main.php?page=11');
		d.add(20,0,'  ����� � ������');
		                   d.add(21,20,' �Ѵ�����ѡ � ������','main.php?page=21');   				   

		
									<?php		if ("admin" ==  $_SESSION["user"]){		?>
		d.add(50,0,'  �Ѵ��ü������к�');
						   d.add(51,50,' ��¡�ü������к�','main.php?page=51');
						   d.add(52,50,' ����ѵԡ�����к�','main.php?page=52');
									<?php		}			?>
		//d.add(60,0,'  �Ѵ��������');
		                 //  d.add(61,60,' ���ҧ��Ţ�¾����','main.php?page=61');	        				   				   
		d.add(100,0,'�͡�ҡ�к�','main.php?page=logout','','','images/trash.gif');
		document.write(d);
	    </script>
				  <br><br>
                  <div align="center" class="Ar12Bb">
				     ������к��� <br><br>
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