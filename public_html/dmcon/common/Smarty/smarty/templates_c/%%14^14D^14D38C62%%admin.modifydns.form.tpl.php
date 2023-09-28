<?php /* Smarty version 2.6.7, created on 2005-11-13 05:21:39
         compiled from simpleGreen/admin.modifydns.form.tpl */ ?>
    <br>

<table width="55%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td >
	<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
	
	<input type="hidden" name="domain_id" value="<?php echo $this->_tpl_vars['domain_id']; ?>
">
        <br>
        <table width="100%" border="0" cellspacing="1" cellpadding="2" class="border1">
          <tr> 
            <td width="20%" bgcolor="#E1ECFB"><b>Dns 1:</b></td>
            <td width="30%" bgcolor="#F2F8FD"> 
              <input type="text" name="dns" value="<?php echo $this->_tpl_vars['dns']; ?>
" readonly style=" background: #EFEFEF;">
            </td>
            <td width="20%" bgcolor="#E1ECFB" align="right"><b>Ip:&nbsp;</b></td>
            <td width="30%" bgcolor="#F2F8FD"> 
              <input type="text" name="ip" value="<?php echo $this->_tpl_vars['ip']; ?>
">
            </td>
          </tr>
        </table>
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> <td >&nbsp;</td> </tr>
          <tr> 
            <td align="center"> 
              <input type="submit" name="Submit" value="Update DNS">&nbsp; &nbsp;
			  <input type="reset" name="Reset" value="Reset">
			  <input type="hidden" name="action" value="modifyDns">
			  <input type="hidden" name="oldip" value="<?php echo $this->_tpl_vars['ip']; ?>
">
            </td>
          </tr>
        </table>
        <br>
      </form>
      
    </td>
  </tr>
</table>
          