<html>
    <head>
    <body>
    <form name="messageSend" id="messageSend" method="post" action="<?=base_url()?>user/sendMessage.html">
        <table align="center" border="0" cellpadding="2" cellspacing="2" border="0" width="70%">
            <tr>
                <td>
                    E-mail:
                </td>
                <td>
                    <input type="text" name="user_email" size="32" readonly="readonly" value="<?=$userData->user_email?>">
                </td>
            </tr>
            <tr>
                <td>
                    Subject:
                </td>
                <td>
                    <input type="text" name="email_subject" size="32" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Message:
                </td>
                <td>
                    <textarea name="message" cols="40" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btnSubmit" value="Send Message"></td>
            </tr>

        </table>
        </form>
    </body>

    </head>

</html>
