<?php /* Smarty version 2.6.7, created on 2005-11-16 08:32:46
         compiled from simpleGreen/domain.adddomain.list.tpl */ ?>
<br>
<form method=POST action=<?php echo $this->_tpl_vars['PHP_SELF']; ?>
>
<table class="searchForm" align=center cellpadding=2 cellspacing=1>
    <tr>
        <td class=cellBg align="center">Domain Name(s)</td>
        <td class=cellBg align="center">Terms<br>(years)</td>
        <td class=cellBg align="center">Your Price<br>($us)</td>
        <td class=cellBg align="center">&nbsp;</td>
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['domains']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td align="right"> <?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][0]; ?>
</td>
            <td align="center">
                <select name="yrs[]" >
                     <option value=<?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][1]; ?>
 selected><?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][1]; ?>
 </option>
                     <option value=1>1 </option>
                     <option value=2>2 </option>
                     <option value=3>3 </option>
                     <option value=4>4 </option>
                     <option value=5>5 </option>
                   <?php if ($this->_tpl_vars['domains'][$this->_sections['i']['index']][3] == 0): ?>  
                     <option value=6>6 </option>
                     <option value=7>7 </option>
                     <option value=8>8 </option>
                     <option value=9>9 </option>
                     <option value=10>10 </option>
                   <?php endif; ?>
                </select>
            </td>
            <td align="center">
                <?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][2]; ?>

            </td>
            <td><a href=<?php echo $this->_tpl_vars['PHP_SELF']; ?>
?action=remDomain&name=<?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][0]; ?>
> &laquo; remove</td>
        <tr>
        <tr><td colspan=4><hr></td></tr>
    <?php endfor; endif; ?>
    <tr><td>&nbsp;</td>
        <td align="right"> Total:      </td>
         <td  align="center"> $ <?php echo $this->_tpl_vars['total']; ?>

        </td>
    
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td> &nbsp;</td>
        <td> <input type="submit" name="recalculate" value="Recalculate">      </td>
        <td align="right" colspan=2> 
            <input type=hidden name=action value="fromAddDomain">
            <input type=submit name=proceed value="Proceed to Purchase">
        </td>
    </tr>
</table>
</form>