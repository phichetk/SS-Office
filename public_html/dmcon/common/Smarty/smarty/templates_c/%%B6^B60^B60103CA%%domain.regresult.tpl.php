<?php /* Smarty version 2.6.7, created on 2005-09-08 03:02:58
         compiled from default/domain.regresult.tpl */ ?>
                  <br>
                  
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
   <tr>
     
    <td width="25%" height="25" colspan="2"><b><font color="#990000">Register Successfully!</font></b> Your account has been charged $<?php echo $this->_tpl_vars['product_price'][$this->_tpl_vars['year']]; ?>
.<br>
      <br>
      <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td height="22" bgcolor="#EFEFEF" align="center"><?php echo $this->_tpl_vars['domain_name']; ?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <?php if ($this->_tpl_vars['count'] > 0): ?>
        <tr>
            <td bgcolor="#EFEFEF" align="center">
                Please click <a href=<?php echo $this->_tpl_vars['php_self']; ?>
?action=initDomainRegistration>here</a> to continue the registration. 
            </td>
        </tr>
        <?php endif; ?>
      </table>
    </td>
  </tr>
  <tr> 
    <td > 
      <p><br>
      </p>
      <p><br>
        <b>Note:</b> A failed registration could be a result of network congestion 
        or other technical issues and does not necessarily mean that domain is 
        not available. Check the Whois database for details.<br>
      </p>
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>