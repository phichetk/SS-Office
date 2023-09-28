<?php /* Smarty version 2.6.7, created on 2005-03-11 22:47:07
         compiled from user_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'user_list.tpl', 12, false),array('function', 'html_image', 'user_list.tpl', 25, false),)), $this); ?>
<table border=0 cellspacing=0 cellpadding=0 width=80%>
<FORM name="theForm" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
">
   <tr>
      <td class="head">ID</td>
      <td class="head">Name</td>
      <td class="head">Password</td>
      <td class="head">E-Mail</td>
      <td class="head" colspan=2>&nbsp;</td>
   </tr>
<?php unset($this->_sections['ulist']);
$this->_sections['ulist']['name'] = 'ulist';
$this->_sections['ulist']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ulist']['show'] = true;
$this->_sections['ulist']['max'] = $this->_sections['ulist']['loop'];
$this->_sections['ulist']['step'] = 1;
$this->_sections['ulist']['start'] = $this->_sections['ulist']['step'] > 0 ? 0 : $this->_sections['ulist']['loop']-1;
if ($this->_sections['ulist']['show']) {
    $this->_sections['ulist']['total'] = $this->_sections['ulist']['loop'];
    if ($this->_sections['ulist']['total'] == 0)
        $this->_sections['ulist']['show'] = false;
} else
    $this->_sections['ulist']['total'] = 0;
if ($this->_sections['ulist']['show']):

            for ($this->_sections['ulist']['index'] = $this->_sections['ulist']['start'], $this->_sections['ulist']['iteration'] = 1;
                 $this->_sections['ulist']['iteration'] <= $this->_sections['ulist']['total'];
                 $this->_sections['ulist']['index'] += $this->_sections['ulist']['step'], $this->_sections['ulist']['iteration']++):
$this->_sections['ulist']['rownum'] = $this->_sections['ulist']['iteration'];
$this->_sections['ulist']['index_prev'] = $this->_sections['ulist']['index'] - $this->_sections['ulist']['step'];
$this->_sections['ulist']['index_next'] = $this->_sections['ulist']['index'] + $this->_sections['ulist']['step'];
$this->_sections['ulist']['first']      = ($this->_sections['ulist']['iteration'] == 1);
$this->_sections['ulist']['last']       = ($this->_sections['ulist']['iteration'] == $this->_sections['ulist']['total']);
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "row1,row2"), $this); echo '"><td class="row">';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['id'];  echo '</td><td class="row">';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['name'];  echo '</td><td class="row">';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['password'];  echo '</td><td class="row">';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['email'];  echo '</td><td class="row"><input type=checkbox name="form[todel][]" value="';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['id'];  echo '"></td><td class="row">';  echo $this->_tpl_vars['users'][$this->_sections['ulist']['index']]['options'];  echo '</td></tr>'; ?>

<?php endfor; endif; ?>
	<tr>
	<td class="fom" colspan=4>
	<table width="100%" border=0 cellspacing=0 cellpadding=0><tr>
	<td><?php echo smarty_function_html_image(array('file' => "images/back.png",'align' => 'right'), $this);?>
</td>
	<td width=80% class=pgr> 1 2 3 4 5 6 </td>
	<td><?php echo smarty_function_html_image(array('file' => "images/forward.png"), $this);?>
</td>
	</tr></table>
	</td>
	<td class="fom"><input type=checkbox></td>
	<td class="fom" colspan=2><input class="tbx" type=submit name="form[do]" value=" DELETE "></td>
	</tr>
</form>
</table>
<br>
<table border=0 cellspacing=0 cellpadding=0 width=80%>
	<FORM name="theForm" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
?do=add">
	<INPUT type="hidden" name="form[is_sent]" value="true">
	<tr>
	<td class="fom">&nbsp;</td>
	<td class="fom"><input class="tbx" type=text name="form[name]" size=15 value="<?php echo $this->_tpl_vars['name']; ?>
"></td>
	<td class="fom"><input class="tbx" type=text name="form[pass]" size=15 value="<?php echo $this->_tpl_vars['pass']; ?>
"></td>
	<td class="fom"><input class="tbx" type=text name="form[email]" size=15 value="<?php echo $this->_tpl_vars['email']; ?>
"></td>
	<td class="fom"><input class="tbx" type=submit name="form[submit]" value="++ADD++"></td>
	</tr>
	</form>
</table>