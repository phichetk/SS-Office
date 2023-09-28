<?php /* Smarty version 2.6.7, created on 2005-11-16 12:14:41
         compiled from simpleGreen/admin.productupdate.form.tpl */ ?>

<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">
<table width="100%"  cellspacing="1" cellpadding="2" align="center" class=border1 style=" border-width: 1px; padding: 1px">
    <tr class="fieldName"> 
	    <td align="center"> <font color="#FFFFFF"> Queries</font></td>
	</tr>
	<tr><td> &nbsp; </td></tr>
    <tr>   
        <td bgcolor="#F2F8FD" align="center"><input type="text" name="sql_products" style="width: 500px;"> </td>
    </tr>
	<tr> 
        <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_products']; ?>
</td>
	</tr>
	<tr><td> &nbsp; </td></tr>
	
	<tr>   
        <td bgcolor="#F2F8FD" align="center"> <input type="text" name="sql_ordermode1" style="width: 500px;"> </td>
    </tr>
	<tr> 
	    <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_ordermode1']; ?>
</td>
	</tr>
	<tr><td> &nbsp; </td></tr>
	
	<tr>   
        <td bgcolor="#F2F8FD" align="center"> <input type="text" name="sql_ordermode2" style="width: 500px;"> </td>
    </tr>
	<tr>
	    <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_ordermode2']; ?>
</td>
	</tr>
	<tr><td> &nbsp; </td></tr>
	
	<tr>   
        <td bgcolor="#F2F8FD" align="center"> <input type="text" name="sql_ordermode3" style="width: 500px;"> </td>
    </tr>
	<tr>
	    <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_ordermode3']; ?>
</td>
	</tr>
	<tr><td> &nbsp; </td></tr>
	
	<tr>   
        <td bgcolor="#F2F8FD" align="center"> <input type="text" name="sql_ordermode4" style="width: 500px;"> </td>
    </tr>
	<tr>
	    <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_ordermode4']; ?>
</td>
	</tr>
	<tr><td> &nbsp; </td></tr>
	
	<tr>   
        <td bgcolor="#F2F8FD" align="center"> <input type="text" name="sql_ordermode5" style="width: 500px;"> </td>
    </tr>
	<tr>
	    <td align="center"><font style="font-size: 11px;"><?php echo $this->_tpl_vars['sql_ordermode5']; ?>
</td>
	</tr>
   </table>	
   <table>
    <tr><td> &nbsp; </td></tr>
	<tr> 
      <td align="center" style="width: 550px;"> 
        <input type="submit" name="Submit" value="Add">&nbsp;
		<input type="reset" name="Reset" value="Reset">
      </td>
    </tr>
   </table>
  <input type="hidden" name="action" value="upgradeDomain">
</form>
