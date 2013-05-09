<table align="center">
    
    <tr>
        <td colspan="2"><?php
                if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
              



            ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <img src="<?php echo base_url().$result->profile_picture; ?>"
        </td>
    </tr>
    <tr>
        <td><span class="style11">Name</span></td>
        <td>
            <?php
                echo $result->first_name.' '.$result->last_name;
            ?>
        </td>
        <td align="right"><a href="<?php echo base_url()?>profile/viewEditProfile">Edit</a></td>
    </tr>


    <tr>
        <td><span class="style11">E-mail Address</span></td>
        <td> <?php
                echo $result->email_address;
            ?></td>
    </tr>

   
	<tr>
        <td><span class="style11">Address</span></td>
        <td> <?php
                echo $result->address;
            ?></td>
    </tr>
	<tr>
        <td><span class="style11">Mobile Number</span></td>
        <td> <?php
                echo $result->mob_number;
            ?></td>
    </tr>
	<tr>
        <td><span class="style11">City</span></td>
        <td>
             <?php
                echo $result->city;
            ?>
        </td>
    </tr>
    <tr>
    <tr>
        <td><span class="style11">Country</span></td>
        <td>
            <?php
                echo $result->country;
            ?>     </td>
    </tr>
    <tr>
        <td><span class="style11">Zip Code</span></td>
        <td> <?php
                echo $result->zip_code;
            ?></td>
    </tr>
     
</table>