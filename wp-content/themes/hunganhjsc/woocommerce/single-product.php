<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>  
	<div class="">
		<?php  
			$product = get_queried_object() ;
			wp_reset_query();
			// print_r($product);
			global $product;
			$terms = get_the_terms( $product->id, 'product_cat' );	
			foreach ( $terms as $nameCategory)
		?>

		<div class="_breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li>
						<a href="../../index.html" title="Trang chủ">Trang chủ</a>
					</li>
					<li>
						<a href="../../san-pham.html" title="Sản phẩm">Sản phẩm</a>
					</li>
					<li>
						<a href="../vong-bi-skf.html" title="Vòng bi SKF"><?php echo $nameCategory->name ?></a>
					</li>
					<li class="active">
						<?php echo $products->name ?>
					</li>
				</ol>
				<script type="application/ld+json">
					{
						"@context": "https://schema.org",
						"@type": "BreadcrumbList",
						"itemListElement": [{
								"@type": "ListItem",
								"position": 1,
								"name": "✅ Trang chủ",
								"item": "https://ngocanh.com"
							},
							{
								"@type": "ListItem",
								"position": 2,
								"name": "✅ Sản phẩm",
								"item": "https://ngocanh.com/san-pham"
							},
							{
								"@type": "ListItem",
								"position": 3,
								"name": "✅ Vòng bi SKF",
								"item": "https://ngocanh.com/san-pham/vong-bi-skf"
							},
							{
								"@type": "ListItem",
								"position": 4,
								"name": "✅ Vòng bi cầu SKF",
								"item": "https://ngocanh.com/san-pham/vong-bi-cau.html"
							}
						]
					}
				</script>

			</div>
		</div>



		<div class="category-detail">

			<div class="cat-filter head">
				<div class="container">
					<div class="pull-left">
						<h1 style="color: #005995;">
							<a href="Vong-bi-SKF-608-2RSH.html" title="Vòng bi SKF 608-2RSH chính hãng"><?php echo $products->name ?></a>
						</h1>
					</div>

					<div class="pull-right">
						<span>
								<?php $phanPhoi = get_field('phan_phoi','option');
									if(isset($phanPhoi)){
										echo $phanPhoi . " - ";
									}
								?>
			
								<a href="" title="Đại lý uỷ quyền SKF chính hãng">
									<?php 
									$hungAnh = get_field('hung_anh_skf','option');
									if(isset($hungAnh)){?>
												<span>
													<span><?php echo $hungAnh ?></span>
												</span>
									<?php } ?>

									<?php 
									$imageSite = get_field('site_file_mage','option');
									if(isset($imageSite)){
										foreach($imageSite as $imageSiteItem){?>
											<span style="padding-left: 6px;">
												<?php echo wp_get_attachment_image($imageSiteItem, 'full', false, array('class' => 'width-98px')) ?>
											</span>
										<?php }
									}			
									{?>											
								
									<?php } ?>
								</a>

							
						</span>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="product-detail">
				<div class="container">
					<div class="row ">
						<div class="col-md-8 left">

							<div class="row top">
								<div class="col-md-6" id="list-image">

									<ul class="list-unstyled" id="image-gallery">

										<li
											data-thumb="../../public/uploads/images/5935/vong-bi-skf-608-2rsh-720x530c.jpg">
											<img width="720" height="530"
												src="../../public/uploads/images/5935/vong-bi-skf-608-2rsh-720x530c.jpg"
												alt="Vòng bi SKF 608-2RSH chính hãng" class="img-responsive" />
										</li>

										<li
											data-thumb="../../public/uploads/images/5936/vong-bi-skf-608-2rsh-1-720x530c.jpg">
											<img width="720" height="530"
												src="../../public/uploads/images/5936/vong-bi-skf-608-2rsh-1-720x530c.jpg"
												alt="Vòng bi SKF 608-2RSH chính hãng" class="img-responsive" />
										</li>

										<li
											data-thumb="../../public/uploads/images/5937/vong-bi-skf-608-2rsh-2-720x530c.jpg">
											<img width="720" height="530"
												src="../../public/uploads/images/5937/vong-bi-skf-608-2rsh-2-720x530c.jpg"
												alt="Vòng bi SKF 608-2RSH chính hãng" class="img-responsive" />
										</li>


									</ul>


								</div>
								<div class="col-md-6">
									<span>
										<div class="name"><?php echo $product->name ?></div>



										<h2 class="stt-war" style="border: none; margin-bottom: 5px; font-size: 15px; margin: 0;
padding: 0 0 10px;">
											<div class="group">
												<a href="../vong-bi-cau.html"><span style="line-height: 19px;
font-size: 13px;"><?php echo $nameCategory->name ?></span></a>
											</div>
										</h2>


										<span class="btn btn-sm btn-default active">
											<?php $phanPhoi = get_field('san_pham_chinh_hang_skf','option');
												if(isset($phanPhoi)){ 
													echo $phanPhoi;
											 	}
											?>
										</span>


										<div class="clearfix"></div>


										<ul class="list-unstyled params">
											<li class="btt">Thông số sản phẩm</li>
											<?php echo $product->short_description ?>

										</ul>
										<!--SP-->

										<div class="stt-war">
											<div class="group">
												Giá bán:
												<a href="">
													Liên hệ để có giá tốt nhất tại thời điểm
												</a>
											</div>
										</div>
										<!--<div class="stt-war visible-xs visible-sm">-->
										<div class="stt-war visible-xs">
											<div class="group">
												<a href="">Hướng dẫn mua hàng</a>
											</div>
										</div>

									</span>

									<!-- <div class="cart-opts form-inline hidden-sm hidden-xs">-->
									<div class="cart-opts form-inline">
										<div class="input-group  input-group-sm ">
											<span class="input-group-addon">-</span>
											<input class="form-control text-center" size="2" type="text" value="1">
											<span class="input-group-addon">+</span>
										</div>
										<button class="btn btn-danger btn-sm add-to-cart ">
											<i class="glyphicon glyphicon-shopping-cart"></i>
											Đặt mua
										</button>


										<a href="../../huong-dan-mua-hang.html" title="hướng dẫn mua hàng"
											rel="nofollow" style="vertical-align: middle;font-size: 13px;"
											class=""><i class="glyphicon icon-hdm "></i>
											Hướng dẫn mua hàng</a>


									</div>





									<!--<div style="padding: 7px; border-radius: 3px; border: 1px solid #ccc; background: #f5f9fa; font-size: 12px;  margin-top: 10px;">
							   Chỉ cần cho hàng vào giỏ và đặt hàng. SKF Ngọc Anh sẽ gọi lại để tư vấn kỹ hơn! Chúng tôi cam kết hoàn tiền gấp 100 lần nếu phát hiện hàng giả, hàng nhái từ NGOCANH.COM
							</div>-->



									<div class="visible-sm visible-xs" style="padding: 15px 0 0">
										<a id="btn_support_mb" rel="nofollow" href="#box-support"
											class="btn btn-danger btn-block contact-shop text-uppercase"
											style="border-radius: 2px">
											<i class="glyphicon glyphicon-phone-alt"></i>
											Gọi mua hàng
										</a>


										<!-- hien thi tren dien thoai khi bam vao button Goi ngay -->
										<div class="hidden">
											<div class="well box-support" id="box-support">
												<h2 class="btt" style="padding-top: 5px">Liên hệ SKF Ngọc Anh để có
													báo giá tốt nhất</h2>
												<ul class="list-unstyled">

													<li>
														<div class="icon">
															<i class=" fas fa-mobile-alt"></i>
														</div>
														<strong><a rel="nofollow" href="tel:0961238558">096 123 85
																58</a>
														</strong>
														<div>
															<span>Kinh doanh SKF Ngọc Anh (24/7)</span>
														</div>
													</li>


													<li>
														<div class="icon">
															<i class=" fas fa-mobile-alt"></i>
														</div>
														<strong><a rel="nofollow" href="tel:0763356999">0763 356
																999</a>
														</strong>
														<div>
															<span>Kinh doanh SKF Ngọc Anh (24/7)</span>
														</div>
													</li>

													<li>
														<div class="icon">
															<i class=" fas fa-mobile-alt"></i>
														</div>
														<strong><a rel="nofollow" href="tel:0339995999">033 999
																5999</a>
														</strong>
														<div>
															<span>Kinh doanh SKF Ngọc Anh (24/7)</span>
														</div>
													</li>


													<li>
														<div class="icon">
															<i class=" fas fa-envelope"></i>
														</div>
														<strong><a rel="nofollow"
																href="mailto:info@ngocanh.com">info@ngocanh.com</a>
														</strong>
														<div>
															<span>E-mail báo giá SKF Ngọc Anh</span>
														</div>
													</li>

												</ul>
											</div>
										</div>

									</div>


								</div>
							</div>


					


							<div
								style="padding: 7px; border-radius: 3px; border: 1px solid #ccc; background: #f5f9fa; font-size: 12px;  margin-top: 10px;">
								Đừng lo về giá. Bạn chỉ cần cho hàng vào giỏ và đặt hàng Online. SKF Ngọc Anh sẽ gọi
								lại để tư vấn kỹ hơn! Chúng tôi cam kết hoàn tiền gấp 500 lần nếu phát hiện hàng
								giả, hàng nhái từ NGOCANH.COM - SKF Authorized Distributor.
							</div>
							<br>


							<div class="well box-hotline">
								<div class="btt text-uppercase"
									style="font-size: 12px; margin-bottom: 10px; color: #999;">Hỗ trợ báo giá 24/7 -
									Liên hệ với SKF Ngọc Anh để có báo giá tốt nhất tại thời điểm (Hotline / SMS /
									Zalo)
								</div>
								<ul class="list-unstyled">
									<li>
										<i class="fas fa-phone-square"></i>
										<a href="tel:096 123 8558">096.123.8558</a>
									</li>
									<li>
										<i class="fas fa-phone-square"></i>
										<a href="tel:033 999 5999">033.999.5999</a>
									</li>

									<li>
										<i class="fas fa-phone-square"></i>
										<a href="tel:0763 356 999">0763.356.999</a>
									</li>



								</ul>
							</div>


							<div class="note" style="font-size: 11px">


								<strong>Tại sao bạn nên mua Vòng bi SKF 608-2RSH tại SKF Ngọc Anh ?</strong><br>
								SKF Ngọc Anh là Đại lý ủy quyền SKF tại Việt Nam (SKF Authorized Distributor). Tất
								cả các
								sản phẩm SKF được phân phối bởi SKF Ngọc Anh
								đều
								là sản phẩm chính hãng SKF, có đầy đủ giấy tờ chứng minh xuất xứ và chất lượng
								(CO,CQ). Vui
								lòng
								sử dụng phần mềm <a href="../../kiem-tra-vong-bi-gia-skf.html">SKF Authenticate</a>
								(miễn phí) để
								tránh mua phải vòng bi SKF giả trôi nổi trên thị trường. Liên hệ với chúng tôi nếu
								bạn cần
								trợ
								giúp thông tin về vòng bi SKF chính hãng.

							</div>
							<div><a href="../../gioi-thieu.html"><img class="img-responsive"
										src="../../public/assets/imgs/skf-chinh-hang.jpg"
										title="Vòng bi SKF chính hãng" alt="Đại lý SKF tại Hà Nội" width="750"
										height="52"></a>
							</div>
							<br>

							<div class="tabs mrg-btm-30">

								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#tab-product-info"
											aria-controls="tab-product-info" role="tab" data-toggle="tab">Thông tin
											sản phẩm </a></li>

									<li role="presentation"><a href="#tab-comment" aria-controls="tab-comment"
											role="tab" data-toggle="tab">Bản vẽ kỹ thuật</a></li>

									<li role="presentation"><a href="#tab-comment2" aria-controls="tab-comment2"
											role="tab" data-toggle="tab">Bình luận</a></li>

								</ul>

								<div class="tab-content">


									<div role="tabpanel" class="tab-pane active" id="tab-product-info">
										<div class="vh-content">
											<!--mo ta san pham-->

											<div align="justify">

												<?php echo $product->description; ?>
											</div>

											<!--mo ta san pham-->
										</div>
									</div>

									<div role="tabpanel" class="tab-pane" id="tab-comment">
										<iframe id="pdf_iframe"
											src="https://docs.google.com/gview?url=https://ngocanh.com/public/uploads/attachment/2296/608-2rsh.pdf&amp;embedded=true"
											frameborder="0" width="100%" height="500"></iframe>
									</div>
									<div role="tabpanel" class="tab-pane" id="tab-comment2">
										<div class="frm" id="cm-facebook">
											<div class="fb-comments" data-href="Vong-bi-SKF-608-2RSH.html"
												data-width="100%" data-numposts="5"></div>
										</div>
									</div>
								</div>

							</div>

							<br>

							<br>

							<br>
						
							<div class="other-product">
								<div
									style="font-weight: bold; font-size: 16px; color: #000000; text-transform: uppercase; margin-bottom: 10px">
									Sản phẩm khác có thể bạn quan tâm
								</div>
								<div class="product-list list3 other-product mrg-btm-30 visible-sm visible-xs">

									<div class="_row">
										<!-- <div class="_item   item2 ">
											<a rel="nofollow" href="Vong-bi-SKF-608.html"
												title="Vòng bi SKF 608 chính hãng">
												<div class="img"><img width="172" height="128"
														src="../../public/uploads/images/6756/vong-bi-skf-608-300x224c.jpg"
														alt="Vòng bi SKF 608" title="Vòng bi SKF 608 chính hãng">
												</div>
											</a>
											<a href="Vong-bi-SKF-608.html" title="Vòng bi SKF 608 chính hãng">
												<span class="tt" title="Vòng bi SKF 608">Vòng bi SKF 608</span>
											</a>
										</div> -->
										<?php $result = woocommerce_output_related_products();  ?>
										
										<div class="clearfix"></div>
									</div>

									<div class="clearfix"></div>

								</div>

								<div id="carousel-example-generic"
									class="carousel cnkh slide product-list list3 other-product mrg-btm-30 hidden-sm hidden-xs"
									data-ride="carousel" data-interval="0" style="margin: 0">
									<!-- Controls -->

									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
										<div class="item active">

											<div class="_row">
												<div class="_item   item2 ">
													<a rel="nofollow" href="Vong-bi-SKF-608.html"
														title="Vòng bi SKF 608 chính hãng">
														<div class="img"><img width="172" height="128"
																src="../../public/uploads/images/6756/vong-bi-skf-608-300x224c.jpg"
																alt="Vòng bi SKF 608"
																title="Vòng bi SKF 608 chính hãng"></div>
													</a>
													<a href="Vong-bi-SKF-608.html"
														title="Vòng bi SKF 608 chính hãng">
														<span class="tt" title="Vòng bi SKF 608">Vòng bi SKF
															608</span>
													</a>
												</div>
												<div class="_item  item3  ">
													<a rel="nofollow" href="Vong-bi-SKF-608-2ZC3.html"
														title="Vòng bi SKF 608-2Z/C3 chính hãng">
														<div class="img"><img width="172" height="128"
																src="../../public/uploads/images/3201/vong-bi-608-2zc3-300x224c.jpg"
																alt="Vòng bi SKF 608-2Z/C3"
																title="Vòng bi SKF 608-2Z/C3 chính hãng"></div>
													</a>
													<a href="Vong-bi-SKF-608-2ZC3.html"
														title="Vòng bi SKF 608-2Z/C3 chính hãng">
														<span class="tt" title="Vòng bi SKF 608-2Z/C3">Vòng bi SKF
															608-2Z/C3</span>
													</a>
												</div>
												<div class="_item item4   item2 ">
													<a rel="nofollow" href="Vong-bi-SKF-608-2Z.html"
														title="Vòng bi SKF 608-2Z chính hãng">
														<div class="img"><img width="172" height="128"
																src="../../public/uploads/images/5096/vong-bi-608-2z-skf-2-300x224c.jpg"
																alt="Vòng bi SKF 608-2Z"
																title="Vòng bi SKF 608-2Z chính hãng"></div>
													</a>
													<a href="Vong-bi-SKF-608-2Z.html"
														title="Vòng bi SKF 608-2Z chính hãng">
														<span class="tt" title="Vòng bi SKF 608-2Z">Vòng bi SKF
															608-2Z</span>
													</a>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="item">
											<div class="_row">
											</div>

											<div class="clearfix"></div>
										</div>
									</div>


								</div>
							</div>





							<!-- tai lieu lien quan -->
							<div>

							
								<h3
									style="font-weight: bold; font-size: 16px; color: #000000; text-transform: uppercase; margin-bottom: 10px">
									BÀI VIẾT LIÊN QUAN</h3>
								<br>
								<div class="rel-document">
									<div class="_item">
										<img width="100" height="60"
											src="../../public/uploads/images/4507/o-bi-skf-250x150c.jpg"
											alt="Ổ lăn, cụm ổ lăn và ổ đỡ SKF" />
										<a title="Ổ lăn, cụm ổ lăn và ổ đỡ SKF"
											href="../../tai-lieu-vong-bi/O-lan-cum-o-lan-va-o-do-SKF.html">Ổ lăn,
											cụm ổ lăn và ổ đỡ SKF</a>
									</div>
									<div class="_item">
										<img width="100" height="60"
											src="../../public/uploads/images/3960/thuat-ngu-o-lan1-250x150c.jpg"
											alt="Các thuật ngữ về Vòng bi (ổ lăn) nguyên lý lựa chọn và các ứng dụng của vòng bi" />
										<a title="Các thuật ngữ về Vòng bi (ổ lăn) nguyên lý lựa chọn và các ứng dụng của vòng bi"
											href="../../tai-lieu-vong-bi/Cac-thuat-ngu-ve-Vong-bi-o-lan-nguyen-ly-lua-chon-va-cac-ung-dung-cua-vong-bi.html">Các
											thuật ngữ về Vòng bi (ổ lăn) nguyên lý lựa chọn và các ứng dụng của vòng
											bi</a>
									</div>
									<div class="clearfix"></div>
									<div class="_item">
										<img width="100" height="60"
											src="../../public/uploads/images/4782/phan-biet-vong-bi-xe-may-skf-gia-250x150c.jpg"
											alt="Cách  phân biệt và kiểm tra vòng bi xe máy SKF chính hãng" />
										<a title="Cách  phân biệt và kiểm tra vòng bi xe máy SKF chính hãng"
											href="../../tai-lieu-vong-bi/Cach-phan-biet-va-kiem-tra-vong-bi-xe-may-SKF-chinh-hang.html">Cách
											phân biệt và kiểm tra vòng bi xe máy SKF chính hãng</a>
									</div>
									<div class="_item">
										<img width="100" height="60"
											src="../../public/uploads/images/4861/vong-bi-6310-skf-250x150c.jpg"
											alt="Trên tay vòng bi 6310 SKF chính hãng - Deep groove ball bearings SKF 6310" />
										<a title="Trên tay vòng bi 6310 SKF chính hãng - Deep groove ball bearings SKF 6310"
											href="../../tai-lieu-vong-bi/Tren-tay-vong-bi-6310-SKF-chinh-hang-Deep-groove-ball-bearings-SKF-6310.html">Trên
											tay vòng bi 6310 SKF chính hãng - Deep groove ball bearings SKF 6310</a>
									</div>
									<div class="clearfix"></div>
								</div>

							</div>
							<!-- // tai lieu lien quan -->
							<div style="padding: 1px 0 0;">
								<span class='st_facebook_hcount' displayText='Facebook'></span>
								<span class='st_twitter_hcount' displayText='Tweet'></span>
								<span class='st_pinterest_hcount' displayText='Pinterest'></span>
								<span class='st_sharethis_hcount' displayText='ShareThis'></span>
								<span class='st_youtube_hcount' displayText='Youtube Subscribe'></span>
							</div> <br>

						</div>

						<div class="col-md-4 right">
							<div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
								<a href="../../gioi-thieu.html">
									<img src="../../public/assets/imgs/ngoc-anh-skf.png"
										title="Đại lý ủy quyền SKF chính hãng" alt="Đại lý SKF chính hãng"
										width="100%"></a>
							</div>

						

							<div class="accordion-list" itemscope itemtype="https://schema.org/FAQPage"
								style="padding:10px; color:#000; line-height:22px; text-align:justify; margin-bottom:20px; border-radius:3px; border:1px solid #c6d0d3;">
								<h3 style="font-size: 13px; margin-top: 0; margin-bottom: 10px; line-height: 18px">

									Vòng bi SKF 608-2RSH và những câu hỏi thường gặp
								</h3>

								<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
									class="panel panel-default">
									<div class="panel-heading" role="tab" id="paq1">
										<h4 itemprop="name" class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
												data-parent="#accordion" href="#collapseOne" aria-expanded="false"
												aria-controls="collapseOne">
												<i class="short-full glyphicon glyphicon-menu-up"></i><span
													class="star">★</span> Tại sao nên
												mua Vòng bi SKF 608-2RSH tại SKF Ngọc Anh?</a>
										</h4>
									</div>
									<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
										id="collapseOne" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="paq1">
										<div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> SKF Ngọc Anh là
											đại lý ủy quyền chính hãng của
											SKF, chuyên phân phối các sản phẩm SKF chính hãng tại Việt Nam nên bạn
											hoàn toàn yên tâm về giá bán và
											chất lượng sản phẩm SKF chính hãng cũng như chế độ bảo hành.
										</div>
									</div>
								</div>

								<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
									class="panel panel-default">
									<div class="panel-heading" role="tab" id="paq2">
										<h4 itemprop="name" class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
												data-parent="#accordion" href="#collapseThree" aria-expanded="false"
												aria-controls="collapseThree">
												<i class="short-full glyphicon glyphicon-menu-up"></i><span
													class="star">★</span> Làm sao phân biệt
												được Vòng bi SKF 608-2RSH chính hãng?</a>
										</h4>
									</div>
									<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
										id="collapseThree" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="paq2">
										<div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Để phân biệt được
											sản phẩm SKF chính hãng và Fake
											(Nhái) đòi hỏi bạn phải có nhiều kinh nghiệm. Tuy nhiên nếu bạn không có
											kinh nghiệm hãy sử dụng phần
											mềm SKF Authenticate được cung cấp bởi SKF để giúp bạn phân biệt sản
											phẩm chính hãng. Truy cập đường dẫn
											dưới đây: <a href="http://check.ngocanh.com/"
												target="_blank">check.ngocanh.com</a>
										</div>
									</div>
								</div>

								<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
									class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading5">
										<h4 itemprop="name" class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
												data-parent="#accordion" href="#collapse5" aria-expanded="false"
												aria-controls="collapse5">
												<i class="short-full glyphicon glyphicon-menu-up"></i><span
													class="star">★</span> Mua hàng tại SKF
												Ngọc Anh có đảm bảo không?</a>
										</h4>
									</div>
									<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
										id="collapse5" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="heading5">
										<div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Bạn hoàn toàn yên
											tâm về sản phẩm mà chúng tôi
											phân phối. SKF Ngọc Anh cam kết hoàn tiền 100 lần nếu phát hiện hàng
											giả, hàng nhái.
										</div>
									</div>
								</div>
								<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
									class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading6">
										<h4 itemprop="name" class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
												data-parent="#accordion" href="#collapse6" aria-expanded="false"
												aria-controls="collapse6">
												<i class="short-full glyphicon glyphicon-menu-up"></i><span
													class="star">★</span> Sản phẩm mua tại
												SKF Ngọc Anh có COCQ không?</a>
										</h4>
									</div>
									<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
										id="collapse6" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="heading6">
										<div class="panel-body" itemprop="text"><b>✓ Trả lời:</b> Tất cả sản phẩm
											SKF do chúng tôi phân phối đều có
											COCQ bản gốc rõ ràng, Vui lòng liên hệ với chúng tôi để biết thêm chi
											tiết.
										</div>
									</div>
								</div>

							</div>
							<div class="news-view"
								style="border-radius: 6px; border: 1px solid #eaeaea; padding: 2px; margin-bottom: 2px; background-color: #ffffff;">
								<div class="youtube" data-embed="O7ScJxaz8Ww">
									<div class="play-button"></div>
								</div>
							</div>
							<br /><br />
						
							<div class="well relDownload">
								<div style="margin: -20px -19px 0 -19px;">
									<a href="../../catalogue.html" rel="nofollow"><img
											src="../../public/assets/imgs/tra-cuu-skf.png" class="img-responsive"
											alt="download catalogue skf" border="0" title="catalogue skf"
											width="700px" height="120px"></a>
								</div>
								<br>
								<ul class="list-unstyled">
									<li>
										<a href="../../download-catalogue/vong-bi-mat-cau.pdf" target="_blank"
											class="btn btn-primary btn-xs btn-download">
											<i class="glyphicon glyphicon-download-alt"></i>
										</a>
										<div class="info">
											<div class="tt"><a href="../../download-catalogue/vong-bi-mat-cau.pdf"
													target="_blank" title="Tài liệu vòng bi mặt cầu GE"><span
														style="color:#000000">Tài liệu vòng bi mặt cầu GE</span></a>
											</div>
											<div class="desc hidden">

											</div>
										</div>
									</li>
									<li>
										<a href="../../download-catalogue/SKF.pdf" target="_blank"
											class="btn btn-primary btn-xs btn-download">
											<i class="glyphicon glyphicon-download-alt"></i>
										</a>
										<div class="info">
											<div class="tt"><a href="../../download-catalogue/SKF.pdf"
													target="_blank"
													title="Tài liệu kỹ thuật tổng hợp về Vòng bi SKF"><span
														style="color:#000000">Tài liệu kỹ thuật tổng hợp về Vòng bi
														SKF</span></a></div>
											<div class="desc hidden">

											</div>
										</div>
									</li>
									<li>
										<a href="../../download-catalogue/1-do1day_ranhtrabi.pdf" target="_blank"
											class="btn btn-primary btn-xs btn-download">
											<i class="glyphicon glyphicon-download-alt"></i>
										</a>
										<div class="info">
											<div class="tt"><a
													href="../../download-catalogue/1-do1day_ranhtrabi.pdf"
													target="_blank" title="Ổ bi đỡ 1 dãy có rãnh tra bi"><span
														style="color:#000000">Ổ bi đỡ 1 dãy có rãnh tra
														bi</span></a></div>
											<div class="desc hidden">

											</div>
										</div>
									</li>
									<li>
										<a href="../../download-catalogue/SKF-khe-ho-vong-bi-tang-trong.pdf"
											target="_blank" class="btn btn-primary btn-xs btn-download">
											<i class="glyphicon glyphicon-download-alt"></i>
										</a>
										<div class="info">
											<div class="tt"><a
													href="../../download-catalogue/SKF-khe-ho-vong-bi-tang-trong.pdf"
													target="_blank"
													title="Quy định khe hở vòng bi tang trống SKF"><span
														style="color:#000000">Quy định khe hở vòng bi tang trống
														SKF</span></a></div>
											<div class="desc hidden">

											</div>
										</div>
									</li>
									<li>
										<a href="../../download-catalogue/SKF-tinh-toan-tuoi-tho-vong-bi.pdf"
											target="_blank" class="btn btn-primary btn-xs btn-download">
											<i class="glyphicon glyphicon-download-alt"></i>
										</a>
										<div class="info">
											<div class="tt"><a
													href="../../download-catalogue/SKF-tinh-toan-tuoi-tho-vong-bi.pdf"
													target="_blank" title="Tính toán tuổi thọ vòng bi"><span
														style="color:#000000">Tính toán tuổi thọ vòng bi</span></a>
											</div>
											<div class="desc hidden">

											</div>
										</div>
									</li>
								</ul>
							</div>




							<div class="well hotline-right" align="center">

								<li>E MAIL BÁO GIÁ SẢN PHẨM SKF</li>

								<div style="font-size:22px; color:#FF0004">
									<strong><a href="mailto:info@ngocanh.com" rel="nofollow">info@ngocanh.com</a>
									</strong></div>
							</div>


							<div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
								<a href="../../huong-dan-mua-hang.html"><img
										src="../../public/assets/imgs/giao-hang-toan-quoc.gif"
										title="Giao hàng tận nơi" alt="Giao vòng bi SKF tận nơi" width="700px"
										height="318px"></a>
							</div>


							<div class="box_style1">
								<p>✅ Phân phối sản phẩm SKF chính hãng</p>
								<p>✅ Đầy đủ giấy tờ CO,CQ gốc</p>
								<p>✅ Bảo hành chính hãng</p>
								<p>✅ Giá bán cạnh tranh nhất</p>
								<p>✅ Dịch vụ sau bán bán hàng chuyên nghiệp</p>
								<p>✅ Giao hàng toàn Quốc</p>
								<p>✅ Hỗ trợ kỹ thuật 24/7</p>
							</div>
							<br>


							<div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
								<a href="../../bao-gia-vong-bi-skf-chinh-hang.html"><img
										src="../../public/assets/imgs/skf-telesale.jpg" class="img-responsive"
										alt="báo giá vòng bi SKF chính hãng" title="báo giá vòng bi SKF chính hãng"
										width="700px" height="124px"></a>
							</div>




							<div class="well list-icon" style="background: #ca0000; color: #ffffff;">
								<div class="txt" align="justify">Mua hàng từ SKF Ngọc Anh để đảm bảo sản phẩm SKF
									chính hãng. Tránh nguy cơ mua phải vòng bi SKF giả (fake) kém chất lượng.
								</div>

							</div>


							<div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
								<a href="../../kiem-tra-vong-bi-gia-skf.html"><img
										src="../../public/assets/imgs/tra-cuu-skf-fake.png" class="img-responsive"
										alt="Kiểm tra vòng bi SKF giả" border="0" title="Kiểm tra vòng bi SKF giả"
										width="700px" height="185px"></a>
							</div>




							<div style="background: #fff; line-height: 10px" class="text-center mrg-btm-15">
								<a href="../../bao-chi-noi-ve-chung-toi/index.html" target="_blank"><img
										alt="Báo chí nói về SKF Ngọc Anh" class="img-responsive"
										src="../../public/cuploads/images/baiviet/baochi.jpg" width="700px"
										height="326px"></a>
							</div>


							<div class="news-view"
								style="border-radius: 6px; border: 1px solid #eaeaea; padding: 15px; margin-bottom: 2px; background-color: #ffffff;">

								<div style="padding-bottom: 10px">
									<strong>SKF NGỌC ANH - Địa chỉ mua Vòng bi SKF 608-2RSH chính hãng, uy tín, giao
										hàng toàn Quốc, Hỗ trợ 24/7</strong><br><br>
									[ <strong>Đại lý vòng bi SKF tại Hà Nội</strong> ]
									<br><a href="https://g.page/r/CaCKIojdvDjUEAE" target="_blank"
										rel="nofollow"><span style="color:#000000">LK 01.10, Liền kề Tổ 9 Mỗ Lao,
											Phường Mộ Lao, Hà Đông, Hà Nội</span></a>
									<br>
									Tel: <a href="tel:024 85 865 866" rel="nofollow">(024) 85 865 866</a>
									<br>Hotline: <a href="tel:096 123 8558" rel="nofollow">096 123 8558</a> - <a
										href="tel:033 999 5999" rel="nofollow">033 999 5999</a><br>
									Email: <a href="mailto:info@ngocanh.com" rel="nofollow">info@ngocanh.com</a>
								</div>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.307897096861!2d105.77836861493184!3d20.98029148602459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd438bcdd88228aa0!2zU0tGIE5n4buNYyBBbmggLSDEkOG6oWkgbMO9IHXhu7cgcXV54buBbiB2w7JuZyBiaSBTS0YgY2jDrW5oIGjDo25n!5e0!3m2!1svi!2s!4v1627809861876!5m2!1svi!2s"
									width="100%" height="150" style="border:0;" allowfullscreen=""
									loading="lazy"></iframe>


							</div>
							<br>
						</div>

					</div>
				</div>


				<div class="cat-filter">
					<div class="container">
						<ul class="list-unstyled">
							<li class="first">Hiển thị theo:</li>

							<li><a href="../vong-bi-cau.html">Vòng bi cầu SKF</a></li>
							<li><a href="../vong-bi-tu-lua.html">Vòng bi đỡ tự lựa SKF</a></li>
							<li><a href="../vong-bi-do-chan.html">Vòng bi đỡ chặn SKF</a></li>
							<li><a href="../vong-bi-tiep-xuc-bon-diem.html">Vòng bi tiếp xúc bốn điểm SKF</a></li>
							<li><a href="../Vong-bi-tiep-xuc-goc-2-day.html">Vòng bi tiếp xúc góc 2 dãy</a></li>
							<li><a href="../vong-bi-chan.html">Vòng bi chặn trục SKF</a></li>
							<li><a href="../vong-bi-con.html">Vòng bi côn SKF</a></li>
							<li><a href="../vong-bi-tang-trong.html">Vòng bi tang trống 2 dãy tự lựa</a></li>
							<li><a href="../Vong-bi-tang-trong-chan-truc.html">Vòng bi tang trống chặn trục</a></li>
							<li><a href="../vong-bi-mat-cau.html">Vòng bi mặt cầu SKF</a></li>
							<li><a href="../vong-bi-dua-do.html">Vòng bi đũa đỡ SKF</a></li>
							<li><a href="../vong-bi-yar.html">Vòng bi YAR</a></li>
							<li><a href="../vong-bi-kim.html">Vòng bi kim</a></li>
							<li><a href="../goi-do-skf-2.html">Gối đỡ SKF</a></li>
							<li><a href="../vong-bi-xe-tai.html">Vòng bi xe tải</a></li>
							<li><a href="../Phot-chan-dau-SKF.html">Phớt chặn dầu SKF</a></li>
							<li><a href="../mo-skf.html">Mỡ bôi trơn SKF</a></li>
							<li><a href="../dung-cu-skf-2.html">Dụng cụ bảo trì SKF</a></li>
							<li><a href="../ong-lot-vong-bi.html">Ống lót vòng bi</a></li>
							<li><a href="../Vong-bi-CARB-SKF.html">Vòng bi CARB SKF</a></li>
							<li><a href="../vong-bi-xe-may.html">Vòng bi xe máy</a></li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</div>


	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		// do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
