<?php
	if(count($getImages) >0) {
        ?>
        <input type="hidden" name="proid" value="<?= $proid;?>">
        <?php
		foreach ($getImages as $key => $value) {
			?>
			 <div class="col-sm-3 mb-3">
			 	<input type="hidden" name="imgid[]" value="<?= $value->imgid; ?>">
                            <div class="card">
                                <div class="card-body"><img src="<?= base_url().$value->profileimg;?>" class="img" /> </div>
                                <div class="card-footer">
                                    <label for="">Title</label>
                                    <input type="text" name="title[]" id="title"  />
                                    <span id="title_error" class="text-danger" style="text-align: left!important"></span>
                                    <label>Amount</label>
                                    <input type="number" name="amount[]" id="amount" />
                                    <span id="amount_error" class="text-danger" style="text-align: left!important"></span>
                                    <label>Category</label>
                                    <select name="category[]" id="category">
                                    	<option value="">Select Category</option>
                                        <option value="1">ABC</option>
                                        <option value="2">DEF</option>
                                        <option value="3">GHI</option>
                                    </select>
                                    <span id="category_error" class="text-danger" style="text-align: left!important"></span>
                                    <label>Medium</label>
                                    <select name="medium[]" id="medium">
                                    	<option value="">Select Medium</option>
                                        <option value="1">Wall Painting</option>
                                        <option value="2">Poster</option>
                                        <option value="3">Oil Painting</option>
                                    </select>
                                    <span id="medium_error" class="text-danger" style="text-align: left!important"></span>
                                </div>
                            </div>
                        </div>
			<?php
		}
	}
?>