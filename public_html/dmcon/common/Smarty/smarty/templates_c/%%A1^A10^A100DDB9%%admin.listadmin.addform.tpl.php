<?php /* Smarty version 2.6.7, created on 2005-10-27 12:01:20
         compiled from default/admin.listadmin.addform.tpl */ ?>
<br>
<form action="<?php echo $this->_tpl_vars['content_action']; ?>
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
<?php endif; ?>
    <tr> 
      <td width="30%" height="25">Name</td>
      <td width="70%" height="25"> 
        <input type="text" name="admin_name" size="20" value="<?php echo $this->_tpl_vars['admin_name']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="30%" height="25">Department</td>
      <td width="70%" height="25"> 
        <input type="text" name="admin_dept" size="20" value="<?php echo $this->_tpl_vars['admin_dept']; ?>
">
      </td>
    </tr>
    <tr>
      <td width="30%" height="25">Password</td>
      <td width="70%" height="25">
        <input type="password" name="admin_password" size="20" value="<?php echo $this->_tpl_vars['admin_password']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="30%" height="25">Password Again</td>
      <td width="70%" height="25"> 
        <input type="password" name="admin_password1" size="20" value="<?php echo $this->_tpl_vars['admin_password1']; ?>
">
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" height="25">

<?php if ($this->_tpl_vars['initval_admin_flag'] == 0): ?>
        <input type="checkbox" name="admin_flag" value="1">
<?php else: ?>
        <input type="checkbox" name="admin_flag" value="1" checked>
<?php endif; ?>

        Account is disable</td>
    </tr>
    <tr> 
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25"> 
        <input type="submit" name="Submit" value="Add Admin">
        <input type="hidden" name="action" value="addAdmin">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>