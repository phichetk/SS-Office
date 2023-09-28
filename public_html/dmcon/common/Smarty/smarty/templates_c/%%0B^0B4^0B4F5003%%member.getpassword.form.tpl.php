<?php /* Smarty version 2.6.7, created on 2005-09-16 09:08:49
         compiled from default/member.getpassword.form.tpl */ ?>
<table width="95%" border="0"  align="center">
  <tr> 
    <td >
      <form action="<?php echo $this->_tpl_vars['content_action']; ?>
" method="post" style="margin:0px">
      <table width="100%" border="0" >
        <tr> 
            <td align="right" width="40%">Username:</td>
          <td width="60%"> 
              <input type="text" name="username" value="<?php echo $this->_tpl_vars['content_user']; ?>
">
          </td>
        </tr>
        <tr> 
            <td align="right" width="40%">E-mail:</td>
          <td width="60%"> 
              <input type="text" name="email" value="<?php echo $this->_tpl_vars['content_email']; ?>
">
          </td>
        </tr>
        <tr> 
          <td align="right" width="40%">&nbsp;</td>
          <td width="60%">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" width="40%">&nbsp;</td>
          <td width="60%" >
              <input type="submit" name="Submit" value="Get password">
          </td>
        </tr>
      </table>
	  </form>
      <p align="center"><br>
        <br>
        <br>
        If you are not yet a member, <a href="<?php echo $this->_tpl_vars['content_signup']; ?>
">click here</a> 
        to signup!</p>
      </td>
  </tr>
</table>
          