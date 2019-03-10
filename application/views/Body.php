
				<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				  <?php  foreach ($promoted_articles as $article): ?>	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $article->image; ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="<?php echo  base_url('Home/category_data/'.$article->category);?>"><?php echo $article->category; ?> </a>
									<span class="post-date"><?php echo $article->date; ?> </span>
								</div>
								<h3 class="post-title"><a href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><?php echo $article->title; ?> </a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

			     <?php endforeach; ?>
				</div>

				<!-- /row -->

				<div class="row article">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Recent Posts</h2>
								</div>
							</div>
					<?php 
						$index=0;
						foreach ($latest_articles as $article) { 
							if($index==0) { ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $article->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="<?php echo base_url('Home/category_data/'.$article->category) ?>"><?php echo $article->category; ?></a>
											<span class="post-date"><?php echo $article->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><?php echo $article->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } else { ?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><img src="<?php echo base_url('');?>assets/img/<?php echo $article->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="<?php echo base_url('Home/category_data/'.$article->category) ?>"><?php echo $article->category; ?></a>
											<span class="post-date"><?php echo $article->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Home/post_data/'.$article->id) ?>"><?php echo $article->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							<?php } if($index%2==0) { ?>
							<div class="clearfix visible-md visible-lg"></div>
							<?php } ?>

						<?php $index++; } ?>
	
							
						 	<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
                             <?php foreach($pop_articles as $pop_article) :?>
							<div class="post post-widget">
									<a class="post-img" href="<?php echo base_url('Home/post_data/'.$pop_article->id) ?>"><img src="<?php echo base_url('');?>assets/img/<?php echo $pop_article->image; ?>" alt=""></a>
								
								<div class="post-body">
									<h3 class="post-title"><a href="<?php echo base_url('home/post_data/'.$pop_article->id);?>"><?php echo $pop_article->title; ?> </a></h3>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<!-- /post widget -->

						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="<?php echo base_url('Home/category_data/WEB DESIGN') ?>" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="<?php echo base_url('Home/category_data/JAVASCRIPT') ?>" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="<?php echo base_url('Home/category_data/PHP') ?>"class="cat-4">Php<span>41</span></a></li>
									<li><a href="<?php echo base_url('Home/category_data/CSS') ?>" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
	