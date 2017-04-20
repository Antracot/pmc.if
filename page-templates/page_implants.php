<?php

/*

Template Name: My template

*/
	get_header();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<style>
        ::-webkit-scrollbar-thumb{
            border: 10px solid LightSlateGrey;
        }
        ::-webkit-scrollbar-track{
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        ::-webkit-scrollbar{
            width: 10px;
            background-color: #F5F5F5;
        }



        @font-face{
		font-family:CondBold;
		font-style:normal;
		font-weight:400;
		src:url(<?php echo get_template_directory_uri() ?>/implants/fonts/OpenSans-CondBold.ttf) format("truetype")
		}
	@font-face{
		font-family:Regular;
		font-style:normal;
		font-weight:400;
		src:url(<?php echo get_template_directory_uri() ?>/implants/fonts/OpenSans-Regular.ttf) format("truetype")
		}
	@font-face{
		font-family:Semibold;
		font-style:normal;
		font-weight:400;
		src:url(<?php echo get_template_directory_uri() ?>/implants/fonts/OpenSans-Semibold.ttf) format("truetype")
	}
        body{width:100%;background-color:#25609B;color:#fff}.my_section{text-align:center;position:relative;width:100%;height:100%;margin:0 auto;padding:0}.page_title{width:60%;margin:auto auto 0}.page_title .title_wrap{margin-top:-125px}.page_title .title_wrap .h1_text{color:#fff;font-size:1.8em;font-family:Regular;letter-spacing:0}.first_items .wrap_items .p_text:hover,.fourth_items .wrap_small_items .btn_mini .p_text:hover,.second_items .wrap_items .p_text:hover,.third_items .wrap_small_items .item_btn_small .p_text:hover{color:#F5F5F5}.first_items .wrap_items .p_text,.fourth_items .wrap_small_items .btn_mini .p_text,.second_items .wrap_items .p_text,.third_items .wrap_small_items .item_btn_small .p_text{font-size:12px;display:inline-block;vertical-align:middle}.first_items .wrap_items .p_text,.fourth_items .wrap_small_items .btn_mini .p_text,.second_items .wrap_items .p_text,.text_big,.third_items .wrap_small_items .item_btn_small .p_text{font-family:Semibold;letter-spacing:0}.first_items .wrap_items{overflow:hidden;width:350px;height:105px;position:relative;display:inline-block;margin:50px 0 0}.first_items .wrap_items .item_btn_big{background-color:#00f;width:200px;height:100px;-webkit-border-radius:3%;border-radius:3%;line-height:100px;cursor:pointer;text-align:center;position:absolute}.first_items .wrap_items .item_btn_big:hover{-webkit-transition:.5s;transition:.5s;background-color:#00008b}.first_items .wrap_items .biggest{width:245px}.first_items .wrap_items .item_left_first{margin-left:350px}.first_items .wrap_items .item_right_first{margin-left:-245px}.first_items .wrap_items .img_logo{width:100px}.first_items .wrap_items .p_text{line-height:15px;margin:0 10px}.second_items .wrap_items{overflow:hidden;width:350px;height:100px;position:relative;display:inline-block;margin:50px -4px 0 0}.second_items .wrap_items .item_btn_big{background-color:#00f;width:220px;height:100px;line-height:100px;cursor:pointer;text-align:center;position:absolute;-webkit-border-radius:3%;border-radius:3%}.second_items .wrap_items .item_btn_big:hover{-webkit-transition:.5s;transition:.5s;background-color:#00008b}.second_items .wrap_items .item_left{margin-left:15px}.second_items .wrap_items .item_right{margin-left:110px}.second_items .wrap_items .p_text{line-height:15px;margin:0 10px}.third_items .wrap_small_items{width:60%;height:100px;margin-top:30px;position:relative;display:inline-block}.third_items .wrap_small_items .item_btn_small{width:100px;display:inline-block;height:100px;-webkit-border-radius:3%;border-radius:3%;line-height:100px;text-align:center;cursor:pointer;background-color:#00f}.third_items .wrap_small_items .item_btn_small:hover{-webkit-transition:.5s;transition:.5s;background-color:#00008b}.third_items .wrap_small_items .item_btn_small .p_text{line-height:15px;margin:0 10px}.fourth_items .wrap_small_items{width:100%;height:105px;margin-top:20px;margin-bottom:20px;position:relative;display:inline-block}.fourth_items .wrap_small_items .btn_mini{margin-top:0;width:150px;height:60px;line-height:60px;display:inline-block;background-color:#00f;cursor:pointer;overflow:hidden;-webkit-border-radius:8px;border-radius:8px}.fourth_items .wrap_small_items .btn_mini .p_text{line-height:15px;margin:0 5px}.fourth_items .wrap_small_items .active{background-color:brown}.item_absolute{position:absolute;left:0;right:0}.text_big{line-height:100px;font-size:1.7em}.wrap_details{width:90%;background-color:rgba(0,0,0,.5);display:inline-block;margin-top:30px}.wrap_details .each_item_details{border:1px solid #fff;min-height:475px}.wrap_details .each_item_details .title_item_detail{text-align:center;margin-top:15px;margin-bottom:5px}.wrap_details .each_item_details .title_item_detail .h2_header{color:#fff;margin-left:2%;font-family:Regular;font-size:20px;letter-spacing:0}.wrap_details .each_item_details .title_item_detail .p_code{color:#fff;margin-left:2%;font-family:Regular;font-size:12px;letter-spacing:0}.wrap_details .each_item_details .wrap_detail_item{margin-bottom:5px}.wrap_details .each_item_details .wrap_detail_item .details_left{margin-top:0;width:50%;height:100%;float:left;display:inline-block;vertical-align:middle}.wrap_details .each_item_details .wrap_detail_item .details_left .details_img{width:500px;cursor:pointer;margin-bottom:-4px}.wrap_details .each_item_details .wrap_detail_item .details_left .callback_btn{margin-top:3%;margin-right:1.5%;margin-left:1.5%;border:1px solid #fff;-webkit-border-radius:5px;border-radius:5px;background-color:#25609B;width:215px;height:50px;cursor:pointer;outline:0;text-transform:uppercase;color:#fff;font-family:Semibold;-webkit-transition:all .5s;transition:all .5s;line-height:10px}.wrap_details .each_item_details .wrap_detail_item .details_left .callback_btn:hover{background-color:transparent;-webkit-transition:all .5s;transition:all .5s;border:1px solid grey}.wrap_details .each_item_details .wrap_detail_item .details_right{display:inline-block;width:50%;height:100%;margin-bottom:-6px}.wrap_details .each_item_details .wrap_detail_item .details_right table{margin:0 auto;font-family:Regular;font-size:12px;letter-spacing:0}.wrap_details .each_item_details .wrap_detail_item .details_right table .col{border:1px dashed #000;height:30px;width:100px;padding:0;margin:0}.wrap_details .each_item_details .wrap_detail_item .details_right table .col_big{width:150px}.wrap_details .each_item_details .wrap_detail_item .details_right table .col_twice{width:200px}.wrap_details .each_item_details .wrap_detail_item .details_right table .col_title{border:none}.wrap_details .each_item_details .wrap_detail_item .details_right .p_textes{font-family:Regular;font-size:14px;letter-spacing:0;margin:5px 10px;text-align:justify}.item_btn_mini{background-color:#00f;width:100px;height:100px;-webkit-border-radius:3%;border-radius:3%;line-height:100px;cursor:pointer;text-align:center;position:absolute;margin:10px}.go_top,.popup{position:fixed}.item_btn_mini:hover{-webkit-transition:.5s;transition:.5s;background-color:#00008b}.callback_ask,.popup{background-color:rgba(0,0,0,.8)}.go_top{display:none;margin:auto;right:30px;bottom:30px}.callback_ask,.popup,.popup .popup_img{top:0;left:0;bottom:0;right:0}.go_top .arr_top{width:50px;height:50px}.popup{margin:auto}.popup .popup_img{width:50%;height:60%;margin:auto;position:absolute;border:3px solid #fff;-webkit-border-radius:2%;border-radius:2%;overflow:hidden}.popup .popup_img .set_img{width:100%;height:100%}.popup .close_popup{float:right;margin-right:15%;margin-top:10%;cursor:pointer}.popup .close_popup .close_btn{width:50px;height:50px}.callback_ask{margin:auto;position:fixed;width:100%;height:100%}.callback_ask .wrap_ask{width:450px;height:300px;margin:auto;position:absolute;top:0;left:0;bottom:0;right:0;background-color:#fff;-webkit-border-radius:10px;border-radius:10px;text-align:center;overflow:visible}.popup_success,.popup_success .success_box{position:fixed;top:0;left:0;right:0;bottom:0}.callback_ask .wrap_ask .form_wrapper .form_callback{margin-top:25px}.callback_ask .wrap_ask .form_wrapper .form_callback .call_input{border:1px solid #25609B;margin-bottom:15px;width:75%;height:50px;-webkit-border-radius:5px;border-radius:5px;padding:0 7px}.callback_ask .wrap_ask .form_wrapper .form_callback .qun{width:50px}.callback_ask .wrap_ask .form_wrapper .form_callback .submit_btn{-webkit-border-radius:5px;border-radius:5px;width:78%;height:50px;cursor:pointer;background-color:#25609B;color:#fff;font-family:Semibold;-webkit-transition:all .5s;transition:all .5s;border:none;line-height:10px}.callback_ask .wrap_ask .form_wrapper .form_callback .submit_btn:hover{background-color:transparent;-webkit-transition:all .5s;transition:all .5s;border:1px solid grey;color:#000}.callback_ask .close_popup{float:right;margin-right:-70px;overflow:visible;cursor:pointer}.callback_ask .close_popup .close_btn_ask{width:40px;height:40px}.popup_success{height:100%;width:100%;margin:auto;background-color:rgba(255,255,255,.9);z-index:999}.popup_success .success_box{background-color:#FFF;width:400px;height:150px;background-color:rgba(0,0,0,.7);margin:auto;text-align:center;vertical-align:middle;display:inline-block;border:3px solid grey}.popup_success .success_box .p_text_success{margin:auto;font-family:Arial;color:#fff;font-size:1.4em}.hidden{display:none}
    </style>

<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

	

</head>
<body>

	<img src="<?php echo get_template_directory_uri() ?>/implants" id="path_finder" alt="" style="display: none">

	<section class="my_section">

		<!-- TITLE OF PAGE -->
		<div class="page_title">
			<div class="title_wrap">
				<h1 class="h1_text">виберіть категорію імплантів які вас цікавлять</h1>
			</div>		
		</div>


		<!-- FIRST LINE -->
		<div class="first_items" >
			<div class="wrap_items first_go">
				<div class="item_btn_big biggest item_left_first one" data-id="01">
						<p class="p_text">Імплантати для травматології SUZHOU Xingrong Best Medical Instrument Co.,Ltd (торгова марка XRBest)
						<br>
						<img src="<?php echo get_template_directory_uri() ?>/implants/impls/supp/xinrong.png" alt="" class="img_logo">
					</p>

				</div>
			</div>
			<div class="wrap_items first_go">
				<div class="item_btn_big biggest item_right_first one" data-id="02">
					<p class="p_text">Ендопротези кульшових та коліннких суглобів OHST Medical Technology
					<br>
					<img src="<?php echo get_template_directory_uri() ?>/implants/impls/supp/OHST.png" alt="" class="img_logo">
					</p>
				</div>
			</div>
		</div>


		<!-- SECOND LINE -->
		<div class="second_items ">

			<!-- OPEN WHEN CHOOSE ID 01 -->
			<div class="wrap_items">
				<div class="rx_best hidden">
					<div class="item_btn_big item_right two" data-id="2_1">
						<p class="p_text">Імплантати та інструменти для стабілізації хребта</p>
					</div>
				</div>
				<div class="ohst hidden">	
					<div class="item_btn_big item_right two" data-id="2_3">
						<p class="p_text">Ендопротези кульшового суглобу</p>
					</div>
				</div>
			</div> 	

			<!-- OPEN WHEN CHOOSE ID 02 -->
			<div class="wrap_items ">
				<div class="rx_best hidden">
					<div class="item_btn_big item_left two" data-id="2_2">
						<p class="p_text">Імплантати для лікування переломів кісток</p>
					</div>
				</div>
				<div class="ohst hidden">		
					<div class="item_btn_big item_left two" data-id="2_4">
						<p class="p_text">Ендопротези колінного суглобу</p>
					</div>
				</div>	
			</div>

		</div>

	

		<!-- THIRD LINE -->
	<div class="third_items">
		<div class="wrap_small_items">

					<div class="bones_imp item_absolute hidden">
						<div class="item_btn_small three" data-id="simple_imp">
							<p class="p_text">Прості платини</p>	
						</div>
						<div class="item_btn_small three" data-id="blocking_imp">
							<p class="p_text">Блокуючі пластини</p>
						</div>
						<div class="item_btn_small three" data-id="sterzhni">
							<p class="p_text">Інтра-<br>медулярні стержні</p>
						</div>
						<div class="item_btn_small three" data-id="plastyny">
							<p class="p_text">Платини DHS/DCS</p>
						</div>
						<div class="item_btn_small three" data-id="shurupy">
							<p class="p_text">Шурупи</p>
						</div>
<!--						<div class="item_btn_small three">-->
<!--							<p class="p_text">Інше</p>-->
<!--						</div>-->
					</div>

					<div class="spine_imp item_absolute hidden" data-id="06">
						<p class="text_big">розділ в стадії розробки</p>
					</div>
				
					<div class="joint_hip item_absolute hidden" data-id="07">
						<div class="item_btn_small three" data-id="stegn_langs">
							<p class="p_text">Стегнові ніжки</p>	
						</div>
						<div class="item_btn_small three" data-id="golovky">
							<p class="p_text">Головки</p>	
						</div>
						<div class="item_btn_small three" data-id="chashky">
							<p class="p_text">Чашки</p>	
						</div>
						<div class="item_btn_small three" data-id="vkladky">
							<p class="p_text">Вкладки для чашок</p>	
						</div>
						<div class="item_btn_small three" data-id="shurupy_ohst">
							<p class="p_text">Шурупи</p>	
						</div>
					</div>

					<div class="joint_knee item_absolute hidden" data-id="08">
						<p class="text_big">розділ в стадії розробки</p>
					</div>
			
			</div>	
		</div>

	

		<div class="wrap_details" >

		<!--********** ПРОСТІ ПЛАСТИНИ **********-->
			<div class="items_in_details hidden" id="simple_imp">

            <?php if( have_posts() ) : query_posts('cat=22');
                $counter_item = 1;
                $query = new WP_Query( array(
                    'posts_per_page' => 50,
                    'order' => 'ASC',
                    'cat' => '22'
                ) );
                while ($query->have_posts() ) : $query->the_post(); ?>

                <div class="each_item_details">
					<div class="title_item_detail" >
						<h2 class="h2_header" data-title="<?php the_title(); ?>"><?php the_title(); ?></h2>
						<p class="p_code" data-code="<?php echo get_post_meta($post->ID, 'code', true); ?>">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
					</div>
					<div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
						<div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                            <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                            <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
						</div>

						<div class="details_right">
                            <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>


            <? endwhile; endif; wp_reset_query(); ?>

            </div>





			<!--********** БЛОКУЮЧІ ПЛАСТИНИ **********-->
			<div class="items_in_details hidden" id="blocking_imp">
				

				<!-- MENU WITH BLUE BUTTONS -->
				<div class="fourth_items" >
					<div class="wrap_small_items ">
						<div class="bones_imp item_absolute" >
							<div id="active_btn_block" class="btn_mini fourth" data-id="block_01">
								<p class="p_text">Загальні пластини</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_02">
								<p class="p_text">Пластини для передпліччя і ліктьової кістки</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_03">
								<p class="p_text">Платини для плечевої кістки</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_04">
								<p class="p_text">Пластини для велико- гомілкової кістки</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_05">
								<p class="p_text">Пластини для стегнової кістки</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_06">
								<p class="p_text">Пластини для мало- гомілкової кістки</p>
							</div>
							<div class="btn_mini fourth" data-id="block_07">
								<p class="p_text">Пластини для ключиці</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_08">
								<p class="p_text">Пластини для тазу</p>	
							</div>
							<div class="btn_mini fourth" data-id="block_09">
								<p class="p_text">Пластини для п'яткової кістки</p>	
							</div>
						</div>
					</div>
				</div>


				<div class="blocking_imp_01" id="block_01">

                    <?php if( have_posts() ) : query_posts('cat=23');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '23'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>
				
				<div class="blocking_imp_02 hidden" id="block_02">
                    <?php if( have_posts() ) : query_posts('cat=24');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '24'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
				</div>

				<div class="blocking_imp_03 hidden" id="block_03">

                    <?php if( have_posts() ) : query_posts('cat=25');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '25'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

				</div>

				<div class="blocking_imp_04 hidden" id="block_04">

                    <?php if( have_posts() ) : query_posts('cat=30');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '30'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
				</div>

                <div class="blocking_imp_04 hidden" id="block_05">

                    <?php if( have_posts() ) : query_posts('cat=27');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '27'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
                </div>

                <div class="blocking_imp_04 hidden" id="block_06">

                    <?php if( have_posts() ) : query_posts('cat=29');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '29'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
                </div>

                <div class="blocking_imp_04 hidden" id="block_07">

                    <?php if( have_posts() ) : query_posts('cat=31');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '31'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
                </div>

                <div class="blocking_imp_04 hidden" id="block_08">

                    <?php if( have_posts() ) : query_posts('cat=32');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '32'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
                </div>

                <div class="blocking_imp_04 hidden" id="block_09">

                    <?php if( have_posts() ) : query_posts('cat=33');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '33'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>
                </div>

			</div>


            <!--********** Інтрамедулярні стержні **********-->
            <div class="items_in_details hidden" id="sterzhni">


                <!-- MENU WITH BLUE BUTTONS -->
                <div class="fourth_items" >
                    <div class="wrap_small_items ">
                        <div class="bones_imp item_absolute" >
                            <div class="btn_mini fourth" id="active_btn_sterzhni" data-id="sterzhni_01">
                                <p class="p_text">Стержні для стегнової кістки</p>
                            </div>
                            <div class="btn_mini fourth" data-id="sterzhni_02">
                                <p class="p_text">Стержні для великогомілкової кістки</p>
                            </div>
                            <div class="btn_mini fourth" data-id="sterzhni_03">
                                <p class="p_text">Стержні для плечевої кістки</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="sterzhni" id="sterzhni_01">

                    <?php if( have_posts() ) : query_posts('cat=34');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '34'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>

                <div class="sterzhni hidden" id="sterzhni_02">

                    <?php if( have_posts() ) : query_posts('cat=36');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '36'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>

                <div class="sterzhni hidden" id="sterzhni_03">

                    <?php if( have_posts() ) : query_posts('cat=35');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '35'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>

            </div>


            <!--********** Платини DHS/DCS **********-->
            <div class="items_in_details hidden" id="plastyny">

                <?php if( have_posts() ) : query_posts('cat=37');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '37'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

            </div>



            <!--********** Інтрамедулярні стержні **********-->
            <div class="items_in_details hidden" id="shurupy">


                <!-- MENU WITH BLUE BUTTONS -->
                <div class="fourth_items" >
                    <div class="wrap_small_items ">
                        <div class="bones_imp item_absolute" >
                            <div class="btn_mini fourth" id="active_btn_shurupy" data-id="shurupy_01">
                                <p class="p_text">Прості шурупи</p>
                            </div>
                            <div class="btn_mini fourth" data-id="shurupy_02">
                                <p class="p_text">Блокуючі шурупи</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="shurupy" id="shurupy_01">

                    <?php if( have_posts() ) : query_posts('cat=38');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '38'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>

                <div class="shurupy hidden" id="shurupy_02">

                    <?php if( have_posts() ) : query_posts('cat=39');
                        $counter_item = 1;
                        $query = new WP_Query( array(
                            'posts_per_page' => 50,
                            'order' => 'ASC',
                            'cat' => '39'
                        ) );
                        while ($query->have_posts() ) : $query->the_post(); ?>

                            <div class="each_item_details">
                                <div class="title_item_detail" >
                                    <h2 class="h2_header"><?php the_title(); ?></h2>
                                    <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                                </div>
                                <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                    <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                        <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                        <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                    </div>

                                    <div class="details_right">
                                        <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <? endwhile; endif; wp_reset_query(); ?>

                </div>


            </div>





			<!--********** Стегнові ніжки **********-->
			<div class="items_in_details hidden" id="stegn_langs">

                <?php if( have_posts() ) : query_posts('cat=40');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '40'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

            </div>

			<!--********** Головки **********-->
			<div class="items_in_details hidden" id="golovky">

                <?php if( have_posts() ) : query_posts('cat=41');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '41'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

			</div>

	
			<!--********** Чашки **********-->
			<div class="items_in_details hidden" id="chashky">

                <?php if( have_posts() ) : query_posts('cat=42');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '42'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

			</div>

            <!--********** Вкладки **********-->
            <div class="items_in_details hidden" id="vkladky">

                <?php if( have_posts() ) : query_posts('cat=43');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '43'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

            </div>

            <!--********** Шурупи **********-->
            <div class="items_in_details hidden" id="shurupy_ohst">

                <?php if( have_posts() ) : query_posts('cat=44');
                    $counter_item = 1;
                    $query = new WP_Query( array(
                        'posts_per_page' => 50,
                        'order' => 'ASC',
                        'cat' => '44'
                    ) );
                    while ($query->have_posts() ) : $query->the_post(); ?>

                        <div class="each_item_details">
                            <div class="title_item_detail" >
                                <h2 class="h2_header"><?php the_title(); ?></h2>
                                <p class="p_code">Код товару - <?php echo get_post_meta($post->ID, 'code', true); ?></p>
                            </div>
                            <div class="wrap_detail_item" id="<?php echo get_post_meta($post->ID, 'item', true); ?>">
                                <div class="details_left" id="<?php echo get_post_meta($post->ID, 'item', true); ?>_l">
                                    <?php the_post_thumbnail(array(500),array('class'=>'details_img')); ?>
                                    <br><input type="button" class="callback_btn ask_me" value="Зворотній зв'язок">
                                </div>

                                <div class="details_right">
                                    <div id="<?php echo get_post_meta($post->ID, 'item', true); ?>_r">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>

            </div>


				
		






	</div>



	
	</section>
	
	<a class="go_top"  href=""><img class="arr_top" src="<?php echo get_template_directory_uri() ?>/implants/impls/supp/arr_top.png" alt=""></a>
			
<div class="popup hidden">
	<div class="popup_img">
		<img src="" class="set_img" alt="">
	</div>
    <a class="close_popup" ><img class="close_btn" src="<?php echo get_template_directory_uri() ?>/implants/impls/supp/close.png" alt=""></a>
</div>

<div class="callback_ask hidden">
    <div class="wrap_ask">
        <a class="close_popup" ><img class="close_btn_ask" src="<?php echo get_template_directory_uri() ?>/implants/impls/supp/close.png" alt=""></a>
        <div class="form_wrapper">
            <form action="<?php echo get_template_directory_uri() ?>/implants/ajax/mail.php" method="post" class="form_callback">
                <input type="hidden" name="project_name" value="АртДімДизайн">
                <input type="hidden" name="admin_email" value="">
                <input type="hidden" name="form_subject" value="Нове повідомлення з сайту АртДімДизайн">

                <input type="text" name="ім&prime;я" class="call_input" placeholder="Ваше ім&prime;я" required>
                <input type="text" name="телефон" class="call_input" placeholder="Ваш номер телефону" required>
                <input type="email" name="e-mail" class="call_input" placeholder="Ваш e-mail" required>
                <input type="hidden" name="товар" class="getter_input_monster_title call_input">
                <input type="hidden" name="код&nbsp;товару" class="getter_input_monster_code call_input">
                <input type="submit" class="submit_btn" value="ЗАМОВИТИ" >
            </form>
        </div>
    </div>
</div>

<div class="popup_success hidden">
    <div class="success_box">
        <p class="p_text_success">Ваше повідомлення надіслано! Наші менеджери зв'яжуться з Вами найближчим часом.</p>
    </div>
</div>

	<script>var scr = {"scripts":[
	{"src" : "<?php echo get_template_directory_uri() ?>/implants/js/libs.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri() ?>/implants/js/jquery.maskedinput.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri() ?>/implants/js/main.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>

</body>
</html>





<?php get_footer(); ?>