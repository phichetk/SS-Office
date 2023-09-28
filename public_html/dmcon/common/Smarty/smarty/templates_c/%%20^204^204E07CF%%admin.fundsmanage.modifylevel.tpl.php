<?php /* Smarty version 2.6.7, created on 2005-09-08 03:55:16
         compiled from default/admin.fundsmanage.modifylevel.tpl */ ?>

<br>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td height="25">
      <br>
      <form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">

        <input type="hidden" name="action" value="modifyLevel">
        <input type="hidden" name="member_name" value="<?php echo $this->_tpl_vars['member_name']; ?>
">
        <b><font color="#FF0000">Success!</font></b> <b>$<?php echo $this->_tpl_vars['amount']; ?>
</b>
        has been 
<?php if ($this->_tpl_vars['type'] == 1): ?>
    added
<?php else: ?>
    deducted
<?php endif; ?>
         to the account of 
        <b><?php echo $this->_tpl_vars['member_name']; ?>
</b>.<br>
        The current member level is 
        <b><?php echo $this->_tpl_vars['member_level']; ?>
</b>, would you like to re-set its member level?<br>
        <br>
        <br>
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td height="30" bgcolor="#EFEFEF" align="center">Member level: 
              <select name="member_level">
                
<?php if ($this->_tpl_vars['member_level'] == 0): ?>

                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
 
<?php elseif ($this->_tpl_vars['member_level'] == 1): ?>

                <option value="0">0</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
<?php elseif ($this->_tpl_vars['member_level'] == 2): ?>

                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
                <option value="4">4</option>

<?php elseif ($this->_tpl_vars['member_level'] == 3): ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                
<?php elseif ($this->_tpl_vars['member_level'] == 4): ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
<?php else: ?>

                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
<?php endif; ?>
              </select>
            </td>
            <td height="30" bgcolor="#EFEFEF" align="center">
              <input type="submit" name="Submit" value="   OK   ">
              <input type="button" name="back" value="Cancel" onClick="document.location.href='<?php echo $this->_tpl_vars['RELA_DIR']; ?>
/admin/fundsManage.php'">
            </td>
          </tr>
        </table>
      </form>
      <br>
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>