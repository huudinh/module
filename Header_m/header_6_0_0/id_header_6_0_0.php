<?php
   /*HEADER 6.0.0*/
   'id_header_6_0_0' => array(
    'key' => 'id_header_6_0_0',
    'name' => 'header_6_0_0',
    'label' => 'Header 6.0.0',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'id_slider_6_0_0_tab1',
            'label' => 'Thông Tin Chung',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_slider_6_0_0_tab1_sub1',
            'label' => 'Thông tin chung',
            'name' => 'about',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1 : Slogan Desktop <br>
                Dòng 2 : Slogan Mobile <br>
                Dòng 3 : Link liên kết facebook <br>
                Dòng 4 : Link liên kết youtube <br>
                Dòng 5 : Link liên kết zalo <br>
                Dòng 6 : Link liên kết instagram <br>
                Dòng 7 : Thuộc tính link (vd: nofollow)
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
            'rows' => 7,
            'new_lines' => '',
        ),
        array(
            'key' => 'id_header_6_0_0_tab1_sub1',
            'label' => 'Thời gian',
            'name' => 'col1',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1: Giờ mở cửa <br>
                Dòng 2: Các ngày làm việc trong tuần
            ',
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
            'rows' => 2,
        ),
        array(
            'key' => 'id_header_6_0_0_tab1_sub2',
            'label' => 'Tư vấn',
            'name' => 'col2',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1: Tiêu đề tư vấn <br>
                Dòng 2: Số điện thoại liên hệ 
            ',
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
            'rows' => 2,
        ),
        array(
            'key' => 'id_slider_6_0_0_tab2',
            'label' => 'Cài Đặt Menu',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_header_6_0_0_sub1',
            'label' => 'Menu',
            'name' => 'id_header_6_0_0_sub1',
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
                'id_header_6_0_0_sub1_layout1' => array(
                    'key' => 'id_header_6_0_0_sub1_layout1',
                    'name' => 'menu_don',
                    'label' => 'Menu Đơn',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_header_6_0_0_sub1_layout1_sub',
                            'label' => 'Tên Menu',
                            'name' => 'title',
                            'type' => 'textarea',
                            'instructions' => '
                              Dòng 1:  Tên Menu <br>
                              Dòng 2: Link <br>
                              Dòng 3: Thuộc tính link (vd: nofollow)
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
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_header_6_0_0_sub1_layout2' => array(
                    'key' => 'id_header_6_0_0_sub1_layout2',
                    'name' => 'menu_sub_full',
                    'label' => 'Mega Menu',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_header_6_0_0_sub1_layout2_sub1',
                            'label' => 'Menu cha',
                            'name' => 'title',
                            'type' => 'textarea',
                            'instructions' => '
                                Dòng 1 : Tên menu <br>
                                Dòng 2 : Link <br>
                                Dòng 3 : Số cột <br>
                                Dòng 4: Thuộc tính link (vd: nofollow)
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
                        array(
                            'key' => 'id_header_6_0_0_sub1_layout2_sub2',
                            'label' => 'Sub Menu',
                            'name' => 'col1',
                            'type' => 'wysiwyg',
                            'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
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
                    ),
                    'min' => '',
                    'max' => '',
                ),
            ),
            'button_label' => 'Thêm Menu',
            'min' => '',
            'max' => '',
        ),
    ),
    'min' => '',
    'max' => '',
),
/*END HEADER 6.0.0*/
?>