<?
        /////
         $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "report-export-csv": "";
         echo $SHOW_FILE_NAME;
        /////
        /////////////////////
            $tDay   = date("d");
            $tMonth = date("m");
            $tYear  = date("Y");
            
            $searchdate = $_REQUEST['searchdate'];
            $sMonth = $_REQUEST['sMonth'];
            $sYear  = $_REQUEST['sYear'];
            
            if(isset($_REQUEST['sMonth'])){
            $tMonth = $sMonth;
            }
            if(isset($_REQUEST['sYear'])){
            $tYear = $sYear;
            }
            
            echo "Today=".$tDay.$tMonth.$tYear;

        
        /////////////////////
        // if no Start_Date 
        if(!isset($_REQUEST['Start_Date'])) { $startDate  = $firstDate;  }else { $startDate  = $_REQUEST['Start_Date']; }
        //if no End_Date
        if(!isset($_REQUEST['End_Date']))   { $endDate    = $thisDate;   }else { $endDate    = $_REQUEST['End_Date'];   }
        
        //echo "Start_Date=".$startDate;
        //echo "End_Date=".$endDate;
        
        ////////////////////////////////////

        /////////////
        $sql  =" SELECT ID ,CourseCode ,CourseBillLine2 ,CourseDate  "; 
        $sql .="  ";
        $sql .=" FROM ws_course_detail  ";
        $sql .=" WHERE CourseDate BETWEEN '".$startDate."' AND '".$endDate."'";
        $sql .=" ORDER BY CourseDate ASC ";
        //$sql .=" AND PaidCashMoney > 0 ";
        $result=$adminlogin->query($sql);
        //////////////
        
		$filName = "downloads/debit.csv";
        //unlink($filName);
        //$fh = fopen($myFile, 'w') or die("can't open file");
		$objWrite = fopen($filName, "w");
			fwrite($objWrite, "\"ลำดับที่\",\"รหัสหลักสูตร\",\"ชื่อหลักสูตร\",\"วันที่จัด\",\"เลขใบแจ้งหนี่\",\"บริษัท\",\"จำนวนคน\",\"จำนวนเงิน\",\"ภาษีมูลค่าเพิ่ม	\",\"รวม\" \n");
               $jjj=0;
				//start while
				while($row = mysql_fetch_array($result)){
					
                    $CourseID  = $row['ID'];
                    $CourseCode  = $row['CourseCode'];
                    $CourseBillLine1  = $row['CourseBillLine2'];
                    $CourseDate  = $row['CourseDate'];
                    
                   
                    ///////////// หาเลขใบแจ้งหนี่ จากวันอบรม ถ้าเลยกำหนด แล้วไม่ได้จ่าย เป็นใบเสร็จ
                    if(1){ // 
                    $SQL_FIND_AP  =" SELECT ID "; 
                    $SQL_FIND_AP .=" FROM ws_reservaton_transection  ";
                    $SQL_FIND_AP .=" WHERE CourseCode=".$CourseID;
                    $SQL_FIND_AP .=" AND STR_TO_DATE(".$thisDate.", '%Y-%m-%d') <= STR_TO_DATE(TransectionTime, '%Y-%m-%d') ";
                    $SQL_FIND_AP .=" ORDER BY ID ASC ";
                   // echo $SQL_FIND_AP;
                    //echo "<BR/>";
                    $RESULT_FIND_AP =$adminlogin->query($SQL_FIND_AP);

                    }
                    //////////////////////////////////// 
				
				$xxx1   = $jjj;
				$xxx2   = $CourseCode;
				$xxx3   = $CourseBillLine1; 
                $xxx4   = $CourseDate;
                $xxx5   = "";
                $xxx6   = "";
                $xxx7   = "";
                $xxx8   = "";
                $xxx9   = "";
                $xxx10  = "";


			//fwrite($objWrite, "\"".$xxx1."\",\"".$xxx2."\",\"".$xxx3."\",\"".$xxx4."\",\"".$xxx5."\",\"".$xxx6."\",\"".$xxx7."\",\"".$xxx8."\",\"".$xxx9."\",\"".$xxx10."\" \n");
			 
            
                 while($ROW_FIND_AP = mysql_fetch_array($RESULT_FIND_AP)){  
                                            
                    ///////////// หา คนยังไม่จ่าย จาก APID + ค้นใน receipt
                    if(1){ // 
                        $SQL_FIND_UPPAID  =" SELECT COUNT(ReservatonID) as DebitCounted1 "; 
                        $SQL_FIND_UPPAID .=" FROM ws_reservaton_pupil ";
                        $SQL_FIND_UPPAID .=" WHERE ReservatonID	=".$ROW_FIND_AP['ID'];
                        $SQL_FIND_UPPAID .=" AND ReceiptID = 0 ";

                        $RESULT_FIND_UPPAID =$adminlogin->query($SQL_FIND_UPPAID);
                        $ROW_FIND_UPPAID = mysql_fetch_array($RESULT_FIND_UPPAID);
                        
                     
                    }
                    //////////////////////////////////// 
                    
                    
                    ///////////// หาID บริษัท จากใบแจ้งหนี้
                    if($ROW_FIND_UPPAID['DebitCounted1'] >= 1 ){ // 
                        $SQL_FIND_MEM  =" SELECT ws_member_detail.CompanyName "; 
                        $SQL_FIND_MEM .=" , ws_reservaton_transection.Price, ws_reservaton_transection.PupilCount ";
                        $SQL_FIND_MEM .=" , ws_reservaton_transection.VAT  ";
                        $SQL_FIND_MEM .=" FROM ws_reservaton_transection  ";
                        
                        $SQL_FIND_MEM .=" INNER JOIN ws_member_detail ";
                        $SQL_FIND_MEM .=" ON ws_reservaton_transection.MemberID = ws_member_detail.ID";
                        
                        $SQL_FIND_MEM .=" WHERE ws_reservaton_transection.ID=".$ROW_FIND_AP['ID'];                                        
                        
                        $RESULT_FIND_MEM =$adminlogin->query($SQL_FIND_MEM);
                        $ROW_FIND_MEM = mysql_fetch_array($RESULT_FIND_MEM);
                        
                        //echo $SQL_FIND_MEM ;
                        //echo "<br>";
                        $APID        = $ROW_FIND_AP['ID'];
                        $CompanyName = $ROW_FIND_MEM['CompanyName'];
                        $PupilCount  = $ROW_FIND_MEM['PupilCount'];   
                        $Price       = $ROW_FIND_MEM['Price'];
                        $VAT         = $ROW_FIND_MEM['VAT'];  
                        
                        $Amount             = $Price * $PupilCount;
                        $AmountNum          = number_format($Amount,2,'.',',');
                        $AmountVAT          = $Amount * $VAT /100;
                        $AmountVATNum       = number_format($AmountVAT,2,'.',',');
                        $AmountWithVAT      = $Amount + $AmountVAT;
                        $AmountWithVATNum   = number_format($AmountWithVAT,2,'.',',');
                        
                         
                        $SUMLastAmount      = $Amount + $SUMLastAmount;
                        $SUMLastAmountNum   = number_format($SUMLastAmount,2,'.',',');
                        
                        $SumLastPupilCount  = $PupilCount + $SumLastPupilCount;
                        
                        $SUMLastAmountVAT       = $AmountVAT + $SUMLastAmountVAT;
                        $SUMLastAmountVATNum    = number_format($SUMLastAmountVAT,2,'.',',');
                        
                        $SUMLastAmountWithVAT   = $AmountWithVAT + $SUMLastAmountWithVAT;
                        $SUMLastAmountWithVATNum= number_format($SUMLastAmountWithVAT,2,'.',',');
                        
                        
                        
                        $xxx1   = $jjj;
                        $xxx2   = $CourseCode;
                        $xxx3   = $CourseBillLine1; 
                        $xxx4   = $CourseDate;
                        $xxx5   = "AP".$APID;
                        $xxx6   = $CompanyName;
				        $xxx7   = $PupilCount;
				        $xxx8   = $AmountNum; 
                        $xxx9   = $AmountVATNum;
                        $xxx10  = $AmountWithVATNum;
                
                
                    } // END if($ROW_FIND_UPPAID
                    
                    if($ROW_FIND_UPPAID['DebitCounted1'] >= 1 ){ // 
                    fwrite($objWrite, "\"".$xxx1."\",\"".$xxx2."\",\"".$xxx3."\",\"".$xxx4."\",\"".$xxx5."\",\"".$xxx6."\",\"".$xxx7."\",\"".$xxx8."\",\"".$xxx9."\",\"".$xxx10."\" \n");
                    } 
                   $jjj++; 
                  }  //while($ROW_FIND_AP
                
                
                } // end while($row
                        $xxx1   = "";
                        $xxx2   = "";
                        $xxx3   = ""; 
                        $xxx4   = "";
                        $xxx5   = "";
                        $xxx6   = "";
				        $xxx7   = $SumLastPupilCount;
				        $xxx8   = $SUMLastAmountNum; 
                        $xxx9   = $SUMLastAmountVATNum;
                        $xxx10  = $SUMLastAmountWithVATNum;
                
                 fwrite($objWrite, "\"".$xxx1."\",\"".$xxx2."\",\"".$xxx3."\",\"".$xxx4."\",\"".$xxx5."\",\"".$xxx6."\",\"".$xxx7."\",\"".$xxx8."\",\"".$xxx9."\",\"".$xxx10."\" \n");
                    //////////////////////////////////// 
            //fwrite($objWrite, "\"\",\"\",\"\",\"\",\"".$PRICE_SUM."\" \n");
			fclose($objWrite);
		   echo "<br>Generated CSV Done. <a href=".$filName." class=\"Ar12Bb\" >Download</a>";    
	?>
