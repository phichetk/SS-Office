<?php
require('fpdf.php');

class PDF extends FPDF {
	function SetThaiFont() {
		$this->AddFont('AngsanaNew','','angsa.php');
		$this->AddFont('AngsanaNew','B','angsab.php');
		$this->AddFont('AngsanaNew','I','angsai.php');
		$this->AddFont('AngsanaNew','IB','angsaz.php');
		$this->AddFont('CordiaNew','','cordia.php');
		$this->AddFont('CordiaNew','B','cordiab.php');
		$this->AddFont('CordiaNew','I','cordiai.php');
		$this->AddFont('CordiaNew','IB','cordiaz.php');
		$this->AddFont('Tahoma','','tahoma.php');
		$this->AddFont('Tahoma','B','tahomab.php');
		$this->AddFont('BrowalliaNew','','browa.php');
		$this->AddFont('BrowalliaNew','B','browab.php');
		$this->AddFont('BrowalliaNew','I','browai.php');
		$this->AddFont('BrowalliaNew','IB','browaz.php');
		$this->AddFont('KoHmu','','kohmu.php');
		$this->AddFont('KoHmu2','','kohmu2.php');
		$this->AddFont('KoHmu3','','kohmu3.php');
		$this->AddFont('MicrosoftSansSerif','','micross.php');
		$this->AddFont('PLE_Cara','','plecara.php');
		$this->AddFont('PLE_Care','','plecare.php');
		$this->AddFont('PLE_Care','B','plecareb.php');
		$this->AddFont('PLE_Joy','','plejoy.php');
		$this->AddFont('PLE_Tom','','pletom.php');
		$this->AddFont('PLE_Tom','B','pletomb.php');
		$this->AddFont('PLE_TomOutline','','pletomo.php');
		$this->AddFont('PLE_TomWide','','pletomw.php');
		$this->AddFont('DilleniaUPC','','dill.php');
		$this->AddFont('DilleniaUPC','B','dillb.php');
		$this->AddFont('DilleniaUPC','I','dilli.php');
		$this->AddFont('DilleniaUPC','IB','dillz.php');
		$this->AddFont('EucrosiaUPC','','eucro.php');
		$this->AddFont('EucrosiaUPC','B','eucrob.php');
		$this->AddFont('EucrosiaUPC','I','eucroi.php');
		$this->AddFont('EucrosiaUPC','IB','eucroz.php');
		$this->AddFont('FreesiaUPC','','free.php');
		$this->AddFont('FreesiaUPC','B','freeb.php');
		$this->AddFont('FreesiaUPC','I','freei.php');
		$this->AddFont('FreesiaUPC','IB','freez.php');
		$this->AddFont('IrisUPC','','iris.php');
		$this->AddFont('IrisUPC','B','irisb.php');
		$this->AddFont('IrisUPC','I','irisi.php');
		$this->AddFont('IrisUPC','IB','irisz.php');
		$this->AddFont('JasmineUPC','','jasm.php');
		$this->AddFont('JasmineUPC','B','jasmb.php');
		$this->AddFont('JasmineUPC','I','jasmi.php');
		$this->AddFont('JasmineUPC','IB','jasmz.php');
		$this->AddFont('KodchiangUPC','','kodc.php');
		$this->AddFont('KodchiangUPC','B','kodc.php');
		$this->AddFont('KodchiangUPC','I','kodci.php');
		$this->AddFont('KodchiangUPC','IB','kodcz.php');
		$this->AddFont('LilyUPC','','lily.php');
		$this->AddFont('LilyUPC','B','lilyb.php');
		$this->AddFont('LilyUPC','I','lilyi.php');
		$this->AddFont('LilyUPC','IB','lilyz.php');
	}
	
	function conv($string) {
		//return iconv('UTF-8', 'TIS-620', $string);
		return $string;
	}
}

$pdf = new PDF();

$pdf->SetThaiFont();

//$pdf->SetMargins(20, 20);
$pdf->SetMargins(0, 0);

$pdf->AddPage();
$pdf->Image('invoice.jpg', 0, 0, 200);

$pdf->SetFont('AngsanaNew', 'B', 16);
$pdf->Ln(44);
$AP_NO ="                                                                                                                                                          ";
$AP_NO .= "AP2010284008";
$pdf->MultiCell(320, 0, $AP_NO, 0, 'L');

$pdf->SetFont('AngsanaNew', 'B', 12);
$pdf->Ln(12.5);
$AP_NAME ="                                                                                                                                                          ";
$AP_NAME .= "คุณ ชัยยา มิชชัย";
$pdf->MultiCell(0, 0, $AP_NAME, 0, 'L');

$pdf->Ln(5);
$AP_COMPANY ="                                                                                                                                                          ";
$AP_COMPANY .= "บริษัท การลิเก แห่งประเทศไทย จำกัด(มหาชน)";
$pdf->MultiCell(0, 0, $AP_COMPANY, 0, 'L');

$pdf->Ln(5);
$AP_ADDRESS ="                                                                                                                                                          ";
$AP_ADDRESS .= "123/44 ถนน ยมโลก เขต บางที กทม.";
$pdf->MultiCell(0, 0, $AP_ADDRESS, 0, 'L');

$pdf->Ln(5);
$AP_ZIP ="                                                                                                                                                          ";
$AP_ZIP .= "10250 ";
$pdf->MultiCell(0, 0, $AP_ZIP, 0, 'L');

$pdf->Ln(5);
$AP_TEL ="                                                                                                                                                          ";
$AP_TEL .= "TEL 0890080808 ";
$pdf->MultiCell(0, 0, $AP_TEL, 0, 'L');

$pdf->Ln(5);
$AP_CUSTOMERID ="                                                                                                                                                          ";
$AP_CUSTOMERID .= "Customer ID ABC123456 ";
$pdf->MultiCell(0, 0, $AP_CUSTOMERID, 0, 'L');

$pdf->Ln(6);
$pdf->SetFont('AngsanaNew', 'B', 14);
$AP_ISSUEDATE ="                                                       ";
$AP_ISSUEDATE .= "15/07/2010";
$pdf->MultiCell(0, 0, $AP_ISSUEDATE, 0, 'L');

$pdf->Ln(14);
$AP_TRAINDATE ="                                     ";
$AP_TRAINDATE .= "31/07/2010";
$pdf->MultiCell(0, 0, $AP_TRAINDATE, 0, 'L');

$AP_COURSE_NAME_EN="                                                                    ";
$AP_COURSE_NAME_EN .= "Supervision Techniques";
$pdf->MultiCell(0, 0, $AP_COURSE_NAME_EN, 0, 'L');

$AP_QUANTITY="                                                                                                                                                                ";
$AP_QUANTITY .= "1";
$pdf->MultiCell(0, 0, $AP_QUANTITY, 0, 'L');

$AP_AMOUNT = "2,700.00";
$AP_AMOUNT .="                                          ";
$pdf->MultiCell(0, 0, $AP_AMOUNT, 0, 'R');

$pdf->Ln(5);
$pdf->SetFont('AngsanaNew', 'B', 12);
$AP_COURSE_NAME_TH="                                                                               ";
$AP_COURSE_NAME_TH .= "(หัวหน้างานที่ลูกน้องยอมรับและบริษัทวางใจ)";
$pdf->MultiCell(0, 0, $AP_COURSE_NAME_TH, 0, 'L');

$pdf->Ln(32);
$pdf->SetFont('AngsanaNew', 'B', 14);
$AP_VAT="                                                                                                                                                                                                        ";
$AP_VAT = "189.00";
$AP_VAT .="                                          ";
$pdf->MultiCell(0, 0, $AP_VAT, 0, 'R');

$pdf->Ln(5);
$AP_WITHHOLDING_TAX = "81.00";
$AP_WITHHOLDING_TAX .="                                          ";
$pdf->MultiCell(0, 0, $AP_WITHHOLDING_TAX, 0, 'R');

$AP_WITHHOLDING_TAX_PERCENT = "3";
$AP_WITHHOLDING_TAX_PERCENT .="                                                                                ";
$pdf->MultiCell(0, 0, $AP_WITHHOLDING_TAX_PERCENT, 0, 'R');


$pdf->Ln(5);
$AP_TOTAL_AMOUNT = "2,808.00";
$AP_TOTAL_AMOUNT .="                                          ";
$pdf->MultiCell(0, 0, $AP_TOTAL_AMOUNT, 0, 'R');

$pdf->SetFont('AngsanaNew', 'B', 12);
$pdf->Ln(72);
$AP_ISSUE_NAME = "                                                                                                                                                                ";
$AP_ISSUE_NAME .="คุณ สมหมาย น้อยดวงเจริญ";
$pdf->MultiCell(0, 0, $AP_ISSUE_NAME, 0, 'L');

//$pdf->WriteHTML($html);
$pdf->Output();
//$zxzxz = $pdf->Output('example2.pdf','S');
//echo $zxzxz;
?>