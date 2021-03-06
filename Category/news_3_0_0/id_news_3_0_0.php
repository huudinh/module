<?php
    /*NEWS 5.0.0*/
        'id_news_5_0_0' => array(
        'key' => 'id_news_5_0_0',
        'name' => 'news_5_0_0',
        'label' => 'news 5.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab 1*/
                'key' => 'id_news_5_0_0_tab1',
                'label' => 'Hoạt Động',
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
                'key' => 'id_news_5_0_0_tab1_sub1',
                'label' => 'Tiêu đề',
                'name' => 'news_title1',
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
                'key' => 'id_news_5_0_0_tab1_sub2',
                'label' => 'Danh sách tin',
                'name' => 'content1',
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
                'elements' => array(
                    0 => 'featured_image',
                ),
                'min' => '',
                'max' => '',
                'return_format' => 'id',
            ),
            array(
                'key' => 'id_news_5_0_0_tab1_sub3',
                'label' => 'Link tất cả tin',
                'name' => 'link_all',
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
                /* Tab 2*/
                'key' => 'id_news_5_0_0_tab2',
                'label' => 'Video Clips',
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
                'key' => 'id_news_5_0_0_tab2_sub1',
                'label' => 'Tiêu đề',
                'name' => 'news_title2',
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
                'key' => 'id_news_5_0_0_tab2_sub2',
                'label' => 'Nội dung',
                'name' => 'content',
                'type' => 'textarea',
                'instructions' => 'Link ảnh | ID_Image | Mô tả video',
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
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END NEWS 5.0.0*/
?>