<?php /* Smarty version 2.6.7, created on 2005-09-08 18:42:32
         compiled from default/domain.whois.form.tpl */ ?>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td >
	  <form action="<?php echo $this->_tpl_vars['content_action']; ?>
" method="post" style="margin:0px">
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr> 
            <td align="right" >www.
              <input type="text" name="domain">
              <select name="gtld" style=" width : 50px;">
			  <?php unset($this->_sections['domain']);
$this->_sections['domain']['name'] = 'domain';
$this->_sections['domain']['loop'] = is_array($_loop=$this->_tpl_vars['domain_details']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['domain']['show'] = true;
$this->_sections['domain']['max'] = $this->_sections['domain']['loop'];
$this->_sections['domain']['step'] = 1;
$this->_sections['domain']['start'] = $this->_sections['domain']['step'] > 0 ? 0 : $this->_sections['domain']['loop']-1;
if ($this->_sections['domain']['show']) {
    $this->_sections['domain']['total'] = $this->_sections['domain']['loop'];
    if ($this->_sections['domain']['total'] == 0)
        $this->_sections['domain']['show'] = false;
} else
    $this->_sections['domain']['total'] = 0;
if ($this->_sections['domain']['show']):

            for ($this->_sections['domain']['index'] = $this->_sections['domain']['start'], $this->_sections['domain']['iteration'] = 1;
                 $this->_sections['domain']['iteration'] <= $this->_sections['domain']['total'];
                 $this->_sections['domain']['index'] += $this->_sections['domain']['step'], $this->_sections['domain']['iteration']++):
$this->_sections['domain']['rownum'] = $this->_sections['domain']['iteration'];
$this->_sections['domain']['index_prev'] = $this->_sections['domain']['index'] - $this->_sections['domain']['step'];
$this->_sections['domain']['index_next'] = $this->_sections['domain']['index'] + $this->_sections['domain']['step'];
$this->_sections['domain']['first']      = ($this->_sections['domain']['iteration'] == 1);
$this->_sections['domain']['last']       = ($this->_sections['domain']['iteration'] == $this->_sections['domain']['total']);
?>
			    <option value="<?php echo $this->_tpl_vars['domain_details'][$this->_sections['domain']['index']][0]; ?>
"><?php echo $this->_tpl_vars['domain_details'][$this->_sections['domain']['index']][1]; ?>
</option>
			  <?php endfor; endif; ?>
			  </select>
            </td>
            <td width="36%"> 
              <input type="submit" name="Submit" value="Check">
              <input type="hidden" name="action" value="getWhois">
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