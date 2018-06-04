<section class="casepage" id="<?php echo $caseinfo["shortname"]; ?>">
  	<div class="container big-grid maxwidth">
			<div class="big-grid-flex-left">
				<div class="slick-container overlay">
					<figure class="content-image" style="background-image: url('<?php echo /* $prefix . */ $caseinfo["image"]; ?>');"></figure>
					<?php foreach( $caseinfo["extra_images"] as $image ): ?>
					<figure class="content-image" style="background-image: url('<?php echo /* $prefix . */ $image; ?>');"></figure>
					<?php endforeach; ?>
				</div>
				<div class="slick-container pop-up-image">
					<figure class="content-image" style="background-image: url('<?php echo /* $prefix . */ $caseinfo["image"]; ?>');"></figure>
					<?php foreach( $caseinfo["extra_images"] as $image ): ?>
					<figure class="content-image" style="background-image: url('<?php echo /* $prefix . */ $image; ?>');"></figure>
					<?php endforeach; ?>
				</div>
			</div>
			
			<div class="big-grid-flex-right">
				<div class="previous-next-page">

					<a title="Project | <?php echo ucfirst($caseinfo["previousproject"]); ?>" href="<?php echo $caseinfo["previousproject"] ?>.php"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span><?php echo ucfirst($caseinfo["previousproject"]); ?></span></a>

					<a title="Overview" href="../cases/"><img src="../img/overview-dark.svg" alt="icon overview" onmouseover="$(this).attr('src','../img/overview-red.svg').css('transition', '0.3s');" onmouseleave="$(this).attr('src','../img/overview-dark.svg').css('transition', '0.3s');"></a>

					<a title="Project | <?php echo ucfirst($caseinfo["nextproject"]); ?>" href="<?php echo $caseinfo["nextproject"] ?>.php"><span><?php echo ucfirst($caseinfo["nextproject"]); ?></span><img src="../img/arrow-right-red.svg" alt="icon next page"></a>

				</div>

				<h1><?php echo $caseinfo["name"]; ?></h1>

				<article class="content-rightblock scrollbar">

						<div class="carousel-pop-up-button"></div>

						<?php echo $caseinfo["description"]; ?>

						<?php if( !empty( $caseinfo["website"] ) ): ?>
						<a target="_blank" title="Website" href="<?php echo $caseinfo["website"] ?>" class="btn">Bekijk het project<span class="arrow-right"></span></a>
						<?php endif; ?>
				</article>
			</div>
			
			<div class="fixed-bottom-mobile-navigation">
				<div class="inner-bottom-mobile-navigation">
					<a title="<?php echo ucfirst($caseinfo["previousproject"]); ?>" class="previous" href="<?php echo $caseinfo["previousproject"]; ?>.php"><img src="../img/arrow-right-white.svg" alt="Previous icon"><span><?php echo ucfirst($caseinfo["previousproject"]); ?></span></a>
					<a title="<?php echo ucfirst($caseinfo["nextproject"]); ?>" class="next" href="<?php echo $caseinfo["nextproject"]; ?>.php"><span><?php echo ucfirst($caseinfo["nextproject"]); ?></span><img src="../img/arrow-right-white.svg" alt="Previous icon"></a>
				</div>
			</div>
			
			<div class="carousel-pop-up">
			
				<div class="inner-carousel-pop-up">
				
					<p class="carousel-pop-up-close" >Sluit</p>
					
					<div class="carousel">

						<?php foreach($cases as $case): ?>
						
						<a title="<?php echo $case["name"]; ?>" href="<?php echo $case["shortname"]; ?>.php">
							<div style="background-image: url('<?php echo /* $prefix . */ $case["image"]; ?>');">
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