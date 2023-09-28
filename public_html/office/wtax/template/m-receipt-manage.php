<?
/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "m-receipt-manage": "";
 echo $SHOW_FILE_NAME;
/////

/////////////////////
$tyear = $_REQUEST['tyear'];
$tmonth = $_REQUEST['tmonth'];
////////////////////////////////////
$sql="SELECT * FROM  ws_course_detail   ";
$sql.=" where 1=1 ";
if($_Request['course_s']=="C"){
	$sql.=" AND CourseCode='".$_Request['inputsearch']."'";
}elseif($_Request['course_s']=="N"){
	$sql.=" AND CourseNameTH='%".$_Request['inputsearch']."%'";
}
if(isset($tyear)){ 
	$sql.="  AND YEAR(CourseDate)=".$tyear  ;
}
if(isset($tmonth)){ 
	$sql.="  AND MONTH(CourseDate)=".$tmonth;
}
$sql.="  ORDER BY CourseDate ASC LIMIT 0,30 ";
//$result=$adminlogin->query($sql);

//echo $sql;

?>
<script type="text/javascript" src="js/m-course-manage.js"></script>

<TABLE height=700 cellSpacing=0 cellPadding=0 width="100%" border=0>
                 <TBODY>
                    <TR>
						<TD vAlign=top width=9 height=10><IMG height=10  src="images/top.gif" width=700></TD>
					</TR>
                    <TR>
                      <TD class=style vAlign=top align=middle>
                     
                        <TABLE cellSpacing=0 cellPadding=0 width="100%"  border=0>
                          <TBODY>
                          <TR>
								<TD align=right height=30>
									  <TABLE cellSpacing=0 cellPadding=0 width="100%" 
									  border=0>
											<TBODY>
													<TR>
													<TD colSpan=2 height=10></TD></TR>
													<TR>
													<TD align=right height=30>&nbsp;</TD>
													<TD width=20>&nbsp;</TD></TR>
													<TR>
													<TD colSpan=2   height=10></TD></TR>
											</TBODY>
										</TABLE>
									</TD>
							 </TR>
												  <TR>
													<TD class=Ar14B align=middle bgColor=#87b3c0   height=30>จัดการหลักสูตร : แก้ไขหลักสูตร</TD>
												  </TR>
												  <TR>
													<TD class=Ar14B align=middle bgColor=#87b3c0  height=30>&nbsp;</TD>
												  </TR>
												  <TR>
													<TD class=Ar14B align=middle bgColor=#87b3c0    height=30>
														  <TABLE cellSpacing=1 cellPadding=1 width="100%"   border=0>
															<TBODY>
																<TR>
																		<td>
																			<table>
																				<form name="form2" method="GET" action="#" >
																				 <tr> 
																					<td width="100" align="right"><b class="Ar12Bb" name="caption_s" id="caption_s">ชื่อหลักสูตร</b>: </td> 
																					<td width="180">
																							<label>
																									<input name="inputsearch" type="text" id="inputsearch">
																							</label>
																					</td>
																						<input type="hidden" name="page" value="311">
																					<td> ค้นหาจากชื่อ
																						<input type="radio" name="course_s" value="N" id="course_s1" CHECKED onclick=mcoursemanage(); >
																							&nbsp;&nbsp;&nbsp;ค้นหาจากรหัส
																						<input type="radio" name="course_s" value="C"  id="course_s2" onclick=mcoursemanage(); > 
																					</td>
																					<td align="left"><label> <input type="submit" name="Submit" value=" ค้นหา "> </label></td> 
																					<td width="150" align="center"></td> 
																				</tr> 
																				<input name="page" type="hidden"  value="13">
																				<input name="xxx" type="hidden" id="xxx">
																				<input name="yyy" type="hidden" id="yyy">
																				</form>
																			 </table>
																	   </td>
															           <td height="30" align="right">
																			<table width="103" height="22" border="0" cellpadding="0" cellspacing="0">
																				<tr>
																					<td align="center" background="images/but_0.gif" class="Ar12rr">
																					<a href="main.php?page=14">เพิ่มหลักสูตร</a>
																					</td>
																				</tr>
																			</table>
																		</td>	
																</TR>
															</TBODY>
														</TABLE>
													</TD>
												</TR>
											</TBODY>
									</TABLE>
									<TABLE cellSpacing=1 cellPadding=1 width="100%" border=0>
									  <TBODY>
												<tr bgcolor="#FFCC00"> 
												  <td width="7%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">รหัสหลักสูตร</td> 
												  <td width="10%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
												  <td width="57%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อหลักสูตร</td> 
												  <td width="6%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ผู้อบรม</td> 
												  <td width="6%" align="center" bgcolor="#6A98A7" class="Ar12Bb">แก้ไข</td> 
												  <td width="6%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลบ</td> 
												</tr> 
	
											 <?php
												while($row = mysql_fetch_array($result)){
											
													$sql2=" SELECT COUNT( ws_reservaton_pupil.ID ) AS pupil_num ";
													$sql2.=" FROM ws_reservaton_transection  ";
													$sql2.=" INNER JOIN ws_reservaton_pupil ON ws_reservaton_transection.ID = ws_reservaton_pupil.ReservatonID  ";
													$sql2.=" WHERE ws_reservaton_transection.CourseCode =".$row['ID'];
													$result2=$adminlogin->query($sql2);
													$row2 = mysql_fetch_array($result2);


											  ?>
											   <!-- /start  <? echo $row['ID']; ?> / -->
													<!-- /start switch colour -->
											   <? if($ii<1){ ?>
												<TR bgColor=#CFE4E9>
											   <?  $ii =1;        ?>
											   <?  } else { ?>
											   <?  $ii =0;        ?>
											   <TR bgColor=#E9F6F9>
											   <? } ?>
													<!-- /end switch colour -->
												<TD class=Ar12B vAlign=center align=middle height=20>
													<A  class=Ar12B href="main.php?page=13&act=view&ID=<? echo $row['ID']; ?>"><? echo $row['CourseCode']; ?>
													</A>
												</TD>
												<TD class=Ar12B vAlign=center align=middle><? echo $row['CourseDate']; ?></TD>
												<TD class=Ar12B vAlign=center>&nbsp;
													<A  class=Ar12B href="main.php?page=13&act=view&ID=<? echo $row['ID']; ?>"><? echo $row['CourseNameTH']; ?>
													</A>
												</TD>
												<TD class=Ar12B vAlign=center align=middle>
													<A  class=Ar12Bb href="main.php?page=13&act=pupil&ID=<? echo $row['ID']; ?>">
													<? echo $row2['pupil_num']; ?>
													</A>
												</TD>
											<? if("admin"==$_SESSION["user"]) {  //  start ถ้าเป็น admin ไม่ให้แก้ไขข้อมูล  ?>
												<TD class=Ar12B vAlign=center align=middle>
														<A  class=Ar12B href="main.php?page=13&act=edit&ID=<? echo $row['ID']; ?>">
															<IMG src="images/b_edit.png" alt="<? echo "แก้ไขข้อมูล ".$row['xxxxxx']; ?>" border=0>
														</A>
												</TD>
												<TD class=Ar12B vAlign=center align=middle>
														<A  class=Ar12B href="main.php?page=13&act=del&ID=<? echo $row['ID']; ?>">
															<IMG  src="images/b_drop.png" alt="<? echo "ลบข้อมูล ".$row['xxxxx']; ?>" border=0> 
														</A>
												</TD>
											<?}else{  ?>
											<TD class=Ar12B vAlign=center align=middle></TD>
											<TD class=Ar12B vAlign=center align=middle></TD>
											<? } // end ถ้าเป็น admin ไม่ให้ลบ ?>

											  </TR>
											  <!-- /end  <? echo $row['ID']; ?>/ -->
											 <?php
												}
											 ?>



									  </TBODY>

									</TABLE>
									<P></P>
						</TD>
					</TR>
				  <TR>
						<TD class=style_down vAlign=top  height=30></TD>
				  </TR>
			</TBODY>
</TABLE>
<?php mysql_close(); ?>