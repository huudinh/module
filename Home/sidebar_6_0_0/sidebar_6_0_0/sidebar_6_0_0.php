<?php 
    $path = get_template_directory_uri();
	$path = $path.'/Module/Sidebar/sidebar_2_0_0'; 
	$postID = get_the_ID($post->ID);
    if($check == 0){
		add_action('wp_footer', 'sidebar_2_0_0');
        function sidebar_2_0_0(){ 
			echo '
				<style>
					.sidebar_2_0_0 {
					margin-left: -10px;
					}
					.sidebar_2_0_0__title {
					height: 45px;
					line-height: 35px;
					padding: 5px;
					font-size: 15px;
					border-bottom: 1px solid #eee;
					position: relative;
					font-weight: 600;
					color: #fff;
					background: #00A8E1;
					}
					.sidebar_2_0_0__title::after {
					content: "";
					border-top: 3px solid #EF4324;
					width: 80px;
					position: absolute;
					left: 0;
					top: 0px;
					display: block;
					}
					.sidebar_2_0_0__list {
					margin-bottom: 10px;
					padding-left: 10px;
					}
					.sidebar_2_0_0__list ul {
					list-style: none;
					padding-left: 0;
					margin-bottom: 10px;
					}
					.sidebar_2_0_0__list li {
					padding: 8px 16px 8px 0;
					border-bottom: 1px solid #9e9e9e;
					}
					.sidebar_2_0_0__list li:hover a{
					color: #EF4324;
					}
					.sidebar_2_0_0__list__view {
					color: #05ADE6;
					}
					.sidebar_2_0_0__boxService {
					background-image: url(../images/boxservice-bg.jpg);
					background-position: center 0;
					background-repeat: no-repeat;
					background-size: 100%;
					padding: 10px 10px;
					margin-bottom: 10px;
					}
					.sidebar_2_0_0__boxService p {
					margin-bottom: 0;
					color: #000;
					font-weight: bold;
					font-size: 16px;
					}
					.sidebar_2_0_0__boxService a {
					color: #05ADE6;
					}
					.sidebar_2_0_0__boxSearch {
					background-image: url("data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMqaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjUtYzAxNCA3OS4xNTE0ODEsIDIwMTMvMDMvMTMtMTI6MDk6MTUgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNCREY4ODA1NEJBNTExRUFBREM1QTM5NkJDMjYzOEFFIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNCREY4ODA0NEJBNTExRUFBREM1QTM5NkJDMjYzOEFFIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3MTBBMzNBRjI4ODIxMUVBODg3NEUwNzY1NTE4QjJFOCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3MTBBMzNCMDI4ODIxMUVBODg3NEUwNzY1NTE4QjJFOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAYEBAQFBAYFBQYJBgUGCQsIBgYI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");
					background-position: center 0;
					background-repeat: no-repeat;
					background-size: 100%;
					padding: 10px;
					margin-bottom: 10px;
					}
					.sidebar_2_0_0__boxSearch p {
					margin-bottom: 0;
					color: #000;
					font-weight: bold;
					font-size: 16px;
					}
					.sidebar_2_0_0__boxSearch input {
					border-radius: 5px;
					border: 1px solid #ccc;
					height: 22px;
					width: 160px;
					position: relative;
					outline: none;
					}
					.sidebar_2_0_0__boxSearch button {
					background: none;
					border: none;
					color: #05ADE6;
					font-size: 18px;
					position: absolute;
					margin-left: -30px;
					margin-top: -2px;
					outline: none;
					cursor: pointer;
					}
					.sidebar_2_0_0__newsOther {
					margin-top: 20px;
					}
					.sidebar_2_0_0__newsOther ul {
					padding-left: 0;
					list-style: none;
					overflow: auto;
					height: 330px;
					}
					.sidebar_2_0_0__newsOther ul::-webkit-scrollbar-track {
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					border-radius: 10px;
					background-color: #F5F5F5;
					}
					.sidebar_2_0_0__newsOther ul::-webkit-scrollbar {
					width: 6px;
					background-color: #F5F5F5;
					}
					.sidebar_2_0_0__newsOther ul::-webkit-scrollbar-thumb {
					border-radius: 10px;
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					background-color: #7F8C8D;
					}
					.sidebar_2_0_0__newsOther li {
					display: flex;
					flex-wrap: wrap;
					margin-bottom: 10px;
					}
					.sidebar_2_0_0__newsOther__pic {
					width: 25%;
					margin-right: 10px;
					}
					.sidebar_2_0_0__newsOther__pic img {
					width: 100%;
					}
					.sidebar_2_0_0__newsOther__des {
					width: 70%;
					}
					.sidebar_2_0_0__newsOther__title {
					font-size: 13px;
					}
					.sidebar_2_0_0__newsOther__view {
					color: #05ADE6;
					}
					.sidebar_2_0_0__clip {
					margin: 10px 0;
					}
					.sidebar_2_0_0__clip .modal-clip {
					display: table;
					margin: 0 auto;
					max-width: 550px;
					position: relative;
					cursor: pointer;
					background: #000;
					}
					.sidebar_2_0_0__clip .modal-clip::before {
					content: "";
					display: block;
					position: absolute;
					z-index: 1;
					background: url("data:image/png;base64,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") center no-repeat;
					transition: .3s ease-out;
					background-size: 100%;
					width: 50px;
					height: 50px;
					left: calc(50% - 23px);
					top: calc(50% - 23px);
					transition: .3s;
					-webkit-filter: grayscale(100%);
					filter: grayscale(100%);
					opacity: 1;
					}
					.sidebar_2_0_0__clip .modal-clip img {
					position: relative;
					opacity: .5;
					display: block;
					width: 100%;
					}
					.sidebar_2_0_0__clip p {
					margin: 10px 0 10px 10px;
					font-weight: bold;
					color: #000;
					font-size: 12px;
					}
					.sidebar_2_0_0__video .list-iframe {
					margin-top: 10px;
					}
					// .sidebar_2_0_0__video .list-iframe .iframe {
					// display: none;
					// }
					.sidebar_2_0_0__video .list-iframe .iframe iframe {
					width: 100%;
					height: auto;
					}
					.sidebar_2_0_0__video .list-iframe .iframe p {
					color: #000;
					font-weight: 600;
					font-size: 13px;
					margin-bottom: 15px;
					}
					.sidebar_2_0_0__video .list-iframe .iframe.active {
					display: block;
					}
					.sidebar_2_0_0__video .list-video {
					margin-top: 10px;
					overflow-y: scroll;
					height: 260px;
					}
					.sidebar_2_0_0__video .list-video::-webkit-scrollbar-track {
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					border-radius: 10px;
					background-color: #F5F5F5;
					}
					.sidebar_2_0_0__video .list-video::-webkit-scrollbar {
					width: 6px;
					background-color: #F5F5F5;
					}
					.sidebar_2_0_0__video .list-video::-webkit-scrollbar-thumb {
					border-radius: 10px;
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					background-color: #7F8C8D;
					}
					.sidebar_2_0_0__video .list-video .item {
					display: flex;
					flex-wrap: wrap;
					margin-bottom: 10px;
					}
					.sidebar_2_0_0__video .list-video .item.active {
					background: #ECF0F1;
					}
					.sidebar_2_0_0__video .list-video .item .pic {
					width: 25%;
					}
					.sidebar_2_0_0__video .list-video .item .pic img {
					width: 100%;
					}
					.sidebar_2_0_0__video .list-video .item .text {
					width: 75%;
					padding-left: 10px;
					color: #000;
					font-weight: bold;
					font-size: 12px;
					}
					.sidebar_2_0_0__video .xt {
					color: #00ABE5;
					font-weight: bold;
					}
			
					@media (max-width: 1024px) {
					.sidebar_2_0_0 img {
						width: 100%;
					}
					.sidebar_2_0_0__boxService p {
						font-size: 12px;
					}
					.sidebar_2_0_0__boxService span {
						font-size: 12px;
					}
					.sidebar_2_0_0__boxSearch p {
						font-size: 12px;
					}
					.sidebar_2_0_0__boxSearch input {
						height: 18px;
						width: 130px;
					}
					.sidebar_2_0_0__boxSearch button {
						font-size: 16px;
						right: 90px;
					}
					}
					@media (max-width: 812px) {
					.sidebar_2_0_0 {
						display: none;
					}
					}
				</style>
				<script>
					$(".list-video .item ").click((function(){var tab_id=$(this).attr("data-tab");$(".iframe").removeClass("active"),$(".item").removeClass("active"),$(this).addClass("active"),$("#"+tab_id).addClass("active")}));
					function checkSearch_sb(){var x;if(""==document.forms.searchform_sb.s.value)return alert("Vui lòng nhập từ khóa cần tìm !"),!1}
					$(document).ready(function() {
						var $sticky = $(".sticky");
						var $stickyrStopper = $(".sticky-stopper");
						if (!!$sticky.offset()) { 
						  var stickyWidth = $("#sticky-width").width();
						  var menufix = $("header").height();
						  var heightMain = $("main").height();
						  var heightAside = $("aside").height();
						  var generalSidebarHeight = $sticky.innerHeight();
						  var stickyTop = $sticky.offset().top;
						  var stickOffset = 0;
						  var stickyStopperPosition = $stickyrStopper.offset().top;
						  var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset - 150;
						  var diff = stopPoint + stickOffset;
						  var stickOffsetMenufix = stickOffset + menufix;
						  $(window).scroll(function(){ // scroll event
							var windowTop = $(window).scrollTop(); // returns number
					  
							if (stopPoint < windowTop) {
								$sticky.css({ position: "initial", top: 0 });
							} else if (stickyTop < windowTop+stickOffset) {
								$sticky.css({ position: "fixed", top: stickOffsetMenufix, width: stickyWidth });
							} else if (heightMain < heightAside){
								$sticky.css({position: "initial", top: "initial",  width: stickyWidth});
							} else {
								$sticky.css({position: "absolute", top: "initial",  width: stickyWidth});
							}
						  });
					  
						}
					  });
                </script>
            ';           
        };
	}


?> 
<div class="sidebar_2_0_0">
	<?php
		foreach( $page_field as $value_0):  
		foreach( $value_0 as $value_1):  
		foreach( $value_1 as $value_2):  
		foreach( $value_2 as $value):  
			foreach( $value as $key3 => $list):
				if( $list['acf_fc_layout'] == 'sidebar_title' ):
					echo'
						<div class="sidebar_2_0_0__title">
							<i class=""></i> '.$list['title'].'
						</div>
					';
					// End Tieu De

				elseif( $list['acf_fc_layout'] == 'sidebar_sv' ):
					echo '
						<div class="sidebar_2_0_0__list">
							'.$list['content'].'
						</div>
					';
							// <a href="" class="sidebar_2_0_0__list__view">Xem thêm >></a>
					// End List Dich Vu

				elseif( $list['acf_fc_layout'] == 'sidebar_search' ):
					echo '
						<div class="sidebar_2_0_0__boxSearch">
							<p>Tra cứu bệnh</p>
							<form action="/" id="searchform_sb" name="searchform" method="get" onsubmit="return checkSearch_sb()">
								<input id="s" name="s" type="text">
								<button type="submit"><i class="icon-search-1"></i></button>
							</form>
						</div>
					';
					// End Tim Kiem

				elseif( $list['acf_fc_layout'] == 'sidebar_regist' ):
					include(locate_template('Module/Sidebar/sidebar_regist_1_0_0/sidebar_regist_1_0_0.php'));
				// End Dang Ky Tu Van

				elseif( $list['acf_fc_layout'] == 'sidebar_new' ) :
					$sidebar_new_list = $list['content'];
					if($sidebar_new_list) :
						echo '<div class="sidebar_2_0_0__list"><ul>';
							foreach ($sidebar_new_list as $post) :
								setup_postdata($post);
								$link = get_permalink($post->ID);
								$title = get_the_title($post->ID);
								$postIDs = get_the_ID($post->ID);
								if($postIDs != $postID):
									echo '
										<li><a href="'.$link.'">'.$title.'</a></li>
									';
								endif;
							endforeach;
							echo '</ul></div>';
						wp_reset_postdata();
					endif;
				//End Tin Tuc 

				elseif( $list['acf_fc_layout'] == 'sidebar_clip' ):
					echo '
						<div id="sticky-width"></div>
							<div class="sticky">
								<div class="sidebar_2_0_0__video">
						';
						foreach($list['video_sidebar'] as $key => $value2):
							$data = explode("\n",  $value2["detail_video"]);
							if($key == 0):
								echo '
										<div class="list-iframe">
											<div class="iframe active">
												<img style="display:block" class="imglink_head" onclick="showIframe()" src = "/rs?w=272&h150&src='.$data[1].'" >
												<iframe src="" style="display:none" class="videos" width="470" height="283"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
												</iframe>
												<p>'.$data[0].'</p>
											</div>
											<script>
												function showIframe() {
													document.getElementsByClassName("videos")[0].setAttribute("src", "https://www.youtube.com/embed/'.$data[2].'");
													document.getElementsByClassName("videos")[0].setAttribute("style", "display:block");
													document.getElementsByClassName("imglink_head")[0].setAttribute("style", "display:none");
												};
											</script>
										</div>
										<div class="list-video">
								';
								else:
									echo '
										
											<a onclick="showClip'.$key.'()" >
													<div class="item active " >
													<div class="pic">
														<img src="/rs?w=66&h36&src='.$data[1].'" alt="'.$data[0].'">
													</div>
													<div class="text">
													'.$data[0].'
													</div>
												</div>
											</a>
											<script>
												function showClip'.$key.'() {
													document.getElementsByClassName("videos")[0].setAttribute("src", "https://www.youtube.com/embed/'.$data[2].'?autoplay=1");
													document.getElementsByClassName("videos")[0].setAttribute("style", "display:block");
													document.getElementsByClassName("imglink_head")[0].setAttribute("style", "display:none");
												};
											</script>
											
										
									';
							endif;

					endforeach;
					echo '</div></div></div>';
					// echo '
					// 	</div>
					// 		<a href="'.$list['link_viewmore'].'" class="xt">Xem thêm >></a>
					// 	</div>
					// ';
				endif;
			endforeach;
			endforeach;
			endforeach;
			endforeach;
		endforeach;

	?>
			<!-- <div class="sidebar_2_0_0__title">
				Video
			</div> -->
			
			<!-- <div class="sidebar_2_0_0__video">
				<div class="list-iframe">
					<div class="iframe active">
						<img style="display:block" class="imglink_head" onclick="showIframe()" src = "../sidebar_2_0_0/images/sidebar-img.jpg" >
						<iframe src="https://youtube.com/embed/kjYW63CVbsE" style="display:none" class="videos" width="470" height="283"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
						</iframe>
						<p>Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà</p>
					</div>
					<script>
						function showIframe() {
							document.getElementsByClassName("videos")[0].setAttribute("src", "https://www.youtube.com/embed/tgbNymZ7vqY");
							document.getElementsByClassName("videos")[0].setAttribute("style", "display:block");
							document.getElementsByClassName("imglink_head")[0].setAttribute("style", "display:none");
						};
					</script>
				</div>
				<div class="list-video">
					<a onclick="showClip1()" >
							<div class="item active " >
							<div class="pic">
								<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					</a>
					<a onclick="showClip2()" >
						<div class="item">
							<div class="pic">
							<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					<a>
					<a onclick="showClip3()" >
						<div class="item">
							<div class="pic">
							<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					<a>
					<a onclick="showClip4()" >
						<div class="item">
							<div class="pic">
							<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					<a>
					<a onclick="showClip5()" >
						<div class="item">
							<div class="pic">
							<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					<a>
					<a onclick="showClip6()" >
						<div class="item">
							<div class="pic">
							<img src="images/new.jpg" alt="">
							</div>
							<div class="text">
								Phương pháp phẫu thuật tuyến zú tại bệnh viện Hồng Hà
							</div>
						</div>
					<a>
					<script>
						function showClip1() {
							document.getElementsByClassName("videos")[0].setAttribute("src", "https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1");
							document.getElementsByClassName("videos")[0].setAttribute("style", "display:block");
							document.getElementsByClassName("imglink_head")[0].setAttribute("style", "display:none");
						};
						function showClip2() {
							document.getElementsByClassName("videos")[0].setAttribute("src", "https://www.youtube.com/embed/kjYW63CVbsE?autoplay=1");
							document.getElementsByClassName("videos")[0].setAttribute("style", "display:block");
							document.getElementsByClassName("imglink_head")[0].setAttribute("style", "display:none");
						};
					</script>
					
				</div>
			</div> -->

<?php
	foreach( $page_field as $value_0):  
		foreach( $value_0 as $value_1):  
		foreach( $value_1 as $value_2):  
		foreach( $value_2 as $value):  
			foreach( $value as $key3 => $list):
				if( $list['acf_fc_layout'] == 'sidebar_clip' ):
					include(locate_template('Module/Popup/popup_video_1_0_0/popup_video_1_0_0.php'));
				elseif( $list['acf_fc_layout'] == 'sidebar_new' ) :
					include(locate_template('Module/Popup/popup_post_1_0_0/popup_post_1_0_0.php'));	
				endif;
			endforeach;
		endforeach;
		endforeach;
		endforeach;
	endforeach;
?>





