<?php

/*SIDEBAR 2.0.0*/
'id_sidebar_2_0_0' => array(
    'key' => 'id_sidebar_2_0_0',
    'name' => 'sidebar_2_0_0',
    'label' => 'Sidebar 2.0.0',
    'display' => 'block',
    'sub_fields' => array(
        /*Bắt đầu field*/

        array(
            'key' => 'id_sidebar_2_0_0_sub',
            'label' => 'Sidebar',
            'name' => 'sidebar',
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
                'id_sidebar_2_0_0_sub_layout1' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout1',
                    'name' => 'sidebar_title',
                    'label' => 'Tiêu Đề SideBar',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_0_0_sub_layout1_sub1',
                            'label' => 'Tiêu đề chuyên mục',
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
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_0_0_sub_layout2' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout2',
                    'name' => 'sidebar_sv',
                    'label' => 'Dịch Vụ',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_0_0_sub_layout2_sub',
                            'label' => 'Danh Sách DV',
                            'name' => 'content',
                            'type' => 'wysiwyg',
                            'instructions' => '',
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
                'id_sidebar_2_0_0_sub_layout3' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout3',
                    'name' => 'sidebar_search',
                    'label' => 'Tìm Kiếm',
                    'display' => 'block',
                    'sub_fields' => array(
                        // array(
                        //     'key' => 'id_sidebar_2_0_0_sub_layout3_sub',
                        //     'label' => 'Danh Sách DV',
                        //     'name' => 'content',
                        //     'type' => 'wysiwyg',
                        //     'instructions' => '',
                        //     'required' => 0,
                        //     'conditional_logic' => 0,
                        //     'wrapper' => array(
                        //         'width' => '',
                        //         'class' => '',
                        //         'id' => '',
                        //     ),
                        //     'default_value' => '',
                        //     'tabs' => 'all',
                        //     'toolbar' => 'full',
                        //     'media_upload' => 1,
                        //     'delay' => 0,
                        // ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                
                'id_sidebar_2_0_0_sub_layout4' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout4',
                    'name' => 'sidebar_clip',
                    'label' => 'Video Clip',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_0_0_sub_layout4_box1',
                            'label' => 'Video',
                            'name' => 'video_sidebar',
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
                                    'key' => 'id_sidebar_2_0_0_sub_layout4_box1_sub1',
                                    'name' => 'video_sidebar_box',
                                    'label' => 'Video',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        // Bat dau Field
                                        array(
                                            'key' => 'id_sidebar_2_0_0_sub_layout4_box1_sub1_child1',
                                            'label' => 'Chi tiết video',
                                            'name' => 'detail_video',
                                            'type' => 'textarea',
                                            'instructions' => '
                                                Dòng 1 : Tiêu đề video <br>
                                                Dòng 2 : Link ảnh thumb video ( 272px x 150px ) <br>
                                                Dòng 3 : ID youtube
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
                            ),
                            'button_label' => 'Add Row',
                            'min' => '',
                            'max' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_0_0_sub_layout5' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout5',
                    'name' => 'sidebar_regist',
                    'label' => 'Đăng Ký Tư Vấn',
                    'display' => 'block',
                    'sub_fields' => array(
                        // array(
                        //     'key' => 'id_sidebar_2_0_0_sub_layout3_sub',
                        //     'label' => 'Danh Sách DV',
                        //     'name' => 'content',
                        //     'type' => 'wysiwyg',
                        //     'instructions' => '',
                        //     'required' => 0,
                        //     'conditional_logic' => 0,
                        //     'wrapper' => array(
                        //         'width' => '',
                        //         'class' => '',
                        //         'id' => '',
                        //     ),
                        //     'default_value' => '',
                        //     'tabs' => 'all',
                        //     'toolbar' => 'full',
                        //     'media_upload' => 1,
                        //     'delay' => 0,
                        // ),
                    ),
                    'min' => '',
                    'max' => '',
                ),

                'id_sidebar_2_0_0_sub_layout6' => array(
                    'key' => 'id_sidebar_2_0_0_sub_layout6',
                    'name' => 'sidebar_new',
                    'label' => 'Tin liên quan',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_0_0_sub_layout6_sub',
                            'label' => 'Bài viết quan tâm',
                            'name' => 'content',
                            'type' => 'relationship',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'post_type' => '',
                            'taxonomy' => '',
                            'filters' => array(
                                0 => 'search',
                                1 => 'post_type',
                                2 => 'taxonomy',
                            ),
                            'elements' => '',
                            'min' => '',
                            'max' => '',
                            'return_format' => 'object',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                // 'id_sidebar_2_0_0_sub_layout6' => array(
                //     'key' => 'id_sidebar_2_0_0_sub_layout6',
                //     'name' => 'sidebar_postlist',
                //     'label' => 'Danh sách dịch vụ',
                //     'display' => 'block',
                //     'sub_fields' => array(
                //         array(
                //             'key' => 'id_sidebar_2_0_0_sub_layout6_sub1',
                //             'label' => 'Chọn Cate',
                //             'name' => 'cate',
                //             'type' => 'taxonomy',
                //             'instructions' => '',
                //             'required' => 0,
                //             'conditional_logic' => 0,
                //             'wrapper' => array(
                //                 'width' => '',
                //                 'class' => '',
                //                 'id' => '',
                //             ),
                //             'taxonomy' => 'category',
                //             'field_type' => 'select',
                //             'allow_null' => 0,
                //             'add_term' => 1,
                //             'save_terms' => 0,
                //             'load_terms' => 0,
                //             'return_format' => 'id',
                //             'multiple' => 0,
                //         ),
                //         array(
                //             'key' => 'id_sidebar_2_0_0_sub_layout6_sub2',
                //             'label' => 'Số bài hiển thị',
                //             'name' => 'show',
                //             'type' => 'range',
                //             'instructions' => '',
                //             'required' => 0,
                //             'conditional_logic' => 0,
                //             'wrapper' => array(
                //                 'width' => '',
                //                 'class' => '',
                //                 'id' => '',
                //             ),
                //             'default_value' => '',
                //             'min' => '',
                //             'max' => '',
                //             'step' => '',
                //             'prepend' => '',
                //             'append' => '',
                //         ),
                //     ),
                //     'min' => '',
                //     'max' => '',
                // ),
            ),
            'button_label' => 'Thêm Module Sidebar',
            'min' => '',
            'max' => '',
        ),
        
    
    
    
        
        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END SIDEBAR 2.0.0*/

?>