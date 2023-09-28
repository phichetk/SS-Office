<?php /* Smarty version 2.6.7, created on 2005-12-28 01:19:05
         compiled from simpleGreen/admin.dnslist.tpl */ ?>

<script language="javascript">
	function renewDomain(myForm)
	<?php echo '{'; ?>

		myYear = prompt("For how many years would you like to renew this domain?", '1');
		myForm.year.value = myYear;
		myForm.action.value = "renewDomain";
		myForm.submit();
	<?php echo '}'; ?>

	function deleteDomain(myForm)
	<?php echo '{'; ?>

		myForm.action.value = "deleteDomain";
		myForm.submit();
	<?php echo '}'; ?>

</script>
                  <br>
<form method="post" action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table width="98%"class="border1" style="padding: 1px" cellspacing="1" cellpadding="2" align="center">
    <tr>
	    <td class=cellBg align="center">
		   <span style="display:<?php echo $this->_tpl_vars['show_query']; ?>
"> Member: <input type="text" name="member_name">&nbsp; &nbsp;</span>
			DNS:    <input type="text" name="dns_name">&nbsp; &nbsp; &nbsp;
			<input type="submit" name="Submit" value="Query">
			<input type="hidden" name="action" value="listDns">
		</td>
	</tr>
</table>
</form>
				  
				  
       <form method="post" action="<?php echo $this->_tpl_vars['php_self']; ?>
" name="dnsManage" >
        <table width="98%"  class="border1" style="padding: 0px" cellspacing="1" cellpadding="2" align="center">
          <tr class="fieldName"> 
<!--            <td height="20"><b><font color="#FFFFFF">&nbsp;</font></b></td>-->
            <td height="20" align="center"><b><font color="#FFFFFF">DNS</font></b></td>
            <td height="20" align="center"><b><font color="#FFFFFF">IP</font></b></td>
            <td height="20" align="center"><b><font color="#FFFFFF">Registration Date</font></b></td>
          </tr>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
          <tr> 
<!--            <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 >
			    <input type="radio" name="domain_id" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
">
			</td>-->
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">
			     <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=modifyDnsForm&dns=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][2]; ?>
&ip=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][3]; ?>
&dns_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
"> 
                        <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][2]; ?>
    </a>
			</td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">  <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][3]; ?>
  </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">  <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][4]; ?>
  </td>
          </tr>
	    <?php endfor; endif; ?>
		
          <tr bgcolor="#CCCCCC"> 
            <td height="20" colspan="4"> 
              <?php echo $this->_tpl_vars['pagebutton']; ?>

            </td>
          </tr>
	  </table>
		<table width="98%">
		  <tr><td>&nbsp;</td></tr>
          <tr align="center"> 
            <td  colspan="4"> 
                <!--<input type="submit" name="Submit" value="Add new DNS" onClick = "renewDomain(this.form);"> -->
				<input type="submit" name="Submit" value="Add new DNS"> 
				  <input type="hidden" name="action" value="registerDnsForm">
            </td>
          </tr>

        </table>
      <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
     </form>
      