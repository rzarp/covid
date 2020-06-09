
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="<?php echo base_url('Home/index')?>">
                              Aksi siaga<img src="<?php echo base_url('assets/img/aksi2.png');?>" alt=""> 
							  <img src="<?php echo base_url('assets/img/ittp.png');?>">  
                          </a>
                          <!-- <h5>Beranda</h5> -->
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="#home">Beranda</a></li>
								<li><a href="#data">Data</a></li>
								<li><a href="#service">Langkah</a></li>
								<li><a href="#feature">Fitur</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Menu
									</a>
								  <div class="dropdown-menu">
							   	 		<a class="dropdown-item" href="<?php echo base_url('Panduan');?>">panduan instalasi</a>
							        	<a class="dropdown-item" href="<?php echo base_url('Petunjuk');?>">Faq</a>
										<a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSfei5l8L12jboyW32roKZiXCToGezKGbSIKR_wAFdKrVjjYPg/viewform">Feedback</a>
							      </div>
						  		</li>			
						    </ul>
						  </div>					
					</div>
				</nav>
			</header>
			<!-- End Header Area -->				
				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center">
						<div class="col-lg-6 col-md-12 banner-left">
								<h2 class="text-white">
                                Apa itu Aksi?						
								</h2>
								<p class="mx-auto text-white  mt-20 mb-40">
                                Aksi atau Aplikasi Kampung Siaga merupkan platform untuk memudahkan warga dalam penanganan permasalahan, khususnya untuk saat ini Aksi lebih fokus untuk sarana pencegahan wabah virus korona atau (Coronavirus Disease) atau Covid-19.
								</p>
								<a href="#data" class="text-uppercase header-btn">Selengkapnya</span></a>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
							<img class="img-fluid" src="<?php echo base_url('assets/img/man_walk.png');?>" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

				<!-- Data pasien  -->
				<section class="cat-area section-gap" id="data">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-12">
							<div class="title text-center">
								<h1 class="mb-10">Data Kasus Coronavirus di Indonesia</h1>
							</div>
						</div>
				</div>							
				<div class="card-body">
					<div class="table-responsive service">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Negara</th>
									<th scope="col">Positif</th>
									<th scope="col">Sembuh</th>
									<th scope="col">Meninggal</th>
								</tr>
							</thead>
						<tbody>  
							<?php 
								$i=1;
								foreach ($indonesia as $key => $v) { ?>   
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $v['name']?></td>
								<td><?php echo $v['positif']?></td>
								<td><?php echo $v['sembuh']?></td>
								<td><?php echo $v['meninggal']?></td>												
							</tr>	
							<?php } ?> 					
						</tbody>
						</table>
				</div>
					</div>
								
				<section class="cat-area section-gap">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Data Kasus Coronavirus berdasarkan provinsi</h1>
						</div>
					</div>
				</div>					
				<div class="card-body">
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
						<table class="table table-bordered table-striped mb-0">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Provinsi</th>
									<th scope="col">Postif</th>
									<th scope="col">Sembuh</th>
									<th scope="col">Meninggal</th>	
								</tr>
							</thead>
				<tbody>  
				<?php 
					$i=1;
						foreach ($provinsi as $key => $v) { ?>  
					<tr>
						<td><?php echo $i++;?></td>
						<td><?php echo $v['attributes']['Provinsi']?></td>
						<td><?php echo $v['attributes']['Kasus_Posi']?></td>
						<td><?php echo $v['attributes']['Kasus_Semb']?></td>
						<td><?php echo $v['attributes']['Kasus_Meni']?></td>
					</tr>	
						<?php } ?> 					
				</tbody>
						</table>
							</div>
								</div>
									</div>

					<!-- End data pasien -->

			<!-- Start cat Area -->
			<section class="cat-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Langkah-Langkah Apa saja di Aksi</h1>
								<p>AKSI (Aplikasi Kampung Siaga)</p>
							</div>
						</div>
					</div>							
					<div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">	
						<div class="col">
								<div class="single-cat d-flex flex-column">
									<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-twitter-inv"><span class="lnr lnr-map-marker"></span></span></span></a>
									<h4 class="mb-20" style="margin-top: 23px;">update data covid-19</h4>
									<p>
									Aksi memilki beberapa fitur utama seperti update data covid-19 di Indonesia dan seluruh provinsinya yang di tampilkan dalam bentuk grafik yang mudah untuk di pahami.
									</p>
								</div>		
							</div>
							<div class="col">
								<div class="single-cat d-flex flex-column">
									<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-twitter-inv"><span class="lnr lnr-pencil"></span></span></span></a>
									<h4 class="mb-20" style="margin-top: 23px;">Penilaian diri</h4>
									<p>
									Penilaian Diri user atau warga dapan melakukan pengecekan mandiria tau (Self Assessment) untuk mengetahui kondisi dirinya, dengan menggunakan fitur ini dapat memprediksi pengguna memiliki risiko terpapar corona rendah, sedang, atau tinggi.
									</p>
								</div>		
							</div>
							<div class="col">
								<div class="single-cat d-flex flex-column">
									<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-twitter-inv"><span class="lnr lnr-phone"></span></span></span></a>
									<h4 class="mb-20" style="margin-top: 23px;">Daftar Hotline</h4>
									<p>
									Daftar Hotline rumah sakit seluruh Indonesia untuk memudahkan jika warga atau masyarakat mengalami kondisi darurat dan butuh pertolongan medis
									</p>
								</div>		
							</div>
							<div class="col">
								<div class="single-cat d-flex flex-column">
									<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-twitter-inv"><span class="lnr lnr-hand"></span></span></span></a>
									<h4 class="mb-20" style="margin-top: 23px;">Pencegahan</h4>
									<p>
									fitur Pencegahan, berisikan data dan langkah-langkah untuk mengurangi persebaran virus korona di Indonesia
									</p>
								</div>		
							</div>
																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End cat Area -->
			

			<!-- Start about Area -->
			<section class="about-area section-gap">
				<div class="container">
					<div class="row justify-content-center align-items-center d-flex">
						<div class="col-lg-6 about-left">
							<h1>
								Hasil <br>
								assesmen yang teruji <br>
							</h1>
							<p class="mt-20"> 
                            Penilaian Diri user atau warga dapan melakukan pengecekan mandiri atau (Self Assessment) untuk mengetahui kondisi dirinya, dengan menggunakan fitur ini dapat memprediksi pengguna memiliki risiko terpapar corona rendah, sedang, atau tinggi.
							</p>
							<a href="https://drive.google.com/open?id=1lqY7ddRlOpZsRyn-33azNog8HvGOstLP" class="btn primary-btn text-uppercase mt-20">Unduh Aplikasi</a>
						</div>
						<div class="col-lg-5 about-right">
							<img class="img-fluid" src="<?php echo base_url('assets/img/draw.png');?>" alt="">
                        </div>
					</div>
				</div>	
			</section>
			<!-- End about Area -->
			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="feature">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Beberapa menu dari fitur AKSI</h1>
								<p>AKSI (Aplikasi Kampung Siaga))</p>
							</div>
						</div>
					</div>						
					<div class="row">
							<div class="active-feature-carusel">
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/login.png');?>" alt="">
									</div>
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/Mockup2.png');?>" alt="">
									</div>
							
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/Kuisioner.png');?>" alt="">
									</div>
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/Kuisioner1.png');?>" alt="">
									</div>
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/Kuisioner2.png');?>" alt="">
									</div>
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/Kuisioner3.png');?>" alt="">
									</div>
								</div>
								<div class="item single-carusel relative">
									<div class="image-wrap">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url('assets/img/resiko.png');?>" alt="">
									</div>
								</div>																																	
							</div>
					 	</div>
					</div>
				</div>	
			</section>
			<!-- End service Area -->
	
			<!-- Start call-to-action Area -->
			<section class="call-to-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Segera Hadir di App store dan Play store</h1>
							<p class="text-white text-center mt-30">
								AKSI (Aplikasi Kampung Siaga)
							</p>							
						</div>
					</div>
					<div class="row justify-content-center d-flex">	
						<div class="download-button d-flex flex-row justify-content-center mt-30">		
							<div class="buttons flex-row d-flex">
								<i class="fa fa-apple" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Segera hadir</span> <br>
											on App Store
										</p>
									</a>
								</div>
							</div>
							<div class="buttons flex-row d-flex">
								<i class="fa fa-android" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Segera hadir</span> <br>
											on Play Store
										</p>
									</a>
								</div>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End call-to-action Area -->
			

			