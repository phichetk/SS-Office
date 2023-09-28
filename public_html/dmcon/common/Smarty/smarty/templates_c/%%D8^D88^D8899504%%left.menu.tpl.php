<?php /* Smarty version 2.6.7, created on 2005-11-16 12:00:14
         compiled from simpleGreen/left.menu.tpl */ ?>

<table width="100%" cellspacing=0 cellpadding=0 style="width: 183px;">
    <TR>
        <TD  class="lightGreen2">
            <?php if ($this->_tpl_vars['left_menu'][0][1] == 'title'): ?>
			    <?php echo $this->_tpl_vars['left_menu'][0][0]; ?>
 
			<?php endif; ?>
        </TD>
    </tr>
    
    <?php if ($this->_tpl_vars['left_menu'][0][1] == 'link'): ?>
        <tr>
            <TD  class="lightGreen1">
                                  <?php echo $this->_tpl_vars['left_menu'][0][0]; ?>

                          </TD>
        </tr>
    <?php endif; ?>
    
    <?php unset($this->_sections['side']);
$this->_sections['side']['name'] = 'side';
$this->_sections['side']['start'] = (int)1;
$this->_sections['side']['loop'] = is_array($_loop=$this->_tpl_vars['left_menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['side']['show'] = true;
$this->_sections['side']['max'] = $this->_sections['side']['loop'];
$this->_sections['side']['step'] = 1;
if ($this->_sections['side']['start'] < 0)
    $this->_sections['side']['start'] = max($this->_sections['side']['step'] > 0 ? 0 : -1, $this->_sections['side']['loop'] + $this->_sections['side']['start']);
else
    $this->_sections['side']['start'] = min($this->_sections['side']['start'], $this->_sections['side']['step'] > 0 ? $this->_sections['side']['loop'] : $this->_sections['side']['loop']-1);
if ($this->_sections['side']['show']) {
    $this->_sections['side']['total'] = min(ceil(($this->_sections['side']['step'] > 0 ? $this->_sections['side']['loop'] - $this->_sections['side']['start'] : $this->_sections['side']['start']+1)/abs($this->_sections['side']['step'])), $this->_sections['side']['max']);
    if ($this->_sections['side']['total'] == 0)
        $this->_sections['side']['show'] = false;
} else
    $this->_sections['side']['total'] = 0;
if ($this->_sections['side']['show']):

            for ($this->_sections['side']['index'] = $this->_sections['side']['start'], $this->_sections['side']['iteration'] = 1;
                 $this->_sections['side']['iteration'] <= $this->_sections['side']['total'];
                 $this->_sections['side']['index'] += $this->_sections['side']['step'], $this->_sections['side']['iteration']++):
$this->_sections['side']['rownum'] = $this->_sections['side']['iteration'];
$this->_sections['side']['index_prev'] = $this->_sections['side']['index'] - $this->_sections['side']['step'];
$this->_sections['side']['index_next'] = $this->_sections['side']['index'] + $this->_sections['side']['step'];
$this->_sections['side']['first']      = ($this->_sections['side']['iteration'] == 1);
$this->_sections['side']['last']       = ($this->_sections['side']['iteration'] == $this->_sections['side']['total']);
?>
		<?php if ($this->_tpl_vars['left_menu'][$this->_sections['side']['index']][1] != 'title'): ?>
            <tr>
                <TD  class="lightGreen1">
                                          <?php echo $this->_tpl_vars['left_menu'][$this->_sections['side']['index']][0]; ?>

                                   </TD>
            </tr>
        <?php else: ?>
            <TR>
                <TD  class="lightGreen2">
                    <?php echo $this->_tpl_vars['left_menu'][$this->_sections['side']['index']][0]; ?>

                </TD>
            </tr>
        <?php endif; ?>
    <?php endfor; endif; ?>
    
    <TR><TD  class="lightGreen2">&nbsp;</TD></TR>
    <TR><TD  class="lightGreen1"><br><br><br></TD></TR>
</table>