<section class="memberpage" id="<?php echo $pagename; ?>">
  	<div class="container big-grid-2 maxwidth">
  		<div class="coloured-background"></div>
			<figure class="content-image overlay" style="background-image: url('<?php echo /* $prefix . */ $memberinfo["image"]; ?>');" onmouseover="$(this).css('background-image','url(<?php echo $memberinfo["imagehover"]; ?>)').css('transition', '0.3s');" onmouseleave="$(this).css('background-image','url(<?php echo $memberinfo["image"]; ?>)').css('transition', '0.3s');"></figure>
			
			<article class="member-information">
				
				<p class="member-quote"><?php echo $memberinfo["quote"]; ?></p>
				
				<div class="member-socialmedia">
					
					<?php if( !empty($memberinfo["linkedin"]) ): ?>
					<a target="_blank" href="<?php echo $memberinfo["linkedin"]; ?>">Linkedin</a>
					<?php endif; ?>
					
					<?php if( !empty($memberinfo["email"]) ): ?>
					<a href="mailto:<?php echo $memberinfo["email"]; ?>">Email</a>
					<?php endif; ?>
					
				</div>
				
			</article>

			<div class="previous-page">

				<a title="Vorige pagina" href="../team/"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span>vorige pagina</span></a>

			</div>
			
			<h1><?php echo $memberinfo["name"]; ?></h1>
			
			<article class="content-rightblock scrollbar">
				
					<div class="carousel-pop-up-button"></div>
				
					<h2 class="member-nickname"><?php echo $memberinfo["title"]; ?></h2>
					
					<?php echo $memberinfo["description"]; ?>
					
					<?php if( !empty($memberinfo["website"]) ): ?>
					
					<a title="Website <?php echo ucfirst($pagename); ?>" href="#" class="btn">Bekijk website<span class="arrow-right"></span></a>
					
					<?php endif; ?>
					
			</article>
			
			<div class="fixed-bottom-mobile-navigation"></div>
			
			<div class="carousel-pop-up">
			
				<div class="inner-carousel-pop-up">
				
					<p class="carousel-pop-up-close" >Sluit</p>
					
					<div class="carousel">

						<?php foreach($members as $member): ?>
						
						<a  title="<?php echo $member["name"]; ?>" href="<?php echo $member["shortname"]; ?>.php">
							<div style="background-image: url('<?php echo /* $prefix . */ $member["image"]; ?>');"></div>
						</a>
						
						<?php endforeach; ?>

					</div>
				
					<div class="carousel-pop-up-drag"><span>drag</span></div>
				
				</div>
				
			</div>
			
		</div> <!-- /maxwidth -->
	</section>