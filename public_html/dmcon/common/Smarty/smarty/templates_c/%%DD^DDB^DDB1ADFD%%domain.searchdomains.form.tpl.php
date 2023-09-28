<?php /* Smarty version 2.6.7, created on 2005-11-13 05:40:22
         compiled from default/domain.searchdomains.form.tpl */ ?>
<br>

<form action="<?php echo $this->_tpl_vars['php_self']; ?>
" method="post">
<table class="searchForm"  align="center" width="100%" cellpadding=10 cellspacing=10>
    <tr>
        <td valign="top">
            <div><h1 style="color: #F0A82A;">1</h1>Enter up to 10 desired domain names:</div>
            <div><br>www.<br>&nbsp; &nbsp;<textarea name="domains_list" class="search"></textarea></div>
            <div>
                <br>Enter each domain on one line,<br> or seperated by commas.<br>
                i.e. my-domain,testdomain
            </div>
        </td>
        <td>
            <div>
                <h1 style="color: #F0A82A;">2</h1>Choose the domain extension(s):
            </div>
            <div><br>
                <?php unset($this->_sections['tld']);
$this->_sections['tld']['name'] = 'tld';
$this->_sections['tld']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tld']['show'] = true;
$this->_sections['tld']['max'] = $this->_sections['tld']['loop'];
$this->_sections['tld']['step'] = 1;
$this->_sections['tld']['start'] = $this->_sections['tld']['step'] > 0 ? 0 : $this->_sections['tld']['loop']-1;
if ($this->_sections['tld']['show']) {
    $this->_sections['tld']['total'] = $this->_sections['tld']['loop'];
    if ($this->_sections['tld']['total'] == 0)
        $this->_sections['tld']['show'] = false;
} else
    $this->_sections['tld']['total'] = 0;
if ($this->_sections['tld']['show']):

            for ($this->_sections['tld']['index'] = $this->_sections['tld']['start'], $this->_sections['tld']['iteration'] = 1;
                 $this->_sections['tld']['iteration'] <= $this->_sections['tld']['total'];
                 $this->_sections['tld']['index'] += $this->_sections['tld']['step'], $this->_sections['tld']['iteration']++):
$this->_sections['tld']['rownum'] = $this->_sections['tld']['iteration'];
$this->_sections['tld']['index_prev'] = $this->_sections['tld']['index'] - $this->_sections['tld']['step'];
$this->_sections['tld']['index_next'] = $this->_sections['tld']['index'] + $this->_sections['tld']['step'];
$this->_sections['tld']['first']      = ($this->_sections['tld']['iteration'] == 1);
$this->_sections['tld']['last']       = ($this->_sections['tld']['iteration'] == $this->_sections['tld']['total']);
?>
                    <input class="checkBox" type=checkbox name=gtlds[] value="<?php echo $this->_tpl_vars['rs'][$this->_sections['tld']['index']][0]; ?>
"> <?php echo $this->_tpl_vars['rs'][$this->_sections['tld']['index']][1]; ?>
 <br><br>
                <?php endfor; endif; ?>
            </div>
        </td>
        <td valign="top">
            <div><h1 style="color: #F0A82A;">3</h1></div>
            <div style="width: 50px;" align="center"><br>
                <input type=submit name="Search" value="Search">
                <input type=hidden name="action" value="checkDomains">
            </div>
        </td>        
    </tr>
</table>
</form>