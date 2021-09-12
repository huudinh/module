<?php
    /*regist 4.0.0*/
    'id_regist_4_0_0' => array(
        'key' => 'id_regist_4_0_0',
        'name' => 'regist_4_0_0',
        'label' => 'Regist 4.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_regist_4_0_0_tab1',
                'label' => 'Tiêu Đề',
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
                'key' => 'id_regist_4_0_0_tab1_sub1',
                'label' => '',
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
            array(
                'key' => 'id_regist_4_0_0_tab1_sub2',
                'label' => 'Mô tả',
                'name' => 'sub',
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
                /* Tab Regist*/
                'key' => 'id_regist_4_0_0_tab2',
                'label' => 'Các khóa học',
                'name' => 'course',
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
                'key' => 'id_regist_4_0_0_tab2_sub1',
                'label' => '',
                'name' => 'course_info',
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
                        'key' => 'id_regist_4_0_0_sub1_layout1',
                        'name' => 'course_layout',
                        'label' => 'khóa học',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_regist_4_0_0_sub1_layout1_sub',
                                'label' => '',
                                'name' => 'course_name',
                                'type' => 'textarea',
                                'instructions' => 'Tên khóa học',
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
                                'rows' => 1,
                                'new_lines' => '',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Thêm khóa học',
                'min' => '',
                'max' => '',
            ),
            

            
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END regist 4.0.0*/
?>