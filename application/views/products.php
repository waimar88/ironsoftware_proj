<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="second-sec" class="d-flex align-items-center">
	<div class="container">
		<div class="row">

			<?php 
			if (count($products) > 0) {
				$i = 0;
				foreach ($products as $pro) {
					$i++;
					?>
					<div class="row col-lg-12">						
						<div class="col-lg-4">
							<img src="<?php echo base_url();?>upload/<?=$pro['img']?>">
						</div>
						<div class="col-lg-8">
							<h2 class="mb-4"><?=$pro['title']?></h2>
							<p class="mt-3"><?=$pro['description']?></p>
						</div>								
					</div>
					<?php
					if (count($products) > $i) {
						echo '<hr class="mt-2">';
					}
				}
			} else {
				?>
				<div class="col-lg-6">
					<p>
						There is no products.
					</p>		
				</div>
				<?php
			}
			?>
			<div class="col-lg-6">
				<h2></h2>
				<p>
					
				</p>			
				
			</div> 

		</div>
	</div>
</section>
