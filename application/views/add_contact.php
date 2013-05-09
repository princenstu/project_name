<div class="form_set">
    <form name="contact_form" method="post" action="<?php echo base_url()?>contact/save_contact">
        <fieldset>
            <h2 class="message">
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            </h2>
            <legend><h2>Please add your contact Information</h2></legend>
            <p>&nbsp;</p>
            <table cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td>Contact Name</td>
                    <td><input name="contact_name" type="text" value="" size="50" required="1" err="Please Enter a valid Name" regexp="JSVAL_RX_ALPHA"/><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>Organization</td>
                    <td><input name="contact_org" type="text" value="" size="50" required="1" err="Please Enter a valid Name" regexp="JSVAL_RX_ALPHA"/><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input name="contact_email" type="text" value="" size="50" required="1"err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL"/><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>Facebook ID</td>
                    <td><input name="contact_fid" type="text" value="" size="50" /></td>
                </tr>
                <tr>
                    <td>Phone No.</td>
                    <td><input name="contact_phone" type="text" value="" size="50" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Save"/></td>
                </tr>
            </table>

        </fieldset>
    </form>
</div>