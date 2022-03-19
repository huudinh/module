<?php 
    /*TOOL_INFO 1.2.0*/
    'id_tool_info_1_2_0' => array(
        'key' => 'id_tool_info_1_2_0',
        'name' => 'tool_info_1_2_0',
        'label' => 'ToolInfo 1.2.0',
        'display' => 'block',
        'sub_fields' => array(
            array(
                /* Tab Service*/
                'key' => 'id_tool_info_1_2_0_tab1',
                'label' => 'Thông tin',
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
                'key' => 'id_tool_info_1_2_0_tab1_sub1',
                'label' => 'Danh Sách thông tin',
                'name' => 'content_info',
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
                        'key' => 'tool_info_1_2_0_tab1_sub1_layout1',
                        'name' => 'content_info_box1',
                        'label' => 'Thông tin dịch vụ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'tool_info_1_2_0_tab1_sub1_layout1_sub1',
                                'label' => 'Nội Dung',
                                'name' => 'content',
                                'type' => 'textarea',
                                'instructions' => '
                                    Cập nhật DỊCH VỤ theo chỉ dẫn:<br>
                                    Dòng 1: Link ảnh icon (Size: 21 x 21)<br>
                                    Dòng 2: Tiều đề icon<br>
                                    Dòng 3: Link tiêu đề

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
                'button_label' => 'Thêm Thông tin',
                'min' => '',
                'max' => '',
            ),
        ),
        'min' => '',
        'max' => '',
    ),
    /*END TOOL_INFO 1.2.0*/
?>