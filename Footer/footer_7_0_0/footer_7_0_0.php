<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Footer/footer_7_0_0';	
	if($check == 0){
		$css_inline .= '
			<style>
				.footer_7_0_0 h2, .footer_7_0_0__info p {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
				
				.footer_7_0_0 {
					background: #005B59;
					padding-top: 30px;
					z-index: 2;
					position: relative;
				}
				.footer_7_0_0 .mb {
					display: none;
				}
				.footer_7_0_0__container {
					width: 73%;
					margin: 0 auto;
					padding-bottom: 20px;
				}
				.footer_7_0_0__bct {
					text-align: center;
					margin: 20px 0;
				}
				.footer_7_0_0__logo {
					text-align: center;
				}
				.footer_7_0_0__sub {
					color: #eeee;
					text-align: center;
					font-size: 15px;
					background: #014D4B;
					padding: 10px 0;
				}
				.footer_7_0_0__social {
					width: 76%;
					margin: 20px auto 0;
				}
				.footer_7_0_0__social a {
					margin: 0 10px;
				}
				.footer_7_0_0__boxif {
					text-align: center;
				}
				.footer_7_0_0__boxif p {
					color: #fff;
					font-size: 13px;
				}
				.footer_7_0_0__boxif p a {
					color: #EFB958;
					text-decoration: underline;
				}
				.footer_7_0_0__img {
					text-align: center;
					padding-top: 20px;
				}
				.footer_7_0_0 h2 {
					color: #fff;
					text-transform: uppercase;
					font-weight: 600;
					font-size: 20px;
					margin-bottom: 20px;
					margin-top: 0;
				}
				.footer_7_0_0__info p {
					color: #fff;
					font-weight: 600;
					font-size: 18px;
					border-bottom: 1px solid #0d746f;
					margin-right: 100px;
					padding-bottom: 5px;
				}
				.footer_7_0_0__info ul {
					margin: 0;
					padding: 0;
					list-style: none;
				}
				.footer_7_0_0__info ul li {
					padding-bottom: 10px;
					color: #fff;
				}
				.footer_7_0_0__info ul li i {
					color: #EFB958;
				}
				.footer_7_0_0__info ul li a {
					color: #fff;
					transition: all 0.4s;
					font-size: 16px;
				}
				.footer_7_0_0__info ul li a p {
					margin: 0;
					color: #98B1B0;
					font-weight: 600;
				}
				.footer_7_0_0__info ul li:hover a {
					color: #EF810A;
					transition: all 0.4s;
				}
				.footer_7_0_0__regist input {
					padding: 15px 20px;
					border: none;
					margin-bottom: 10px;
					width: 100%;
				}
				.footer_7_0_0__regist button {
					background: #EF810A;
					color: #fff;
					text-transform: uppercase;
					font-weight: 600;
					width: 100%;
					border: none;
					text-align: center;
					padding: 15px;
					cursor: pointer;
					transition: all 0.4s;
				}
				.footer_7_0_0__regist button:hover {
					background: #E0C38B;
					transition: all 0.4s;
					color: #333;
				}
				.footer_7_0_0__regist a img {
					width: 80%;
				}
				.footer_7_0_0__copyright ul {
					list-style: none;
					margin: 0;
					padding: 0;
					padding-left: 100px;
					margin-top: 30px;
				}
				.footer_7_0_0__copyright ul li {
					padding-bottom: 6px;
					color: #fff;
				}
				.footer_7_0_0__copyright ul li span {
					color: #efb957;
				}
				
				@media (max-width: 1440px) {
					.footer_7_0_0__container {
					width: 100%;
					}
				}
				@media (max-width: 1366px) {
					.footer_7_0_0__social {
					width: 76%;
					margin-top: 40px;
					}
					.footer_7_0_0__copyright ul {
					padding-left: 90px;
					}
				}
				@media (max-width: 1280px) {
					.footer_7_0_0 h2 {
					font-size: 18px;
					}
					.footer_7_0_0__social {
					width: 80%;
					}
					.footer_7_0_0__copyright ul {
					padding-left: 70px;
					}
				}
				@media (max-width: 1024px) {
					.footer_7_0_0 {
					padding-top: 25px;
					}
					.footer_7_0_0__container {
					width: 90%;
					}
					.footer_7_0_0 h2 {
					font-size: 16px;
					}
					.footer_7_0_0__social {
					width: 100%;
					text-align: center;
					}
					.footer_7_0_0__social a {
					margin: 0 5px;
					}
					.footer_7_0_0__sub {
					font-size: 14px;
					}
					.footer_7_0_0__info p {
					font-size: 14px;
					margin-right: 0;
					}
					.footer_7_0_0__info ul li {
					font-size: 12px;
					padding-bottom: 17px;
					}
					.footer_7_0_0__regist a img {
					width: 100%;
					}
					.footer_7_0_0__copyright ul {
					padding-left: 10px;
					}
				}
				@media (max-width: 812px) {
					.footer_7_0_0__logo img {
					width: 70%;
					height:auto;
					}
					.footer_7_0_0__social a {
					margin: 0 2px;
					}
					.footer_7_0_0 h2 {
					font-size: 14px;
					text-align: center;
					}
					.footer_7_0_0__sub {
					font-size: 12px;
					padding-top: 20px;
					}
					.footer_7_0_0__info ul li {
					padding-bottom: 13px;
					}
					.footer_7_0_0 .col-md-4:nth-child(2) {
					text-align: center;
					}
					.footer_7_0_0__regist input {
					padding: 10px;
					}
					.footer_7_0_0__regist button {
					padding: 10px;
					font-size: 14px;
					}
					.footer_7_0_0__copyright {
					font-size: 14px;
					}
				}
				@media (max-width: 414px) {
					.footer_7_0_0 {
					padding-top: 25px;
					padding-bottom: 50px;
					}
					.footer_7_0_0__container {
					width: 90%;
					padding-bottom: 10px;
					}
					.footer_7_0_0 .mb {
					display: block;
					}
					.footer_7_0_0 .pc {
					display: none;
					}
					.footer_7_0_0__img {
					padding-top: 10px;
					}
					.footer_7_0_0__logo img {
					width: 40%;
					}
					.footer_7_0_0__social {
					width: 100%;
					margin-top: 10px;
					}
					.footer_7_0_0 .col-md-3 {
					margin-bottom: 10px;
					}
					.footer_7_0_0 .col-md-3:nth-child(4) {
					margin-bottom: 0;
					}
					.footer_7_0_0 .col-md-3:nth-child(1) {
					margin-bottom: 0;
					}
					.footer_7_0_0 h2 {
					margin-bottom: 10px;
					margin-top: 20px;
					font-size: 16px;
					text-align: left;
					}
					.footer_7_0_0__info {
					text-align: left;
					}
					.footer_7_0_0__info p {
					font-size: 16px;
					}
					.footer_7_0_0__info ul li {
					padding-bottom: 10px;
					font-size: 14px;
					}
					.footer_7_0_0__info ul li a {
					display: flex;
					align-items: center;
					justify-content: center;
					font-size: 14px;
					}
					.footer_7_0_0__info ul li a p {
					padding-right: 10px;
					}
					.footer_7_0_0__regist {
					padding-top: 20px;
					}
					.footer_7_0_0__regist input {
					padding: 5px 10px;
					margin-bottom: 5px;
					}
					.footer_7_0_0__regist button {
					padding: 5px;
					}
					.footer_7_0_0__copyright {
					font-size: 14px;
					}
					.footer_7_0_0__copyright ul {
					padding-left: 0;
					}
					.footer_7_0_0__copyright br {
					display: block;
					}
					.footer_7_0_0__boxif p:last-child {
					margin-bottom: 0;
					}
				}
				@media (max-width: 375px) {
					.footer_7_0_0 h2 {
					font-size: 18px;
					}
				}
				@media (max-width: 360px) {
					.footer_7_0_0__copyright {
					font-size: 14px;
					}
				}
				@media (max-width: 320px) {
					.footer_7_0_0__container {
					width: 95%;
					}
					.footer_7_0_0__info ul li {
					font-size: 12px;
					}
					.footer_7_0_0__info ul li a {
					font-size: 12px;
					}
				}
			</style>
		';
	}
	$fields = $field['footer'];
?>

<?php //get_template_part('Module_v2/module_footer_top');?>

<section class="footer_7_0_0">
	<div class="footer_7_0_0__container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer_7_0_0__logo">
					<img width="242" height="205" class="lazy" data-src="<?php echo $path; ?>/images/logo.png" alt="B???nh vi???n th???m m??? ????ng ??">
				</div>
				<div class="footer_7_0_0__bct">
				<a href="http://online.gov.vn/Home/WebDetails/70199" target="_blank" rel="nofollow">
					<img width="125" height="46" class="lazy" data-src="<?php echo $path; ?>/images/bo-cong-thuong.png" alt="B??? c??ng th????ng">
				</a>
				</div>
				<div class="footer_7_0_0__copyright">
				<ul>
					<li>B??c s?? t?? v???n (24/7): <span>1900.6499</span></li>
					<li>Di ?????ng: <span>0962.77.88.66</span></li>
					<li>Email: <span>tuvan@benhvienthammydonga.vn </span></li>
				</ul>
				</div>
				
			</div>
			<div class="col-md-4">
				<h2>Li??n h??? v???i ????ng ??</h2>
				<div class="footer_7_0_0__info">
					<p>B???nh vi???n Th???m m??? ????ng ?? </p>
					<ul>
					<li><i class="icon-location"></i><b>TP.HCM:</b> 218 Nguy???n Tr??i, Ph?????ng 3, Q5</li>
					</ul>
					<p class="hide_temp">H??? th???ng th???m m??? ????ng ??</p>
					<ul>
					<li class="hide_temp"><i class="icon-location"></i><b>H?? N???i:</b> S??? 212 Kim M??, Ba ????nh</li>
					<li class="hide_temp"><i class="icon-location"></i><b>H??? Ch?? Minh:</b> 69A, ???????ng 3/2 , Qu???n 10</li>
					<li class="hide_temp"><i class="icon-location"></i><b>H???i Ph??ng:</b> S??? 378 T?? Hi???u, Q. L?? Ch??n</li>
					<li class="hide_temp"><i class="icon-location"></i><b>Ngh??? An:</b> S??? 148 Nguy???n V??n C???, P. H??ng Ph??c</li>
					<li class="hide_temp"><i class="icon-location"></i><b>???? N???ng:</b> S??? 293 H??ng V????ng, Q. Thanh Kh??</li>
					<li class="hide_temp"><i class="icon-location"></i><b>C???n Th??:</b> S??? 28 L?? T??? Tr???ng, Q. Ninh Ki???u</li>
					<li class="hide_temp"><i class="icon-location"></i><b>B??nh D????ng:</b> 688A C??ch m???ng Th??ng T??m, P.Ch??nh Ngh??a, TP.Th??? D???u M???t</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="pc">Theo d??i fanpage</h2>
				<div class="footer_7_0_0__regist">
					<a href="https://www.facebook.com/ThamMyDongA/" target="_blank" rel="nofollow">
						<img width="294" height="206" class="lazy" data-src="<?php echo $path; ?>/images/fb-thumb.jpg" alt="Fanpage ????ng ??">
					</a>
				</div>
				<div class="footer_7_0_0__social">
					<a href="https://zalo.me/878201671944129168" target="_blank" rel="nofollow">
						<img width="40" height="40" class="lazy" data-src="<?php echo $path; ?>/images/zalo.jpg?ver=2" alt="Zalo ????ng ??">
					</a>
					<a href="https://www.youtube.com/user/thammyviendonga" target="_blank" rel="nofollow">
						<img width="40" height="40" class="lazy" data-src="<?php echo $path; ?>/images/yt.jpg?ver=2" alt="Youtube ????ng ??">
					</a>
					<a href="https://www.instagram.com/accounts/login/?next=/bvtm_donga/" target="_blank" rel="nofollow">
						<img width="40" height="40" class="lazy" data-src="<?php echo $path; ?>/images/insta.jpg" alt="Instagram ????ng ??">
					</a>
					<a href="#" target="_blank" rel="nofollow">
						<img width="40" height="40" class="lazy" data-src="<?php echo $path; ?>/images/phone.jpg" alt="??i???n tho???i li??n h???">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_7_0_0__boxif">
	<p>C??NG TY TNHH B???NH VI???N TH???M M??? ????NG ??</p>
	<p>Gi???y ch???ng nh???n ????ng k?? doanh nghi???p s???: 0314690587 do Ph??ng ????ng k?? kinh doanh - S??? K??? ho???ch v?? ?????u t?? TP. H??? Ch?? Minh c???p ng??y 24/10/2017 </p>
	<p>Gi???y ph??p ho???t ?????ng kh??m b???nh, ch???a b???nh s???: 238/BYT - GPH?? do B??? Y t??? c???p ng??y 06/11/2018</p>
	<p><a href="https://benhvienthammydonga.vn/chinh-sach-bao-mat/" target="_blank" rel="nofollow">Ch??nh s??ch b???o m???t</a></p>
	<p>
		<a href="https://benhvienthammydonga.vn/chinh-sach-bao-mat/" target="_blank" rel="nofollow"><img width="153" height="28" class="lazy" data-src="<?php echo $path; ?>/images/dmca.png" alt="DMCA"></a>
	</p>
	</div>
	<div class="footer_7_0_0__sub pc">
		*L??u ??: K???t qu??? ph??? thu???c v??o c?? ?????a m???i ng?????i
	</div>
</section>

<script>
    
    let hideHCM69 = document.getElementsByClassName('tab-conten__item-1');
    for(i = 0; i < hideHCM69.length; i++){
        hideHCM69[i].style.display = 'none';
    }
        console.log('ok');
</script>

<?php get_template_part('Module_v2/Other/gotop_1_0_0/gotop_1_0_0'); ?>
<?php get_template_part('Module_v2/Popup/popup_regist_2_0_1/popup_regist_2_0_1');?>
<script src="https://benhvienthammydonga.vn/quangcao247/contact/template/js/js.js?t=1123467"></script>

<style>
	.tab-content__item:nth-child(5){display:none}
</style>
