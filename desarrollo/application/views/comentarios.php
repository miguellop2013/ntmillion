<?php
    foreach ($comentarios->result() as $row): 
      //  print_r($row);
?>
        <div>
			<div id="comentarios">
        		<div class="media comentarios mb-2">
        			<div class="foto-c mr-3">
        				<img class="d-flex" src="
        				<?php 
        				if($row->profilePic==""){ 
        				    echo base_url().'img/fotoUser/default.jpg';
        				}
        				else
        				{
        				    echo base_url().$row->profilePic;
        				}
        				?>" alt="foto">
        		    </div>
        		<div class="media-body">
        			<p class="mt-0"><span class="usuario-name"><?=$row->name.' '.$row->lastName?></span> <br><?=$row->description?></p>
        		</div>
    		</div>
		</div>
<?php
    endforeach

?>