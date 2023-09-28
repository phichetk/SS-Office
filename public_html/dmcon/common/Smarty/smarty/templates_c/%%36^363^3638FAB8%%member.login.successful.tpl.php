<?php /* Smarty version 2.6.7, created on 2005-11-11 18:41:34
         compiled from simpleGreen/member.login.successful.tpl */ ?>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td > 
      <p><font size="2"><b>Welcome </b> 
        <?php echo $this->_tpl_vars['member_info'][1]; ?>

        </font><font color="#FF0000"><br>
        <br>
        </font></p>
      <table width="50%" border="0" cellspacing="1" cellpadding="2" class="border1" align="center">
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Account</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <b> 
            <?php echo $this->_tpl_vars['member_info'][1]; ?>

            </b></td>
        </tr>
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Level</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <b> 
            <?php echo $this->_tpl_vars['member_info'][4]; ?>

            </b></td>
        </tr>
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Balance</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <font color="#000000">$ 
            <?php echo $this->_tpl_vars['member_info'][6]; ?>

            </font></td>
        </tr>
      </table>
      <p><br>
        <br>
        For security reasons, if you have been inactive for more than 60 minutes, 
        the system will automatically log you out. <br>
      </p>
      </td>
  </tr>
</table>
                  <p>&nbsp;</p>