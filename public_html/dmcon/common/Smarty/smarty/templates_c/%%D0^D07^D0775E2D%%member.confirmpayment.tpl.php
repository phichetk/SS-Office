<?php /* Smarty version 2.6.7, created on 2005-11-11 18:43:17
         compiled from simpleGreen/member.confirmpayment.tpl */ ?>
<br>
<span style="display:<?php echo $this->_tpl_vars['updateuserfund']; ?>
">
<table width="60%" class=border1 align=center cellpadding=2 cellspacing=1>
    <tr><th colspan=3 align="center" class=cellBg>Domain Pricing</th></tr>
    <tr>
        <td class=cellBg align="center">Domain Name(s)</td>
        <td class=cellBg align="center">Terms<br>(years)</td>
        <td class=cellBg align="center">Your Price<br>($us)</td>
    </tr>
     <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['domains']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <tr>
            <td align="right"> <?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][0]; ?>
</td>
            <td align="center"> <?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][1]; ?>
</td>
            <td align="center">$ <?php echo $this->_tpl_vars['domains'][$this->_sections['i']['index']][2]; ?>
 </td>   
        </tr>
     <?php endfor; endif; ?>
      
        <tr><td>&nbsp;</td>
            <td align="center"> Total:      </td>
            <td  align="center"> $ <?php echo $this->_tpl_vars['total']; ?>
 </td>
    
        </tr>
</table>
</span>

<br><br>
<center><b align="center" >Account details</b></center><br>
 
 <!-- Show Paypal info-->
<span style="display:<?php echo $this->_tpl_vars['pp']; ?>
">
<table width="60%" align=center cellpadding=2 cellspacing=1>
        <tr>
            <td align="center" class=cellBg>Paypal</td>
       
            <td align="center" class=cellBg><?php echo $this->_tpl_vars['pp_email']; ?>
&nbsp;</td></span>
        </tr>
        <tr><td>&nbsp; </td></tr>
        <tr> 
            <td colspan=2 align="center">
                <form name="paypalForm"  action="https://<?php echo $this->_tpl_vars['pphost']; ?>
/cgi-bin/webscr" method="post">
                <input type="image" src="https://<?php echo $this->_tpl_vars['pphost']; ?>
/en_US/i/btn/x-click-but23.gif" name="submit">
                <input type="hidden" name="add" value="1">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="<?php echo $this->_tpl_vars['pp_gw_email']; ?>
">
                <input type="hidden" name="item_name" value="<?php echo $this->_tpl_vars['item_name']; ?>
">
                <input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['total']; ?>
">
                <input type="hidden" name="no_note" value="1">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="notify_url" value="<?php echo $this->_tpl_vars['notify_url']; ?>
">
                <input type="hidden" name="return" value="<?php echo $this->_tpl_vars['return']; ?>
">
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="cancel_return" value="<?php echo $this->_tpl_vars['cancel_return']; ?>
">
                <input type="hidden" name="bn" value="PP-ShopCartBF">
             <!--   <input type="hidden" name="selected_user" value="<?php echo $this->_tpl_vars['selected_user']; ?>
">  -->
                </form>
            </td>
        </tr>
        
 </table>   
 </span>
 
 <!-- Show Cc info -->
 <span style="display:<?php echo $this->_tpl_vars['cc']; ?>
">
    <table width="60%"  class=border1 align=center cellpadding=2 cellspacing=1>
    
        <tr> <td class=cellBg align="center" colspan=3> Credit Card</td>     </tr>
        
        <tr> <td>Name</td> <td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_user']; ?>
</td> </tr>
        
        <tr> <td>Card</td> <td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_name']; ?>
</td> </tr>
        
        <tr> <td>Number</td> <td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_num']; ?>
</td> </tr>
        <tr>
            <td>Address</td> <td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_addr']; ?>
, <?php echo $this->_tpl_vars['cc_city']; ?>
, <?php echo $this->_tpl_vars['cc_state']; ?>
</td>
        </tr>
        <tr>
            <td>Zip/Postcode</td> <td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_zip']; ?>
</td>
        </tr>
        <tr>
            <td>Telephone</td><td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_tel']; ?>
</td>
        </tr>
        <tr>
            <td>Fax</td><td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_fax']; ?>
</td>
        </tr>
        <tr>
            <td>Email</td><td>&nbsp;</td> <td align="right"><?php echo $this->_tpl_vars['cc_email']; ?>
</td>
        </tr>    
        <tr><td align="center" colspan=3> 
        <form action="https://select.worldpay.com/wcc/purchase" method=POST>
            <input type=hidden name="instId" value="<?php echo $this->_tpl_vars['instId']; ?>
">     <!--  -->
            <input type=hidden name="cartId" value="ecompf">    <!-- Template_wOrLdPaY -->
            <input type=hidden name="amount" value="<?php echo $this->_tpl_vars['total']; ?>
"> 
            <input type=hidden name="currency" value="USD"> 
            <input type=hidden name="desc" value="<?php echo $this->_tpl_vars['item_name']; ?>
"> 
            <input type=hidden name="testMode" value="<?php echo $this->_tpl_vars['testmode']; ?>
"> 
            <input name="hideCurrancy" type="hidden">
            <input name="fixContact" type="hidden">
            <input type=hidden name="name" value="<?php echo $this->_tpl_vars['cc_user']; ?>
"> 
            <input type=hidden name="address" value="<?php echo $this->_tpl_vars['cc_addr']; ?>
, <?php echo $this->_tpl_vars['cc_city']; ?>
, <?php echo $this->_tpl_vars['cc_state']; ?>
"> 
            <input type=hidden name="postcode" value="<?php echo $this->_tpl_vars['cc_zip']; ?>
"> 
            <input type=hidden name="country" value="<?php echo $this->_tpl_vars['cc_country']; ?>
"> 
            <input type=hidden name="tel" value="<?php echo $this->_tpl_vars['cc_tel']; ?>
"> 
            <input type=hidden name="fax" value="<?php echo $this->_tpl_vars['cc_fax']; ?>
"> 
            <input type=hidden name="email" value="<?php echo $this->_tpl_vars['cc_email']; ?>
"> 
             
                      <?php if ($this->_tpl_vars['updateuserfund'] == 'none'): ?>
            <input type=hidden name="MC_updateuserfund" value="yes"> 
           <?php endif; ?>     
            <input type=hidden name="MC_selected_user" value="<?php echo $this->_tpl_vars['selected_user']; ?>
">
            
            <!-- <INPUT TYPE=HIDDEN NAME=MC_callback VALUE="http://140.99.35.174/~develop/template3/member/test.php"> -->
            <input type=submit value="Get Now"> 
        </form>
        </td></tr>
    </table>
</span>
<br>
<!--
    <span style="display:'<?php echo $this->_tpl_vars['pp']; ?>
'">
    <table width="60%"  class=border1 align=center cellpadding=2 cellspacing=1>
    <form name="paypalForm" target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/x-click-but23.gif" name="submit">
        <input type="hidden" name="add" value="1">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="<?php echo $this->_tpl_vars['pp_gw_email']; ?>
">
        <input type="hidden" name="item_name" value="<?php echo $this->_tpl_vars['item_name']; ?>
">
        <input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['total']; ?>
">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="notify_url" value="http://140.99.35.174/~develop/template3/test.php">
        <input type="hidden" name="return" value="http://140.99.35.174/~develop/template3/domain/domainsearch.php?action=paymentResult">
        <input type="hidden" name="rm" value="2">
        <input type="hidden" name="cancel_return" value="http://140.99.35.174/~develop/template3/domain/domainsearch.php">
    </form>
    </table>
    </span> 
-->