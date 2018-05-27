<section id="<?php echo $pagename; ?>">
  	<div class="container big-grid-2 maxwidth">
  		<div class="coloured-background"></div>
			<figure class="content-image overlay"></figure>
			
			<article class="member-information">
				
				<p class="member-quote"><?php echo $memberinfo["Quote"]; ?></p>
				
				<div class="member-socialmedia">
					
					<?php if( !empty($memberinfo["Linkedin"]) ): ?>
					<a target="_blank" href="<?php echo $memberinfo["Linkedin"]; ?>">Linkedin</a>
					<?php endif; ?>
					
					<?php if( !empty($memberinfo["Email"]) ): ?>
					<a href="mailto:<?php echo $memberinfo["Email"]; ?>">Email</a>
					<?php endif; ?>
					
				</div>
				
			</article>

			<div class="previous-page">

				<a title="Vorige pagina" href="../team/"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span>vorige pagina</span></a>

			</div>
			
			<h1><?php echo $memberinfo["Name"]; ?></h1>
			
			<article class="content-rightblock scrollbar">
				
					<div class="carousel-pop-up-button"></div>
				
					<h2 class="member-nickname"><?php echo $memberinfo["Title"]; ?></h2>
					
					<p><?php echo $memberinfo["Description"]; ?></p>
					
					<?php if( !empty($memberinfo["Website"]) ): ?>
					
					<a title="Website <?php echo ucfirst($pagename); ?>" href="#" class="btn">Bekijk website<span class="arrow-right"></span></a>
					
					<?php endif; ?>
					
			</article>
			
			<div class="fixed-bottom-mobile-navigation"></div>
			
			<div class="carousel-pop-up">
			
				<div class="inner-carousel-pop-up">
				
					<p class="carousel-pop-up-close" >Sluit</p>
					
					<div class="carousel">

						<?php foreach($members as $member): ?>
						
						<a  title="<?php echo $member["Name"]; ?>" href="<?php echo $member["Shortname"]; ?>.php">
							<div class="<?php echo $member["Shortname"]; ?>"></div>
						</a>
						
						<?php endforeach; ?>

					</div>
				
					<div class="carousel-pop-up-drag"><span>drag</span></div>
				
				</div>
				
			</div>
			
		</div> <!-- /maxwidth -->
	</section>