<div>
    <form name="contact_form" method="post" action="<?php echo base_url()?>contact/updateContact">
        <fieldset>
            <legend><h2>Please update contact Information</h2></legend>
            <p>&nbsp;</p>

            <table cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td>&nbsp;</td>
                    <td><input name="contact_id" type="hidden" value="<?php echo $row->contact_id;?>" size="50" /></td>
                </tr>
                <tr>
                    <td>Contact Name</td>
                    <td><input name="contact_name" type="text" value="<?php echo $row->contact_name;?>" size="50" required="1" err="Please Enter a valid Name" regexp="JSVAL_RX_ALPHA" /><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>Organization</td>
                    <td><input name="contact_org" type="text" value="<?php echo $row->contact_org;?>" size="50" required="1" err="Please Enter a valid Name" regexp="JSVAL_RX_ALPHA" /><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input name="contact_email" type="text" value="<?php echo $row->contact_email;?>" size="50" required="1"err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL" /><span class="required">*</span></td>
                </tr>
                <tr>
                    <td>Facebook ID</td>
                    <td><input name="contact_fid" type="text" value="<?php echo $row->contact_fid;?>" size="50" /></td>
                </tr>
                <tr>
                    <td>Phone No.</td>
                    <td><input name="contact_phone" type="text" value="<?php echo $row->contact_phone;?>" size="50" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Update"/></td>
                </tr>
            </table>

        </fieldset>
    </form>
</div>