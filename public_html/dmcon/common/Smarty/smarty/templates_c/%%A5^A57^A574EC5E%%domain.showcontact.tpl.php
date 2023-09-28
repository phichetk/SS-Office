<?php /* Smarty version 2.6.7, created on 2005-09-11 00:10:29
         compiled from default/domain.showcontact.tpl */ ?>
 <script language="javascript" type="text/javascript">
    function regToAdmin()<?php echo '{'; ?>

            document.add_cust.administrator.value=document.add_cust.registrant.value;
            document.add_cust.a_org.value=document.add_cust.r_org.value;
            document.add_cust.a_address1.value=document.add_cust.r_address1.value;
            document.add_cust.a_address2.value=document.add_cust.r_address2.value;
            document.add_cust.a_address3.value=document.add_cust.r_address3.value;
            document.add_cust.a_city.value=document.add_cust.r_city.value;
            document.add_cust.a_province.value=document.add_cust.r_province.value;
            document.add_cust.a_country.value=document.add_cust.r_country.options[document.add_cust.r_country.selectedIndex].value;
            document.add_cust.a_postalcode.value=document.add_cust.r_postalcode.value;
            document.add_cust.a_telephone.value=document.add_cust.r_telephone.value;
            document.add_cust.a_fax.value=document.add_cust.r_fax.value;
            document.add_cust.a_email.value=document.add_cust.r_email.value;
    <?php echo '}'; ?>

    
    function regToTech() <?php echo '{'; ?>

        document.add_cust.technical.value=document.add_cust.registrant.value;
        document.add_cust.t_org.value=document.add_cust.r_org.value;
        document.add_cust.t_address1.value=document.add_cust.r_address1.value;
        document.add_cust.t_address2.value=document.add_cust.r_address2.value;
        document.add_cust.t_address3.value=document.add_cust.r_address3.value;
        document.add_cust.t_city.value=document.add_cust.r_city.value;
        document.add_cust.t_province.value=document.add_cust.r_province.value;
        document.add_cust.t_country.value=document.add_cust.r_country.options[document.add_cust.r_country.selectedIndex].value;
        document.add_cust.t_postalcode.value=document.add_cust.r_postalcode.value;
        document.add_cust.t_telephone.value=document.add_cust.r_telephone.value;
        document.add_cust.t_fax.value=document.add_cust.r_fax.value;
        document.add_cust.t_email.value=document.add_cust.r_email.value;
    <?php echo '}'; ?>

 
    function regToBilling() <?php echo '{'; ?>

        document.add_cust.billing.value=document.add_cust.registrant.value;
        document.add_cust.b_org.value=document.add_cust.r_org.value;
        document.add_cust.b_address1.value=document.add_cust.r_address1.value;
        document.add_cust.b_address2.value=document.add_cust.r_address2.value;
        document.add_cust.b_address3.value=document.add_cust.r_address3.value;
        document.add_cust.b_city.value=document.add_cust.r_city.value;
        document.add_cust.b_province.value=document.add_cust.r_province.value;
        document.add_cust.b_country.value=document.add_cust.r_country.options[document.add_cust.r_country.selectedIndex].value;
        document.add_cust.b_postalcode.value=document.add_cust.r_postalcode.value;
        document.add_cust.b_telephone.value=document.add_cust.r_telephone.value;
        document.add_cust.b_fax.value=document.add_cust.r_fax.value;
        document.add_cust.b_email.value=document.add_cust.r_email.value;
    <?php echo '}'; ?>

    
 </script>

 <br><table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td >
	<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px" name="add_cust">
	<input type="hidden" name="action" value="modifyContact">
	<input type="hidden" name="domain_id" value="<?php echo $this->_tpl_vars['domain_id']; ?>
">
	<input type="hidden" name="registrant" value="<?php echo $this->_tpl_vars['registrant']; ?>
">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="25%">Password for domain:</td>
            <td width="25%"> 
              <input type="password" name="password1" value="<?php echo $this->_tpl_vars['password1']; ?>
">
            </td>
            <td width="20%">Password again:</td>
            <td width="30%"> 
              <input type="password" name="password2" value="<?php echo $this->_tpl_vars['password2']; ?>
">
            </td>
          </tr>
        </table>
	    <br>
		
		        <br>
        <b>Registrant Information</b><br>
        <hr size="1" noshade>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="39%">Registrant full name</td>
            <td width="61%"> <?php echo $this->_tpl_vars['registrant']; ?>

<!--				<input type="text" name="registrant" value="<?php echo $this->_tpl_vars['registrant']; ?>
" readonly>
				<font color="#990000">*</font> -->
            </td>
          </tr>
          <tr> 
            <td width="39%">Organization name</td>
            <td width="61%"> 
              <input type="text" name="r_org" value="<?php echo $this->_tpl_vars['r_org']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Address 1</td>
            <td width="61%"> 
              <input type="text" name="r_address1" value="<?php echo $this->_tpl_vars['r_address1']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Address 2</td>
            <td width="61%"> 
              <input type="text" name="r_address2" value="<?php echo $this->_tpl_vars['r_address2']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">Address 3</td>
            <td width="61%"> 
              <input type="text" name="r_address3" value="<?php echo $this->_tpl_vars['r_address3']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">City</td>
            <td width="61%"> 
              <input type="text" name="r_city" value="<?php echo $this->_tpl_vars['r_city']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Province/State</td>
            <td width="61%"> 
              <input type="text" name="r_province" value="<?php echo $this->_tpl_vars['r_province']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Country/Region</td>
            <td width="61%">
              <select name="r_country">
				<?php if (count($_from = (array)$this->_tpl_vars['countries'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?> 
				<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['r_country']): ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
 selected><?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
> <?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
              </select><font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Postal code</td>
            <td width="61%"> 
              <input type="text" name="r_postalcode" value="<?php echo $this->_tpl_vars['r_postalcode']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Telephone(eg:+1.4156656387)</td>
            <td width="61%"> 
              <input type="text" name="r_telephone" value="<?php echo $this->_tpl_vars['r_telephone']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Fax(eg:+1.4156657168)</td>
            <td width="61%"> 
              <input type="text" name="r_fax" value="<?php echo $this->_tpl_vars['r_fax']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr>
            <td width="39%">E-mail</td>
            <td width="61%">
              <input type="text" name="r_email" value="<?php echo $this->_tpl_vars['r_email']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
        </table>
        <br><br>
		
		<b>Administrator Information</b><br>
        <center>
            <input type=button name="copy_r2a" value="Copy from Registrant to Administrator"
                 onClick="regToAdmin();">
        </center>   
        <hr size="1" noshade>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="39%">Full name of administrator</td>
            <td width="61%"> 
              <input type="text" name="administrator" value="<?php echo $this->_tpl_vars['administrator']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Organization name</td>
            <td width="61%"> 
              <input type="text" name="a_org" value="<?php echo $this->_tpl_vars['a_org']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Address 1</td>
            <td width="61%"> 
              <input type="text" name="a_address1" value="<?php echo $this->_tpl_vars['a_address1']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Address 2</td>
            <td width="61%"> 
              <input type="text" name="a_address2" value="<?php echo $this->_tpl_vars['a_address2']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">Address 3</td>
            <td width="61%"> 
              <input type="text" name="a_address3" value="<?php echo $this->_tpl_vars['a_address3']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">City</td>
            <td width="61%"> 
              <input type="text" name="a_city" value="<?php echo $this->_tpl_vars['a_city']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Province/State</td>
            <td width="61%"> 
              <input type="text" name="a_province" value="<?php echo $this->_tpl_vars['a_province']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Country/Region</td>
            <td width="61%"> 
              <select name="a_country">
				<?php if (count($_from = (array)$this->_tpl_vars['countries'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?> 
				<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['a_country']): ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
 selected><?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
> <?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
              </select><font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Postal code</td>
            <td width="61%"> 
              <input type="text" name="a_postalcode" value="<?php echo $this->_tpl_vars['a_postalcode']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Telephone(eg:+1.4156656387)</td>
            <td width="61%"> 
              <input type="text" name="a_telephone" value="<?php echo $this->_tpl_vars['a_telephone']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Fax(eg:+1.4156657168)</td>
            <td width="61%"> 
              <input type="text" name="a_fax" value="<?php echo $this->_tpl_vars['a_fax']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">E-mail</td>
            <td width="61%"> 
              <input type="text" name="a_email" value="<?php echo $this->_tpl_vars['a_email']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
        </table>
		
		<b><br><br>
        Technical Contact Information</b><br>
        <center>
            <input type=button name="copy_r2a" value="Copy from Registrant to Technical Contact"
                 onClick="regToTech();">
        </center> 
        <hr size="1" noshade>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="39%">Full name of technical contact</td>
            <td width="61%"> 
              <input type="text" name="technical" value="<?php echo $this->_tpl_vars['technical']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Organization name</td>
            <td width="61%"> 
              <input type="text" name="t_org" value="<?php echo $this->_tpl_vars['t_org']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Address 1</td>
            <td width="61%"> 
              <input type="text" name="t_address1" value="<?php echo $this->_tpl_vars['t_address1']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Address 2</td>
            <td width="61%"> 
              <input type="text" name="t_address2" value="<?php echo $this->_tpl_vars['t_address2']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">Address 3</td>
            <td width="61%"> 
              <input type="text" name="t_address3" value="<?php echo $this->_tpl_vars['t_address3']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">City</td>
            <td width="61%"> 
              <input type="text" name="t_city" value="<?php echo $this->_tpl_vars['t_city']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Province/State</td>
            <td width="61%"> 
              <input type="text" name="t_province" value="<?php echo $this->_tpl_vars['t_province']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Country/Region</td>
            <td width="61%"> 
              <select name="t_country">
				<?php if (count($_from = (array)$this->_tpl_vars['countries'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?> 
				<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['t_country']): ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
 selected><?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['key']; ?>
> <?php echo $this->_tpl_vars['val']; ?>
</option>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
              </select><font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Postal code</td>
            <td width="61%"> 
              <input type="text" name="t_postalcode" value="<?php echo $this->_tpl_vars['t_postalcode']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Telephone(eg:+1.4156656387)</td>
            <td width="61%"> 
              <input type="text" name="t_telephone" value="<?php echo $this->_tpl_vars['t_telephone']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Fax(eg:+1.4156657168)</td>
            <td width="61%"> 
              <input type="text" name="t_fax" value="<?php echo $this->_tpl_vars['t_fax']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">E-mail</td>
            <td width="61%"> 
              <input type="text" name="t_email" value="<?php echo $this->_tpl_vars['t_email']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
        </table>
        <br>
		
        <br>
        <b>Billing Contact Information</b><br>
        <center>
            <input type=button name="copy_r2a" value="Copy from Registrant to Billing Contact"
                 onClick="regToBilling();">
        </center> 
        <hr size="1" noshade>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="39%">Full name of billing contact</td>
            <td width="61%">  
				<input type="text" name="billing" value="<?php echo $this->_tpl_vars['billing']; ?>
">
				<font color="#990000">*</font> 
                
            </td>
          </tr>
          <tr> 
            <td width="39%">Organization name</td>
            <td width="61%"> 
			  <input type="text" name="b_org" value="<?php echo $this->_tpl_vars['b_org']; ?>
">
              <font color="#990000">*</font> </td>
          </tr>
          <tr> 
            <td width="39%">Address 1</td>
            <td width="61%"> 
              <input type="text" name="b_address1" value="<?php echo $this->_tpl_vars['b_address1']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Address 2</td>
            <td width="61%"> 
              <input type="text" name="b_address2" value="<?php echo $this->_tpl_vars['b_address2']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">Address 3</td>
            <td width="61%"> 
              <input type="text" name="b_address3" value="<?php echo $this->_tpl_vars['b_address3']; ?>
" size="30">
            </td>
          </tr>
          <tr> 
            <td width="39%">City</td>
            <td width="61%"> 
              <input type="text" name="b_city" value="<?php echo $this->_tpl_vars['b_city']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Province/State</td>
            <td width="61%"> 
              <input type="text" name="b_province" value=" <?php echo $this->_tpl_vars['b_province']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Country/Region</td>
            <td width="61%"> 
              <select name="b_country">

		    <?php if (count($_from = (array)$this->_tpl_vars['countries'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?> 
		    <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['b_country']): ?>
		        <option value= <?php echo $this->_tpl_vars['key']; ?>
 selected><?php echo $this->_tpl_vars['val']; ?>
</option>
			<?php else: ?>
				<option value= <?php echo $this->_tpl_vars['key']; ?>
> <?php echo $this->_tpl_vars['val']; ?>
</option>
			<?php endif; ?>
		    <?php endforeach; endif; unset($_from); ?>

              </select><font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Postal code</td>
            <td width="61%"> 
              <input type="text" name="b_postalcode" value="<?php echo $this->_tpl_vars['b_postalcode']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Telephone(eg:+1.4156656387)</td>
            <td width="61%"> 
              <input type="text" name="b_telephone" value="<?php echo $this->_tpl_vars['b_telephone']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">Fax(eg:+1.4156657168)</td>
            <td width="61%"> 
              <input type="text" name="b_fax" value="<?php echo $this->_tpl_vars['b_fax']; ?>
">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">E-mail</td>
            <td width="61%"> 
              <input type="text" name="b_email" value="<?php echo $this->_tpl_vars['b_email']; ?>
" size="30">
              <font color="#990000">*</font></td>
          </tr>
          <tr> 
            <td width="39%">&nbsp;</td>
            <td width="61%">&nbsp;</td>
          </tr>
          <tr>
            <td width="39%">&nbsp;</td>
            <td width="61%">
              <input type="submit" name="Submit" value="Modify domain contact">
            </td>
          </tr>
        </table>
        <br>
      </form>
      
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>