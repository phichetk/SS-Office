<?php /* Smarty version 2.6.7, created on 2005-11-16 15:50:58
         compiled from default/admin.systemcontrol.tpl */ ?>
<p>&nbsp;</p>
<form action="<?php echo $this->_tpl_vars['content_action']; ?>
" method="post">
  <table width="80%"  cellspacing="1" cellpadding="2" align="center"  style=" border-width: 1px; padding: 5px">
       <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Website Language</td>
      <td width="68%" height="25" bgcolor="#F2F8FD"> 
        <select name="website_language">
          
<?php if ($this->_tpl_vars['website_language'] == 1): ?>

          <option value="1" selected>English</option>
          <option value="2">Chinese</option>
          <?php echo '<?php'; ?>

<?php else: ?>

          <option value="1">English</option>
          <option value="2" selected>Chinese</option>
<?php endif; ?>
        </select>
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Title</td>
      <td width="68%" height="25" bgcolor="#F2F8FD"> 
        <input type="text" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" size="40">
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Copyright</td>
      <td width="68%" height="25" bgcolor="#F2F8FD"> 
        <input type="text" name="copyright" value="<?php echo $this->_tpl_vars['copyright']; ?>
" size="40">
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Pagesize</td>
      <td width="68%" height="25" bgcolor="#F2F8FD"> 
        <input type="text" name="pagesize" value="<?php echo $this->_tpl_vars['pagesize']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">System Status</td>
      <td width="68%" height="25" bgcolor="#F2F8FD"> 
        <select name="status">
          
<?php if ($this->_tpl_vars['system_status'] == 0): ?>

          <option value="0" selected>Start</option>
          <option value="1">Stop</option>
<?php else: ?>

          <option value="0">Start</option>
          <option value="1" selected>Stop</option>
<?php endif; ?>
        </select>
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Reseller ID</td>
      <td width="68%" height="25" bgcolor="#F2F8FD">
        <input type="text" name="customer_id" value="<?php echo $this->_tpl_vars['customer_id']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Reseller Password</td>
      <td width="68%" height="25" bgcolor="#F2F8FD">
        <input type="password" name="customer_password" value="<?php echo $this->_tpl_vars['customer_password']; ?>
">
      </td>
    </tr>
    <tr> 
      <td width="32%" height="25" bgcolor="#E1ECFB">Server Host</td>
      <td width="68%" height="25" bgcolor="#F2F8FD">
        <input type="text" name="server_host" value="<?php echo $this->_tpl_vars['server_host']; ?>
">
      </td>
    </tr>
    <tr>
      <td width="32%" height="25" bgcolor="#E1ECFB">Server Port</td>
      <td width="68%" height="25" bgcolor="#F2F8FD">
        <input type="text" name="server_port" value="<?php echo $this->_tpl_vars['server_port']; ?>
">
      </td>
    </tr>
	<tr>
      <td width="32%" height="25" bgcolor="#E1ECFB">Current Theme</td>
      <td width="68%" height="25" bgcolor="#F2F8FD">
        <select name="current_theme">
			<?php unset($this->_sections['ent']);
$this->_sections['ent']['name'] = 'ent';
$this->_sections['ent']['loop'] = is_array($_loop=$this->_tpl_vars['themes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ent']['show'] = true;
$this->_sections['ent']['max'] = $this->_sections['ent']['loop'];
$this->_sections['ent']['step'] = 1;
$this->_sections['ent']['start'] = $this->_sections['ent']['step'] > 0 ? 0 : $this->_sections['ent']['loop']-1;
if ($this->_sections['ent']['show']) {
    $this->_sections['ent']['total'] = $this->_sections['ent']['loop'];
    if ($this->_sections['ent']['total'] == 0)
        $this->_sections['ent']['show'] = false;
} else
    $this->_sections['ent']['total'] = 0;
if ($this->_sections['ent']['show']):

            for ($this->_sections['ent']['index'] = $this->_sections['ent']['start'], $this->_sections['ent']['iteration'] = 1;
                 $this->_sections['ent']['iteration'] <= $this->_sections['ent']['total'];
                 $this->_sections['ent']['index'] += $this->_sections['ent']['step'], $this->_sections['ent']['iteration']++):
$this->_sections['ent']['rownum'] = $this->_sections['ent']['iteration'];
$this->_sections['ent']['index_prev'] = $this->_sections['ent']['index'] - $this->_sections['ent']['step'];
$this->_sections['ent']['index_next'] = $this->_sections['ent']['index'] + $this->_sections['ent']['step'];
$this->_sections['ent']['first']      = ($this->_sections['ent']['iteration'] == 1);
$this->_sections['ent']['last']       = ($this->_sections['ent']['iteration'] == $this->_sections['ent']['total']);
?>
				<?php if ($this->_tpl_vars['themes'][$this->_sections['ent']['index']] == $this->_tpl_vars['current_theme']): ?>
					<option value="<?php echo $this->_tpl_vars['themes'][$this->_sections['ent']['index']]; ?>
" selected> 
				    	<?php echo $this->_tpl_vars['themes'][$this->_sections['ent']['index']]; ?>

					</option>
				<?php else: ?>
					<option value="<?php echo $this->_tpl_vars['themes'][$this->_sections['ent']['index']]; ?>
"> 
				    	<?php echo $this->_tpl_vars['themes'][$this->_sections['ent']['index']]; ?>

					</option>
				<?php endif; ?>
			<?php endfor; endif; ?>
        </select>
      </td>
    </tr>
	<tr>
	    <td class=cellBg>Enable domain lock</td>
	    <td class=cellBg2>
		    <input type="checkbox" name="domain_lock" value="Enabled" <?php echo $this->_tpl_vars['domain_lock']; ?>
>
		</td>
	</tr>
    <tr>
	    <td class=cellBg>Enable domain Auto-Renewal</td>
	    <td class=cellBg2>
		    <input type="checkbox" name="domain_renew" value="Enabled" <?php echo $this->_tpl_vars['domain_renew']; ?>
>
		</td>
	</tr>
  </table>
  <br>
  <br>
  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr> 
      <td width="32%">&nbsp;</td>
      <td width="68%"> 
        <input type="submit" name="Submit" value="Update system">
      </td>
    </tr>
    <tr> 
      <td width="32%">&nbsp;</td>
      <td width="68%">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">Note: In line of &quot;Server Host&quot;, if you want to run 
        template in real-time environment, please input &quot;www.onlinenic.com&quot;. 
        If you want to test template firstly, please input &quot;218.5.65.6&quot;.</td>
    </tr>
  </table>
  <br>
  <input type="hidden" name="action" value="setStatus">
</form>
<p>&nbsp;</p>