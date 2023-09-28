<?php /* Smarty version 2.6.7, created on 2005-06-26 13:18:48
         compiled from default2/page.structure.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default2/page.structure.tpl', 6, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "Online NIC :: Default Theme") : smarty_modifier_default($_tmp, "Online NIC :: Default Theme")); ?>
</title>
	<link href="<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/themes/<?php echo $this->_tpl_vars['CURRENT_THEME']; ?>
/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bodystyle" align=center>
	<table width="779"  border="0" cellspacing="0" cellpadding="0" align=center >
		<tr>
			<td colspan="2" align=center><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['CURRENT_THEME'])."/banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </td>
		</tr>
		<tr>
			<td class="sideGrey" align=center width=30><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['CURRENT_THEME'])."/left.menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
			<td class="mainBody" align=center width=77% >
			    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['CURRENT_THEME'])."/content.body.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
			<td class="rightGreyBorder">
			
			</td>
		</tr>
		<tr>
			<td colspan="2" class="footerBg">
			     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['CURRENT_THEME'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
			</td>
		</tr>
	</table>
</body>
</html>