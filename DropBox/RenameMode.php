<?php


function walk_dir($dir){
   
         $relativedir = $_GET['dir']  .$dir;  
         $newname = $_GET['name'] ;
      echo '<h3><center> '.$relativedir. ' </center></h3> ';
      echo '<h3><center> Rename Mode </center></h3> ';
      echo '<h3><center> Select file to Rename </center></h3> ';
       echo '<h3><center> You Enter : '.$newname.' as new name </center></h3> ';
      echo '<h3><center> <a href="renamepage.php" title= " back to "> Return to main Page </center></h3> ';
      $maindir = dirname($relativedir);
      if($maindir !== '.')
      {
      echo '<h3><center> <a href="RenameMode.php?dir=' .$maindir. ' " title= " back to "> '.$maindir.' </center></h3> ';
      }
    if($dh = opendir($relativedir)){
    while(false !== ($file = readdir($dh))){
        $info = new SplFileInfo($file) ;
      
        if(($file !== '.') && ($file !== '..'))
        {
            if(!is_dir($relativedir.$file)  && ((($info->getExtension()) == png) || (($info->getExtension()) == txt)))
            {
                $extInfo = $info->getExtension();
                echo '<ul><img src= "fileIcon.png" alt="test" width=20px height=20px /><a href="'.$relativedir.$dir.$file.'" title="'.$file.'">'.$file.'</a>  </a>  <a href="Rename.php?file=' .$relativedir.$file.'&dir='.$relativedir. '&name=' .$newname.' &ext='.$extInfo.'  ">rename me!</a></ul>  </ul>';
               
            }
            else{
                    if(($file !== '.') && ($file !== '..') && is_dir($relativedir.$file)) {
                    
              
                    echo '<ul><img src= "folderIcon.png" alt="test" width=20px height=20px /><a href="RenameMode.php?dir='.$relativedir.$file.'" title="'.$file.'"  >'.$file.'</a></ul>'."\n";
                   
                    
                    }
                
            }
        }
    }
    }
}
 
walk_dir('/');











?>