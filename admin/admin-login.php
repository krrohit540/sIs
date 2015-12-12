<?php

	# Start the session:
	session_start();
	
	if(!isset($_SESSION['username'])) {
		header('Location: login.php');	
	}

?>

<?php include ('config/setup.php');	?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	
	<head>
		
		<title>Admin | sIs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>
		
		<link rel="stylesheet" href="config/files/admin-login.css" type="text/css" media="screen"/>
	</head>
	
	<style>
        *{
            margin:0;
            padding:0;
        }
    	
    	body { 
		  	background: url("../images/register.jpg") no-repeat center center fixed; 
		  	-webkit-background-size: cover;
		  	-moz-background-size: cover;
		  	-o-background-size: cover;
		  	background-size: cover;
		}
		
        #content{
            background-color: #fff;
            width: 1000px;
            padding: 30px;
            margin: 0 auto;
            -moz-box-shadow: 0px 0px 16px #aaa;
            opacity: 0.8;
        }
        
        #content h2{
            font-family: "Trebuchet MS",sans-serif;
            font-size: 50px;
            font-style: normal;
            background-color: #f0f0f0;
            margin: 40px 0px 30px -40px;
            padding: 0px 40px;
            clear: both;
            float: left;
            width: 100%;
            color: black;
            text-shadow: 5px 5px 1px #fff;
        }

    </style>
	
	<script>
		
		$(document).ready(function(){
    		$(".btn-success").click(function(e){
        		$.ajax({
            		url: "edit-status.php",
           	 		type: "POST",
            		data: {uid: e.target.id} //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
        		});
    		});
		});
		
	</script>
	
	<body>
		
		<?php include ('template/navigation.php'); ?> 		<!-- Navigation Bar -->	
		
		<div id="content">
            <h2>Admin Panel</h2><hr>
            
            <table class="table3">
                
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col" abbr="Starter">NAME</th>
                        <th scope="col" abbr="Medium">EMAIL</th>
                        <th scope="col" abbr="Business">REGISTRATION NO.</th>
                        <th scope="col" abbr="Medium">VIEW</th>
                        <th scope="col" abbr="Deluxe">STATUS</th>
                        <th scope="col" abbr="Business">EDIT</th>
                        
                    </tr>
                </thead>
               
                <tbody>
                	
                	<?php $no = 1 ;?>
                	<?php while ($student = mysqli_fetch_array($rows)) { ?>
						
	                    <tr>
	                        <th scope="row"><?php echo $no++ ;?></th>
	                        <td><?php echo $student['name'] ;?></td>
	                        <td><?php echo $student['email'] ;?></td>
	                        <td><?php echo $student['registration'] ;?></td>
	                        <td><a style="color: white; text-decoration: none" href="view-details.php?id=<?php echo $student['id']; ?>" target="_blank" >Details</a> </td>
	                        
	                        
	                        <?php  
	                        	if($student['status'] == 1)
									$flag = 1;
								else
									$flag = 0;
	                        ?>
	                        
	                        <td>
	                        	
	                        	<?php if($flag == 1) { ?>
	                        		<i class="fa fa-check fa-lg"></i>
	                        	<?php } else { ?>
	                        		<i class="fa fa-times fa-lg"></i>
	                        	<?php }?>
	                       
	                        </td>
	                        
	                        <td>
	                        	<input type="button" class="btn-success" id="<?php echo $student['id']; ?>" value="<?php if($flag == 1) echo ' Decline '; else echo ' Approve '; ?>" onClick="window.location.reload()"/>	
	                        </td>
	                    </tr>
	                    
                    <?php } ?>
	                    
	            </tbody>
	            
            </table>
        </div>
		
		<?php include ('../template/footer.php'); ?>		<!-- Page Footer -->
		
	</body>

</html>