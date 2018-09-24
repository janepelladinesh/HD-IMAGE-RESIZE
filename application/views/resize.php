<!DOCTYPE html>
<html>
    <head>
        <title>
            RESIZE
        </title>
    </head>
    <body>
        
        
              <h1 style="text-align:center;color:red">Resize the image</h1>;     
        <?php
        
            echo "-----------------------------------------------------------------------------------------------------<img src=' ".base_url()."resize/images.jpg'>---------------------------------------------------------------------------------------";
            echo "<br> </br>";
            echo form_open('img/resize');
            echo form_label('Width');
            echo form_input('width');
            
            
            echo form_label('Height');
            echo form_input('height');
            
 
            
            
            echo form_submit('submit','Resize');
                        echo "<br> </br>";
                        
             echo "TRY ONLY HD IMAGES<br></br>";
            echo "<br> </br>";
            echo "BELOW ONE IS THE RESIZED IMAGE<br></br>";
            echo "YOU CAN CHANGE THE IMAGE IN RESIZE FOLDER";
            echo "<br> </br>";            echo "<br> </br>";
            echo "<br> </br>";
            echo "<br> </br>";
            echo "<br> </br>";
            echo "<br> </br>";

             
            echo form_close();
             echo "<img src=' ".base_url()."resize/n_images.jpg'>";
       
        ?>
        
    </body>
</html>