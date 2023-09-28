<?php /* Smarty version 2.6.7, created on 2005-11-23 08:23:25
         compiled from simpleGreen/admin.listmember.showmodifymemberinfo.tpl */ ?>
<br>
<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">
  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">

<?php if ($this->_tpl_vars['message'] != ""): ?>


    <tr> 
      <td width="25%" height="25" colspan="2"> 
        <div style="border:solid 1px #FF0000;padding:5px"> <font class="p8"><b> 
          <?php echo $this->_tpl_vars['message']; ?>

          </b></font> </div>
      </td>
    </tr>
    <tr> 
      <td width="25%" height="25" colspan="2">&nbsp; </td>
    </tr>
<?php endif; ?>
    <tr> 
      <td colspan="2" height="25">
        <table width="100%" border="0" cellspacing="1" cellpadding="2" class="border1">
          <tr> 
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>ID</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['member_id']; ?>
</td>
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Level</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD">
              <select name="member_level">

<?php if ($this->_tpl_vars['member_level'] == 0): ?>

				<option value="0" selected>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
<?php elseif ($this->_tpl_vars['member_level'] == 1): ?>

				<option value="0">0</option>
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
<?php elseif ($this->_tpl_vars['member_level'] == 2): ?>

				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2" selected>2</option>
				<option value="3">3</option>
				<option value="4">4</option>
<?php elseif ($this->_tpl_vars['member_level'] == 3): ?>

				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3" selected>3</option>
				<option value="4">4</option>
<?php elseif ($this->_tpl_vars['member_level'] == 4): ?>

				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4" selected>4</option>
<?php else: ?>

				<option value="0" selected>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
<?php endif; ?>
              </select>
            </td>
          </tr>
          <tr> 
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Username</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['member_name']; ?>
</td>
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Account</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['account']; ?>
</td>
          </tr>
          <tr> 
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Status</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD">

<?php if ($this->_tpl_vars['flag'] == 0): ?>


              <input type="checkbox" name="flag" value="1">
<?php else: ?>

              <input type="checkbox" name="flag" value="1" checked>
<?php endif; ?>
              Account is disabled</td>
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Reg Time</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['reg_time']; ?>
</td>
          </tr>
		  <tr>
		    <td height="20" width="20%" bgcolor="#E1ECFB"><b>New Password</b></td>
			<td height="20" width="30%" bgcolor="#F2F8FD">
			    <input type="password" name="r_password" >
			</td>
			<td height="20" width="20%" bgcolor="#E1ECFB"></td>
			<td height="20" width="30%" bgcolor="#F2F8FD"></td>
		  </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b><br>
        <br>
        Registrant information</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" border="0" cellspacing="1" cellpadding="2" class="border1">
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Registrant</td>
            <td width="70%" height="20"> <?php echo $this->_tpl_vars['r_name']; ?>

<!--              <input type="text" name="r_name" value="<?php echo $this->_tpl_vars['r_name']; ?>
" readonly> -->
              
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Organization</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_org" value="<?php echo $this->_tpl_vars['r_org']; ?>
">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 1</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_address1" value="<?php echo $this->_tpl_vars['r_address1']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 2</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_address2" value="<?php echo $this->_tpl_vars['r_address2']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 3</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_address3" value="<?php echo $this->_tpl_vars['r_address3']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">City</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_city" value="<?php echo $this->_tpl_vars['r_city']; ?>
">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Province/State</td>
            <td width="70%" height="20"> 
              <input type="text" name="r_province" value="<?php echo $this->_tpl_vars['r_province']; ?>
">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Country</td>
            <td width="70%" height="20">
        <select name="r_country">


<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	    <?php if ($this->_tpl_vars['rs'][$this->_sections['i']['index']][1] == $this->_tpl_vars['r_country']): ?>
		    <option value= <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
  selected><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0]; ?>
</option>
	<?php else: ?>
		<option value= <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0]; ?>
 </option>
	<?php endif; ?>
	<?php endfor; endif; ?>	
        </select>
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Postalcode</td>
            <td width="70%" height="20">
              <input type="text" name="r_postalcode" value="<?php echo $this->_tpl_vars['r_postalcode']; ?>
">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Telephone</td>
            <td width="70%" height="20">
              <input type="text" name="r_telephone" value="<?php echo $this->_tpl_vars['r_telephone']; ?>
">
            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Fax</td>
            <td width="70%" height="20">
              <input type="text" name="r_fax" value="<?php echo $this->_tpl_vars['r_fax']; ?>
">
            </td>
          </tr>
          <tr>
            <td width="30%" height="20" bgcolor="#EFEFEF">E-mail</td>
            <td width="70%" height="20">
              <input type="text" name="r_email" value="<?php echo $this->_tpl_vars['r_email']; ?>
">
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25"> 
        <input type="submit" name="Submit" value="Modify member info">
        <input type="hidden" name="action" value="modifyMemberInfo">
        <input type="hidden" name="member_id" value="<?php echo $this->_tpl_vars['member_id']; ?>
">
        <input type="hidden" name="currentPage" value="<?php echo $this->_tpl_vars['currentPage']; ?>
">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>