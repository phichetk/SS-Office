<?php /* Smarty version 2.6.7, created on 2005-06-26 13:18:49
         compiled from default2/banner.tpl */ ?>

<table width=779 border=0 align="center" cellspacing=0 >
	<tr>
		<td class="headLeftWidth"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_01.gif" width=14 height=26 alt=""></td>
		<td colspan="4" class="headBg1">&nbsp;	</td>
		<td class="headRight"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_06.gif" width=14 height=26 alt=""></td>
	</tr>
	<tr>
		<td class="headLeftWidth"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_07.gif" width=14 height=72 alt=""></td>
		<td class="logo"><a href="index.html"><img src="<?php echo $this->_tpl_vars['logo']; ?>
" alt="onlineNIC" width=134 height=72 border="0"></a></td>
		<td class="headBg2"></td>
		<td class="headMid"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_10.gif" width=37 height=72 alt=""></td>
		<td class="headBg3"></td>
		<td class="headRight">
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_12.gif" alt="" width=14 height=72 ></td>
	</tr>
	<tr>
		<td class="headLeftWidth"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_13.gif" width=14 height=34 alt=""></td>
		<td colspan="2" class="headBg4"></td>
		<td class="headMid">			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/header1_16.gif" width=37 height=34 alt=""></td>
		<td class="meadMenu">
			<?php unset($this->_sections['links']);
$this->_sections['links']['name'] = 'links';
$this->_sections['links']['loop'] = is_array($_loop=$this->_tpl_vars['banner_links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['links']['show'] = true;
$this->_sections['links']['max'] = $this->_sections['links']['loop'];
$this->_sections['links']['step'] = 1;
$this->_sections['links']['start'] = $this->_sections['links']['step'] > 0 ? 0 : $this->_sections['links']['loop']-1;
if ($this->_sections['links']['show']) {
    $this->_sections['links']['total'] = $this->_sections['links']['loop'];
    if ($this->_sections['links']['total'] == 0)
        $this->_sections['links']['show'] = false;
} else
    $this->_sections['links']['total'] = 0;
if ($this->_sections['links']['show']):

            for ($this->_sections['links']['index'] = $this->_sections['links']['start'], $this->_sections['links']['iteration'] = 1;
                 $this->_sections['links']['iteration'] <= $this->_sections['links']['total'];
                 $this->_sections['links']['index'] += $this->_sections['links']['step'], $this->_sections['links']['iteration']++):
$this->_sections['links']['rownum'] = $this->_sections['links']['iteration'];
$this->_sections['links']['index_prev'] = $this->_sections['links']['index'] - $this->_sections['links']['step'];
$this->_sections['links']['index_next'] = $this->_sections['links']['index'] + $this->_sections['links']['step'];
$this->_sections['links']['first']      = ($this->_sections['links']['iteration'] == 1);
$this->_sections['links']['last']       = ($this->_sections['links']['iteration'] == $this->_sections['links']['total']);
?>
				<a href=<?php echo $this->_tpl_vars['banner_links'][$this->_sections['links']['index']][0]; ?>
 class="meadMenu" ><?php echo $this->_tpl_vars['banner_links'][$this->_sections['links']['index']][1]; ?>
</a>&nbsp;&nbsp;
                <?php if (! $this->_sections['links']['last']): ?>
    			: :&nbsp;&nbsp;
				<?php endif; ?>
			<?php endfor; endif; ?>
		</td>
	    <td class="meadMenu">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="6" class="headBase"></td>
	</tr>
</table>