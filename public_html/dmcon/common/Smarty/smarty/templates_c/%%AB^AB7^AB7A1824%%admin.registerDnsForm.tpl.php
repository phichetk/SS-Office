<?php /* Smarty version 2.6.7, created on 2005-07-15 14:21:04
         compiled from default/admin.registerDnsForm.tpl */ ?>
<br>
<form method="post" action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table width="51%" class="border1" style="padding: 1px" cellspacing="1" cellpadding="3" align="center">
    <tr>
	    <td class=cellBg align="center">
		    Dns: <input type="text" name="member_name">&nbsp; &nbsp;
			IP:    <input type="text" name="dns">
		</td>
	</tr>
</table>
<table width="52%" align="center">
	<tr><td>&nbsp;</td></tr>
	<tr>
	    <td align ="center">
			<input type="submit" name="Submit" value="Register">&nbsp; &nbsp; &nbsp; &nbsp;
			<input type="reset" name="Reset" value="Reset">
			<input type="hidden" name="action" value="registerDns">
		</td>
	</tr>
</table>
</form>