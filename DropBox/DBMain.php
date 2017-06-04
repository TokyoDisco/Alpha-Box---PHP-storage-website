<html>
	<head>
		<title> Drop Box </title>
	    <link rel="stylesheet" type="text/css" href="uploadify.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="/jquery.uploadify-3.1.min.js"></script>
 
                            $(function() {
                         $('#file_upload').uploadify({
                                'buttonImage' : '/images/Upload.png',
                                'swf'      : 'uploadify.swf',
                                'uploader' : 'uploadify.php'
                             // Put your options here
                             });
                            });
       
    
    </head>
  
 
    
			<body>
	<form method="post" enctype="multipart/form-data">	  
					
					<table border="2">
					<tr> 
					<td id="td1">
                        
				    	<input type="file" name="file_upload" id="file_upload" src="images/Upload.png" alt="UpButton" title="Upload" width="100" height="100" /></td>
					
                        <!-- </tr> -->
					
				<!-- 	<tr> -->
						<td id="td2"><img src="images/Make.png" alt="NewFolder" title="Make new folder" width="100" height="100" /></td>
					<!-- </tr> -->
					
					<!-- <tr> -->
						<td id="tdpng"><img src="images/Rename.png" alt="RenameButton" title="Rename Files" width="100" height="100" /></td>
					<!-- </tr> -->
						<td id="td4"><img src="images/Delete.png" alt="Download" title="Download Files" width="100" height="100"/></td>
						<td id="td5"><img src="images/Del.png" alt="Delete" title="Delete Files" width="100" height="100" /></td>
					<!-- <tr> -->
						<td id="td3"><a href="logonA.html"><img src="images/logoff.png" alt="LogoffButton" title="Log off" width="100" height="100" /></a></td>
					<!-- </tr> -->
					<td width="100%"> <img src="logo.png"  width="100%" height="100"/></td>
					<a href="DBMain.html"> </a>
				</tr>
				
					
					</table>
					
					<iframe width="100%" height="100%" src="DBFrame.html" name="iframe_a"></iframe>
					
					
<!-- 						<p> lolololoolololo </p> 
 -->					</frame>
        </form>	
                </body>
</html>					
				