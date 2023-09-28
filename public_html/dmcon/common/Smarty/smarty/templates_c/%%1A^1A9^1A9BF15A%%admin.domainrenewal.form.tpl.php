<?php /* Smarty version 2.6.7, created on 2005-11-11 18:37:37
         compiled from simpleGreen/admin.domainrenewal.form.tpl */ ?>

<script language="javascript"  type="text/javascript">
	function selectDomains(theElement) <?php echo '{'; ?>

		var theForm = theElement.form, z = 0;
		while (theForm[z].type == 'checkbox' && theForm[z].name != 'checkall') <?php echo '{'; ?>

			theForm[z].checked = theElement.checked;
			z++;
		<?php echo '}'; ?>

    <?php echo '}'; ?>

    
    function acceptAgreement() <?php echo '{'; ?>

        
        if (document.domainRenew.agreement.checked) <?php echo '{'; ?>

            document.domainRenew.submit1.disabled = false;
            document.domainRenew.submit2.disabled = false;	
            
        <?php echo '}'; ?>
  else <?php echo '{'; ?>

            document.domainRenew.submit1.disabled = true;
            document.domainRenew.submit2.disabled = true;
        <?php echo '}'; ?>

        
    <?php echo '}'; ?>

    
</script>
                  <br>
<form method="post" action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table width="98%"class="border1" style="padding: 1px" cellspacing="1" cellpadding="2" align="center">
    <caption><b>Domain Auto-Renewal Status Query</b></caption>
    <tr>
	    <td class=cellBg align="center">
		    Domain Extension:
			<select name="gtld">
			    <option value=""></option>
				<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['tld']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
					<option value=<?php echo $this->_tpl_vars['tld'][$this->_sections['r']['index']][0]; ?>
 ><?php echo $this->_tpl_vars['tld'][$this->_sections['r']['index']][1]; ?>
</option>
				<?php endfor; endif; ?>
            </select>&nbsp; &nbsp;
			<span style="display:<?php echo $this->_tpl_vars['show_query']; ?>
">User: <input type="text" name="member_name">&nbsp; &nbsp; &nbsp;</span>
		</td>
	</tr>
	<tr>
	    <td class=cellBg align="center">
	        Domain Auto-Renewal: &nbsp; &nbsp; &nbsp;
			<input type="radio" name=renew_status value="enabled" >Yes &nbsp; 
			<input type="radio" name=renew_status value="disabled">No &nbsp; 
		</td>
	</tr>
	<tr>
	    <td class=cellBg align="center">	
		    Domain:  <input type="text" name="domain">&nbsp; &nbsp;
			<input type="submit" name="Submit" value="Search">
			<input type="hidden" name="action" value="listDomains">
		</td>
	</tr>
    <tr>
        <td class=cellBg2>
            <font color="#FF0000">Search:</font> Please choose domain extension, domain Auto-Renewal status or 
            enter a domain name, to search for specific domain(s) you would like to enable or disable the 
            Auto-Renewal option.
        </td>
    </tr>
</table>
</form>
			  
				  
    <form method="post" action="<?php echo $this->_tpl_vars['php_self']; ?>
" name="domainRenew" >
    <table width="98%"  class="border1" style="padding: 0px" cellspacing="1" cellpadding="2" align="center">
        <tr class="fieldName"> 
          <td ><input type="checkbox" name="selectdomain" onClick="selectDomains(this)"></td>
          <td  align="center"><b><font color="#FFFFFF">Domain</font></b></td>
          <td  align="center"><b><font color="#FFFFFF">Domain Auto-Renewal status</font></b></td>
          <td  align="center"><b><font color="#FFFFFF">Domain Expiration Date</font></b></td>        
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
          <td  class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 >
	        <input type="checkbox" name="renew_domains[]" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
">
		  </td>
		  <td  class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center"> <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
 </td>
          <td  class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">  <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][1]; ?>
  </td>
          <td  class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">  <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][2]; ?>
  </td>
       </tr>
      <?php endfor; endif; ?>
		
        <tr bgcolor="#CCCCCC"> <td  colspan="4">  <?php echo $this->_tpl_vars['pagebutton']; ?>
 </td></tr>
       
  </table>
  <table width="98%" align=center>
            <tr><td>&nbsp;</td></tr>
         <tr>
            <td align="center"><input type="checkbox" name="agreement" onClick="acceptAgreement()">
                   I have read, understand and accept the <a href=<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/help/domain_auto_renewal_agreement.html target="blank">Domain Auto-Renewal Agreement</a>
            </td>
         </tr>
		  <tr><td><hr></td></tr>
          <tr> 
            <td align="center" colspan="4"> 
				<input type="submit" name="submit1" value="Enable Auto-Renewal" disabled="true"> &nbsp; &nbsp;
				<input type="submit" name="submit2" value="Disable Auto-Renewal" disabled="true">
				<input type="hidden" name="action" value="renewDomains">
            </td>
          </tr>

   </table>
   <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
   </form>
  <table width="95%" class=border1 align=center>
    <tr><td></td></tr>
    <tr>
        <td> &nbsp; &nbsp; If domain abc.com's expiration date is 10/10/2004, there will be a 10 day grace period for the
         domain renewal.<br>
         &nbsp; &nbsp; The action of renewal will start on  10/1/2004 and stop on 10/10/2004. During the grace period,
         you will have enough time to fund your account.<br><br>
         &nbsp; &nbsp; Note: If you dont't want to make a domain auto-renewable, please make sure you disable autorenewal
         days ahead of domain expiration day.
        </td>
    </tr>
  </table>