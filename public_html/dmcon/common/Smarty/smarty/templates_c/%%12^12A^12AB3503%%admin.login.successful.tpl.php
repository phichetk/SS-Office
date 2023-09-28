<?php /* Smarty version 2.6.7, created on 2005-06-16 17:35:39
         compiled from default/admin.login.successful.tpl */ ?>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td > 
      <p><font size="2"><b>Welcome back,</b> <?php echo $this->_tpl_vars['member_info'][1]; ?>
</font><font color="#FF0000"><br>
        <br>
        </font></p>
      <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr bgcolor="#666666"> 
          <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;Member Level</font></b></td>
          <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;Account</font></b></td>
          <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;</font></b></td>
          <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;</font></b></td>
        </tr>
        <tr> 
          <td width="25%" height="20">&nbsp;<?php echo $this->_tpl_vars['member_info'][4]; ?>
</td>
          <td width="25%" height="20">&nbsp;$<?php echo $this->_tpl_vars['member_info'][6]; ?>
</td>
          <td width="25%" height="20">&nbsp;</td>
          <td width="25%" height="20">&nbsp;</td>
        </tr>
      </table>
      <p><br>
        <br>
        For security reasons, if you have been inactive for more than 60 minutes, the system will automatically log you out.
        <br><br>
        When you stop using the system or leave your computer temporarily, please <a href="<?php echo $this->_tpl_vars['content_logout']; ?>
">logout</a> immediately.<br>
      </p>
      </td>
  </tr>
</table>
                  <p>&nbsp;</p>