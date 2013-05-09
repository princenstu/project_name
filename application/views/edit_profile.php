
<form name="edit_user" action="<?php echo base_url()?>profile/editProfile" method="post" enctype="multipart/form-data" onSubmit=" return validateStandard(this)" >
<table align="center">
    <tr>
        <td colspan="2"><h2 align="center" class="style12">Edit User Profile</h2>
		<tr>
        <td colspan="2"><h2 align="center" class="style13">
            <?php
                if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                if(isset($_SESSION['exception']))
                {
                    echo $_SESSION['exception'];
                    unset($_SESSION['exception']);
                }

                

            ?>
        </td></h2>
    </tr></td>
    </tr>
    <tr>
        <td colspan="2">
            <img src="<?php echo base_url().$result->profile_picture; ?>"
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td><span class="style11">First Name</span></td>
        <td><input name="first_name" type="text" value="<?php echo $result->first_name;?>"size="30" size="30" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"></td>
    </tr>
	
	 <tr>
        <td><span class="style11">Last Name</span></td>
        <td><input name="last_name" type="text" value="<?php echo $result->last_name;?>" size="30" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"></td>
    </tr>
    <tr>
        <td><span class="style11">E-mail Address</span></td>
        <td><input name="email_address" type="text" value="<?php echo $result->email_address;?>" size="30" required="1" realname="Email" regexp="JSVAL_RX_EMAIL"></td>
    </tr>
  
	<tr>
        <td><span class="style11">Address</span></td>
        <td><input name="address" type="text" value="<?php echo $result->address;?>"  size="30" required="1" ></td>
    </tr>
	<tr>
        <td><span class="style11">Mobile Number</span></td>
        <td><input name="mob_number" type="text" value="<?php echo $result->mob_number;?>" size="30" required="1" ></td>
    </tr>
	<tr>
        <td><span class="style11">City</span></td>
        <td><input name="city" type="text" value="<?php echo $result->city;?>"  size="30" required="1" ></td>
    </tr>
    <tr>
    <tr>
        <td><span class="style11">Country</span></td>
        <td>
          <select name="country" id="country" exclude=" " required="1" realname="Country" value="<?php echo $result->country?>">
						<option value=" " selected=selected>Select country</option>
							<script language="JavaScript" type="text/javascript">
			                   	printCountryOptions();
			                  </script>
				    </select> </td>
    </tr>
    <tr>
        <td><span class="style11">Zip Code</span></td>
        <td><input name="zip_code" type="text" value="<?php echo $result->zip_code;?>"  size="30" required="1" ></td>
    </tr>
     <tr>
        <td><span class="style11">Image Upload</span></td>
        <td><input name="profile_picture" type="file" /></td>
    </tr>
     <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
     <tr>
         <td colspan="2" align="center"><input type="submit" value="Edit" /></td>
    </tr>
</table>
</form>
<script type="text/javascript" language="javascript">
document.forms['edit_user'].elements['country'].value = '<?php echo $result->country?>';
</script>