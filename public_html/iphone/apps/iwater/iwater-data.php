<?php
$homepage = file_get_contents('http://wqconline.mwa.co.th/wqc/OverviewMap.aspx');
//echo $homepage;

function GetDataFromLabel($LabelName,$Color,$homepage) {

        $EndData = "</font></span>";
        $FontColorTag = "<font color=\"".$Color."\">";
        $GetDataLine01 ="<span id=\"".$LabelName."\"";

        $RAWData01  = split($GetDataLine01,$homepage,2);
        $dataS00    = split($FontColorTag,$RAWData01[1],2);
        $dataS01    = split($EndData,$dataS00[1],2);
        
        return $dataS01[0];
} //end function GetDataFromLabel

    
function GetLimeYellowData($LabelNameL,$LabelNameY,$homepage){
    
        //echo "  XhomepageX=  ".$homepage;
        $Color = "Lime";
        $GetTR2Lime = GetDataFromLabel($LabelNameL,$Color,$homepage);
        /////////////////////////////////////
        //echo "xx".$GetTR2Lime;
        $Color = "Yellow";
        $GetTR2Yellow = GetDataFromLabel($LabelNameY,$Color,$homepage);
        ///////////////////////////////
        //echo "yy".$GetTR2Yellow;
        return array ($GetTR2Lime,$GetTR2Yellow);
    
}

$TR1 = GetLimeYellowData("Label5","Label7",$homepage);
echo "TR1 |".$TR1[0];
echo "|".$TR1[1]."*";

$TR2 = GetLimeYellowData("Label28","Label29",$homepage);
echo "TR2 |".$TR2[0];
echo "|".$TR2[1]."*";

$TR3 = GetLimeYellowData("Label8","Label9",$homepage);
echo "TR3 |".$TR3[0];
echo "|".$TR3[1]."*";

$MST = GetLimeYellowData("Label42","Label43",$homepage);
echo "MST |".$MST[0];
echo "|".$MST[1]."*";

$MSD = GetLimeYellowData("Label48","Label49",$homepage);
echo "MSD |".$MSD[0];
echo "|".$MSD[1]."*";

$SS = GetLimeYellowData("Label44","Label47",$homepage);
echo "SS |".$SS[0];
echo "|".$SS[1]."*";

$LP = GetLimeYellowData("Label3","Label4",$homepage);
echo "LP |".$LP[0];
echo "|".$LP[1]."*";

$TP = GetLimeYellowData("Label34","Label35",$homepage);
echo "TP |".$TP[0];
echo "|".$TP[1]."*";

$RB = GetLimeYellowData("Label38","Label39",$homepage);
echo "RB |".$RB[0];
echo "|".$RB[1]."*";

$SR = GetLimeYellowData("Label20","Label21",$homepage);
echo "SR |".$SR[0];
echo "|".$SR[1]."*";

$LA = GetLimeYellowData("Label24","Label25",$homepage);
echo "LA |".$LA[0];
echo "|".$LA[1]."*";

$KT = GetLimeYellowData("Label22","Label23",$homepage);
echo "KT |".$KT[0];
echo "|".$KT[1]."*";

$MB = GetLimeYellowData("Label10","Label11",$homepage);
echo "MB |".$MB[0];
echo "|".$MB[1]."*";

$LK = GetLimeYellowData("Label14","Label15",$homepage);
echo "LK |".$LK[0];
echo "|".$LK[1]."*";

$BP = GetLimeYellowData("Label16","Label17",$homepage);
echo "BP |".$BP[0];
echo "|".$BP[1]."*";

//$SPK = samutprakarn 
$SPK = GetLimeYellowData("Label18","Label19",$homepage);
echo "SPK |".$SPK[0];
echo "|".$SPK[1]."*";

//$SPK = sukhumvit 
$SKV = GetLimeYellowData("Label36","Label37",$homepage);
echo "SKV |".$SKV[0];
echo "|".$SKV[1]."*";

//$TMM = tung ma ha mek 
$TMM  = GetLimeYellowData("Label26","Label27",$homepage);
echo "TMM |".$TMM[0];
echo "|".$TMM[1]."*";

//$MIN = min buri 
$MIN  = GetLimeYellowData("Label12","Label13",$homepage);
echo "MIN |".$MIN[0];
echo "|".$MIN[1]."*";

//$PYT = phaya thai 
$PYT  = GetLimeYellowData("Label30","Label31",$homepage);
echo "PYT |".$PYT[0];
echo "|".$PYT[1]."*";

//$NON = nonthaburi 
$NON  = GetLimeYellowData("Label","Label6",$homepage);
echo "NON |".$NON[0];
echo "|".$NON[1]; //ended
?>

