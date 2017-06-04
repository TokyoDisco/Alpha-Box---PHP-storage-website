<?php
session_start();

function walk_dir($dir){
   
    $relativedir = $_GET['dir']  .$dir;  
      echo '<h3><center> '.$relativedir. '  </center></h3> ';
       echo '<h3><center> Delete Mode </center></h3> ';
       echo '<h3><center>  '  .$_SESSION['user']. '  </center></h3> ';
      $maindir = dirname($relativedir);
      if($maindir !== '.')
      {
      echo '<h3><center> <a href="TestE.php?dir=' .$maindir. ' " title= " back to "> '.$maindir.' </center></h3> ';
      }
    if($dh = opendir($relativedir)){
    while(false !== ($file = readdir($dh))){
        $info = new SplFileInfo($file) ;
      
        if(($file !== '.') && ($file !== '..'))
        {
            if(!is_dir($relativedir.$file)  && ((($info->getExtension()) == png) || (($info->getExtension()) == txt)))
            {
                echo '<ul><img src= "fileIcon.png" alt="test" width=20px height=20px /><a href="'.$relativedir.$dir.$file.'" title="'.$file.'">'.$file.'</a>  </a>  <a href="delete.php?file=' .$relativedir.$file.'">delete me! : < </a></ul>  </ul>';
               
            }
            else{
                    if(($file !== '.') && ($file !== '..') && is_dir($relativedir.$file)) {
                    
              
                    echo '<ul><img src= "folderIcon.png" alt="test" width=20px height=20px /><a href="TestE.php?dir='.$relativedir.$file.'" title="'.$file.'"  >'.$file.'</a> <a href="deleteDir.php?file=' .$relativedir.$file.'">  delete me! : < </a></ul> </ul>'."\n";
                   
                    
                    }
                
            }
        }
    }
    }
}
 
walk_dir('/');











?>