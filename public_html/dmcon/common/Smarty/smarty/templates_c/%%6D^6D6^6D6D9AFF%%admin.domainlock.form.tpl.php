<?php /* Smarty version 2.6.7, created on 2005-11-23 10:12:00
         compiled from simpleGreen/admin.domainlock.form.tpl */ ?>

<script language="javascript"  type="text/javascript">
	function selectDomains(theElement) <?php echo '{'; ?>

		var theForm = theElement.form, z = 0;
		while (theForm[z].type == 'checkbox' && theForm[z].name != 'checkall') <?php echo '{'; ?>

			theForm[z].checked = theElement.checked;
			z++;
		<?php echo '}'; ?>

    <?php echo '}'; ?>

</script>
                  <br>
<form method="post" action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table width="98%"class="border1" style="padding: 1px" cellspacing="1" cellpadding="2" align="center">
    <caption><b>Query Domain Lock Status</b></caption>
    <tr>
	    <td class=cellBg align="center">
		    Domain Extension:
			<select name="gtld">
			    <option value="">All</option>
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
					<option value=<?php echo $this->_tpl_vars['tld'][$this->_sections['r']['index']][1]; ?>
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
	        Domain Lock Status: &nbsp; &nbsp; &nbsp;
			<input type="radio" name=lock_status value="locked">Locked &nbsp; 
			<input type="radio" name=lock_status value="unlocked">Unlocked &nbsp; 
			<input type="radio" name=lock_status value="all">All
		</td>
	</tr>
	<tr>
	    <td class=cellBg align="center">	
		    Domain:  <input type="text" name="domain">&nbsp; &nbsp;
			<input type="submit" name="Submit" value="Search">
			<input type="hidden" name="action" value="listDomains">
		</td>
	</tr>
</table>
</form>
				  
				  
    <form method="post" action="<?php echo $this->_tpl_vars['php_self']; ?>
" name="domainLock" >
    <table width="98%"  class="border1" style="padding: 0px" cellspacing="1" cellpadding="2" align="center">
        <tr class="fieldName"> 
          <td height="20"><input type="checkbox" name="selectdomain" onClick="selectDomains(this)"></td>
          <td height="20" align="center"><b><font color="#FFFFFF">Domain</font></b></td>
	<td height="20" align="center"><b><font color="#FFFFFF">User Name</font></b></td>
          <td height="20" align="center"><b><font color="#FFFFFF">Registrar Transfer Lock status</font></b></td>
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
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 >
	        <input type="checkbox" name="lock_domains[]" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][1]; ?>
">
		  </td>
		  <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center"> <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][1]; ?>
 </td>
		<td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center"> <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][3]; ?>
 </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 align="center">  <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][2]; ?>
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
				<input type="submit" name="Submit" value="Lock"> &nbsp; &nbsp;
				<input type="submit" name="Submit" value="Unlock">
				<input type="hidden" name="action" value="lockDomains">
            </td>
          </tr>

   </table>
   <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
   </form>
      