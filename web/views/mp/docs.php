<?php

	function docs($s){
		?>
		<div class="row">
			<div class="col-sm-6 pt-2-r">
				<a href="<?=$s?>/assets/docs/Portafolio.pdf" target="_blank" title="Portafolio">
					<div class="card py-2-r bg-hover text-light text-center">
						<h3 class="text-uppercase">
							<div class="py-1-r fs-3">
								<i class="fas fa-address-card"></i>
							</div>
							portafolio
						</h3>
					</div>
				</a>
			</div>			
			<div class="col-sm-6 pt-2-r">
				<a href="<?=$s?>/assets/docs/Manual%20del%20Delegado%20-%20Inemun%20X.pdf" target="_blank" title="manual del delegado">
					<div class="card py-2-r bg-hover text-light text-center">
						<h3 class="text-uppercase">
							<div class="py-1-r fs-3">
								<i class="fas fa-passport"></i>
							</div>
							manual del delegado
						</h3>
					</div>
				</a>
			</div>			
		</div>
		<?php
	}

?>