<?php /* Smarty version 2.6.7, created on 2005-11-13 05:32:03
         compiled from simpleGreen/admin.listadmin.tpl */ ?>
<script language="javascript">
<?php echo $this->_tpl_vars['function_doDelete']; ?>

</script>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <form style="margin:0px">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
          <tr class="fieldName"> 
            <td height="20"><b><font color="#FFFFFF">&nbsp;Login ID</font></b></td>
            <td height="20"><b><font color="#FFFFFF">&nbsp;Name</font></b></td>
            <td height="20"><b><font color="#FFFFFF">&nbsp;Department</font></b></td>
            <td height="20"><b><font color="#FFFFFF">&nbsp;Status</font></b></td>
            <td height="20"><b><font color="#FFFFFF">&nbsp;Operation</font></b></td>
        </tr>
    <?php unset($this->_sections['name']);
$this->_sections['name']['name'] = 'name';
$this->_sections['name']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['name']['show'] = true;
$this->_sections['name']['max'] = $this->_sections['name']['loop'];
$this->_sections['name']['step'] = 1;
$this->_sections['name']['start'] = $this->_sections['name']['step'] > 0 ? 0 : $this->_sections['name']['loop']-1;
if ($this->_sections['name']['show']) {
    $this->_sections['name']['total'] = $this->_sections['name']['loop'];
    if ($this->_sections['name']['total'] == 0)
        $this->_sections['name']['show'] = false;
} else
    $this->_sections['name']['total'] = 0;
if ($this->_sections['name']['show']):

            for ($this->_sections['name']['index'] = $this->_sections['name']['start'], $this->_sections['name']['iteration'] = 1;
                 $this->_sections['name']['iteration'] <= $this->_sections['name']['total'];
                 $this->_sections['name']['index'] += $this->_sections['name']['step'], $this->_sections['name']['iteration']++):
$this->_sections['name']['rownum'] = $this->_sections['name']['iteration'];
$this->_sections['name']['index_prev'] = $this->_sections['name']['index'] - $this->_sections['name']['step'];
$this->_sections['name']['index_next'] = $this->_sections['name']['index'] + $this->_sections['name']['step'];
$this->_sections['name']['first']      = ($this->_sections['name']['iteration'] == 1);
$this->_sections['name']['last']       = ($this->_sections['name']['iteration'] == $this->_sections['name']['total']);
?>		
		<tr>
          <td height="20" <?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][0]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][2]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
		<?php if ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][5] == 0): ?>
			&nbsp;<font color="#0000FF">Start</font>
		<?php else: ?>
			&nbsp;<font color="#FF0000">Stop</font>
		<?php endif; ?>
          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['color']; ?>
>
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showModifyForm&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&admin_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][0]; ?>
"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/modify.gif" border="0" alt="Modify"></a>&nbsp;
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=deleteAdmin&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&admin_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][0]; ?>
" onClick="return doDelete()"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/delete.gif" border="0" alt="Delete"></a>&nbsp;
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showSetTask&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&admin_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][0]; ?>
"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
templates/<?php echo $this->_tpl_vars['CURRENT_SKIN']; ?>
/images/lock.gif" border="0" alt="Access setting"></a>
          </td>
        </tr>
    <?php endfor; endif; ?>
		<tr> 
          <td height="20" bgcolor="#CCCCCC" colspan="5">
		  <?php echo $this->_tpl_vars['pagebutton']; ?>

          </td>
        </tr>
		    </table>
      <table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
        <tr>
            <td align="center"><br>
      <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
      <input type="button" name="new" value="New Admin" onClick="document.location.href='<?php echo $this->_tpl_vars['php_self']; ?>
?action=showAddForm'">
            </td>
          </tr></table>
      </form>
      
    </td>
  </tr>
</table>
<p>&nbsp;</p>
  