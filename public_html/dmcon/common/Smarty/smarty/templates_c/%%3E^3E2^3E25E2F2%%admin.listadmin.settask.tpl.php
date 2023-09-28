<?php /* Smarty version 2.6.7, created on 2005-10-27 13:22:53
         compiled from default/admin.listadmin.settask.tpl */ ?>
<br>
<form action="<?php echo $this->_tpl_vars['content_action']; ?>
" method="post">
  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
    
<?php if ($this->_tpl_vars['message'] != ""): ?>

    <tr> 
      <td width="25%" height="25" colspan="2"> 
        <div style="border:solid 1px #FF0000;padding:5px"> <font class="p8"><b> 
          <?php echo $this->_tpl_vars['message']; ?>

          </b></font> </div>
      </td>
    </tr>
<?php endif; ?>
    <tr bgcolor="#EFEFEF"> 
      <td width="30%" height="25">&nbsp;<b>Name</b></td>
      <td width="70%" height="25" bgcolor="#EFEFEF"> 
        <?php echo $this->_tpl_vars['admin_name']; ?>

      </td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="30%" height="25">&nbsp;<b>Department</b></td>
      <td width="70%" height="25"> 
        <?php echo $this->_tpl_vars['admin_dept']; ?>

      </td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td height="25">&nbsp;<b>Add Time</b></td>
      <td height="25"> 
       <?php echo $this->_tpl_vars['add_time']; ?>

      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b>Admin Task</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="border1">
		<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
          <tr> 
            <td width="10%" height="25" align="center"> 
              <input type="checkbox" name="task_id[]" value="<?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']][0][0]; ?>
" <?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']][1]; ?>
>
            </td>
            <td width="90%" height="25"> <?php echo $this->_tpl_vars['rs'][$this->_sections['list']['index']][0][1]; ?>
</td>
          </tr>
<?php endfor; endif; ?>
        </table>
      </td>
    </tr>
    <tr>
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25">
        <input type="submit" name="Submit" value="Set Admin Task">
        <input type="hidden" name="action" value="setAdminTask">
	<input type="hidden" name="admin_id" value="<?php echo $this->_tpl_vars['admin_id']; ?>
">
	<input type="hidden" name="currentPage" value="<?php echo $this->_tpl_vars['current_page']; ?>
">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>