<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td > 
      <p><font color="#FF0000"><b><i><font size="3">Sign up successfully</font></i></b><br>
        <br>
        </font>Your username is: {$member_name}<br>
        Your password is: {$member_password1}<br>
        <br>
        Please write these down in a safe place and please do not give your password to anyone.<br>
        <br>
        {if $signup_return == "newmember"}
            Please click <a href="{$RELA_DIR}/domain/domainsearch.php?action=selectMember">here</a>
             to continue
        {else}
            To continue using the system, please <a href="{$member_login}">login</a> 
        now.
        {/if} </p>
      </td>
  </tr>
</table>
                  <p>&nbsp;</p>
