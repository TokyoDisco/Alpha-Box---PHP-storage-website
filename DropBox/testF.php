<?php
session_start();
$user = $_SESSION['user'];



?>

<html>
	    <head>
		<title> Drop Box </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        </head>
        
       
        
        
        
        
        
        
        
        
                <body background="images/background.jpg" >
	            <form method="post" action="sender.php" >	  
				
					<table border="2">
					<tr> 
					<td id="td1">
                        
				    <img src="images/Upload.png" alt="Uploads" title="Upload files" width="100" height="100" onclick="document.getElementById(1).src='upload page.html'">	</td>
					
                        <!-- </tr> -->
					
				<!-- 	<tr> -->
						<td id="td2"><img src="images/Make.png" alt="NewFolder" title="Make new folder" width="100" height="100"  /> <input type="text" name="newname" id="foldername" placeholder="New folder name" width="10px"> </td>
					<!-- </tr> -->
					
					<!-- <tr> -->
						<td id="tdpng"><img src="images/Rename.png" alt="RenameButton" title="Rename Files" width="100" height="100" onclick="location.href='renamepage.php'" /></td>
					<!-- </tr> -->
						<td id="td4"><img src="images/Delete.png" alt="Download" title="Download Files" width="100" height="100" onclick="document.getElementById(1).src='Frame.php?dir=<?php echo $user; ?>'"/></td>
						<td id="td5"><img src="images/Del.png" alt="Delete" title="Delete Files" width="100" height="100" onclick="document.getElementById(1).src='TestE.php?dir=<?php echo $user; ?>'" /></td>
					<!-- <tr> -->
						<td id="td3"><img src="images/logoff.png" alt="LogoffButton" title="Log off" width="100" height="100" onclick="location.href='logoff.php'"/></td>
					<!-- </tr> -->
					<td width="100%"> <img src="logo.png"  alt="Main Page" width="100%" height="100" onclick="document.getElementById(1).src='Frame.php?dir=<?php echo $user; ?>' "/></td>
					<a href="DBMain.html"> </a>
				</tr>
				
					
					</table>
					
					<iframe width="100%" height="100%" src="Frame.php?dir=<?php echo $user; ?>" name="iframe_a" id="1" ></iframe>
					
					
<!-- 						<p> lolololoolololo </p> 
 -->					</frame>
        </form>	
                </body>
</html>					
				