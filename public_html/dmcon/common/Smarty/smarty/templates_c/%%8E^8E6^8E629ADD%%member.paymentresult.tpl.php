<?php /* Smarty version 2.6.7, created on 2005-11-11 18:44:51
         compiled from simpleGreen/member.paymentresult.tpl */ ?>
 <br>
 
    <table align=center cellpadding=2 cellspacing=1>
        <tr><td><b>
            <?php if ($this->_tpl_vars['paid_status'] == 'paid'): ?> 
                Payment completed successfully !</b><br> Click Continue to finish processing. 
                </td> </tr><tr><td>&nbsp;</td> </tr>
        
                <form action=<?php echo $this->_tpl_vars['php_self']; ?>
 method=POST>
                    <tr><td align="center">
                        <input type=submit name=submit value="Continue">
                        <input type="hidden" name="action" value="initDomainRegistration">
                    </td></tr>

                </form>
            <?php else: ?>
                Payment failed! </b><br><br> Status: <?php echo $this->_tpl_vars['paid_status']; ?>

                </td> </tr><tr><td>&nbsp;</td> </tr>
        
                <form action=<?php echo $this->_tpl_vars['php_self']; ?>
 method=POST>
                    <tr><td align="center">
                        <input type=submit name=submit value="Continue">
                    </td></tr>

                </form>
            <?php endif; ?>
       

    </table>    