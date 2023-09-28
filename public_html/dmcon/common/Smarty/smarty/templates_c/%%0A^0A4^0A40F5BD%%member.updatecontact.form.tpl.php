<?php /* Smarty version 2.6.7, created on 2005-09-08 17:55:30
         compiled from default/member.updatecontact.form.tpl */ ?>
                  <br>

<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">                
  <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr> 
      <td width="25%" height="25" colspan="2"><font color="#FF0000" class="p8">Asterisk* 
        is mandatory</font></td>
    </tr>
    <tr> 
      <td width="25%" height="25">Old Password</td>
      <td width="75%" height="25"> 
        <input type="password" name="old_password" size="20" maxlength="20">
        </td>
    </tr>
    <tr> 
      <td width="25%" height="25">New Password</td>
      <td width="75%" height="25"> 
        <input type="password" name="member_password1" size="20" maxlength="20">
        </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Confirm New Password</td>
      <td width="75%" height="25"> 
        <input type="password" name="member_password2" size="20" maxlength="20">
        </td>
    </tr>
    <tr> 
      <td width="25%" height="25">&nbsp;</td>
      <td width="75%" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td width="25%" height="25">Registrant</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_name" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['r_name']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Organization</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_org" value="<?php echo $this->_tpl_vars['r_org']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Street 1</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_address1" size="30" maxlength="60" value="<?php echo $this->_tpl_vars['r_address1']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Street 2</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_address2" size="30" maxlength="60" value="<?php echo $this->_tpl_vars['r_address2']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Street 3</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_address3" size="30" maxlength="60" value="<?php echo $this->_tpl_vars['r_address3']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="25%" height="25">City</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_city" maxlength="60" value="<?php echo $this->_tpl_vars['r_city']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Province</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_province" maxlength="60" value="<?php echo $this->_tpl_vars['r_province']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Country</td>
      <td width="75%" height="25">
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
		    <option value=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 selected> <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0]; ?>
 </option>
		<?php else: ?>
		    <option value=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 > <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0]; ?>
 </option>
		<?php endif; ?>
	<?php endfor; endif; ?>

        </select>
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Postal Code</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_postalcode" maxlength="60" value="<?php echo $this->_tpl_vars['r_postalcode']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Telephone</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_telephone" maxlength="60" value="<?php echo $this->_tpl_vars['r_telephone']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">Fax</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_fax" maxlength="60" value="<?php echo $this->_tpl_vars['r_fax']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">E-mail</td>
      <td width="75%" height="25"> 
        <input type="text" name="r_email" maxlength="60" value="<?php echo $this->_tpl_vars['r_email']; ?>
">
        <font color="#FF0000">*</font> </td>
    </tr>
    <tr> 
      <td width="25%" height="25">&nbsp;</td>
      <td width="75%" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td width="25%" height="25">&nbsp;</td>
      <td width="75%" height="25"> 
        <input type="submit" name="Submit" value="Update Information">
      </td>
    </tr>
  </table>
                  </form>
                  <p>&nbsp;</p>