<?php
                                    	if(count($search) >0) {
                                    		foreach ($search as $pro) {
                                    			?>
                                    			<li class="col-md-4 col-sm-12">
		                                            <div class="btsf"><input type="checkbox" class="npl"/><a href="<?= base_url().'profile/artists/'.chitrakalaEncrypt($pro->pid);?>">
		                                                    <h2 class="name-art"><?= ucfirst($pro->name);?></h2>
		                                                    <h3 class="price_art">Price : <i class="fas fa-rupee-sign"></i> <?= number_format($pro->amount);?>
		                                                    </h3>
		                                                    <h4 class="cate_art">Category : <?php if($pro->category ==1) {echo 'ABC';}else if($pro->category ==2) {echo 'DEF';}else if($pro->category ==3) {echo 'GHI';}?></h4>
		                                                    <h4 class="cate_art">Medium : <span class="text-info"><?php if($pro->medium ==1) {echo 'Wall Painting';}else if($pro->medium ==2) {echo 'Poster';}else if($pro->medium ==3) {echo 'Oil Painting';}?></span></h4>
		                                                </a></div>
		                                        </li>
                                    			<?php
                                    		}
                                    	}else {
                                    		echo "No data found";
                                    	}
                                    	?>