<?php		
require_once  ABSPATH . WPINC . '/category.php';
 $output = '{{if_condition_content_layout_type==1}}
            <div class="pb_mod cat_mod"><h4>{{content_title}}</h4>   
                <div class="wrap"><ul>{{category_selection}}</ul></div>    
            </div>
          {{ifend_condition_content_layout_type_1}}
            
          {{if_condition_content_layout_type==2}}
              <div class="cat-desing-2">{{category_selection}}</div>
          {{ifend_condition_content_layout_type_2}}

          {{if_condition_content_layout_type==3}}
             <div class="pb_mod cat_mod-3"><h5>{{content_title}}</h5>   
                  <div class="cat-design-3"><ul>{{category_selection}}</ul></div>    
              </div>
            {{ifend_condition_content_layout_type_3}}

          ';
 

 $frontCss = '
{{if_condition_content_layout_type==1}}
.wrap{
  width:100%;
  display:inline-block;
  margin-top:10px;
}
    .cat_mod ul{
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
        padding:0;
        list-style-type:none;
     }
    .cat_mod ul li {
        margin: 15px 15px 25px 15px;
        flex-basis: calc(33.33% - 30px);
    }
    .cat_mod .cat_mod_l{
      line-height:0;
    }
    .cat_mod {
      margin:{{margin_css}};
      padding:{{padding_css}};
      padding:40px;
    }
    .cat_mod h4{
      border-bottom: 2px solid {{border_color_picker}};
      padding-bottom: 8px;
      margin-bottom: 5px;
      font-size:{{label-size}};
      color: {{label_color_picker}};
      font-weight: {{label-weight}}
    }
    .cat_mod .cat_mod_r{
      display:flex;
      flex-direction: column;
      margin-top: 6px;
    }
    .cat_mod .cat_mod_r a{
      font-size: {{cat-size}};
      line-height: 1.3;
      font-weight: {{cat-weight}};
      color: {{text_color_picker}};
      margin: 0px 0px 5px 0px;
    }
    .cat_mod .cat_mod_r p{
      color: {{text_color_picker}};
      font-size: 13px;
      line-height: 20px;
      letter-spacing: 0.10px;
      margin-bottom:0;
    }
    .cat_mod .cat_mod_l{
      width:100%;
    }
@media(max-width:768px){
.cat_mod ul li {
    flex-basis: calc(100% - 30px);
    margin: 10px 15px;
}
.cat_mod_l amp-img{
  width:100%;
}
.cat_mod .cat_mod_l{
  width: 40%;
  float: left;
  margin-right: 20px;
}
.cat_mod .cat_mod_r{
    width: 54%;
    float: left;
    margin-top: 0;
}
}
@media (max-width: 480px){
.cat_mod .cat_mod_l{
  width: 100%;
  float: none;
  margin-right: 0px;
}
.cat_mod .cat_mod_r{
  width: 100%;
  float: none;
  margin-top:6px;
}

}
{{ifend_condition_content_layout_type_1}}
{{if_condition_content_layout_type==2}}
    /*** design-cat-2-styles ***/
    .cat_mod ul li {
      list-style-type:none;
    }
    .wrap .cat-img a{
      margin:0;
      padding:0;
      line-height:0;
    }
    .cat-cntn a{
      margin:0; 
    }
    .cat-desing-2 .dsg-2{
      width:100%;
      height:100%;
      margin:0;
      padding:0;
      position:relative;
    }
    .cat-2-img{
      position:relative;
    }
    .dsg-2:hover .cat-2-tlt{
      text-decoration:underline #0DBE98;
    }
    .cat-2-tlt{
      max-width: 1100px;
        margin: 0 auto;
        text-align: center;
        font-size: 60px;
        font-weight: 900;
        line-height: 1.4;
        position: absolute;
        left: 0;
        right: 0;
        top: auto;
        bottom: 20px;
        color: #fff;

    }
{{ifend_condition_content_layout_type_2}}
{{if_condition_content_layout_type==3}}
    /*** design-cat-3-styles ***/
    .cat_mod-3{
      width:{{dsg3-width}};
      margin:0 auto;
    }
    .cat-3-img a{
        margin: 0;
        padding: 0;
        line-height: 0;
        display: block;
    }
    .cat_mod-3 ul{
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
        padding:0;
        list-style-type:none;
     }
    .cat_mod-3 ul li {
        margin: 15px 10px 20px 10px;
        flex-basis: calc(34% - 30px);
    }
    .cat-3-tlt{
      font-size:16px;
      line-height:1.4;
      font-weight: 600;
    }
    .cat-3-tlt a{
        color: #000;
    }
    .cat_mod-3 h5{
        text-transform: uppercase;
        padding: 10px 0px 15px 0px;
        font-style: italic;
        letter-spacing: 1px;
        font-size: 18px;
        font-weight: 800;
        border-top:3px solid #0DBE98;
    }
    .cat_mod-3 .cat-3-img {
      width:100%;
    }
    @media(max-width:1200px){
      .cat_mod-3{
        width:auto;
        padding:0px 20px;
      }
    }
    @media(max-width:786px){
      .cat_mod-3{
        width:100%;
        padding:0px 20px;
      }
      .cat_mod-3 ul li {
          flex-basis: calc(100% - 30px);
          margin: 10px 15px;
      }
      .cat_mod-3 .cat-3-img {
          width: 40%;
          float: left;
          margin-right: 20px;
      }
      .cat_mod-3 .cat-3-tlt {
          width: 54%;
          float: left;
          margin-top: 0;
      }
      }
      @media (max-width: 480px){
      .cat_mod-3 .cat-3-img {
          width: 100%;
          float: none;
          margin-right: 0px;
      }
      .cat_mod-3 .cat-3-tlt {
          width: 100%;
          float: none;
          margin-top:6px;
      }

    }
{{ifend_condition_content_layout_type_3}}
';

 $categories = get_categories( array(		
                   'orderby' => 'name',		
                   'order'   => 'ASC'		
               ) );		
 $categoriesArray = array('recent_option'=>'Recent Posts');		
 $options = '<option value="recent_option">Recent Posts</option>';		
 foreach($categories as $category){		
 	$categoriesArray[$category->term_id] = $category->name;		
 	$options.= '<option value="'.$category->term_id.'">'.$category->name.'</option>';		
 }		



 return array(		
 		'label' =>'Category',		
 		'name' => 'contents',
    'default_tab'=> 'customizer',
    'tabs' => array(
              'customizer'=>'Content',
              'container_css'=>'Design',
              'advanced' => 'Advanced'
            ),
 		'fields' => array(
            array(    
            'type'    =>'layout-image-picker',
            'name'    =>"content_layout_type",
            'label'   =>"Select Layout",
            'tab'     =>'customizer',
            'default' =>'1',    
            'options_details'=>array(
                            array(
                              'value'=>'1',
                              'label'=>'First',
                              'demo_image'=> 'http://localhost/magzine/wordpress/wp-content/plugins/accelerated-mobile-pages//images/head-1.png'
                            ),
                            array(
                              'value'=>'2',
                              'label'=>'Second',
                              'demo_image'=> 'http://localhost/magzine/wordpress/wp-content/plugins/accelerated-mobile-pages//images/head-2.png'
                            ),
                            array(
                              'value'=>'3',
                              'label'=>'Third',
                              'demo_image'=> 'http://localhost/magzine/wordpress/wp-content/plugins/accelerated-mobile-pages//images/head-2.png'
                            ),
                          ),
            'content_type'=>'html',
            ),
            array(		
 						'type'		=>'text',		
 						'name'		=>"content_title",		
 						'label'		=>'Category Block',
            'tab'     =>'customizer',
 						'default'	=>'Category',	
            'content_type'=>'html',
 						),
            array(
                'type'    =>'checkbox',
                'name'    =>"bg_clr",
                'tab'   =>'container_css',
                'label'   =>'Background Type',
                'default' =>array(), 
                'options' =>array(
                        array(
                          'label'=>'', 
                          'value'=>"yes",
                        ),
                      ),
                'content_type'=>'css',
              ),
            array(
                'type'    =>'color-picker',
                'name'    =>'bg_color_picker',
                'label'   =>'Background Color',
                'tab'   =>'container_css',
                'default' =>'#fff',
                'content_type'=>'css',
                'required'  => array('bg_clr'=>"yes")
              ),
            array(    
            'type'    =>'text',   
            'name'    =>"label-size",    
            'label'   =>'label Font Size ',
            'tab'     =>'container_css',
            'default' =>'18px', 
            'content_type'=>'css',
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"label-weight",    
            'label'   =>'label Font Weight ',
            'tab'     =>'container_css',
            'default' =>'600', 
            'content_type'=>'css',
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"cat-size",    
            'label'   =>'Font Size ',
            'tab'     =>'container_css',
            'default' =>'20px', 
            'content_type'=>'css',
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"cat-weight",    
            'label'   =>'Font Weight ',
            'tab'     =>'container_css',
            'default' =>'500', 
            'content_type'=>'css',
            ),
            array(
                'type'    =>'color-picker',
                'name'    =>'border_color_picker',
                'label'   =>'Border Color',
                'tab'   =>'container_css',
                'default' =>'#eee',
                'content_type'=>'css'
              ),
            array(
              'type'    =>'color-picker',
              'name'    =>'label_color_picker',
              'label'   =>'Lable Color',
              'tab'   =>'container_css',
              'default' =>'#000',
              'content_type'=>'css'
            ),
            array(
              'type'    =>'color-picker',
              'name'    =>'text_color_picker',
              'label'   =>'Text Color',
              'tab'   =>'container_css',
              'default' =>'#191919',
              'content_type'=>'css'
            ),
            array(
                'type'    =>'spacing',
                'name'    =>"margin_css",
                'label'   =>'Margin',
                'tab'   =>'advanced',
                'default' =>
                            array(
                                'top'=>'20px',
                                'right'=>'0px',
                                'bottom'=>'20px',
                                'left'=>'0px',
                            ),
                'content_type'=>'css',
              ),
              array(
                'type'    =>'spacing',
                'name'    =>"padding_css",
                'label'   =>'Padding',
                'tab'   =>'advanced',
                'default' =>array(
                          'left'=>'0px',
                          'right'=>'0px',
                          'top'=>'0px',
                          'bottom'=>'0px'
                        ),
                'content_type'=>'css',
              ),  		
 						array(		
 							'type'	=>'select',		
 							'name'  =>"category_selection",		
 							'label' =>"Select Category",
              'tab'     =>'customizer',
 							'default' =>'recent_option',		
 							'options' => $options,		
 							'options_details'=>$categoriesArray	,
              'content_type'=>'html',
 						),		
 						array(		
 						'type'		=>'text',		
 						'name'		=>"show_total_posts",
 						'label'		=>'Count',		
            'tab'     =>'customizer',
 						'default'	=>'3',
            'content_type'=>'html',
 						),
 						array(		
 						'type'		=>'select',
 						'name'		=>"ampforwp_show_excerpt",
 						'label'		=>"Excerpt",
            'tab'     =>'customizer',
						'default'	=>'yes',		
						'options'	=> '<option value="yes">Yes</option><option value="no">No</option>',		
						'options_details'=>array('yes'=>'Yes', 'no'=>'No'),
            'content_type'=>'html',
 						),
            array(    
            'type'    =>'text',   
            'name'    =>"img-width-1",    
            'label'   =>'Image Width(1)',
            'tab'     =>'customizer',
            'default' =>'346', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 1),
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"img-height-1",    
            'label'   =>'Image Height(1)',
            'tab'     =>'customizer',
            'default' =>'188', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 1),
            ),

            array(    
            'type'    =>'text',   
            'name'    =>"img-width-2",    
            'label'   =>'Image Width(2)',
            'tab'     =>'customizer',
            'default' =>'1000', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 2),
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"img-height-2",    
            'label'   =>'Image Height(2)',
            'tab'     =>'customizer',
            'default' =>'480', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 2),
            ),
            array(
                'type'    =>'checkbox',
                'name'    =>"image_layout",
                'label'   =>'Responsive',
                'tab'   =>'customizer',
                'default' =>array('responsive'),
                'options' =>array(
                        array(
                          'label'=>'Responsive',
                          'value'=>'responsive',
                        ),
                      ),
                'content_type'=>'html',
                'required'  => array('content_layout_type' => 2),
              ),
            array(    
            'type'    =>'text',   
            'name'    =>"img-width-3",    
            'label'   =>'Image Width(3)',
            'tab'     =>'customizer',
            'default' =>'286', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 3),
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"img-height-3",    
            'label'   =>'Image Height(3)',
            'tab'     =>'customizer',
            'default' =>'161', 
            'content_type'=>'html',
            'required'  => array('content_layout_type' => 3),
            ),
            array(    
            'type'    =>'text',   
            'name'    =>"dsg3-width",    
            'label'   =>'Design 3 Container ',
            'tab'     =>'container_css',
            'default' =>'950px', 
            'content_type'=>'css',
            'required'  => array('content_layout_type' => 3),
            ),
 					),		
 		'front_template'=> $output,
    'front_css'=>$frontCss,
    'front_common_css'=>'',	
    'front_loop_content'=>'  {{if_condition_content_layout_type==1}}
                          <li> 
                              <div class="cat_mod_l First"> 
                                <a href="{{ampforwp_post_url}}"><amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}" layout="responsive"></amp-img></a> 
                              </div>
                              <div class="cat_mod_r">
                                <a href="{{ampforwp_post_url}}">{{title}}</a>
                                {{excerptContent}}
                                </div>
                            </li>
                       {{ifend_condition_content_layout_type_1}}


                      {{if_condition_content_layout_type==2}}
                        <div class="dsg-2">
                        <a href="{{ampforwp_post_url}}">
                            <div class="cat-2-img">
                              <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                            </div>
                            <div class="cat-2-tlt">{{title}}</div>
                        </a></div>
                      {{ifend_condition_content_layout_type_2}}

                       {{if_condition_content_layout_type==3}}
                        <li> 
                          <div class="cat-3-img"> 
                            <a href="{{ampforwp_post_url}}"><amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}" layout="responsive"></amp-img></a> 
                          </div>
                          <div class="cat-3-tlt">
                            <a href="{{ampforwp_post_url}}">{{title}}</a>
                          </div>
                        </li>
                      {{ifend_condition_content_layout_type_3}}
                          ',
 );		
 function contentHtml($the_query,$fieldValues,$loopHtml){		
 	$contenthtml = '';		
 	$ampforwp_show_excerpt = (isset($fieldValues['ampforwp_show_excerpt'])? $fieldValues['ampforwp_show_excerpt']: 'yes');		
 	if ( $the_query->have_posts() ) {	
         while ( $the_query->have_posts() ) {		
             $the_query->the_post();		
             $ampforwp_post_url = get_permalink();	
             $ampforwp_post_url = trailingslashit($ampforwp_post_url) . AMPFORWP_AMP_QUERY_VAR;
             $image = $height = $width = "";	
             if ( has_post_thumbnail() ) {  
                   $thumb_id = get_post_thumbnail_id();   
                   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);  
                   $thumb_url = $thumb_url_array[0];
                   $width = $thumb_url_array[1];
                   $height = $thumb_url_array[2];
                   switch($fieldValues['content_layout_type']){
                    case 1:
                      $width = $fieldValues['img-width-1'];
                      $height = $fieldValues['img-height-1'];
                    break;
                    case 2:
                      $width = $fieldValues['img-width-2'];
                      $height = $fieldValues['img-height-2'];
                    break;
                    case 3:
                      $width = $fieldValues['img-width-3'];
                      $height = $fieldValues['img-height-3'];
                    break;
                    default:
                    break;
                   }
                   $thumb_url_array = aq_resize( $thumb_url, $width, $height, true, false ); //resize & crop the image
                   $image   =  $thumb_url_array[0];
                   $width   =  $thumb_url_array[1];
                   $height  =  $thumb_url_array[2];

              }
              $excerptContent = "";
              if( $ampforwp_show_excerpt == 'yes' ) {     
                   if( has_excerpt() ) {    
                     $content = get_the_excerpt();    
                   } else {   
                     $content = get_the_content();    
                   }  
                 $excerptContent = ' 
                 <p>'.wp_trim_words( strip_tags( strip_shortcodes( $content ) ) , '15'  ).'</p>';   
              }
               $title = get_the_title();
             $contenthtml .= str_replace(array(
                                "{{ampforwp_post_url}}",
                                "{{image}}",
                                "{{width}}",
                                "{{height}}",
                                "{{title}}",
                                "{{excerptContent}}"
                                ), 
                              array(
                                $ampforwp_post_url,
                                $image,
                                $width,
                                $height,
                                $title,
                                $excerptContent
                              ), 
                              $loopHtml);
             /* $contenthtml.='<li> 
                              <div class="cat_mod_l"> 
                                <a href="'. $ampforwp_post_url .'"><amp-img  class="ampforwp_wc_shortcode_img"  src="'. $image.'" width="'. $width . '" height="' . $height . '" layout="fixed"></amp-img></a> 
                              </div>
                              <div class="cat_mod_r">
                                <a href="'. $ampforwp_post_url.'">'.get_the_title().'</a>'.
                                $excerptContent.
                                '</div>
                            </li>';		*/
         }		
 		
       		
 		
     }		
     /* Restore original Post Data */		
     wp_reset_postdata();
     return $contenthtml;		
 }