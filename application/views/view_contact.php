
<script language="javascript" type="text/javascript">
function checkDelete()
{
	var chk = confirm("Are you sure to delete this contact?");
	if(chk)
		return true;
	else
		return false;
}
</script>
<form action="<?php echo base_url()?>contact/searchContact" method="post" >
    <table>
        <tr>
            <td><input type="text" name="search_text"></td>
            <td><input type="submit" name="btn" value="Search"></td>
        </tr>
    </table>
</form>
<p>&nbsp;</p>
<h2>
            <?php
                if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
            ?>
    </h2>
<p>&nbsp;</p>
<table border="1" cellpadding="10" align="center">
       <tr>
           <td>Name</td>
           <td>Email</td>
           <td>Mobile</td>
           <td>Action</td>

       </tr>
       <?php
       foreach($result as $aresult)
           {
            
           ?>
            <tr>
           <td><?php echo $aresult->contact_name;?></td>
           <td><?php echo $aresult->contact_email;?></td>
           <td><?php echo $aresult->contact_phone;?></td>
           <td><a href="<?php echo base_url()?>contact/editContact/<?php echo $aresult->contact_id;?>">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
               <a href="<?php echo base_url()?>contact/deleteContact/<?php echo $aresult->contact_id;?>" onclick="return checkDelete();">Delete</a>
           </td>

       </tr>

       <?php
           }
       ?>
   </table>
