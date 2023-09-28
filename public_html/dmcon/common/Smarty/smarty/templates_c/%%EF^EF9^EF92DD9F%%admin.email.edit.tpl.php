<?php /* Smarty version 2.6.7, created on 2005-11-16 12:07:40
         compiled from simpleGreen/admin.email.edit.tpl */ ?>
<br>
<form action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table align=center cellpadding=4 cellspacing=2 >
	<tr>
		<td bgcolor=#E1ECFB colspan=3>Subject: &nbsp; 
			<input class="formStyle" type=text name=email_subject value="<?php echo $this->_tpl_vars['email_subject']; ?>
" style="width: 375px;">
		</td>
	</tr>
	 
	<tr>
		<td align=center bgcolor=#E1ECFB colspan=3>
		    <textarea name=email_body rows=15 cols=60 class="color"><?php echo $this->_tpl_vars['email_body']; ?>
</textarea>
		</td>
	</tr>
	<tr>
	    <td bgcolor=#E1ECFB align=center> <font style="font-size: 12px;">
		    You can use the following macros inside the email template.<br><?php echo $this->_tpl_vars['email_macros']; ?>
</font>
		</td>
	</tr>
	
	<?php if ($this->_tpl_vars['days'] == 'show'): ?>
		<tr> 
			<td bgcolor=#E1ECFB align=center> Send notification before &nbsp; 
				<input class="formStyle" type=text name=days_count1 value="<?php echo $this->_tpl_vars['day1']; ?>
" style="width: 25px;"> &nbsp; , &nbsp; 
				<input class="formStyle" type=text name=days_count2 value="<?php echo $this->_tpl_vars['day2']; ?>
" style="width: 25px;"> &nbsp; and &nbsp; 
				<input class="formStyle" type=text name=days_count3 value="<?php echo $this->_tpl_vars['day3']; ?>
" style="width: 25px;"> &nbsp; days.
			</td>
		</tr>
	<?php endif; ?>
	<tr>
	    <td align=center colspan=3>
		    <input type=submit name=submit value=Save> &nbsp;
			&nbsp; &nbsp;
			<input type=button value=Cancel onClick="history.back()">
			<input type=hidden name=type value="<?php echo $this->_tpl_vars['type']; ?>
">
		</td>
	</tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td align=center colspan=3>
            Test Email: <input type="text" name="admin_email"> &nbsp; &nbsp;
            <input type=submit name=test_email value="Test Settings">
        </td>
    </tr>
</table>
</form>