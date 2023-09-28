<?php /* Smarty version 2.6.7, created on 2005-11-13 13:27:34
         compiled from default/domain.searchdomains.result.tpl */ ?>
<br>
<script type="text/javascript">
function showDomains()<?php echo '{'; ?>

    if (document.getElementById('rec').style.display == '')
        document.getElementById('rec').style.display = 'none';
    else 
        document.getElementById('rec').style.display = '';
<?php echo '}'; ?>

</script>
<form method=POST action=<?php echo $this->_tpl_vars['php_self']; ?>
>
<table class="searchForm" align="center" width="100%" cellpadding=10 cellspacing=10>
    <tr><td>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['search_res']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($this->_tpl_vars['search_res'][$this->_sections['i']['index']][1] == 0): ?>
                <div>
                    <br><input type=checkbox name=domains[] value="<?php echo $this->_tpl_vars['search_res'][$this->_sections['i']['index']][0]; ?>
" checked>
                         <?php echo $this->_tpl_vars['search_res'][$this->_sections['i']['index']][0]; ?>
 is available
                </div>
            <?php endif; ?>
        <?php endfor; endif; ?>
        <div></div>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['failed_domains']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($this->_tpl_vars['failed_domains'][$this->_sections['i']['index']][1] == 1): ?>
                <div><br>&nbsp; <?php echo $this->_tpl_vars['failed_domains'][$this->_sections['i']['index']][0]; ?>
 is already registered</div>
            <?php else: ?>
                <div><br>&nbsp; <?php echo $this->_tpl_vars['failed_domains'][$this->_sections['i']['index']][0]; ?>
 checking domain is not available now.</div>
            <?php endif; ?>
        <?php endfor; endif; ?>
        
      </td></tr>
      <tr><td > 
          <br><br><a href="#" onClick=showDomains()>See all recommended domains</a>
      </td></tr>
      <tr><td id='rec' style="display:none"> 
         <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['search_res']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($this->_tpl_vars['search_res'][$this->_sections['i']['index']][1] == 1): ?>
                <div>
                    <br><input type=checkbox name=domains[] value="<?php echo $this->_tpl_vars['search_res'][$this->_sections['i']['index']][0]; ?>
" >
                         <?php echo $this->_tpl_vars['search_res'][$this->_sections['i']['index']][0]; ?>
 is available
                </div>
            <?php endif; ?>
        <?php endfor; endif; ?>
    </td></tr>
    <tr><td >
        <input type=submit name=Submit value="Continue">
        <input type=hidden name=action value="selectMember">
    </td></tr>
</table>
</form>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['CURRENT_THEME'])."/domain.searchdomains.form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>