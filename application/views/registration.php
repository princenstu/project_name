
<form name="" action="<?php echo base_url()?>registration/saveData" method="post" onSubmit=" return validateStandard(this)" >
<table align="center">
    <tr>
        <td colspan="2"><h2 align="center" class="style12">User Registration</h2>
		<tr>
        <td colspan="2"><h2 align="center" class="style13">
            
        </td></h2>
    </tr>
</td>
<tr>
<td colspan="2" style="background-color:#CCCCCC; color:#FF0000">
<? include_once('application/views/includes/message.php');?>
</td>
</tr>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td><span class="style11">First Name</span></td>
        <td><input name="first_name" type="text" size="30" value="<?php echo $first_name;?>" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"><span class="required">*</span></td>
    </tr>
	
	 <tr>
        <td><span class="style11">Last Name</span></td>
        <td><input name="last_name" type="text" size="30" value="<?php echo $last_name;?>" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"><span class="required">*</span></td>
    </tr>
    <tr>
        <td><span class="style11">E-mail Address</span></td>
        <td><input name="email_address" type="text" size="30" value="<?php echo $email_address;?>" required="1" realname="Email" regexp="JSVAL_RX_EMAIL"><span class="required">*</span></td>
    </tr>

    <tr>
        <td><span class="style11">Password</span></td
        >
        <td><input name="password" type="password" size="30" value="" required="1"><span class="required">*</span></td>
    </tr>
    <tr>
        <td><span class="style11">Confirm password</span></td>
        <td><input name="confirm_password" type="password" value="" size="30"></td>
    </tr>
	<tr>
        <td><span class="style11">Address</span></td>
        <td><input name="address" type="text" size="30" value="<?php echo $address;?>" required="1" ></td>
    </tr>
	<tr>
        <td><span class="style11">Mobile Number</span></td>
        <td><input name="mob_number" type="text" size="30" value="<?php echo $mob_number;?>" required="1" ><span class="required">*</span></td>
    </tr>
	<tr>
        <td><span class="style11">City</span></td>
        <td><input name="city" type="text" size="30" value="<?php echo $city;?>" required="1" ></td>
    </tr>
    <tr>
    <tr>
        <td><span class="style11">Country</span></td>
        <td>
            <select name="country" id="country" value="<?php echo $country;?>">
                <option value="">Select...</option>
               <script language="JavaScript" type="text/javascript">
                    printCountryOptions();
               </script>
            </select>        </td>
    </tr>
    <tr>
        <td><span class="style11">Zip Code</span></td>
        <td><input name="zip_code" type="text" value="<?php echo $zip_code;?>" size="30" required="1" ></td>
    </tr>
     <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
     <tr>
         <td colspan="2" align="center"><input type="submit" value="Submit" /></td>
    </tr>
</table>
</form>