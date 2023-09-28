<?php
// $Id: virusmap.html.php,v 1.2 2003/10/10 PDG Exp $
/**
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.0 $
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

class virusmap_html
{
	function WriteVirusMap()
	{
		?>
		<table cellpadding="4" cellspacing="0" border="0">
	 	 <tr>
		   <td class="newsflash">
				<script language="JavaScript1.1" SRC="http://www.trendmicro.com/syndication/wtc/wtc_applet_js.asp"></script>
		   </td>
		 </tr>
		</table>
		<?php
	}
}
?>
