<?php /* Smarty version 2.6.7, created on 2005-09-10 10:42:52
         compiled from default/domain.showns.tpl */ ?>
    <br>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td >
	<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
	<input type="hidden" name="action" value="modifyNS">
	<input type="hidden" name="domain_id" value="<?php echo $this->_tpl_vars['domain_id']; ?>
">
        <br>
        <table width="100%" border="0" cellspacing="1" cellpadding="2" class="border1">
          <tr> 
            <td width="20%" bgcolor="#E1ECFB"><b>Dns 1:</b></td>
            <td width="30%" bgcolor="#F2F8FD"> 
              <input type="text" name="dns1" value="<?php echo $this->_tpl_vars['dns1']; ?>
">
            </td>
            <td width="20%" bgcolor="#E1ECFB"><b>Dns 2:</b></td>
            <td width="30%" bgcolor="#F2F8FD"> 
              <input type="text" name="dns2" value="<?php echo $this->_tpl_vars['dns2']; ?>
">
            </td>
          </tr>
        </table>
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="39%">&nbsp;</td>
            <td width="61%">&nbsp;</td>
          </tr>
          <tr> 
            <td width="39%">&nbsp;</td>
            <td width="61%"> 
              <input type="submit" name="Submit" value="Modify domain DNS">
            </td>
          </tr>
        </table>
        <br>
      </form>
      
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>