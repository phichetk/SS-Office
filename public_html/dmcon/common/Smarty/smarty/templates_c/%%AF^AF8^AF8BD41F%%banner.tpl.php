<?php /* Smarty version 2.6.7, created on 2005-11-25 07:19:26
         compiled from simpleGreen/banner.tpl */ ?>
<table cellspacing=0 cellpadding=0 border=0 class="bannerBg">
    <tr>
        <TD width="7"><IMG SRC="images/design2_02.gif" WIDTH=7 HEIGHT=66 ALT=""></TD>
		<TD width="177"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/design2_03.gif" width=177 height=66 alt=""></TD>
		<TD colspan="2" class="topMenuRight" align="right">
            <TABLE  BORDER=0 CELLPADDING=0 CELLSPACING=0 align="right">
                <TR>
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
                       <TD class="topMenuRight"> <a href=<?php echo $this->_tpl_vars['banner_links'][$this->_sections['links']['index']][0]; ?>
 class="topMenuRight"><?php echo $this->_tpl_vars['banner_links'][$this->_sections['links']['index']][1]; ?>
</a>&nbsp;&nbsp;
                        <?php if (! $this->_sections['links']['last']): ?>
                        : :&nbsp;&nbsp;</TD>
                        <?php endif; ?>
                    <?php endfor; endif; ?>
		  </TD>
                </TR>
            </TABLE>
        </TD>
    </tr>
 	<TR>
		<TD><IMG SRC="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/design2_07.gif" WIDTH=7 HEIGHT=61 ALT=""></TD>
		<TD class="greenRightLine">&nbsp;</TD>
		<TD class="green2">&nbsp;</TD>
	    <TD class="rightTop"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/righttop.gif" alt="" width="7" height="61"></TD>
	</TR>
 </table>