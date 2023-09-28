<?php /* Smarty version 2.6.7, created on 2005-09-12 21:35:37
         compiled from default/admin.paymentgateway.form.tpl */ ?>
<br>
<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method=POST>
<table class="border1" align="center" cellpadding=2 cellspacing=2>
    
    <tr> <td class="cellTitleBg" colspan=2 align="center"> Paypal </td> </tr>
    <tr><td class="cellBg" colspan=2 >&nbsp</td></tr>
    <tr>
        <td class="cellBg"> Paypal email </td>
        <td class="cellBg2">
            <input type="text" name="pp_email" value="<?php echo $this->_tpl_vars['pp_email']; ?>
">
        </td>
    </tr>
    <tr>
        <td class="cellBg"> Enable Test mode </td>
        <td class="cellBg2">
            &nbsp;<input type="checkbox" name="pptestmode" value="enabled" <?php echo $this->_tpl_vars['pptestmode']; ?>
>
        </td>
    </tr>
    <tr><td class="cellBg" colspan=2 >&nbsp</td></tr>
    <tr>
        <td class="cellTitleBg" colspan=2 align="center">
             WorldPay
        </td>
    </tr>
    <tr><td class="cellBg" colspan=2 >&nbsp</td></tr>
    <tr>
        <td class="cellBg"> Installation Id </td>
        <td class="cellBg2">
            <input type="text" name="instId" value="<?php echo $this->_tpl_vars['instId']; ?>
">
        </td>
    </tr>
    <tr>
        <td class="cellBg"> Callback Password </td>
        <td class="cellBg2">
            <input type="text" name="callbackPW" value="<?php echo $this->_tpl_vars['callbackPW']; ?>
">
        </td>
    </tr>
    <tr>
        <td class="cellBg"> Enable Test mode </td>
        <td class="cellBg2">
            &nbsp;<input type="checkbox" name="wptestmode" value="enabled" <?php echo $this->_tpl_vars['wptestmode']; ?>
>
        </td>
    </tr>
    <tr><td class="cellBg" colspan=2 >&nbsp</td></tr>
    <tr>
        <td class="cellBg" colspan=2 align="center">
            <input type="submit" name="submit" value="Save Settings">
            <input type="hidden" name="action" value="updateSettings">
        </td>
    </tr>
</table>
</form>