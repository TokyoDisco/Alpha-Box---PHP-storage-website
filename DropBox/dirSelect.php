<?php

  
function walk_dir($dir){

        $relativedir = $_GET['dir']  .$dir;  
        $foldername = $_GET['foldername'] ;
      echo '<h3><center> Select place to make new folder </center></h3> ';
      echo '<h3><center> You type '.$foldername.' as name for new folder </center></h3> ';
     
       
      echo '<h3><center> <a href="makedir.php?foldername=' .$foldername. '&dir='.$relativedir.' " title= " Make "> Make new folder here  </center></h3> ' ;
        echo '<h3><center> <a href="testF.php" title= " back to "> Return to main Page </center></h3> ';
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
                echo '<ul><img src= "fileIcon.png" alt="test" width=20px height=20px /><a href="'.$relativedir.$dir.$file.'" title="'.$file.'">'.$file.'</a>  </a>  <a href="makedir.php?file=' .$foldername.'&dir='.$relativedir.'  ">rename me!</a></ul>  </ul>';
              
            }
            else{
                    if(($file !== '.') && ($file !== '..') && is_dir($relativedir.$file)) {
                    
              
                    echo '<ul><img src= "folderIcon.png" alt="test" width=20px height=20px /><a href="dirSelect.php?dir='.$relativedir.$file.'&foldername='.$foldername.' " title="'.$file.'"  >'.$file.'</a></ul>'."\n";
                   
                    
                    }
                
            }
        }
    }
    }
}
 
walk_dir('/');











?>