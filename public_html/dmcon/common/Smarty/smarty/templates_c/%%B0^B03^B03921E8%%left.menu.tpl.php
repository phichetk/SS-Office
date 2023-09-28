<?php /* Smarty version 2.6.7, created on 2005-06-26 13:18:49
         compiled from default2/left.menu.tpl */ ?>
<table width=156 border=0 cellpadding=0 cellspacing=0 align=center>
	<TR>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_01.gif" width=15 height=14 alt=""></TD>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_02.gif" width=134 height=14 alt=""></TD>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_03.gif" width=7 height=14 alt=""></TD>
	</TR>
	
		<TR>
			<TD>
				<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_04.gif" width=15 height=22 alt=""></TD>
			<TD class="sidemenuGreen">
			<?php if ($this->_tpl_vars['left_menu'][0][1] == 'title'): ?>
			    <?php echo $this->_tpl_vars['left_menu'][0][0]; ?>
 
			<?php endif; ?>
			</TD>
			<TD>
				<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_06.gif" width=7 height=22 alt=""></TD>
		</TR>

        <?php if ($this->_tpl_vars['left_menu'][0][1] == 'link'): ?>
		    <TR>
				<TD class="sidemenuWhiteLeft"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="8" height="8"></TD>
				<TD class="sidemenuWhiteBg">
				    <ul class="bulletStyle"> <li><?php echo $this->_tpl_vars['left_menu'][0][0]; ?>
</li> </ul>
				</TD>
				<TD class="sidemenuWhiteright"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="1" height="1"> </TD>
			</TR>
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
			<TR>
				<TD class="sidemenuWhiteLeft"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="8" height="8"></TD>
				<TD class="sidemenuWhiteBg">
				<ul class="bulletStyle">
				<li>	<?php echo $this->_tpl_vars['left_menu'][$this->_sections['side']['index']][0]; ?>
</li>
				</ul></TD>
				<TD class="sidemenuWhiteright"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="1" height="1"> </TD>
			</TR>
		<?php else: ?>
			<TR>
				<TD class="sidemenuLeftlinegreen"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greenmenu_leftimage.gif" width="15" height="24"></TD>
				<TD class="sidemenuGreen2">	<?php echo $this->_tpl_vars['left_menu'][$this->_sections['side']['index']][0]; ?>
</TD>
				<TD class="sidemenuRightline"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_12.gif" width=7 height=24 alt=""></TD>
			</TR>
		<?php endif; ?>

    <?php endfor; endif; ?>
	<TR>
	  <TD class="sidemenuLeftlinegreen"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greenmenu_leftimage.gif" width="15" height="24"></TD>
	  <TD class="sidemenuGreen2">&nbsp;</TD>
      <TD class="sidemenuRightline"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_12.gif" width=7 height=24 alt=""></TD>
  </TR>
	<TR>
	  <TD class="sideMenuGreyLeft">&nbsp;</TD>
      <TD class="sideMenuMid">&nbsp;</TD>
      <TD class="sideMenuGreyRight">&nbsp;</TD>
  </TR>
	<TR>
		<TD class="sideMenuGreyLeft"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="1" height="1"> </TD>
		<TD class="sideMenuMid"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="1" height="1"> </TD>
		<TD class="sideMenuGreyRight"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/null.gif" width="1" height="1"> </TD>
	</TR>
	<TR>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_16.gif" width=15 height=8 alt=""></TD>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_17.gif" width=134 height=8 alt=""></TD>
		<TD>
			<img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/sidemenu_18.gif" width=7 height=8 alt=""></TD>
	</TR>
</table>