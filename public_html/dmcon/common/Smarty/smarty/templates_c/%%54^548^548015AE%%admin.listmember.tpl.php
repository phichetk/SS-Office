<?php /* Smarty version 2.6.7, created on 2005-06-26 14:21:46
         compiled from default2/admin.listmember.tpl */ ?>
<script language="javascript">
function doDelete()
<?php echo $this->_tpl_vars['ldelim']; ?>

	if(confirm("Are you sure to delete this member?"))
	<?php echo $this->_tpl_vars['ldelim']; ?>

		return true;
	<?php echo $this->_tpl_vars['rdelim']; ?>

	else
	{
		return false;
	}
}
</script>
<br>
<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
  <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#E1ECFB" class="border1">
    <tr>
      <td> 
        <table width="100%" border="0" cellspacing="5" cellpadding="0" align="center">
          <tr> 
            <td align=center> Sign-up date from 
              <select name="startYear">
                <option>Year</option>
		
		<?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyear']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['startYear'] == $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]): ?>

				<option value=<?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>
><?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>	
              </select>
              <select name="startMonth">
                <option>Mon</option>
               
				
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['startMonth'] == $this->_tpl_vars['imonth'][$this->_sections['i']['index']]): ?>

				<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>
><?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>	

              </select>
              <select name="startDay">
                <option>Day</option>
                

		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['startDay'] == $this->_tpl_vars['iday'][$this->_sections['i']['index']]): ?>
		
				<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>
><?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>
		
              </select>
              to 
              <select name="toYear">
                <option>Year</option>

		<?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyear']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['toYear'] == $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]): ?>
		
				<option value=<?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>
><?php echo $this->_tpl_vars['iyear'][$this->_sections['yr']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>	
              </select>
              <select name="toMonth">
                <option>Mon</option>
     

		
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['toMonth'] == $this->_tpl_vars['imonth'][$this->_sections['i']['index']]): ?>
			
				<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>
><?php echo $this->_tpl_vars['imonth'][$this->_sections['i']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>	
              </select>
              <select name="toDay">
                <option>Day</option>
   

		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['toDay'] == $this->_tpl_vars['iday'][$this->_sections['i']['index']]): ?>
			<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>

			<?php else: ?>
				<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>
><?php echo $this->_tpl_vars['iday'][$this->_sections['i']['index']]; ?>

			<?php endif; ?>
		<?php endfor; endif; ?>

              </select>
            </td>
          </tr>
        </table>
        <br>
        <table width="100%" border="0" cellspacing="5" cellpadding="0" align="center">
          <tr> 
            <td width="21%">Ordered by:</td>
            <td width="10%"> 
              <select name="orders">

 <?php if ($this->_tpl_vars['orders'] == 1): ?>

                <option value="1" selected>Member Level</option>
                <option value="2">Alphabetical Order</option>
                <option value="3">Sign-up Date</option>
<?php elseif ($this->_tpl_vars['orders'] == 2): ?>
                <option value="1">Member Level</option>
                <option value="2" selected>Alphabetical Order</option>
                <option value="3">Sign-up Date</option>
<?php elseif ($this->_tpl_vars['orders'] == 3): ?>
                <option value="1">Member Level</option>
                <option value="2">Alphabetical Order</option>
                <option value="3" selected>Sign-up Date</option>
<?php else: ?>
                <option value="1" selected>Member Level</option>
                <option value="2">Alphabetical Order</option>
                <option value="3">Sign-up Date</option>
<?php endif; ?>
              </select>
            </td>
            <td width="20%">User name: </td>
            <td width="24%"> 
              <input type="text" name="member_name" size="10" value="<?php echo $this->_tpl_vars['member_name']; ?>
">
            </td>
            <td width="25%"> 
              <input type="submit" name="Submit" value="Query">
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
<br>
<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <form style="margin:0px">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
          <tr class="fieldName"> 
            <td width="12%" height="20"><b><font color="#FFFFFF">&nbsp;ID</font></b></td>
            <td width="27%" height="20"><b><font color="#FFFFFF">&nbsp;User name</font></b></td>
            <td width="27%" height="20"><b><font color="#FFFFFF">&nbsp;Level</font></b></td>
            <td width="14%" height="20"><b><font color="#FFFFFF">&nbsp;Status</font></b></td>
            <td width="20%" height="20"><b><font color="#FFFFFF">&nbsp;Operation</font></b></td>
        </tr>

<?php if ($this->_tpl_vars['rs']): ?>
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
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][1]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][4]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>

		<?php if ($this->_tpl_vars['rs'][$this->_sections['i']['index']][0][3] == 0): ?>
			&nbsp;<font color="#0000FF">Start</font>
		<?php else: ?>
			&nbsp;<font color="#FF0000">Stop</font>
		<?php endif; ?>
          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=viewMemberInfo&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&member_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/view.jpg" border="0" alt="View member info"></a>&nbsp;
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showModifyForm&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&member_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/modify.gif" border="0" alt="Modify member info"></a>&nbsp;
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=deleteMember&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&member_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][0]; ?>
" onClick="return doDelete()"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/delete.gif" border="0" alt="Delete member"></a>&nbsp;
          </td>
        </tr>
    <?php endfor; endif; ?>
        <tr> 
          <td height="20" bgcolor="#CCCCCC" colspan="5">
    <?php echo $this->_tpl_vars['pagebutton']; ?>

          </td>
        </tr>
<?php endif; ?>
      </table>
      </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>