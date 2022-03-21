<style>
	
	.breadcrumb_1_0_0 {
		width: 100%;
		height: auto;
		background: #ececec;
		padding: 10px;
		font-size: 14px;
		overflow: hidden;
	}

	.breadcrumb_1_0_0 p {
		margin: 0
	}

	.breadcrumb_1_0_0 span {
		color: #333
	}

	.breadcrumb_1_0_0 a {
		color: #333
	}

</style>

<div class="breadcrumb_1_0_0">
	<?php //if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
	<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
</div>
