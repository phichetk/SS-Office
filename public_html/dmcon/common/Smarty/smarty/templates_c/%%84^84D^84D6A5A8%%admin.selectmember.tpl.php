<?php /* Smarty version 2.6.7, created on 2005-06-24 12:35:41
         compiled from default/admin.selectmember.tpl */ ?>
                 <br>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td height="25">
      <br>
      <form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
        <input type="hidden" name="action" value="showRegisterForm">
        <input type="hidden" name="domain" value="<?php echo $this->_tpl_vars['domain']; ?>
">
        <input type="hidden" name="gtld" value="<?php echo $this->_tpl_vars['gtld']; ?>
">
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td height="30" bgcolor="#EFEFEF" align="center">User name: 
              <input type="text" name="member_name">
            </td>
            <td height="30" bgcolor="#EFEFEF" align="center">
              <input type="submit" name="Submit" value="Continue &gt;&gt;">
            </td>
          </tr>
        </table>
      </form>
      <br>
      <br>
      <b> Note:</b> The registration fee of this domain will be deducted from 
      the account of user name you input. Moreover, the domain will be remained 
      in that user account.<br>
      <br>
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>