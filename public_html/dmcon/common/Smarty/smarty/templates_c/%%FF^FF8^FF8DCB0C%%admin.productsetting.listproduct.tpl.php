<?php /* Smarty version 2.6.7, created on 2005-11-22 09:41:36
         compiled from simpleGreen/admin.productsetting.listproduct.tpl */ ?>
<br>
<table border="0" width="100%"  cellspacing="0" cellpadding="0" align="center" >
  <tr>
    <td>
      <form style="margin:0px">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
          <tr class="fieldName"> 
            <td width="15%" height="20"><b><font color="#FFFFFF">&nbsp;Product ID</font></b></td>
            <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;Product 
              Name</font></b></td>
            <td width="27%" height="20"><b><font color="#FFFFFF">&nbsp;Product 
              Type</font></b></td>
            <td width="12%" height="20"><b><font color="#FFFFFF">&nbsp;Status</font></b></td>
            <td width="25%" height="20"><b><font color="#FFFFFF">&nbsp;Operation</font></b></td>
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
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            &nbsp;<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][3]; ?>

          </td>
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>

		<?php if ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][4] == 1): ?>
			&nbsp;Domain
		<?php elseif ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][3] == 2): ?>
			&nbsp;Hosting
		<?php elseif ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][3] == 3): ?>
			&nbsp;Postoffice
		<?php endif; ?>
          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>

		<?php if ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][5] == 0): ?>
			&nbsp;<font color=\"#0000FF\">Start</font>
		<?php else: ?>
			&nbsp;<font color=\"#FF0000\">Stop</font>
		<?php endif; ?>
          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][1]; ?>
>
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showModifyDNS&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&product_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>
 ">DNS</a>&nbsp;
            <a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=showModifyPrice&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&product_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>
">Price</a>&nbsp;

		<?php if ($this->_tpl_vars['rs'][$this->_sections['name']['index']][0][5] == 0): ?>

					<a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=stopProduct&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&product_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>
">Stop</a>&nbsp;
		<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['php_self']; ?>
?action=startProduct&currentPage=<?php echo $this->_tpl_vars['currentPage']; ?>
&product_id=<?php echo $this->_tpl_vars['rs'][$this->_sections['name']['index']][0][1]; ?>
">Start</a>&nbsp;
		<?php endif; ?>
          </td>
        </tr>
    <?php endfor; endif; ?>
        <tr> 
          <td height="20" bgcolor="#CCCCCC" colspan="5">
		  <?php echo $this->_tpl_vars['pagebutton']; ?>


          </td>
<!-- <td height="20" bgcolor="#CCCCCC" colspan="5"><input type=button value=Back onClick="history.back()"></td>-->
        </tr>

      </table>
      </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>