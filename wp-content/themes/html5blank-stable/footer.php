					</div><!--.main-content-->
				</div>
			</div>
			<!--.main-container-->
			
			<!-- footer -->
			<div class="footer-container">
				<div class="footer-suppor-angency">
					<div class="block-support">
						<h2 class="title-block"><span>Tư vấn về nấm lim xanh</span> - hãy liên hệ ngay với chúng tôi</h2>
						<ul>
							<li><a href="tel:04.3797.0138">
								<img src="<?php echo get_template_directory_uri(); ?>/img/support1.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Tổng đài tư vấn</span><br/>
									<span class="phone">04.3797.0138</span>
								</div>
							</a></li>
							<li><a href="tel:0936.476.588">
								<img src="<?php echo get_template_directory_uri(); ?>/img/support2.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Dược sỹ Dung</span><br/>
									<span class="phone">0936.476.588</span>
								</div>
							</a></li>
							<li><a href="tel:0919.257.838">
								<img src="<?php echo get_template_directory_uri(); ?>/img/support3.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Dược sỹ Hoa</span><br/>
									<span class="phone">0919.257.838</span>
								</div>
							</a></li>
							<li class="last"><a href="tel:04.85878602">
								<img src="<?php echo get_template_directory_uri(); ?>/img/support4.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Hỗ trợ hậu mãi</span><br/>
									<span class="phone">04.85878602</span>
								</div>
							</a></li>
						</ul>
					</div>
					<div class="block-angency">
						<ul class="tab-link">
							<li class="active" item="tab4"  tab-link="tab-link" tab-content="tab-content"><span>Đại lý Miền Bắc</span></li>
							<li item="tab5" tab-link="tab-link" tab-content="tab-content"><span>Đại lý Miền Trung</span></li>
							<li item="tab6"  tab-link="tab-link" tab-content="tab-content"><span>Đại lý Miền Nam</span></li>
						</ul>
						<p>Sản phẩm độc quyền của Công ty TNHH Nấm lim xanh Việt Nam chỉ có bán tại các đại lý chính hãng trên toàn quốc!</p>
						<div class="tab-content">
							<div class="active" id="tab4">
								<ul>
									<?php
										$args_angency1 = array(
											'category__in' => array(2),
											'order'   => 'ASC'
										);
										echo CustomQuery($args_angency1,'list-angency');
									?>
								</ul>
							</div>
							<div id="tab5">
								<ul>
									<?php
										$args_angency2 = array(
											'category__in' => array(3),
											'order'   => 'ASC'
										);
										echo CustomQuery($args_angency2,'list-angency');
									?>
								</ul>
							</div>
							<div id="tab6">
								<ul>
									<?php
										$args_angency3 = array(
											'category__in' => array(4),
											'order'   => 'ASC'
										);
										echo CustomQuery($args_angency3,'list-angency');
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer">
					<footer class="footer-content" role="contentinfo">
						<div class="footer-top">
							<h2>Công ty TNHH Nông Lâm Sản Tiên Phước</h2>
							<p>Liên hệ : 04.3797.0138 - 0936.476.588</p>
							<p>Trụ sở: 158/149 Hồ Tùng Mậu – Nam Từ Liêm – Hà Nội</p>
							<p>Xí nghiệp: Huyện Tiên Phước - Tỉnh Quảng Nam</p>
							<p>Email: <a href="mailto:nonglamsantienphuoc@gmail.com">nonglamsantienphuoc@gmail.com</a> - Website: <a href="nonglamsantienphuoc.com">www.nonglamsantienphuoc.com</a></p>
						</div>
						<!-- copyright -->
						<p class="copyright">Copyright &copy; - <?php echo date("Y"); ?> Công ty TNHH Nấm lim xanh Việt Nam</p>
						<!-- /copyright -->
					</footer>
				</div>
			</div>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>

	</body>
</html>
