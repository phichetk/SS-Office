<?php /* Smarty version 2.6.7, created on 2005-11-11 18:31:39
         compiled from simpleGreen/content.header.tpl */ ?>
 
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	  <?php if ($this->_tpl_vars['content_title'] != ""): ?>

		  <tr>
            <TD colspan="2" class="pageInfo">
               <?php echo $this->_tpl_vars['content_title']; ?>

            </TD>
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