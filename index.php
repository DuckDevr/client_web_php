                <a>
				<div class="card-body border border-2 shadow-sm p-0 text-white card-body" style="border-radius: 10px;">
                    <div class="container-fluid mt-2  ">
                    	
               	<!-- api -->
					<?php
						$curl = curl_init();
						curl_setopt_array($curl, array(
 						 CURLOPT_URL => 'https://byshop.me/api/product?id=7', 
 						 CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => '',
  						CURLOPT_MAXREDIRS => 10,
  						CURLOPT_TIMEOUT => 0,
  						CURLOPT_FOLLOWLOCATION => true,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => 'GET',
						));
						$response = curl_exec($curl);
						curl_close($curl);
						$load_packz = json_decode($response);
					  ?>
						
						  <body>
							 <style type="text/css">
								body
								{
								font-family:"Sarabun", sans-serif;
								 background-color: #000000;
								}
							.ez {border-radius: 20px;}
							</style >
						
							
						<?php 
							foreach ($load_packz as $data) {
						?>
                    
					<center>
                       <img src="<?=$data->img;?>" width="75" height="75" style="border-radius: 50%; border: 2px solid #000000!important;"><br>
						<font size="2" color="FFFFFF" class="mt-2"><b><?=$data->name;?></b></font><br>
						<?php if ($data->stock >= 1) {?>
						<font size="1" color="FFFFFF" class="mt-2"><b><span class="badge badge-e"><font color="ffffff" size="2"><i class="fas fa-check-circle"></i> เหลือ <?=$data->stock;?></font></span></b></font><br/>
						<?php } else {?>
						<font size="1" color="FFFFFF" class="mt-2"><b><span class="badge badge-c"><font color="ffffff" size="2"><i class="fa fa-spinner fa-spin"></i> สินค้าหมด</font></span></b></font><br/>
						<?php }?>
						 <font size="2" color="FFFFFF" class="mt-2"><i class='fa fa-coin'></i> ราคา : <?=$data->price + $byshop_cost;?>.00</font><br/>
						 <a href="?page=buyapp&amp;id=<?=$data->id;?>"><button class="btn btn-sm w-100 mt-2" style="background-color: var(--main);color: #FFFFFF;">ซื้อสินค้า</button><br/>
						
						<?php  } ?>
                       </center> </div><br>
        </div></a></div>      
        <br>
        <a>
				<div class="card-body border border-2 shadow-sm p-0 text-white card-body" style="border-radius: 10px;">
                    <div class="container-fluid mt-2  ">
                    	
               	<!-- api -->
					<?php
						$curl = curl_init();
						curl_setopt_array($curl, array(
 						 CURLOPT_URL => 'https://byshop.me/api/product?id=6', 
 						 CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => '',
  						CURLOPT_MAXREDIRS => 10,
  						CURLOPT_TIMEOUT => 0,
  						CURLOPT_FOLLOWLOCATION => true,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => 'GET',
						));
						$response = curl_exec($curl);
						curl_close($curl);
						$load_packz = json_decode($response);
					  ?>
						
						  <body>
							 <style type="text/css">
								body
								{
								font-family:"Sarabun", sans-serif;
								 background-color: #000000;
								}
							.ez {border-radius: 20px;}
							</style >
						
							
						<?php 
							foreach ($load_packz as $data) {
						?>
                    
					<center>
                       <img src="<?=$data->img;?>" width="75" height="75" style="border-radius: 50%; border: 2px solid #000000!important;"><br>
						<font size="2" color="FFFFFF" class="mt-2"><b><?=$data->name;?></b></font><br>
						<?php if ($data->stock >= 1) {?>
						<font size="1" color="FFFFFF" class="mt-2"><b><span class="badge badge-e"><font color="ffffff" size="2"><i class="fas fa-check-circle"></i> เหลือ <?=$data->stock;?></font></span></b></font><br/>
						<?php } else {?>
						<font size="1" color="FFFFFF" class="mt-2"><b><span class="badge badge-c"><font color="ffffff" size="2"><i class="fa fa-spinner fa-spin"></i> สินค้าหมด</font></span></b></font><br/>
						<?php }?>
						 <font size="2" color="FFFFFF" class="mt-2"><i class='fa fa-coin'></i> ราคา : <?=$data->price + $byshop_cost;?>.00</font><br/>
						 <a href="?page=buyapp&amp;id=<?=$data->id;?>"><button class="btn btn-sm w-100 mt-2" style="background-color: var(--main);color: #FFFFFF;">ซื้อสินค้า</button><br/>
						
						<?php  } ?>
                       </center> </div><br>
        </div></a></div>     
