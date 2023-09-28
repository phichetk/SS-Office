<?php /* Smarty version 2.6.7, created on 2006-01-02 00:43:10
         compiled from simpleGreen/admin.domainlist.tpl */ ?>
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

        if(confirm("Are you sure to delete this domain?"))
		myForm.action.value = "deleteDomain";
                myForm.submit();
	<?php echo '}'; ?>

</script>
                  <br>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td> <b><br>
      </b> <br>
      <form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#E1ECFB" class="border1">
          <tr>
            <td>
              <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                <tr> 
                  <td align=center> Time: 
                    <select name="startYear">
                      <option>Year</option>
  


		    	<?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['yr']['show'] = true;
$this->_sections['yr']['max'] = $this->_sections['yr']['loop'];
$this->_sections['yr']['step'] = 1;
$this->_sections['yr']['start'] = $this->_sections['yr']['step'] > 0 ? 0 : $this->_sections['yr']['loop']-1;
if ($this->_sections['yr']['show']) {
    $this->_sections['yr']['total'] = $this->_sections['yr']['loop'];
    if ($this->_sections['yr']['total'] == 0)
        $this->_sections['yr']['show'] = false;
} else
    $this->_sections['yr']['total'] = 0;
if ($this->_sections['yr']['show']):

            for ($this->_sections['yr']['index'] = $this->_sections['yr']['start'], $this->_sections['yr']['iteration'] = 1;
                 $this->_sections['yr']['iteration'] <= $this->_sections['yr']['total'];
                 $this->_sections['yr']['index'] += $this->_sections['yr']['step'], $this->_sections['yr']['iteration']++):
$this->_sections['yr']['rownum'] = $this->_sections['yr']['iteration'];
$this->_sections['yr']['index_prev'] = $this->_sections['yr']['index'] - $this->_sections['yr']['step'];
$this->_sections['yr']['index_next'] = $this->_sections['yr']['index'] + $this->_sections['yr']['step'];
$this->_sections['yr']['first']      = ($this->_sections['yr']['iteration'] == 1);
$this->_sections['yr']['last']       = ($this->_sections['yr']['iteration'] == $this->_sections['yr']['total']);
?>
				<?php if ($this->_tpl_vars['startYear'] == $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]): ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 >  <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php endif; ?>
				<?php endfor; endif; ?>
					</select>
                    <select name="startMonth">
                      <option>Mon</option>

				<?php unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
$this->_sections['month']['start'] = $this->_sections['month']['step'] > 0 ? 0 : $this->_sections['month']['loop']-1;
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = $this->_sections['month']['loop'];
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
?>
				<?php if ($this->_tpl_vars['startMonth'] == $this->_tpl_vars['imonth'][$this->_sections['month']['index']]): ?>
								<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
> <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

				<?php endif; ?>
				<?php endfor; endif; ?>
                    </select>
                    <select name="startDay">
                      <option>Day</option>
				<?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
$this->_sections['day']['start'] = $this->_sections['day']['step'] > 0 ? 0 : $this->_sections['day']['loop']-1;
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = $this->_sections['day']['loop'];
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
				<?php if ($this->_tpl_vars['startDay'] == $this->_tpl_vars['iday'][$this->_sections['day']['index']]): ?>

					<option value= <?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
  selected><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php else: ?>
					<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
 ><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php endif; ?>
				<?php endfor; endif; ?>

                    </select>
                    to 
                    <select name="toYear">
                      <option>Year</option>
                 
					  
			
	        <?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['yr']['show'] = true;
$this->_sections['yr']['max'] = $this->_sections['yr']['loop'];
$this->_sections['yr']['step'] = 1;
$this->_sections['yr']['start'] = $this->_sections['yr']['step'] > 0 ? 0 : $this->_sections['yr']['loop']-1;
if ($this->_sections['yr']['show']) {
    $this->_sections['yr']['total'] = $this->_sections['yr']['loop'];
    if ($this->_sections['yr']['total'] == 0)
        $this->_sections['yr']['show'] = false;
} else
    $this->_sections['yr']['total'] = 0;
if ($this->_sections['yr']['show']):

            for ($this->_sections['yr']['index'] = $this->_sections['yr']['start'], $this->_sections['yr']['iteration'] = 1;
                 $this->_sections['yr']['iteration'] <= $this->_sections['yr']['total'];
                 $this->_sections['yr']['index'] += $this->_sections['yr']['step'], $this->_sections['yr']['iteration']++):
$this->_sections['yr']['rownum'] = $this->_sections['yr']['iteration'];
$this->_sections['yr']['index_prev'] = $this->_sections['yr']['index'] - $this->_sections['yr']['step'];
$this->_sections['yr']['index_next'] = $this->_sections['yr']['index'] + $this->_sections['yr']['step'];
$this->_sections['yr']['first']      = ($this->_sections['yr']['iteration'] == 1);
$this->_sections['yr']['last']       = ($this->_sections['yr']['iteration'] == $this->_sections['yr']['total']);
?>
				<?php if ($this->_tpl_vars['toYear'] == $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]): ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 >  <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php endif; ?>
			<?php endfor; endif; ?>				  
    

                    </select>
                    <select name="toMonth">
                      <option>Mon</option>
					<?php unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
$this->_sections['month']['start'] = $this->_sections['month']['step'] > 0 ? 0 : $this->_sections['month']['loop']-1;
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = $this->_sections['month']['loop'];
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
?>
					<?php if ($this->_tpl_vars['toMonth'] == $this->_tpl_vars['imonth'][$this->_sections['month']['index']]): ?>
						<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
> <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php endif; ?>
					<?php endfor; endif; ?>  
                    </select>
                    <select name="toDay">
                      <option>Day</option>
					  
                <?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
$this->_sections['day']['start'] = $this->_sections['day']['step'] > 0 ? 0 : $this->_sections['day']['loop']-1;
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = $this->_sections['day']['loop'];
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
				<?php if ($this->_tpl_vars['toDay'] == $this->_tpl_vars['iday'][$this->_sections['day']['index']]): ?>

					<option value= <?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
  selected><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php else: ?>
					<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
 ><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php endif; ?>
				<?php endfor; endif; ?>  
				    
                    </select>
                  </td>
                </tr>
              </table>
              <br>
              <table width="90%" border="0" cellspacing="0" cellpadding="5" align="center">
                <tr> 
                  <td width="7%">Type: </td>
                  <td width="12%"> 
                    <select name="product_id">
                      <option value="">All</option>
                      

					<?php unset($this->_sections['rs']);
$this->_sections['rs']['name'] = 'rs';
$this->_sections['rs']['loop'] = is_array($_loop=$this->_tpl_vars['rs2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rs']['show'] = true;
$this->_sections['rs']['max'] = $this->_sections['rs']['loop'];
$this->_sections['rs']['step'] = 1;
$this->_sections['rs']['start'] = $this->_sections['rs']['step'] > 0 ? 0 : $this->_sections['rs']['loop']-1;
if ($this->_sections['rs']['show']) {
    $this->_sections['rs']['total'] = $this->_sections['rs']['loop'];
    if ($this->_sections['rs']['total'] == 0)
        $this->_sections['rs']['show'] = false;
} else
    $this->_sections['rs']['total'] = 0;
if ($this->_sections['rs']['show']):

            for ($this->_sections['rs']['index'] = $this->_sections['rs']['start'], $this->_sections['rs']['iteration'] = 1;
                 $this->_sections['rs']['iteration'] <= $this->_sections['rs']['total'];
                 $this->_sections['rs']['index'] += $this->_sections['rs']['step'], $this->_sections['rs']['iteration']++):
$this->_sections['rs']['rownum'] = $this->_sections['rs']['iteration'];
$this->_sections['rs']['index_prev'] = $this->_sections['rs']['index'] - $this->_sections['rs']['step'];
$this->_sections['rs']['index_next'] = $this->_sections['rs']['index'] + $this->_sections['rs']['step'];
$this->_sections['rs']['first']      = ($this->_sections['rs']['iteration'] == 1);
$this->_sections['rs']['last']       = ($this->_sections['rs']['iteration'] == $this->_sections['rs']['total']);
?>
					<?php if ($this->_tpl_vars['rs2'][0] == $this->_tpl_vars['product_id']): ?>

						<option value= <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
 selected> <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
</option>
					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
 ><?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
 </option>
					<?php endif; ?>
					<?php endfor; endif; ?>
								</select>
                  </td>
                  <td width="7%">Member:</td>
                  <td width="10%"> 
                    <input type="text" name="member_name" size="10" value="<?php echo $this->_tpl_vars['member_name']; ?>
">
                  </td>
                  <td width="10%">Domain:</td>
                  <td width="7%"> 
                    <input type="text" name="domain_name" size="10" value="<?php echo $this->_tpl_vars['domain_name']; ?>
">
                  </td>
                  <td width="47%"> 
                    <input type="submit" name="Submit" value="Query">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </form>
      <form method="post" action="<?php echo $this->_tpl_vars['php_self']; ?>
" name="domainManage" style="margin:0px">
        <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
          <tr class="fieldName"> 
            <td width="4%" height="20"><b><font color="#FFFFFF">&nbsp;</font></b></td>
            <td width="27%" height="20"><b><font color="#FFFFFF">Domain(User Name)</font></b></td>
            <td width="15%" height="20"><b><font color="#FFFFFF">Dns1</font></b></td>
            <td width="17%" height="20"><b><font color="#FFFFFF">Dns2</font></b></td>
            <td width="25%" height="20"><b><font color="#FFFFFF">Reg. Date </font></b></td>
            <td width="16%" height="20"><b><font color="#FFFFFF">Reg. Year</font></b></td>
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
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="4%"> 
              <input type="radio" name="domain_id" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
">
            </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="27%"> <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showContact&domain_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
" class="menu2"> 
              <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][1]; ?>
(<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][8]; ?>
) 
              </a> </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="15%"> <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showNS&domain_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
" class="menu2"> 
             <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][6]; ?>

              </a> </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="17%"> 
              <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][7]; ?>

            </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="25%"> 
             <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][4]; ?>

            </td>
            <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
 width="16%"> 
             <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][5]; ?>

            </td>
          </tr>
	    <?php endfor; endif; ?>
		
          <tr bgcolor="#CCCCCC"> 
            <td height="20" colspan="6"> 
              <?php echo $this->_tpl_vars['pagebutton']; ?>

            </td>
          </tr>
          <tr align="center"> 
            <td height="20" colspan="6"> 
              <p>&nbsp;</p>
              <p> 
                <input type="button" name="renew" value="Renew domain" onClick = "renewDomain(this.form);">
                <input type="button" name="delete" value="Delete domain" onClick = "deleteDomain(this.form);">
              </p>
            </td>
          </tr>
          <?php echo '<?php'; ?>

}
<?php echo '?>'; ?>

        </table>
      <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
	  <input type="hidden" name="action" value="">
	  <input type="hidden" name="year" value="">
      </form>
      
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>