<?php /* Smarty version 2.6.7, created on 2005-09-07 12:56:09
         compiled from default/admin.emailsetting.form.tpl */ ?>

 <script language="javascript" type="text/javascript">
// This function is used to show or hide a layer.
	
	function show_smtp(index) 
	<?php echo '{'; ?>
 
	    var selected_values = document.notification.mta.options[index].value;
	    if (selected_values == 'smtp')<?php echo '{'; ?>

		    document.getElementById('test').style.display='';
		<?php echo '}'; ?>
else<?php echo '{'; ?>

		    document.getElementById('test').style.display='none';
       <?php echo '}'; ?>

	<?php echo '}'; ?>

</script>

<form action="" method="POST" name="notification">
<table align=center width="100%" >
    <tr>
		<td align=center>
			<table class=border1 bgcolor=white cellpadding=4 cellspacing=1 width=100%>
			  <tr>
					<td align=right bgcolor=#E1ECFB>
						"From" Name: <font color=red>* </font>
						<input class="formStyle" type=text name="from_name" value="<?php echo $this->_tpl_vars['from_name']; ?>
" size="25" >&nbsp;
					</td>
					
					<td bgcolor=#E1ECFB align=left>
						<input type=checkbox name=reg_domain value=reg_domain <?php echo $this->_tpl_vars['register_status']; ?>
> 
							Sends domain registration email <br>&nbsp; &nbsp;
							<a href="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
admin/emailsetting.php?show=register">[customize]</a>
					</td>
			  </tr>
			  <tr>
					<td align=right bgcolor=#E1ECFB>
						"From" Address: <font color=red>* </font>
						<input class="formStyle" type=text name="from_email" value="<?php echo $this->_tpl_vars['from_email']; ?>
" size="25">&nbsp;
					</td>
					
					<td bgcolor=#E1ECFB align=left>
						<input type=checkbox name=renew_domain value=renew_domain <?php echo $this->_tpl_vars['renew_status']; ?>
> 
							Sends domain renewal email <br>&nbsp; &nbsp;
							<a href="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
admin/emailsetting.php?show=renew">[customize]</a>
					</td>
			  </tr>
              <tr>
					<td align=right bgcolor=#E1ECFB>
						Mail Transfer Agent &nbsp; &nbsp; &nbsp;
						<select name="mta" onChange="show_smtp(this.selectedIndex)">
							<option value="smtp" <?php echo $this->_tpl_vars['smtp_status']; ?>
>SMTP</option>
							<option value="sendmail" <?php echo $this->_tpl_vars['sendmail_status']; ?>
>Sendmail</option>
						</select>&nbsp;
					</td>
					
					<td bgcolor=#E1ECFB align=left>
						<input type=checkbox name=reset_pass value=reset_pass <?php echo $this->_tpl_vars['password_status']; ?>
> 
							Sends password retrival email <br>&nbsp; &nbsp;
							<a href="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
admin/emailsetting.php?show=password">[customize]</a>
					</td>
			  </tr>  
		      <tr>
				<td colspan="3" cellpadding=0 cellspacing=1>
					<div id=test style="display:<?php echo $this->_tpl_vars['display']; ?>
; left:5px; top:250px; z-index:1" >
					<table width="100%" cellpadding=4 cellspacing=1 >
						<tr><td colspan="3"><hr  size="1"> </td></tr><tr> <td></td></tr>
						<tr>
							<td align=right bgcolor=#E1ECFB>
								SMTP server: <font color=red>* </font>&nbsp;
								<input class="formStyle" type=text name=smtp_server value="<?php echo $this->_tpl_vars['smtp_server']; ?>
" size="25">&nbsp;
							</td>
							
							<td bgcolor=#E1ECFB>
								SMTP port: <font color=red>* </font>&nbsp;
								<input class="formStyle" type=text name=smtp_port value="<?php echo $this->_tpl_vars['smtp_port']; ?>
" style="width: 30px;">
							</td> 
						</tr>
						<tr>
							<td align=right bgcolor=#E1ECFB> Use SMTP Authentication &nbsp; &nbsp;  &nbsp; &nbsp;
								<input type=checkbox value=smtp_auth name=smtp_auth <?php echo $this->_tpl_vars['smtp_auth']; ?>
>&nbsp;
							</td>
							<td bgcolor=#E1ECFB> &nbsp; </td>
						</tr>                
						<tr>
							<td align=right bgcolor=#E1ECFB>
								SMTP username: <font color=red>* </font>&nbsp;
								<input class="formStyle" type=text name=smtp_user value="<?php echo $this->_tpl_vars['smtp_user']; ?>
" size=25>&nbsp;
							</td>
							
							<td bgcolor=#E1ECFB>
								SMTP password: &nbsp;
								<input class="formStyle" type=password name=smtp_pass size="25">    
							</td>
						</tr>
					</table>
					</div>
				</td>
			  </tr>
			 
			</table>
		</td>
	</tr>
	
	<tr>
		<td align="right" colspan=2 style="font-size: 11px;"> <font color=red>*</font> indicates required field </td>
	</tr>
	<tr>
		<td colspan=3 align=center>
			<input type="submit" name="Submit" value="Save">
			<input type="hidden" name="action" value="saveSettings">
			<input type="button" value="Cancel"  onClick="history.back()">
		</td>
    </tr>
    </tr>
</table>
	</form>