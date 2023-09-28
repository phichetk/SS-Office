<?php /* Smarty version 2.6.7, created on 2005-11-16 08:34:27
         compiled from simpleGreen/admin.listmember.viewmemberinfo.tpl */ ?>
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
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['member_level']; ?>
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
            <td height="20" width="30%" bgcolor="#F2F8FD"><font color="#FF0000"><?php echo $this->_tpl_vars['status']; ?>
</font></td>
            <td height="20" width="20%" bgcolor="#E1ECFB"><b>Reg Time</b></td>
            <td height="20" width="30%" bgcolor="#F2F8FD"><?php echo $this->_tpl_vars['reg_time']; ?>
</td>
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
            <td width="70%" height="20"> 
             <?php echo $this->_tpl_vars['r_name']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Organization</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_org']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 1</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_address1']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 2</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_address2']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Address 3</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_address3']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">City</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_city']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Province/State</td>
            <td width="70%" height="20"> 
             <?php echo $this->_tpl_vars['r_province']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Country</td>
            <td width="70%" height="20"> 
              <?php echo $this->_tpl_vars['r_country']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Postalcode</td>
            <td width="70%" height="20">
             <?php echo $this->_tpl_vars['r_postalcode']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Telephone</td>
            <td width="70%" height="20">
              <?php echo $this->_tpl_vars['r_telephone']; ?>

            </td>
          </tr>
          <tr> 
            <td width="30%" height="20" bgcolor="#EFEFEF">Fax</td>
            <td width="70%" height="20">
              <?php echo $this->_tpl_vars['r_fax']; ?>

            </td>
          </tr>
          <tr>
            <td width="30%" height="20" bgcolor="#EFEFEF">E-mail</td>
            <td width="70%" height="20">
              <?php echo $this->_tpl_vars['r_email']; ?>

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
        <input type="submit" name="Submit" value="Back">
        <input type="hidden" name="action" value="listMember">
        <input type="hidden" name="currentPage" value="<?php echo $this->_tpl_vars['currentPage']; ?>
">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>