<?php /* Smarty version 2.6.7, created on 2005-06-26 13:18:49
         compiled from default2/content.header.tpl */ ?>
 
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	  <?php if ($this->_tpl_vars['content_title'] != ""): ?>

		  <tr>
            <td class="greyHeadRight"><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greyhead_left.gif" width="6" height="22" class="greyHeadRight"></td>
            <td class="greyHead"><?php echo $this->_tpl_vars['content_title']; ?>
 </td>
            <td><img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greyhead_right.gif" width="6" height="22"></td>
          </tr>
      
	  <?php endif; ?> 
	  <?php if ($this->_tpl_vars['content_tip'] != ""): ?>
	    
		<tr><td colspan=4><i><?php echo $this->_tpl_vars['content_tip']; ?>
</i></td></tr>
	    <tr><td colspan=3><hr></td></tr>
	  
	  <?php endif; ?>
	  <?php if ($this->_tpl_vars['content_warning'] != ""): ?>
	  
	    <tr><td colspan=3><b><i><?php echo $this->_tpl_vars['content_warning']; ?>
</i></b></td></tr>
	    <tr><td colspan=3><hr></td></td>
	  
	  <?php endif; ?>
	</table>