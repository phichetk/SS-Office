<?php /* Smarty version 2.6.7, created on 2005-03-10 19:45:30
         compiled from form.tpl.php */ ?>
<HTML>
 <HEAD>
  <TITLE>#tryout.val_form</TITLE>
  <META name="author"      content="Maarten Wierda, norecess.com">
  <META name="keywords"    content="">
  <META name="description" content="">
  <?php echo '
  <STYLE type="text/css"><!--
	
	BODY, TABLE, TD
	{
		font-family:	Courier New, monospace;
		font-size:		10pt;
		color:			#222222;
	}
	
	INPUT.fld
	{	
		font-family:	Courier New, monospace;
		font-size:		10pt;
		color:			#222222;
		border:			1px solid #000000;
	}
	
	INPUT.fld_small
	{	
		font-family:	Courier New, monospace;
		font-size:		10pt;
		color:			#222222;
		border:			1px solid #000000;
		width:			45px;
	}	
	
	.not_filled_in
	{
		color:	#ff0000;
	}
	
  --></STYLE>
  '; ?>
 
 </HEAD>
 
 <BODY bgcolor="#ffffff" marginwidth="20" marginheight="20" leftmargin="20" topmargin="20">
 
<FORM name="theForm" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
">
 <INPUT type="hidden" name="is_sent" value="true">
 
<TABLE border="0" cellspacing="2" cellpadding="2">
 <TR valign="middle">
  <TD>username</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD><INPUT class="fld" type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
"></TD>
  <TD>*</TD>
 </TR>
 <TR valign="middle">
  <TD>zipcode</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD><INPUT class="fld" type="text" name="zipcode" value="<?php echo $this->_tpl_vars['zipcode']; ?>
"></TD>
  <TD>*</TD>
 </TR>
 <TR valign="middle">
  <TD>e-mail</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD><INPUT  class="fld"type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
"></TD>
  <TD>*</TD>
 </TR>  
 <TR valign="middle">
  <TD>website</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD><INPUT class="fld" type="text" name="website" value="<?php echo $this->_tpl_vars['website']; ?>
"></TD>
  <TD>*</TD>
 </TR>
 <TR valign="middle">
  <TD>birthdate</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD><INPUT class="fld" type="text" name="birthdate" value="<?php echo $this->_tpl_vars['birthdate']; ?>
"></TD>
  <TD>*</TD>
 </TR> 
 <TR valign="middle">
  <TD>date_01</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD>
  <INPUT class="fld_small" type="text" name="date_01_01" value="<?php echo $this->_tpl_vars['date_01_01']; ?>
">
  <INPUT class="fld_small" type="text" name="date_01_02" value="<?php echo $this->_tpl_vars['date_01_02']; ?>
">
  <INPUT class="fld_small" type="text" name="date_01_03" value="<?php echo $this->_tpl_vars['date_01_03']; ?>
">
  </TD>
  <TD>*</TD>
 </TR>
 <TR valign="middle">
  <TD>gendert</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD>
<INPUT type="radio" name="gender" value="m" <?php if ($this->_tpl_vars['gender'] == m): ?> checked <?php endif; ?>>&nbsp;m
<INPUT type="radio" name="gender" value="v" <?php if ($this->_tpl_vars['gender'] == v): ?> checked <?php endif; ?>>&nbsp;v
  </TD>
  <TD>*</TD>
 </TR>
 <TR valign="middle">
  <TD>books</TD>
  <TD>&nbsp;:&nbsp;</TD>
  <TD> 
<INPUT type="checkbox" name="books[]" value="boek_01" <?php if (count($_from = (array)$this->_tpl_vars['books'])):
    foreach ($_from as $this->_tpl_vars['the_book']):
 if ($this->_tpl_vars['the_book'] == 'boek_01'): ?> checked <?php endif;  endforeach; endif; unset($_from); ?>>&nbsp;0
<INPUT type="checkbox" name="books[]" value="boek_02" <?php if (count($_from = (array)$this->_tpl_vars['books'])):
    foreach ($_from as $this->_tpl_vars['the_book']):
 if ($this->_tpl_vars['the_book'] == 'boek_02'): ?> checked <?php endif;  endforeach; endif; unset($_from); ?>>&nbsp;1
  </TD>
  <TD>*</TD>
 </TR>  
 <TR valign="middle">
  <TD colspan="3" align="right"><INPUT type="submit" value="sent"></TD>
 </TR>  
</TABLE>
</FORM>
 
 </BODY>
</HTML>