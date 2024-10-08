
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Listing</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
			}
			.pro-socials ul li a {
			 color: black !important; 
			 }
			 .pro-socials ul li a:hover {
			 color: #F83D7B !important; 
			 }
			 
		</style>
		
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blogs</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content blog-content blog-content-page">
			<div class="container"> 
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							Blog Page
						</h1>
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-12 col-lg-8">
						<div class="blog-area">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_1.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Woman wearing Silver-colore ring pendant necklaces</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_2.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">White gold engagement rings for couples</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_3.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Shallow focus photo of person putting gold-colored ring</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_4.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Beautiful and gorgious necklace jewelry treasure box</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_5.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Woman wearing all kind of silver colore jewelery</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
											Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="blog">
										<div class="blog-thumbnail">
											<a href="<?= base_url('Home/Blog') ?>" class="text-dark">
												<img class="img-thumbnail lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/blogs/blog_post_6.jpg"  alt="Thumbnail">
											</a>
											<div class="blog-date">
												30
												<small>Dec</small>
											</div>
											<div class="badge badge-primary"><a href="#">Share</a><i class="fas fa-share"></i></div>
										</div>
										
										
										<h4 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Gold bangle is worn on top of the engagement band</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna 
											aliqua. Ut enim ad minim veniam, voluptatem. <a href="<?= base_url('Home/Blog') ?>" class="text-dark">Read More..</a>
										</p>
									</div>
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-12">
									<div class="pagination justify-content-between ">
										
										<label class="col-form-label">Showing 1&ndash;<span class="showing_record">1</span>&nbsp;of&nbsp;<span class="showing_total_record">23</span>&nbsp;results.</label>    
										<div class="col-12 col-sm-6">
											<ol class="loader-page">
												<li class="loader-page-item"><a href="index.html">  
												<i class="fa fa-angle-double-left" style="font-size:12px"></i></a>
												</li>
												<li  class="loader-page-item"><a href="#">1</a></li>
												<li  class="loader-page-item"><a href="#">2</a></li>
												<li  class="loader-page-item"><a href="#">3</a></li>
												<li  class="loader-page-item"><a href="#">4</a></li>
												<li  class="loader-page-item"><a href="#"> 
												<i class="fa fa-angle-double-right" style="font-size:12px"></i></a>
												</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-12 col-lg-4  d-lg-block d-xl-block blog-menu"> 
						
						<div class="block">
							<div class="pro-heading-subtitle">
								<h4>
									Recent Posts
								</h4>
								
							</div>
							<div class="media">
								<img src="<?= $this->data->lazyLoader;?>" class="lazy" data-src="<?= base_url('public/') ?>images/miscellaneous/avatar.jpg" alt="Avatar" style="width:68px;height:68px;" >
								<div class="media-body">
									<h6 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Gold bangle is worn on top of the engagement band</a></h6>
									<p>Lorem ipsum dolor sit amet, 
										consectetur adipiscing elit, 
									sed do eiusmod.</p>
								</div>
							</div>
							<div class="media">
								<img src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/miscellaneous/avatar.jpg" class="lazy" alt="Avatar" style="width:68px;height:68px;">
								<div class="media-body">
									<h6 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Woman wearing all kind of silver colore jewelery</a></h6>
									<p>Lorem ipsum 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							
                            <div class="media">
                                <img src="<?= $this->data->lazyLoader;?>" class="lazy" data-src="<?= base_url('public/') ?>images/miscellaneous/avatar.jpg" alt="Avatar" style="width:68px;height:68px;">
                                <div class="media-body">
                                    <h6 ><a href="<?= base_url('Home/Blog') ?>" class="text-dark">White gold engagement rings for couples</a></h6>
									<p>Lorem ipsum dolor sit amet, 
									ut labore et dolore magna aliqua.</p>
								</div>
							</div>
                            
							
						</div>
						<div class="block">
							<div class="pro-heading-subtitle">
								<h4>
									Latest Comments
								</h4>
								
							</div>
							<div class="media">
								<i class="fas fa-comments"></i>
								<div class="media-body">
									<p><a href="<?= base_url('Home/Blog') ?>" class="text-dark">
										Lorem ipsum dolor sit amet, 
										consectetur aliqua.
									</a></p>
									<span><i class="far fa-clock"></i>Dec 25,2019</span>
								</div>
							</div>
							<div class="media">
								<i class="fas fa-comments"></i>
								<div class="media-body">
									<p><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Lorem ipsum dolor sit amet, 
									ut labore et dolore magna aliqua.</a></p>
									<span><i class="far fa-clock"></i>Dec 25,2019</span>
								</div>
							</div>
                            <div class="media">
                                <i class="fas fa-comments"></i>
                                <div class="media-body">
									<p><a href="<?= base_url('Home/Blog') ?>" class="text-dark">Adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></p>
                                    <span><i class="far fa-clock"></i>Dec 25,2019</span>
								</div>
							</div>
							
						</div>
						<div class="block d-none">
							<div class="pro-socials">
								<h4>
									Stay Connected
								</h4>
								<ul>
									<li><a href="#" class="fab fb fa-facebook-square"></a></li>
									<li><a href="#" class="fab tw fa-youtube-square"></a></li>
									
									<li><a href="#" class="fab ig fa-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						