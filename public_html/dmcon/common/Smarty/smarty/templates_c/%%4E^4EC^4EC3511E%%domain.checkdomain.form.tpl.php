<?php /* Smarty version 2.6.7, created on 2005-08-02 01:46:57
         compiled from simpleGreen/domain.checkdomain.form.tpl */ ?>
                  <br>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td >
	  <form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td align="right" width="26%">www.</td>
            <td width="38%"> 
              <input type="text" name="domain">
              <select name="gtld">
      <?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <option value=<?php echo $this->_tpl_vars['rs'][$this->_sections['r']['index']][0]; ?>
> <?php echo $this->_tpl_vars['rs'][$this->_sections['r']['index']][1]; ?>
 </option>
		<?php endfor; endif; ?>
              </select>
            </td>
            <td width="36%"> 
              <input type="submit" name="Submit" value="Check">
              <input type="hidden" name="action" value="checkDomain">
            </td>
          </tr>
        </table>
	  </form>
      <p><br>
        <br>
        <b>Domain Name Format: </b><br>
        A domain name is a random composition of case insensitive English letters, 
        numbers and the hyphen. The string can not exceed 67 characters in length. 
        The hyphen ('-') can not appear at the beginning or the end of the character 
        string. For example, 'eat-at-joes.com' is a valid domain name, '-eatatjoes.com' 
        is not.</p>
      </td>
  </tr>
</table>
                  <p>&nbsp;</p>