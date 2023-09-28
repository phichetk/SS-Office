<?php /* Smarty version 2.6.7, created on 2005-06-17 22:30:19
         compiled from default/test.tpl */ ?>
<?php unset($this->_sections['test']);
$this->_sections['test']['name'] = 'test';
$this->_sections['test']['loop'] = is_array($_loop=$this->_tpl_vars['var']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <?php echo $this->_tpl_vars['var']; ?>

<?php endfor; endif; ?>