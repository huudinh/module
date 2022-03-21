<?php 
    /*HEADER 15.0.0*/
    'id_header_15_0_0' => array(
        'key' => 'id_header_15_0_0',
        'name' => 'header_15_0_0',
        'label' => 'Header 15.0.0',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'id_header_15_0_0_tab1',
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
                'key' => 'id_header_15_0_0_tab1_sub1',
                'label' => 'Alt-Logo',
                'name' => 'image',
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
                'key' => 'id_header_15_0_0_tab1_sub2',
                'label' => 'Hotline',
                'name' => 'hotline',
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
                'key' => 'id_header_15_0_0_tab2',
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
                'key' => 'id_header_15_0_0_sub1',
                'label' => 'Menu',
                'name' => 'id_header_15_0_0_sub1',
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
                    'id_header_15_0_0_sub1_layout1' => array(
                        'key' => 'id_header_15_0_0_sub1_layout1',
                        'name' => 'menu_don',
                        'label' => 'Menu Đơn',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'id_header_15_0_0_sub1_layout1_sub',
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
                    'id_header_15_0_0_sub1_layout2' => array(
                        'key' => 'id_header_15_0_0_sub1_layout2',
                        'name' => 'menu_sub',
                        'label' => 'Menu Sub',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'id_header_15_0_0_sub1_layout2_sub1',
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
                                'key' => 'id_header_15_0_0_sub1_layout2_sub2',
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
                    'id_header_15_0_0_sub1_layout3' => array(
                        'key' => 'id_header_15_0_0_sub1_layout3',
                        'name' => 'menu_sub_full',
                        'label' => 'Mega Menu',
                        'display' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'id_header_15_0_0_sub1_layout3_sub1',
                                'label' => 'Menu cha',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1 : Tên menu <br>
                                    Dòng 2 : Link <br>
                                    Dòng 3 : Số cột <br>
                                    Dòng 4 : Submenu có title hay không? ( điền yes : có | no : không ) <br>
                                    Dòng 5 : Địa chỉ 1 <br>
                                    Dòng 6 : Địa chỉ 2
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
                                'key' => 'id_header_15_0_0_sub1_layout3_sub2',
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
            array(
                'key' => 'id_header_15_0_0_tab3',
                'label' => 'Chi nhánh',
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
                'key' => 'id_header_15_0_0_sub3',
                'label' => 'Chi nhánh',
                'name' => 'header_place',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'id_header_15_0_0_sub3_sub1',
                        'label' => 'Chi nhánh',
                        'name' => 'place_city',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'id_header_8_0_0_sub3_sub2',
                        'label' => 'Link Url',
                        'name' => 'place_url',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '#',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'min' => '',
        'max' => '',
    ),
    /*END HEADER 15.0.0*/
?>