<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Footer/tool_info_1_2_1';
?>
<style>
    .tool_info_1_2_1{
        width: 100%;
        height: 69px;
        position: fixed;
        background: #fff;
        left: 0;
        bottom: 0;
        z-index: 1;
        display:none;
    }
    .tool_info_1_2_1 .container {
        max-width: 480px;
        padding: 0;
        margin: 0 auto
    }
    
    .tool_info_1_2_1__box {
        display: flex
    }
    
    .tool_info_1_2_1__item {
        width: 20%;
        text-align: center;
        padding: 10px 0;
        border-left: 1px solid #1475bc
    }
    .tool_info_1_2_1__item:nth-child(1){
        background: #07a738;
    }
    .tool_info_1_2_1__item:nth-child(2){
        background: #246a9a;
    }
    .tool_info_1_2_1__item:nth-child(3){
        background: #1999f1;
    }
    .tool_info_1_2_1__item:nth-child(4){
        background: #daa236;
    }
    .tool_info_1_2_1__item:nth-child(5){
        background: #ff8212;
    }
    
    .tool_info_1_2_1__item a {
        text-decoration: none;
        color: #fff
    }
    
    .tool_info_1_2_1 .icon {
        padding-top: 5px
    }
    
    .tool_info_1_2_1 .call {
        background: #07a738
    }
    
    .tool_info_1_2_1 .zalo {
        background: #246a9a
    }
    
    .tool_info_1_2_1 .messengers {
        background: #1999f1
    }
    
    .tool_info_1_2_1 .baogia {
        background: #daa236
    }
    
    .tool_info_1_2_1 .vitri {
        background: #ff8212
    }
    @media (max-width:480px){
        .tool_info_1_2_1{
            display:block;
        }
    }
    @media (max-width: 375px) {
        .tool_info_1_2_1__item a {
            font-size: 14px
        }
    }
    
</style>   
<div class="tool_info_1_2_1">
    <div class="container">
        <div class="tool_info_1_2_1__box">
                <div class="tool_info_1_2_1__item">
                    <a href="tel:19006466"> Gọi điện
                        <div class="icon">
                            <img width="21" height="21" src="<?php echo $path ?>/images/call.png" alt="Gọi điện">
                        </div>
                    </a>
                </div>
                <div class="tool_info_1_2_1__item">
                    <a href=""> Zalo
                        <div class="icon">
                            <img width="26" height="25" src="<?php echo $path ?>/images/zalo.png" alt="Zalo">
                        </div>
                    </a>
                </div>
                <div class="tool_info_1_2_1__item">
                    <a class="notiprice"> Báo giá
                        <div class="icon">
                            <img width="30" height="19" src="<?php echo $path ?>/images/dola.png" alt="Báo giá">
                        </div>
                    </a>
                </div>
                <div class="tool_info_1_2_1__item">
                    <a href="#"> Ưu đãi
                        <div class="icon">
                            <img width="29" height="21" src="<?php echo $path ?>/images/ud.png" alt="Ưu đãi">
                        </div>
                </div></a>
                <div class="tool_info_1_2_1__item">
                    <a class="popup_map_1_0_0__click" > Vị trí
                        <div class="icon">
                            <img width="19" height="23" src="<?php echo $path ?>/images/vt.png" alt="Vị trí">
                        </div>
                    </a>
                </div>
            </div>
    </div>
</div>


