<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>School Manager</title>   	
   	<meta charset="utf-8" />
   	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<meta name="description" content="School Manager">
   	<meta name="keywords" content="School Manager">   	
   	<script src="jquery/jquery-1.6.2.min.js"></script>
  	<script src="jquery/jquery.lightbox-0.5.min.js"></script>
	</head>
	<body>
		<div>			
			<header>
            <?php		
					if (file_exists($path_modulo6))
		       		include ($path_modulo6);
					else
		       		die ('error al cargar el modulo');
      			?>
      	</header>		
         <nav>
                <?php		
                if (file_exists($path_modulo2))
		       		include ($path_modulo2);
                else
		       		die ('error al cargar el modulosssss');
      			?>
         </nav>
         <section>
         	<article>
         		<?php
	   	 			if (file_exists($path_modulo7))
		   	    		include ($path_modulo7);
		   			else
		       			die ('error al cargar el modulo');
      			?>
      		</article>	
			</section>		
    		
        	<footer>
        		<?php
       			if (file_exists($path_modulo5))
	       			include ($path_modulo5);
	 				else
	       			die ('error al cargar el modulo');
      		?>
			</footer>		
		</div>
	</body>

</html>
