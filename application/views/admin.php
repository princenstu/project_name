
<blockquote>
    <div>
        <?php
            if(isset($_SESSION['exception']))
                {
                    echo $_SESSION['exception'];
                    unset($_SESSION['exception']);
                }
             if(isset($_SESSION['message']))
                 {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                 }

        ?>

    </div>
    <form  method="post" action="<?php echo base_url()?>login/loginCheck"><br />
        <div>
            <p align="center"><strong>User Login </strong></p>

            <table width="259" border="2" align="center" bordercolor="#0033FF">

                <tr>
                    <td width="102"><div align="center">E-mail:</div></td>
                    <td width="108"><p align="center"><input type="text" name="email_address" id="s" size="15" value="" />
                        </p>
                    </td>
                </tr>

                <tr>
                    <td><div align="center">Password:</div></td>
                    <td><p align="center"><input type="password" name="password" id="s" size="15" value="" />
                        </p>
                    </td>
                </tr>

            </table>
            <div align="center"><input type="submit" name="Submit" value="Login" />
                </p>
            </div>
        </div>
    </form>
</blockquote>
