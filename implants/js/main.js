$(document).ready(function() {
    console.log("Document ready!");
    var path_finder = $('#path_finder').attr("src");
    // console.log(path_finder);

    $('html, body').animate({scrollTop: '0px'}, 0);


    var secShow = new TweenMax($('section'), 1,{alpha:1, onComplete: start_animation()});


    function start_animation(){

        var firstTL = new TimelineMax();

        firstTL.to($('.page_title'), 0.5, {'margin-top': 125})
            .to($('.item_left_first'), 1, {'margin-left': 100})
            .to($('.item_right_first'), 1, {'margin-left': 0, delay: -1})
        // 	.to($('.wrap_items'), 1, {width: 350})
        // 	.to($('.item_btn_big'), 2, {'opacity': 1})
        // 	.to($('.first_go'), 2, {backgroundColor: 'transparent', ease:Power3.easeOut})





        // firstTL.to($('#first_right_elem'), 1, {right: 0})
        // firstTL.to($('.wrap_items'), 1, {height: 100, })
        // firstTL.to($('.wrap_items'), 1, {width:100, delay:0.1})




        // .to($('#r_lang'), .4, {right:0, delay:-.4})
        // .to($('.logos'), 2, {alpha:1})
        // .to($('.text_below'), 0.5, {alpha:1, y:20, delay:-1.5})
    }



    $(".one").on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr("data-id");

        $('html, body').animate({scrollTop: '100px'}, 700);

        $(".one").css('background-color', 'blue').css('border', 'none');
        $(".two").css('background-color', 'blue');
        $(".three").css('background-color', 'blue');
        $(".fourth").css('background-color', 'blue');

        $(this).css('background-color', 'brown');
        $(this).css('border', '1px solid #fff');

        $(".bones_imp").fadeOut(600);
        $(".spine_imp").fadeOut(600);
        $(".joint_hip").fadeOut(600);
        $(".joint_knee").fadeOut(600);
        $(".wrap_details").fadeOut(600);



        if(id=='01'){
            $(".rx_best").fadeIn(600);
            $(".ohst").fadeOut(300);
        }
        if(id=='02'){
            $(".ohst").fadeIn(600);
            $(".rx_best").fadeOut(300);
        }
    });

    $(".two").on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr("data-id");
        $(".two").css('background-color', 'blue');
        $(".three").css('background-color', 'blue');
        $(".fourth").css('background-color', 'blue');
        $(this).css('background-color', 'brown');

        $('html, body').animate({scrollTop: '200px'}, 700);

        $(".wrap_details").fadeOut(600);

        //BONES SHOW
        if(id=='2_1'){
            $(".bones_imp").fadeOut(600);
            $(".spine_imp").fadeIn(300);
            $(".joint_hip").fadeOut(300);
            $(".joint_knee").fadeOut(300);
        }


        if(id=='2_2'){
            $(".bones_imp").fadeIn(600);
            $(".spine_imp").fadeOut(300);
            $(".joint_hip").fadeOut(300);
            $(".joint_knee").fadeOut(300);
        }

        if(id=='2_3'){
            $(".bones_imp").fadeOut(600);
            $(".spine_imp").fadeOut(300);
            $(".joint_hip").fadeIn(300);
            $(".joint_knee").fadeOut(300);
        }

        if(id=='2_4'){
            $(".bones_imp").fadeOut(600);
            $(".spine_imp").fadeOut(300);
            $(".joint_hip").fadeOut(300);
            $(".joint_knee").fadeIn(300);
        }

    });



    $(".three").on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr("data-id");
        $(".three").css('background-color', 'blue');
        $(".fourth").css('background-color', 'blue');
        $("#active_btn_block").css('background-color', 'brown');
        $("#active_btn_sterzhni").css('background-color', 'brown');
        $("#active_btn_shurupy").css('background-color', 'brown');
        $(this).css('background-color', 'brown');

        $('html, body').animate({scrollTop: '525px'}, 700);

        if(id=='blocking_imp'){
            console.log('click, click, click');
        }

        console.log(id);
        $(".wrap_details").fadeIn(600);
        $('#simple_imp').fadeOut(100);
        $('#blocking_imp').fadeOut(100);
        $('#sterzhni').fadeOut(100);
        $('#plastyny').fadeOut(100);
        $('#sterzhni').fadeOut(100);
        $('#shurupy').fadeOut(100);

        $('#stegn_langs').fadeOut(100);
        $('#golovky').fadeOut(100);
        $('#chashky').fadeOut(100);
        $('#vkladky').fadeOut(100);
        $('#shurupy_ohst').fadeOut(100);

        $('#'+id).fadeIn(1000);

        //DETECT WHO HAS CHILDREN AND SHOW PLUS LINK
        $(".wrap_detail_item").each( function( index, element) {
            var eachElem = $(element).attr("id");

            var heightElem = $('#'+eachElem).outerHeight();
            var img_size = $('#'+eachElem+'_l img').outerHeight();
            var margin = (heightElem - img_size) / 2;
            var x = Math.round(margin);

            console.log(heightElem);
            console.log(img_size);
            console.log(x);

            if(margin>6){
                $('#'+eachElem+'_l').css('margin-top', x + 'px');
            } else{
                var heightElemLess = $('#'+eachElem+'_r').outerHeight();
                margin_left = (img_size - heightElemLess) / 2;
                $('#'+eachElem+'_r').css('margin-top', margin_left + 'px');
            }

        });





        //BONES CLICK

        //SPINE CLICK

        //JOINT_HIP CLICK

        //JOINT_KNEE CLICK

    });


    $(".fourth").on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr("data-id");
        $(".fourth").css('background-color', 'blue');
        $(this).css('background-color', 'brown');

        $('#block_01').fadeOut(100);
        $('#block_02').fadeOut(100);
        $('#block_03').fadeOut(100);
        $('#block_04').fadeOut(100);
        $('#block_05').fadeOut(100);
        $('#block_06').fadeOut(100);
        $('#block_07').fadeOut(100);
        $('#block_08').fadeOut(100);
        $('#block_09').fadeOut(100);

        $('#sterzhni_01').fadeOut(100);
        $('#sterzhni_02').fadeOut(100);
        $('#sterzhni_03').fadeOut(100);

        $('#shurupy_01').fadeOut(100);
        $('#shurupy_02').fadeOut(100);

        $('#'+id).fadeIn(1000);



        //DETECT WHO HAS CHILDREN AND SHOW PLUS LINK
        $(".wrap_detail_item").each( function( index, element) {
            var eachElem = $(element).attr("id");

            var heightElem = $('#'+eachElem).outerHeight();
            var img_size = $('#'+eachElem+'_l img').outerHeight();
            var margin = (heightElem - img_size) / 2;
            var x = Math.round(margin);

            console.log(heightElem);
            console.log(img_size);
            console.log(x);

            if(margin>6){
                $('#'+eachElem+'_l').css('margin-top', x + 'px');
            } else{
                var heightElemLess = $('#'+eachElem+'_r').outerHeight();
                margin_left = (img_size - heightElemLess) / 2;
                $('#'+eachElem+'_r').css('margin-top', margin_left + 'px');
            }
        });


    });

    //MASK for telephones
    $('input[name="телефон"]').mask('+38(999)999-99-99');

    //SHOW IMG IN POPUP
    $(".details_img").on("click", function(e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr("data-id");
        var imagePath = $this.attr("src");
        console.log(imagePath);
        $('.popup').fadeIn(500);

        $('.popup_img').html('<img src="'+ imagePath +'" class="set_img">');

    });

    $(".ask_me").on("click", function(e) {
        $('.callback_ask').fadeIn();
        var title_elem = $(this).parent().parent().parent().children('.title_item_detail').children('.h2_header').attr('data-title');
        var code_elem = $(this).parent().parent().parent().children('.title_item_detail').children('.p_code').attr('data-code');
        console.log(title_elem, code_elem);
        $('.getter_input_monster_title').val(title_elem);
        $('.getter_input_monster_code').val(code_elem);
    });


    //CLOSE POPUP IMAGE
    $('.close_popup').on("click", function(){
        $('.popup').fadeOut('slow');
    });

    //CLOSE POPUP CALLBACK
    $('.close_btn_ask').on("click", function(){
        $('.callback_ask').fadeOut('slow');
    });

    $("form").submit(function(e) {
        e.preventDefault();
        $('form_send').find('input[type="text"]').trigger('red');
        $('form_send').find('textarea').trigger('blur');
        if (!$(this).find('input[type="text"]').hasClass('error_input') && !$(this).find('textarea').hasClass('error_input')) {
            var type = $(this).attr('method');
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                type: type,
                url: url,
                data: data,
                success: function() {
                    $('.popup_success').fadeIn(500);
                    var centeringSuccess = ($('.success_box').outerHeight() - $('.p_text_success').outerHeight())/2;
                    $('.p_text_success').css('margin-top', centeringSuccess);
                }
            });
        }
        $(this).trigger("reset");
        setTimeout(function() {
            $('.popup_success').fadeOut(500);
            $('.callback_ask').fadeOut(500);
        }, 5000);
    });

    $(window).scroll(function() {

        // clearTimeout($.data(this, 'scrollTimer'));
        var top = $(window).scrollTop();
        // console.log(top);

    });


});