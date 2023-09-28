<?php /* Smarty version 2.6.7, created on 2005-09-08 02:00:52
         compiled from default/member.signup.successful.tpl */ ?>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td > 
      <p><font color="#FF0000"><b><i><font size="3">Sign up successfully</font></i></b><br>
        <br>
        </font>Your username is: <?php echo $this->_tpl_vars['member_name']; ?>
<br>
        Your password is: <?php echo $this->_tpl_vars['member_password1']; ?>
<br>
        <br>
        Please write these down in a safe place and please do not give your password to anyone.<br>
        <br>
        <?php if ($this->_tpl_vars['signup_return'] == 'newmember'): ?>
            Please click <a href="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/domain/domainsearch.php?action=selectMember">here</a>
             to continue
        <?php else: ?>
            To continue using the system, please <a href="<?php echo $this->_tpl_vars['member_login']; ?>
">login</a> 
        now.
        <?php endif; ?> </p>
      </td>
  </tr>
</table>
                  <p>&nbsp;</p>