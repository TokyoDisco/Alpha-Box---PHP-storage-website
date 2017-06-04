<?php
session_start();
function walk_dir($dir){
   
    $relativedir = $_GET['dir']  .$dir;  
      echo '<h3><center>current directory:       '.$relativedir. ' </center></h3> ';
      echo '<h3><center> Download Mode </center></h3> ';
       echo '<h3><center>  User : '  .$_SESSION['user']. '  </center></h3> ';
     
      $maindir = dirname($relativedir);
      if($maindir !== '.')
      {
      echo '<h3><center> <a href="Frame.php?dir=' .$maindir. ' " title= " back to "> Go back to :  '.$maindir.' </center></h3> ';
      }
      echo '<h4> Content  : </h4>' ;

    if($dh = opendir($relativedir)){
    while(false !== ($file = readdir($dh))){
        $info = new SplFileInfo($file) ;
      
        if(($file !== '.') && ($file !== '..'))
        {
            
            if(!is_dir($relativedir.$file)  && ((($info->getExtension()) == png) || (($info->getExtension()) == txt) || (($info->getExtension()) == gif) || (($info->getExtension()) == jpeg) || (($info->getExtension()) == jpg)   || (($info->getExtension()) == doc) || (($info->getExtension()) == docx) || (($info->getExtension()) == pdf)))
            {   
                
                echo '<ul><img src= "fileIcon.png" alt="test" width=20px height=20px /> <a href="'.$relativedir.$dir.$file.'" title="'.$file.'">'.$file.'</a>  </a>  <a href="download.php?file=' .$relativedir.$file.'">download me!</a></ul>  </ul>';
               
            }
            else{
                    if(($file !== '.') && ($file !== '..') && is_dir($relativedir.$file)) {
                    
              
                    echo '<ul><img src= "folderIcon.png" alt="test" width=20px height=20px /><a href="Frame.php?dir='.$relativedir.$file.'" title="'.$file.'"  >'.$file.'</a></ul>'."\n";
                   
                    
                    }
                
            }
        }
    }
    }
}
 
walk_dir('/');











?>