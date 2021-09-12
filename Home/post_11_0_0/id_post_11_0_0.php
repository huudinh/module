<?php
    /* POST 6.0.0 */
    'id_post_6_0_0' => array(
        'key' => 'id_post_6_0_0',
        'name' => 'post_6_0_0',
        'label' => 'Post 6.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                'key' => 'id_post_6_0_0_tab2_sub1',
                'label' => 'Bài Viết Dịch Vụ',
                'name' => 'post_info',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    'layout_homeTitle1' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout1',
                        'name' => 'post_info_box1',
                        'label' => 'Tiêu Đề',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout1_sub1',
                                'label' => 'Tiêu đề',
                                'name' => 'title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            )                                    
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle4' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout4',
                        'name' => 'post_info_box4',
                        'label' => 'Chú Thích',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout4_box1',
                                'label' => 'Chú thích',
                                'name' => 'note_post',
                                'type' => 'textarea',
                                'instructions' => '
                                    
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 2,
                                'new_lines' => '',
                            ),                                           
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle5' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout5',
                        'name' => 'post_info_box5',
                        'label' => 'Thêm thẻ p',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout5_box1',
                                'label' => 'Nội dung thẻ p',
                                'name' => 'the_p',
                                'type' => 'textarea',
                                'instructions' => '
                                    
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 2,
                                'new_lines' => '',
                            ),                                           
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle6' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout6',
                        'name' => 'post_info_box6',
                        'label' => 'Danh Sách Bài Viết',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1',
                                'label' => 'Danh Sách Bài Viết',
                                'name' => 'list_post',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => array(
                                    'layout_homeTitle' => array(
                                        'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1_sub1',
                                        'name' => 'list_post_box',
                                        'label' => 'Danh Sách Bài Viết',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1_sub1_child1',
                                                'label' => 'Chi tiết bài viết',
                                                'name' => 'post_detail',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1 : Tiêu đề bài viết <br>
                                                    Dòng 2 : Link ảnh ( Size 192x110 ) <br>
                                                    Dòng 3 : Link bài viết
                                                ',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'wrapper' => array(
                                                    'width' => '',
                                                    'class' => '',
                                                    'id' => '',
                                                ),
                                                'default_value' => '',
                                                'placeholder' => '',
                                                'maxlength' => '',
                                                'rows' => 3,
                                                'new_lines' => '',
                                            ),    
                                            // End Field Base                       
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Add Row',
                                'min' => '',
                                'max' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle7' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout7',
                        'name' => 'post_info_box7',
                        'label' => 'Công Nghệ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout7_box1',
                                'label' => 'Link ảnh',
                                'name' => 'img_cn',
                                'type' => 'text',
                                'instructions' => 'Size 405x405 ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout7_box2',
                                'label' => 'Chi tiết',
                                'name' => 'detail_cn',
                                'type' => 'wysiwyg',
                                'instructions' => 'ul > li',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'tabs' => 'all',
                                'toolbar' => 'full',
                                'media_upload' => 1,
                                'delay' => 0,
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle8' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout8',
                        'name' => 'post_info_box8',
                        'label' => 'Đăng Ký',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout8_box1',
                                'label' => 'Chi tiết',
                                'name' => 'regist',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1 : Mô tả <br>
                                    Dòng 2 : Tên nút button <br>
                                    Dòng 3 : Class đăng ký
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 4,
                                'new_lines' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle9' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout9',
                        'name' => 'post_info_box9',
                        'label' => 'Lời Khuyên',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout9_box1',
                                'label' => 'Lời khuyên',
                                'name' => 'lk_post',
                                'type' => 'textarea',
                                'instructions' => '
                                    
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 2,
                                'new_lines' => '',
                            ),                                           
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle10' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout10',
                        'name' => 'post_info_box10',
                        'label' => 'Quy Trình',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1',
                                'label' => 'Chi Tiết Quy Trình',
                                'name' => 'list_qt',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => array(
                                    'layout_homeTitle' => array(
                                        'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1_sub1',
                                        'name' => 'list_qt_box',
                                        'label' => 'Chi Tiết Quy Trình',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1_sub1_child1',
                                                'label' => 'Chi tiết',
                                                'name' => 'detail_qt',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1 : Tiêu đề bước <br>
                                                    Dòng 2 : Link ảnh ( Size 192x110 ) <br>
                                                    Dòng 3 : Mô ta
                                                ',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'wrapper' => array(
                                                    'width' => '',
                                                    'class' => '',
                                                    'id' => '',
                                                ),
                                                'default_value' => '',
                                                'placeholder' => '',
                                                'maxlength' => '',
                                                'rows' => 3,
                                                'new_lines' => '',
                                            ),    
                                            // End Field Base                       
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Add Row',
                                'min' => '',
                                'max' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle11' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout11',
                        'name' => 'post_info_box11',
                        'label' => 'Bảng Giá Dịch Vụ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout11_box2',
                                'label' => 'Tiêu đề cột bảng giá',
                                'name' => 'title_col',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1 : Tiêu đề trái<br>
                                    Dòng 2 : Tiêu đề phải<br>
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 2,
                                'new_lines' => '',
                            ),    
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1',
                                'label' => 'Chi Tiết Bảng Giá',
                                'name' => 'table_price',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => array(
                                    'layout_homeTitle' => array(
                                        'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1_sub1',
                                        'name' => 'table_price_box',
                                        'label' => 'Chi Tiết Bảng Giá',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1_sub1_child1',
                                                'label' => 'Chi tiết',
                                                'name' => 'detail_table',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1 : Tiêu đề dịch vụ <br>
                                                    Dòng 2 : Chi phí <br>
                                                ',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'wrapper' => array(
                                                    'width' => '',
                                                    'class' => '',
                                                    'id' => '',
                                                ),
                                                'default_value' => '',
                                                'placeholder' => '',
                                                'maxlength' => '',
                                                'rows' => 2,
                                                'new_lines' => '',
                                            ),    
                                            // End Field Base                       
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Add Row',
                                'min' => '',
                                'max' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle12' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout12',
                        'name' => 'post_info_box12',
                        'label' => 'Banner',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout12_box1',
                                'label' => 'Chi tiết banner',
                                'name' => 'banner',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1 : Link ảnh ( Size 610x310 ) <br>
                                    Dòng 2 : Link xem chi tiết
                                ',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 2,
                                'new_lines' => '',
                            ),                                           
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    'layout_homeTitle13' => array(
                        'key' => 'id_post_6_0_0_tab2_sub1_layout13',
                        'name' => 'post_info_box13',
                        'label' => 'Ảnh Trước Sau',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout13_box2',
                                'label' => 'Link xem tất cả hình ảnh trước sau',
                                'name' => 'link_view_img',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1',
                                'label' => 'Ảnh trước sau',
                                'name' => 'img_bf',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => array(
                                    'layout_homeTitle' => array(
                                        'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1_sub1',
                                        'name' => 'img_bf_box',
                                        'label' => 'Ảnh trước sau',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1_sub1_child1',
                                                'label' => 'Chi tiết',
                                                'name' => 'img_bf_detail',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1 : Link ảnh ( Size 610x262 ) <br>
                                                ',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'wrapper' => array(
                                                    'width' => '',
                                                    'class' => '',
                                                    'id' => '',
                                                ),
                                                'default_value' => '',
                                                'placeholder' => '',
                                                'maxlength' => '',
                                                'rows' => 2,
                                                'new_lines' => '',
                                            ),    
                                            // End Field Base                       
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Add Row',
                                'min' => '',
                                'max' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Thêm Dịch Vụ',
                'min' => '',
                'max' => '',
            ),

            
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END POST 6.0.0 */
?>