<?php /* Smarty version 2.6.7, created on 2005-11-08 15:01:08
         compiled from default/member.order.list.tpl */ ?>
                  <br>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td> <b><br>
      </b> 
      <table width="50%" border="0" cellspacing="1" cellpadding="2" class="border1" align="center">
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Account</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <b>
            <?php echo $this->_tpl_vars['member_info'][1]; ?>

            </b></td>
        </tr>
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Level</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <b>
            <?php echo $this->_tpl_vars['member_info'][4]; ?>

            </b></td>
        </tr>
        <tr> 
          <td height="20" width="30%" bgcolor="#E1ECFB"><b>Balance</b></td>
          <td height="20" width="70%" bgcolor="#F2F8FD"> <font color="#000000">$ 
         <?php echo $this->_tpl_vars['member_info'][6]; ?>

            </font></td>
        </tr>
      </table>
      <b><br>
      <br>
      My order history</b><br>
      <hr size="1">
      <br>
      <form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post" style="margin:0px">
        <table width="95%" border="0" product_idcellspacing="0" cellpadding="0" align="center" bgcolor="#E1ECFB" class="border1">
          <tr>
            <td>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr> 
                  <td> Time: 
                    <select name="startYear">
                      <option>Year</option>
		        <?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['yr']['show'] = true;
$this->_sections['yr']['max'] = $this->_sections['yr']['loop'];
$this->_sections['yr']['step'] = 1;
$this->_sections['yr']['start'] = $this->_sections['yr']['step'] > 0 ? 0 : $this->_sections['yr']['loop']-1;
if ($this->_sections['yr']['show']) {
    $this->_sections['yr']['total'] = $this->_sections['yr']['loop'];
    if ($this->_sections['yr']['total'] == 0)
        $this->_sections['yr']['show'] = false;
} else
    $this->_sections['yr']['total'] = 0;
if ($this->_sections['yr']['show']):

            for ($this->_sections['yr']['index'] = $this->_sections['yr']['start'], $this->_sections['yr']['iteration'] = 1;
                 $this->_sections['yr']['iteration'] <= $this->_sections['yr']['total'];
                 $this->_sections['yr']['index'] += $this->_sections['yr']['step'], $this->_sections['yr']['iteration']++):
$this->_sections['yr']['rownum'] = $this->_sections['yr']['iteration'];
$this->_sections['yr']['index_prev'] = $this->_sections['yr']['index'] - $this->_sections['yr']['step'];
$this->_sections['yr']['index_next'] = $this->_sections['yr']['index'] + $this->_sections['yr']['step'];
$this->_sections['yr']['first']      = ($this->_sections['yr']['iteration'] == 1);
$this->_sections['yr']['last']       = ($this->_sections['yr']['iteration'] == $this->_sections['yr']['total']);
?>
					<?php if ($this->_tpl_vars['startYear'] == $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]): ?>
						<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 >  <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

					<?php endif; ?>
				<?php endfor; endif; ?>
                    </select>
                    <select name="startMonth">
                      <option>Mon</option>
                <?php unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
$this->_sections['month']['start'] = $this->_sections['month']['step'] > 0 ? 0 : $this->_sections['month']['loop']-1;
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = $this->_sections['month']['loop'];
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
?>
					<?php if ($this->_tpl_vars['startMonth'] == $this->_tpl_vars['imonth'][$this->_sections['month']['index']]): ?>
						<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
> <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php endif; ?>
			    <?php endfor; endif; ?>
                    </select>
                    <select name="startDay">
                      <option>Day</option>

			<?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
$this->_sections['day']['start'] = $this->_sections['day']['step'] > 0 ? 0 : $this->_sections['day']['loop']-1;
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = $this->_sections['day']['loop'];
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
				<?php if ($this->_tpl_vars['startDay'] == $this->_tpl_vars['iday'][$this->_sections['day']['index']]): ?>

					<option value= <?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
  selected><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php else: ?>
					<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
 ><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php endif; ?>
			<?php endfor; endif; ?>
                    </select>
                    to 
                    <select name="toYear">
                      <option>Year</option>

    		  <?php unset($this->_sections['yr']);
$this->_sections['yr']['name'] = 'yr';
$this->_sections['yr']['loop'] = is_array($_loop=$this->_tpl_vars['iyr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['yr']['show'] = true;
$this->_sections['yr']['max'] = $this->_sections['yr']['loop'];
$this->_sections['yr']['step'] = 1;
$this->_sections['yr']['start'] = $this->_sections['yr']['step'] > 0 ? 0 : $this->_sections['yr']['loop']-1;
if ($this->_sections['yr']['show']) {
    $this->_sections['yr']['total'] = $this->_sections['yr']['loop'];
    if ($this->_sections['yr']['total'] == 0)
        $this->_sections['yr']['show'] = false;
} else
    $this->_sections['yr']['total'] = 0;
if ($this->_sections['yr']['show']):

            for ($this->_sections['yr']['index'] = $this->_sections['yr']['start'], $this->_sections['yr']['iteration'] = 1;
                 $this->_sections['yr']['iteration'] <= $this->_sections['yr']['total'];
                 $this->_sections['yr']['index'] += $this->_sections['yr']['step'], $this->_sections['yr']['iteration']++):
$this->_sections['yr']['rownum'] = $this->_sections['yr']['iteration'];
$this->_sections['yr']['index_prev'] = $this->_sections['yr']['index'] - $this->_sections['yr']['step'];
$this->_sections['yr']['index_next'] = $this->_sections['yr']['index'] + $this->_sections['yr']['step'];
$this->_sections['yr']['first']      = ($this->_sections['yr']['iteration'] == 1);
$this->_sections['yr']['last']       = ($this->_sections['yr']['iteration'] == $this->_sections['yr']['total']);
?>
				<?php if ($this->_tpl_vars['toYear'] == $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]): ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 selected><?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php else: ?>
					<option value= <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>
 >  <?php echo $this->_tpl_vars['iyr'][$this->_sections['yr']['index']]; ?>

				<?php endif; ?>
			<?php endfor; endif; ?>
                    </select>
                    <select name="toMonth">
                      <option>Mon</option>
           		<?php unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['loop'] = is_array($_loop=$this->_tpl_vars['imonth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
$this->_sections['month']['start'] = $this->_sections['month']['step'] > 0 ? 0 : $this->_sections['month']['loop']-1;
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = $this->_sections['month']['loop'];
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
?>
					<?php if ($this->_tpl_vars['toMonth'] == $this->_tpl_vars['imonth'][$this->_sections['month']['index']]): ?>
						<option value=<?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
 selected><?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>
> <?php echo $this->_tpl_vars['imonth'][$this->_sections['month']['index']]; ?>

					<?php endif; ?>
				<?php endfor; endif; ?>
                    </select>
                    <select name="toDay">
                      <option>Day</option>

           <?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['loop'] = is_array($_loop=$this->_tpl_vars['iday']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
$this->_sections['day']['start'] = $this->_sections['day']['step'] > 0 ? 0 : $this->_sections['day']['loop']-1;
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = $this->_sections['day']['loop'];
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
				<?php if ($this->_tpl_vars['toDay'] == $this->_tpl_vars['iday'][$this->_sections['day']['index']]): ?>

					<option value= <?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
  selected><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php else: ?>
					<option value=<?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>
 ><?php echo $this->_tpl_vars['iday'][$this->_sections['day']['index']]; ?>

				<?php endif; ?>
			<?php endfor; endif; ?> 
                    </select>
                  </td>
                </tr>
              </table>
              <br>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr> 
                  <td width="10%">Product: </td>
                  <td width="18%"> 
                    <select name="product_id">
                      <option>All</option>

       		<?php unset($this->_sections['rs']);
$this->_sections['rs']['name'] = 'rs';
$this->_sections['rs']['loop'] = is_array($_loop=$this->_tpl_vars['rs2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rs']['show'] = true;
$this->_sections['rs']['max'] = $this->_sections['rs']['loop'];
$this->_sections['rs']['step'] = 1;
$this->_sections['rs']['start'] = $this->_sections['rs']['step'] > 0 ? 0 : $this->_sections['rs']['loop']-1;
if ($this->_sections['rs']['show']) {
    $this->_sections['rs']['total'] = $this->_sections['rs']['loop'];
    if ($this->_sections['rs']['total'] == 0)
        $this->_sections['rs']['show'] = false;
} else
    $this->_sections['rs']['total'] = 0;
if ($this->_sections['rs']['show']):

            for ($this->_sections['rs']['index'] = $this->_sections['rs']['start'], $this->_sections['rs']['iteration'] = 1;
                 $this->_sections['rs']['iteration'] <= $this->_sections['rs']['total'];
                 $this->_sections['rs']['index'] += $this->_sections['rs']['step'], $this->_sections['rs']['iteration']++):
$this->_sections['rs']['rownum'] = $this->_sections['rs']['iteration'];
$this->_sections['rs']['index_prev'] = $this->_sections['rs']['index'] - $this->_sections['rs']['step'];
$this->_sections['rs']['index_next'] = $this->_sections['rs']['index'] + $this->_sections['rs']['step'];
$this->_sections['rs']['first']      = ($this->_sections['rs']['iteration'] == 1);
$this->_sections['rs']['last']       = ($this->_sections['rs']['iteration'] == $this->_sections['rs']['total']);
?>
					<?php if ($this->_tpl_vars['rs2'][0] == $this->_tpl_vars['product_id']): ?>

						<option value= <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][0]; ?>
 selected> <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
</option>
					<?php else: ?>
						<option value= <?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][0]; ?>
 ><?php echo $this->_tpl_vars['rs2'][$this->_sections['rs']['index']][1]; ?>
 </option>
					<?php endif; ?>
			<?php endfor; endif; ?>

                    </select>
                  </td>
                  <td width="14%">Transation: </td>
                  <td width="18%"> 
                    <select name="transation">
                      
<?php if ($this->_tpl_vars['transation'] == "1,2"): ?>
                      <option value="1,2" selected>All</option>
                      <option value="1">Deposit</option>
                      <option value="2">Payment</option>
<?php elseif ($this->_tpl_vars['transation'] == '1'): ?>
                      <option value="1,2">All</option>
                      <option value="1" selected>Deposit</option>
                      <option value="2">Payment</option>
<?php else: ?>
                      <option value="1,2">All</option>
                      <option value="1">Deposit</option>
                      <option value="2" selected>Payment</option>
<?php endif; ?>
                    </select>
                  </td>
                  <td width="40%"> 
                    <input type="submit" name="Submit" value="Query">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </form>
      <form style="margin:0px">
        <table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
          <tr class="fieldName"> 
            <td width="18%" height="20"><b><font color="#FFFFFF">&nbsp;Transaction</font></b></td>
            <td width="26%" height="20"><b><font color="#FFFFFF">&nbsp;Time</font></b></td>
            <td width="14%" height="20"><b><font color="#FFFFFF">&nbsp;Amount</font></b></td>
            <td width="22%" height="20"><b><font color="#FFFFFF">&nbsp;Mode</font></b></td>
            <td width="20%" height="20"><b><font color="#FFFFFF">&nbsp;Note</font></b></td>
        </tr>
  <?php if ($this->_tpl_vars['rs']): ?>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <td height="20" class="p8"<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>

		<?php if ($this->_tpl_vars['rs'][$this->_sections['i']['index']][0][3] == 1): ?>
			deposit
		<?php else: ?>
			payment
		<?php endif; ?>

          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][2]; ?>

          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][5]; ?>

          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
    			<?php echo $this->_tpl_vars['rs1'][$this->_sections['i']['index']]; ?>

          </td>
          <td height="20" class="p8" <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][1]; ?>
>
            <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']][0][8]; ?>

          </td>
        </tr>
	<?php endfor; endif; ?>
        <tr> 
          <td height="20" bgcolor="#CCCCCC" colspan="5">
	 <?php echo $this->_tpl_vars['pagebutton']; ?>


          </td>
        </tr>
<?php endif; ?>
      </table>
      <input type="hidden" name="transation" value="<?php echo $this->_tpl_vars['transation']; ?>
">
      </form>
      
    </td>
  </tr>
</table>
                  <p>&nbsp;</p>