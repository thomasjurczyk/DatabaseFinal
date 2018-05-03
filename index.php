<!DOCTYPE html>

<html>
    <head>
        <title>Challenge 8</title>
        <meta charset="utf-8">
        <style>
            img
            {
                height:500px;
                width:800px;
            }
        </style>
    </head>
    <body>
        <?php
            if(is_dir("images/"))
            {
                $dir='images/';
                if($openFile=opendir($dir))
                {
                    $fileArray=scandir($dir);
                    for($i=0;$i<count($fileArray);$i++)
                    {
                        if(!is_dir($fileArray[$i]))
                        {
                            $path='images/'.$fileArray[$i];
                            $extension=pathinfo($path,PATHINFO_EXTENSION);
                            if(!is_dir("images/PNG"))
                            {
                                chmod('images', 0777);
                                mkdir('images/PNG',0777);
                                chmod('images/PNG',0777);
                            }
                            if(strcmp($extension,"jpg")==0||strcmp($extension,"jpeg")==0||strcmp($extension,"png")==0||strcmp($extension,"gif")==0)
                            {
                                echo '<div><img src="'.$path.'" alt="'.$fileArray[$i].'"></div>';
                            }
                            if(strcmp($extension,"png")==0)
                            {
                                $pngPath="images/PNG/".$fileArray[$i];
                                copy($path,$pngPath);
                            }
                        }
                    }
                    closedir($opendir);
                }
                else
                {
                    echo "<h1>Images directory could not be opened!</h1>";
                }
            }
            else
            {
                echo "<h1>Images directory not found!</h1>";
            }
        ?>
    </body>
</html>