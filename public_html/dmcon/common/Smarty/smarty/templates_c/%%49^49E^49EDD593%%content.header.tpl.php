<?php /* Smarty version 2.6.7, created on 2005-09-07 12:55:13
         compiled from default/content.header.tpl */ ?>
 
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	  <?php if ($this->_tpl_vars['content_title'] != ""): ?>

		  <tr>
            <td class="greyHeadRight">
			    <img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greyhead_left.gif" width="6" height="22">
			</td>
            <td class="greyHead"><?php echo $this->_tpl_vars['content_title']; ?>
 </td>
            <td class="greyHeadRight">
			    <img src="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/images/greyhead_right.gif" width="6" height="22">
			</td>
          </tr>
	  <?php endif; ?> 
	</table><br>
	
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	  <?php if ($this->_tpl_vars['content_tip'] != ""): ?>
	    
		<tr><td ><i><?php echo $this->_tpl_vars['content_tip']; ?>
</i></td></tr>
	    <tr><td ><hr></td></tr>
	  
	  <?php endif; ?>
	  <?php if ($this->_tpl_vars['content_warning'] != ""): ?>
	  
	    <tr><td ><b><i><?php echo $this->_tpl_vars['content_warning']; ?>
</i></b></td></tr>
	    <tr><td ><hr></td></tr>
	  
	  <?php endif; ?>
	</table>