<section id="single-case<?php /*echo $caseinfo["shortname"];*/ ?>">
  	<div class="container big-grid maxwidth">
			<!--<figure class="content-image overlay"></figure>-->
			<div class="slick-container overlay">
				<figure class="content-image content-image-1"></figure>
				<figure class="content-image content-image-2"></figure>
				<figure class="content-image content-image-3"></figure>
			</div>
			<div class="slick-container pop-up-image">
				<figure class="content-image content-image-1"></figure>
				<figure class="content-image content-image-2"></figure>
				<figure class="content-image content-image-3"></figure>
			</div>
			

			<div class="previous-next-page">

				<a title="Vorige pagina" href="<?php echo $caseinfo["previousproject"] ?>.php"><img src="../img/arrow-right-red.svg" alt="icon previous page"></a>

				<a title="Overview" href="../cases/"><img src="../img/overview.svg" alt="icon overview"></a>

				<a title="Volgende pagina" href="<?php echo $caseinfo["nextproject"] ?>.php"><img src="../img/arrow-right-red.svg" alt="icon next page"></a>

			</div>

			<h1><?php echo $caseinfo["name"]; ?></h1>

			<article class="content-rightblock scrollbar">
				
					<div class="carousel-pop-up-button"></div>
				
					<?php echo $caseinfo["description"]; ?>
					
					<?php if( !empty( $caseinfo["Website"] ) ): ?>
					<a title="Website" href="<?php echo $caseinfo["Website"] ?>" class="btn">Bekijk het project<span class="arrow-right"></span></a>
					<?php endif; ?>
			</article>
			
			<div class="fixed-bottom-mobile-navigation"></div>
			
			<div class="carousel-pop-up">
			
				<div class="inner-carousel-pop-up">
				
					<p class="carousel-pop-up-close" >Sluit</p>
					
					<div class="carousel">

						<?php foreach($cases as $case): ?>
						
						<a  title="<?php echo $case["name"]; ?>" href="<?php echo $case["shortname"]; ?>.php">
							<div class="<?php echo $case["shortname"]; ?>">
								<h3><?php echo $case["name"]; ?></h3>
							</div>
							
						</a>
						
						<?php endforeach; ?>

					</div>
				
					<div class="carousel-pop-up-drag"><span>drag</span></div>
				
				</div>
				
			</div>
			
		</div> <!-- /maxwidth -->
	</section>