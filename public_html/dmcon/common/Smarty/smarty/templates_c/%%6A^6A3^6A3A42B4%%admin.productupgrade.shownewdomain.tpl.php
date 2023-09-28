<?php /* Smarty version 2.6.7, created on 2005-06-26 14:21:30
         compiled from default2/admin.productupgrade.shownewdomain.tpl */ ?>
<br>
<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">
  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b>New domain</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="border1">

<?php if ($this->_tpl_vars['r_count'] == 0): ?>
          <tr> 
            <td width="10%" height="25" align="center">&nbsp; 

            </td>
            <td width="90%" height="25">
              <font color="#FF0000">At present, there are no new domains for choosing.</font>
            </td>
          </tr>
<?php else: ?>

    <?php unset($this->_sections['test']);
$this->_sections['test']['name'] = 'test';
$this->_sections['test']['loop'] = is_array($_loop=$this->_tpl_vars['res']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['test']['show'] = true;
$this->_sections['test']['max'] = $this->_sections['test']['loop'];
$this->_sections['test']['step'] = 1;
$this->_sections['test']['start'] = $this->_sections['test']['step'] > 0 ? 0 : $this->_sections['test']['loop']-1;
if ($this->_sections['test']['show']) {
    $this->_sections['test']['total'] = $this->_sections['test']['loop'];
    if ($this->_sections['test']['total'] == 0)
        $this->_sections['test']['show'] = false;
} else
    $this->_sections['test']['total'] = 0;
if ($this->_sections['test']['show']):

            for ($this->_sections['test']['index'] = $this->_sections['test']['start'], $this->_sections['test']['iteration'] = 1;
                 $this->_sections['test']['iteration'] <= $this->_sections['test']['total'];
                 $this->_sections['test']['index'] += $this->_sections['test']['step'], $this->_sections['test']['iteration']++):
$this->_sections['test']['rownum'] = $this->_sections['test']['iteration'];
$this->_sections['test']['index_prev'] = $this->_sections['test']['index'] - $this->_sections['test']['step'];
$this->_sections['test']['index_next'] = $this->_sections['test']['index'] + $this->_sections['test']['step'];
$this->_sections['test']['first']      = ($this->_sections['test']['iteration'] == 1);
$this->_sections['test']['last']       = ($this->_sections['test']['iteration'] == $this->_sections['test']['total']);
?>
          <tr> 
            <td width="10%" height="25" align="center"> 
              <input type="radio" name="product_id" value="<?php echo $this->_tpl_vars['res'][$this->_sections['test']['index']][0]; ?>
">
            </td>
            <td width="90%" height="25">
             <?php echo $this->_tpl_vars['res'][$this->_sections['test']['index']][1]; ?>

            </td>
          </tr>
	<?php endfor; endif;  endif; ?>
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
        <input type="submit" name="Submit" value="Domain upgrade">
        <input type="hidden" name="action" value="upgradeDomain">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>