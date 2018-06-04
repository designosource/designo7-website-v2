<section class="memberpage" id="<?php echo $pagename; ?>">
  	<div class="container big-grid-2 maxwidth">
  		<div class="coloured-background"></div>
			<figure class="content-image overlay" style="background-image: url('<?php echo $prefix . $memberinfo["image"]; ?>');" onmouseover="$(this).css('background-image','url(<?php echo $prefix . $memberinfo["imagehover"]; ?>)').css('transition', '0.4s');" onmouseleave="$(this).css('background-image','url(<?php echo $prefix . $memberinfo["image"]; ?>)').css('transition', '0.4s');"></figure>
			
			<article class="member-information">

                <div class="quote-container">
                    <p class="member-quote"><?php echo $memberinfo["quote"]; ?></p>
                </div>

				<div class="member-socialmedia">
					
					<?php if( !empty($memberinfo["linkedin"]) ): ?>
					<a title="Linkedin" target="_blank" href="<?php echo $memberinfo["linkedin"]; ?>">Linkedin</a>
					<?php endif; ?>
					
					<?php if( !empty($memberinfo["email"]) ): ?>
					<a title="Mail" href="mailto:<?php echo $memberinfo["email"]; ?>">Email</a>
					<?php endif; ?>
					
					<?php if( !empty($memberinfo["twitter"]) ): ?>
					<a title="Twitter" href="<?php echo $memberinfo["twitter"]; ?>">Twitter</a>
					<?php endif; ?>
					
				</div>
				
			</article>

			<div class="previous-next-page">

				<a title="<?php echo ucfirst($memberinfo["previous"]); ?>" href="<?php echo $memberinfo["previous"]; ?>.php"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span><?php echo ucfirst($memberinfo["previous"]); ?></span></a>
				
				<a title="Overzicht" href="../team/"><img src="../img/team-icon-dark.svg" alt="icon team page" onmouseover="$(this).attr('src','../img/team-icon-red.svg').css('transition', '0.3s');" onmouseleave="$(this).attr('src','../img/team-icon-dark.svg').css('transition', '0.3s');" ></a>
				
				<a title="<?php echo ucfirst($memberinfo["next"]); ?>" href="<?php echo $memberinfo["next"]; ?>.php"><span><?php echo ucfirst($memberinfo["next"]); ?></span><img src="../img/arrow-right-red.svg" alt="icon previous page"></a>

			</div>
			
			<h1><?php echo $memberinfo["name"]; ?></h1>
			
			<article class="content-rightblock scrollbar">
				
					<div class="carousel-pop-up-button"></div>
				
					<h2 class="member-nickname"><?php echo $memberinfo["title"]; ?></h2>
					
					<?php echo $memberinfo["description"]; ?>
					
					<?php if( !empty($memberinfo["website"]) ): ?>
					
					<a title="Website <?php echo ucfirst($pagename); ?>" target="_blank" href="<?php echo $memberinfo["website"]; ?>" class="btn">Bekijk website<span class="arrow-right"></span></a>
					
					<?php endif; ?>
					
			</article>
			
			<div class="fixed-bottom-mobile-navigation">
				<div class="inner-bottom-mobile-navigation">
					<a title="<?php echo ucfirst($memberinfo["previous"]); ?>" class="previous" href="<?php echo $memberinfo["previous"]; ?>.php"><img src="../img/arrow-right-white.svg" alt="Previous icon"><span><?php echo ucfirst($memberinfo["previous"]); ?></span></a>
					<a title="<?php echo ucfirst($memberinfo["next"]); ?>" class="next" href="<?php echo $memberinfo["next"]; ?>.php"><span><?php echo ucfirst($memberinfo["next"]); ?></span><img src="../img/arrow-right-white.svg" alt="Previous icon"></a>
				</div>
			</div>
			
			<div class="carousel-pop-up">
			
				<div class="inner-carousel-pop-up">
				
					<p class="carousel-pop-up-close" >Sluit</p>
					
					<div class="carousel">

						<?php foreach($members as $member): ?>
						
						<a title="<?php echo $member["name"]; ?>" href="<?php echo $member["shortname"]; ?>.php">
							<div style="background-image: url('<?php echo $prefix . $member["image"]; ?>');">
								<h3><?php echo $member["name"]; ?></h3>
							</div>
						</a>
						
						<?php endforeach; ?>

					</div>
				
					<div class="carousel-pop-up-drag"><span>drag</span></div>
				
				</div>
				
			</div>
			
		</div> <!-- /maxwidth -->
	</section>