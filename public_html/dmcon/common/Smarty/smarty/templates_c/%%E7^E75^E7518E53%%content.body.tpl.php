<?php /* Smarty version 2.6.7, created on 2005-11-11 18:31:39
         compiled from simpleGreen/content.body.tpl */ ?>
<br>
	<table  border="0" align="center" cellpadding="0" cellspacing="0"  style="width: 520px;">
	  <tr >
        <td>
            <?php if ($this->_tpl_vars['content_header'] != ""): ?>
		     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['content_header']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    <?php else: ?>
			    &nbsp;
			<?php endif; ?>
		</td>
      </tr>
	  <tr>
        <td>&nbsp; </td>
      </tr>
	  <tr>
        <td> &nbsp;
 			<?php if ($this->_tpl_vars['content_body'] != ""): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['content_body']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
	    </td>
      </tr>
    </table> 