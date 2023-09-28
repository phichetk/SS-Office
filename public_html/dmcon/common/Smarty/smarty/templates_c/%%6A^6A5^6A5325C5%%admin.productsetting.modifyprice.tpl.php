<?php /* Smarty version 2.6.7, created on 2005-11-25 00:09:35
         compiled from default/admin.productsetting.modifyprice.tpl */ ?>
<script language="javascript">
function changePrice(theForm, theType, theLevel)
<?php echo '{'; ?>

    
	if(theType == 1)
	<?php echo '{'; ?>

		for(i = 2; i < 11; i ++)
		<?php echo '{'; ?>

			var myVar = "reg_prices" + i + theLevel;
			var myFirstVar = "reg_prices1" + theLevel;
			theForm[myVar].value = theForm[myFirstVar].value * i;
		 <?php echo '}'; ?>

	 <?php echo '}'; ?>
 else <?php echo '{'; ?>

		for(i = 2; i < 11; i ++)
		<?php echo '{'; ?>

			var myVar = "rew_prices" + i + theLevel;
			var myFirstVar = "rew_prices1" + theLevel;
			theForm[myVar].value = theForm[myFirstVar].value * i;
		 <?php echo '}'; ?>

	 <?php echo '}'; ?>

 <?php echo '}'; ?>

</script>
<br>
<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">
  <table width="80%"  cellspacing="0" cellpadding="0" align="center" class="border1">
    
<?php if ($this->_tpl_vars['message'] != ""): ?>


    <tr> 
      <td width="25%" height="25" colspan="2"> 
        <div style="border:solid 1px #FF0000;padding:5px"> <font class="p8"><b> 
        <?php echo $this->_tpl_vars['message']; ?>

          </b></font> </div>
      </td>
    </tr>
    <tr> 
      <td width="25%" height="25" colspan="2">&nbsp;</td>
    </tr>
	<?php endif; ?>
    <tr> 
      <td width="25%" height="25" colspan="2"> 
        <table width="100%" border="0" cellspacing="1" cellpadding="2" class="border1">
          <tr> 
            <td height="20" width="30%" bgcolor="#E1ECFB"><b>Product ID</b></td>
            <td height="20" width="70%" bgcolor="#F2F8FD"> 
               <?php echo $this->_tpl_vars['product_id']; ?>

            </td>
          </tr>
          <tr> 
            <td height="20" width="30%" bgcolor="#E1ECFB"><b>Product Name</b></td>
            <td height="20" width="70%" bgcolor="#F2F8FD"> 
              <?php echo $this->_tpl_vars['product_name']; ?>

            </td>
          </tr>
          <tr> 
            <td height="20" width="30%" bgcolor="#E1ECFB"><b>Product Type</b></td>
            <td height="20" width="70%" bgcolor="#F2F8FD"> 
           
<?php if ($this->_tpl_vars['product_type'] == 1): ?>

    Domain
<?php elseif ($this->_tpl_vars['product_type'] == 2): ?>
	Hosting
<?php elseif ($this->_tpl_vars['product_type'] == 3): ?>
	Postoffice
<?php endif; ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b>Registration prices</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="border1">
          <tr align="center" bgcolor="#EFEFEF"> 
            <td width="16%" height="20">Year/Level</td>
            <td height="20" width="16%">0</td>
            <td height="20" width="16%">1</td>
            <td height="20" width="16%">2</td>
            <td height="20" width="16%">3</td>
            <td height="20" width="16%">4</td>
          </tr>
		  <?php echo $this->_tpl_vars['reg_prices']; ?>

		       </table>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b>Deletion fee</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" class=border1 cellspacing="1" cellpadding="0" >
          <tr align="center" bgcolor="#EFEFEF"> 
            <td width="16%" height="20">Level</td>
            <td height="20" width="16%">0</td>
            <td height="20" width="16%">1</td>
            <td height="20" width="16%">2</td>
            <td height="20" width="16%">3</td>
            <td height="20" width="16%">4</td>
          </tr>
	<tr>
	<?php echo $this->_tpl_vars['del_prices']; ?>

     </tr>

        </table>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="2" height="25"><b>Renew prices</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="border1">
          <tr align="center" bgcolor="#EFEFEF"> 
            <td width="16%" height="20">Year/Level</td>
            <td height="20" width="16%">0</td>
            <td height="20" width="16%">1</td>
            <td height="20" width="16%">2</td>
            <td height="20" width="16%">3</td>
            <td height="20" width="16%">4</td>
          </tr>
		  <?php echo $this->_tpl_vars['new_prices']; ?>

        </table>
      </td>
    </tr>
     <tr> 
      <td colspan="2" height="25">&nbsp; </td>
    </tr>

    <tr> 
      <td colspan="2" height="25"><b>Domain Sync fee</b></td>
    </tr>
    <tr> 
      <td colspan="2" height="25"> 
        <table width="100%" class=border1 cellspacing="1" cellpadding="0">
            <tr align="center" bgcolor="#EFEFEF"> 
                <td  height="20">Level</td>
                <td height="20" >0</td>
                <td height="20" >1</td>
                <td height="20" >2</td>
                <td height="20" >3</td>
                <td height="20" >4</td>
            </tr>
	        <tr>
                <?php echo $this->_tpl_vars['sync_prices']; ?>

            </tr>
        </table>
      </td>
    </tr>
    
    <tr> 
      <td width="30%" height="25">&nbsp;</td>
      <td width="70%" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td  height="25" align="center" colspan=2> 
        <input type="submit" name="Submit" value="Modify price">
        <input type="hidden" name="action" value="modifyPrice">
        <input type="hidden" name="product_id" value="<?php echo $this->_tpl_vars['product_id']; ?>
">
        <input type="hidden" name="currentPage" value="<?php echo $this->_tpl_vars['currentPage']; ?>
">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>