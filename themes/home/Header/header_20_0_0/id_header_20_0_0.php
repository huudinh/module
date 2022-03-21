<?php
                                            /*HEADER 20.0.0*/
                                            'id_header_20_0_0' => array(
                                                'key' => 'id_header_20_0_0',
                                                'name' => 'header_20_0_0',
                                                'label' => 'Header 20.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_20_0_0_tab2',
                                                        'label' => 'Menu Popup & Mobile',
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
                                                        'key' => 'id_header_20_0_0_sub1',
                                                        'label' => 'Menu',
                                                        'name' => 'id_header_20_0_0_sub1',
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
                                                            'id_header_20_0_0_sub1_layout1' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout1',
                                                                'name' => 'menu_don',
                                                                'label' => 'Menu Đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout1_sub',
                                                                        'label' => 'Tên Menu',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
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
                                                            'id_header_20_0_0_sub1_layout2' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout2',
                                                                'name' => 'menu_sub',
                                                                'label' => 'Menu Sub',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout2_sub1',
                                                                        'label' => 'Menu Cha',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
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
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout2_sub2',
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
                                                            'id_header_20_0_0_sub1_layout3' => array(
                                                                'key' => 'id_header_20_0_0_sub1_layout3',
                                                                'name' => 'menu_sub_full',
                                                                'label' => 'Mega Menu',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2',
                                                                        'label' => '',
                                                                        'name' => 'hd_title',
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
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2',
                                                                        'label' => 'Dịch vụ',
                                                                        'name' => 'hd_title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Dòng 1: Tên Dịch vụ <br>
                                                                                           Dòng 2: Tên icon (Giới thiệu : 1, Mắt : 2, Mũi : 3, Khuôn mặt : 4, Body : 5, Trẻ hóa : 6, Da liễu : 7, Spa:8, Nha khoa :9 ',
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
                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1',
                                                                        'label' => 'Menu',
                                                                        'name' => 'id_header_20_0_0_sub1_layout3_sub2_tab1',
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
                                                                            'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1' => array(
                                                                                'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1',
                                                                                'name' => 'menu_don_sub',
                                                                                'label' => 'Menu Sub (1 cấp)',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    array(
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab1_tab1_layout1',
                                                                                        'name' => 'titlesig',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tên menu <br>
                                                                                            Dòng 2 : Link <br>
                                                                                            Dòng 3 : Điền rel="nofollow" Không có để trống
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
                                                                            'id_header_20_0_0_sub1_layout3_sub2_tab1_tab2' => array(
                                                                                'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1',
                                                                                'name' => 'menu_da_cap_sub',
                                                                                'label' => 'Menu Sub (2 cấp)',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    array(
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1_layout1',
                                                                                        'name' => 'title2',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tên menu <br>
                                                                                            Dòng 2 : Link <br>                                                                                            
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
                                                                                        'key' => 'id_header_20_0_0_sub1_layout3_sub2_tab2_tab1_layout2',
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
                                                                        'button_label' => 'Thêm Menu sub',
                                                                        'min' => '',
                                                                        'max' => '',
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
                                                    array(
                                                        'key' => 'id_header_20_0_0_tab3',
                                                        'label' => 'Menu Desktop',
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
                                                        'key' => 'id_header_20_0_0_sub3',
                                                        'label' => 'Menu PC',
                                                        'name' => 'id_header_20_0_0_sub3',
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
                                                            'id_header_20_0_0_sub3_layout1' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout1',
                                                                'name' => 'menu_donPC',
                                                                'label' => 'Menu Đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout1_sub',
                                                                        'label' => 'Tên Menu',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
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
                                                            'id_header_20_0_0_sub3_layout2' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout2',
                                                                'name' => 'menu_subPC',
                                                                'label' => 'Menu Sub PC',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout2_sub1',
                                                                        'label' => 'Menu Cha PC',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
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
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout2_sub2',
                                                                        'label' => 'Sub Menu PC',
                                                                        'name' => 'col1pc',
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
                                                            'id_header_20_0_0_sub3_layout3' => array(
                                                                'key' => 'id_header_20_0_0_sub3_layout3',
                                                                'name' => 'menu_sub_fullPC',
                                                                'label' => 'Mega Menu PC',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout3_sub1',
                                                                        'label' => 'Menu cha pc',
                                                                        'name' => 'titlePC',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên menu <br>
                                                                            Dòng 2 : Link <br>
                                                                            Dòng 3 : Số cột <br>
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
                                                                        'rows' => 6,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_20_0_0_sub3_layout3_sub2',
                                                                        'label' => 'Sub Menu PC',
                                                                        'name' => 'col1pc',
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
                                                        'button_label' => 'Thêm Menu PC',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                                ),
                                            /*END HEADER 20.0.0*/

?>