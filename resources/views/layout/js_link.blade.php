
<script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
            <script src="{{ asset('js/slick.js') }}" defer></script>
            <script src="{{ asset('js/main4001.js?ver=20240208094025') }}" defer></script>
            <script src="{{ asset('offline/offline.min.js') }}"></script>
            <script src="{{ asset('menu/breaking-news-ticker.min.js?sajjk9') }}"></script>
            <script src="{{ asset('owl/easy-ticker.js') }}" type="text/javascript"></script>
            <script src="{{ asset('owl/owl.carousel.js') }}" type="text/javascript"></script>
            <script src="{{ asset('chart/js/stiffChart.js') }}"></script>
            <script type="text/javascript" src="{{ asset('typeInOtherLanguage/input.marathi.js') }}"></script>
            <script src="{{ asset('hyd/css/jquery.fancybox.min.js') }}" type="text/javascript"></script>
            <!-- <script src="{{ asset('js/common_disble_keys.js') }}"></script> -->

            <script>
                Offline.options = {checks: {xhr: {url: '/tiny-image.gif'}}};
                $(window).on('load',function () {
                    function Preloader() {
                        $('.preloader').addClass('show1');
                        $('.homeMainWrapOut').css('opacity','1');
                        $('.homeBody').css('opacity','1');
                        setTimeout(function(){ $('.first').addClass('activeLine'); },1000);
                        setTimeout(function(){ $('.second').addClass('activeLine'); },1200);
                        setTimeout(function(){ $('.third').addClass('activeLine'); },1400);
                        setTimeout(function(){ $('.fourth').addClass('activeLine'); },1600);
                        setTimeout(function(){ $('.fifth').addClass('activeLine'); },1800);

                        setTimeout(function(){
                            $('.preloader').fadeOut();
                        },500);
                        
                        // document.getElementById("100DayModal").style.visibility = "visible";
                        // document.getElementById("100DayModal").style.opacity = 1;
                    
                        const currentUrl = document.URL;
                        if(currentUrl === "http://127.0.0.1:81/") {
                            if(window.matchMedia("(min-width: 760px)").matches){
                                $('.statePopup').fadeIn();
                                $('.statePopup').css('display','flex');
                                $('.day100Main').fadeIn();    
                            } else {
                                $('.statePopup').fadeIn();
                                $('.statePopup').css('display','flex');
                                $('.day100Main1').fadeIn();    
                            }
                        }
                    }
        
                    $('select[name=lang_dropdown_select]').change(function() {
                        var lang = $(this).val();
                        window.location.href = "{{ route('changeLanguage') }}?language="+lang;
                    });

                    // if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
                    //     sessionStorage.setItem( 'doNotShow', true );
                        Preloader();
                    // }else{
                    //     $('.homeMainWrapOut').css('opacity','1');
                    // }

                    $(window).bind("beforeunload", function () {
                        sessionStorage.setItem( 'doNotShow', false );
                    })
                    
                    $("#policeStationBox").change(function () {
                        window.location.href = "/police-stations?id=" + $(this).val();
                    });
                    $("#policeStationBox1").change(function () {
                        window.location.href = "/police-stations?id=" + $(this).val();
                    });
                    $("#orgBox").change(function () {
                        $('#MainDiv1').hide();
                        $('#MainDiv2').hide();
                        $('#MainDiv3').hide();
                        if($(this).val() == "1") {
                            $('#MainDiv1').show();
                        }
                        if($(this).val() == "2") {
                            $('#MainDiv2').show();
                        }
                        if($(this).val() == "3") {
                            $('#MainDiv3').show();
                        }
                    });
                    // $(".senior-officers__image").on("error", function(){
                    //     $(this).attr('src', "{{ asset('images/cap.jpg') }}");
                    // });
                }); 
            </script>
            <script>
                const scrollers = document.querySelectorAll(".scroller");

// If a user hasn't opted in for recuded motion, then we add the animation
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  addAnimation();
}

function addAnimation() {
  scrollers.forEach((scroller) => {
    // add data-animated="true" to every `.scroller` on the page
    scroller.setAttribute("data-animated", true);

    // Make an array from the elements within `.scroller-inner`
    const scrollerInner = scroller.querySelector(".scroller__inner");
    const scrollerContent = Array.from(scrollerInner.children);

    // For each item in the array, clone it
    // add aria-hidden to it
    // add it into the `.scroller-inner`
    scrollerContent.forEach((item) => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}

                $(document).ready(function() {
                    $(".ajaxLoader").hide();
                    $("#bodyId").focus();
                    $('#your-chart-name').stiffChart({
        });
                    
                    var progressPath = document.querySelector('.progress-wrap path');
                    var pathLength = progressPath.getTotalLength();
                    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                    progressPath.style.strokeDashoffset = pathLength;
                    progressPath.getBoundingClientRect();
                    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
                    var updateProgress = function () {
                        var scroll = $(window).scrollTop();
                        var height = $(document).height() - $(window).height();
                        var progress = pathLength - (scroll * pathLength / height);
                        progressPath.style.strokeDashoffset = progress;
                    }
                    updateProgress();
                    $(window).scroll(updateProgress);
                    var offset = 50;
                    var duration = 550;
                    jQuery(window).on('scroll', function () {
                        if (jQuery(this).scrollTop() > offset) {
                            jQuery('.progress-wrap').addClass('active-progress');
                        } else {
                            jQuery('.progress-wrap').removeClass('active-progress');
                        }
                    });
                    jQuery('.progress-wrap').on('click', function (event) {
                        event.preventDefault();
                        jQuery('html, body').animate({ scrollTop: 0 }, duration);
                        return false;
                    })
                });
                $('#owlplay-1').hide();
                $('#owlstop-1').show();
                var owl = $('#slider1');
                $('#slider1').owlCarousel({
                    items: 1,
                    loop: true,
                    mouseDrag: true,
                    smartSpeed: 1500,
                    fluidSpeed: 2500,
                    nav: false,
                    dot: false,
                    animateIn: false,
                    autoplay: true,
                    autoplayTimeout: 4000
                });
                $('#owlplay-1').on('click', function () {
                    owl.trigger('play.owl.autoplay', [3000])
                    $('#owlplay-1').hide();
                    $('#owlstop-1').show();
                })
                $('#owlstop-1').on('click', function () {
                    owl.trigger('stop.owl.autoplay')
                    $('#owlstop-1').hide();
                    $('#owlplay-1').show();
                })
                var owl = $('#ourservices');
                $('#ourservices').owlCarousel({
                    items:4,
                    loop: true,
                    mouseDrag: true,
                    smartSpeed: 1500,
                    fluidSpeed: 2500,
                    nav: true,
                    dot: true,
                    animateIn: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                    0: {
                    items: 1,
                    },
                    600: {
                    items: 2,
                    }, 900: {
                    items: 3,
                    },
                    1200: {
                    items: 4,
                        }
                    }
                }); 
                
                var owl = $('#ourgallery');
                $('#ourgallery').owlCarousel({
                    items:4,
                    loop: true,
                    mouseDrag: true,
                    smartSpeed: 1500,
                    fluidSpeed: 2500,
                    nav: true,
                    dot: false,
                    animateIn: false,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        }, 900: {
                            items: 3,
                        },
                        1200: {
                            items: 4,
                        }
                    }
                }); 
                /*Important Links Start*/
                var owl = $('#Importantlinks');
                $('#Importantlinks').owlCarousel({
                    autoplay: true,
                    smartSpeed: 1000,
                    items: 4,
                    dots: false,
                    loop: true,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                        1200: {
                            items: 6,
                        }
                    }
                });
                /*Important Links End*/
                /*Latest Updates Scroll Start*/
                $(function () {
                    $('.demo5').easyTicker({
                        direction: 'up',
                        visible: 5,
                        interval: 2000,
                        mousePause: false,
                    });
                    
                    $('.demo6').easyTicker({
                        direction: 'up',
                        visible: 4,
                        interval: 2000,
                        mousePause: false,
                        autoplay:true
                    });
                });
                /*Latest Updates Scroll End*/
                function openCustomModal(Title, FileName) {
                    $("#modalTitle").html(Title);
                    document.getElementById("detailModal").style.visibility = "visible";
                    document.getElementById("detailModal").style.opacity = 1;
                    $("#detailModalBody").html("");
                    var object = "<object data=\"{FileName}\" type=\"application/pdf\" width=\"1020px\" height=\"700px\">";
                    object += "If you are unable to view file, you can download from <a href = \"{FileName}\">here</a>";
                    object += " or download <a target = \"_blank\" href = \"http://get.adobe.com/reader/\">Adobe PDF Reader</a> to view the file.";
                    object += "</object>";
                    object = object.replace(/{FileName}/g, FileName);
                    $("#detailModalBody").html(object);
                }
                function closeCustomModal() {
                    document.getElementById("detailModal").style.opacity = 0;
                    document.getElementById("detailModal").style.visibility = "hidden";
                    $("#detailModalBody").html("");
                }
                function ajaxPagination(url) {
                    $('#ajaxResponseData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: url,
                        type:"POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
                function openSecurityModal() {
                    document.getElementById("securityModal").style.visibility = "visible";
                    document.getElementById("securityModal").style.opacity = 1;
                }
                function openTermsModal() {
                    document.getElementById("termsModal").style.visibility = "visible";
                    document.getElementById("termsModal").style.opacity = 1;
                }
                function openCopyrightModal() {
                    document.getElementById("copyrightModal").style.visibility = "visible";
                    document.getElementById("copyrightModal").style.opacity = 1;
                }
                function closeModal() {
                    document.getElementById("copyrightModal").style.opacity = 0;
                    document.getElementById("copyrightModal").style.visibility = "hidden";
                     document.getElementById("securityModal").style.opacity = 0;
                    document.getElementById("securityModal").style.visibility = "hidden";
                    document.getElementById("termsModal").style.opacity = 0;
                    document.getElementById("termsModal").style.visibility = "hidden";
                    
                }
                $("#ppStationId").change(function () {
                    selectVal = $(this).val();
                    $("#ajaxResponseData").html('');
                    if(selectVal !== '') {
                        $("#bitDiv").show();
                        html = "<option value=''>Select Bit</option>"
                        $('#ppBitId').html(html);
                        let _token = $('meta[name="csrf-token"]').attr("content");
                        $(".ajaxLoader").show();
                        $.ajax({
                            url: "/police-patil/get-bit-dropdown-list-by-station-id",
                            type: "POST",
                            data: "id="+selectVal+"&_token=" + _token,
                        }).done(function (response) {
                            $(".ajaxLoader").hide();
                            $("#ppBitId").html(response);
                        }).fail(function () {
                            $(".ajaxLoader").hide();
                        });
                    } else {
                        $("#bitDiv").hide();
                    }
                });
                $("#ppBitId").change(function () {
                    $("#ajaxResponseData").html('');
                });
                function searchListOnButtonClick() {
                    $("#ajaxResponseData").html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    stationId = $("#ppStationId").val();
                    bitId = $("#ppBitId").val();
                    if(stationId === '') {
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Select Police Station</div>');
                        return;
                    }
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: "/police-patil/ajax-filter-paginate-police-patil-list",
                        type: "POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }

                
                jQuery(document).ready(function(){

                    jQuery(".show_menu").click(function(event){
                        event.preventDefault() 
                        jQuery(".submenu-dropdown").addClass("active");
                        
                    });

                    jQuery("#block-menudelhi2047,#block-menucmulf,#block-menudillifirst").click(function(event){
                        event.preventDefault();
                    jQuery(".more-menu-wrapper").slideToggle();
                    });


                    jQuery(".hide_menu").click(function(event){
                        event.preventDefault() 
                        jQuery(".submenu-dropdown").removeClass("active");
                        
                    });

                });
                
                jQuery( ".humburger-ico " ).click(function(){
                    jQuery(".menu-bar").addClass("animating");
                    jQuery(".humburger-ico").hide();
                    jQuery(".closemenu").show();
                });   
                jQuery( ".closemenu" ).click(function(){
                    jQuery(".menu-bar").removeClass("animating");
                    jQuery(".humburger-ico").show();
                    jQuery(".closemenu").hide(); 
                });   
                
                
                if(!jQuery('body').hasClass('path-user')){
                    var target = jQuery('.menu-bar').offset().top;
                        jQuery(window).scroll(function() {
                            if (jQuery(window).scrollTop() > target) {
                            jQuery('.menu-bar').addClass('sticky');
                            } else {
                            jQuery('.menu-bar').removeClass('sticky');
                        }
                    }); 
                }

                /*********Font size resize**********/

                var fontSize = 14;
                jQuery(document).ready(function() { 
                    //console.log(theme);
                    jQuery('.newslider').breakingNews({
                        // stopOnHover:false

                    });
                    if (_getCookie("nccfontSize") != null) {
                        var fontSize = _getCookie("nccfontSize");
                    } else {
                        var fontSize = 14;
                    }
                    jQuery("body .main, #maincontent").css("font-size", fontSize + "px");
                    jQuery("a").css("font-size", fontSize + "px");
                
                });
                function _deleteCookie(name,path,domain) {
                    if (_getCookie(name)) {
                        document.cookie = name + "=" +
                        ((path) ? "; path=" + path : "") +
                        ((domain) ? "; domain=" + domain : "") +
                        "; expires=Thu, 01-Jan-70 00:00:01 GMT";
                    }
                }
                function _getCookie(name) {
                    var arg = name + "=";
                    var alen = arg.length;
                    var clen = document.cookie.length;
                    var i = 0;
                    while (i < clen) {
                        var j = i + alen;
                        if (document.cookie.substring(i, j) == arg) {
                            return _getCookieVal(j);
                        }
                        i = document.cookie.indexOf(" ", i) + 1;
                        if (i == 0)
                            break;
                    }
                    return null;
                }

                function _getCookieVal(offset) {
                    var endstr = document.cookie.indexOf (";", offset);
                    if (endstr == -1) { endstr = document.cookie.length; }
                    return unescape(document.cookie.substring(offset, endstr));
                }
                function _setCookie(name, value, expires, path, domain, secure) {
                    var vurl = true;
                    if (path != '' && path != undefined) {
                        vurl = validUrl(path);
                    }
                    if (jQuery.type(name) == "string" && vurl) {
                        // document.cookie = name + "=" + escape(value)  +
                        //     ((expires) ? "; expires=" + expires.toGMTString() : "") +
                        //   ((path) ? "; path=" + "/" : "") +
                        //     ((domain) ? "; domain=" + domain : "") +
                        //      ((secure) ? "; secure" : "");
                        document.cookie = name + "=" + (value || "")  +   ((expires) ? "; expires=" + expires.toGMTString() : "") + ((domain) ? "; domain=" + domain : "")   + "; path=/";
                    }
                }
                function setFontSize(fontType) {
                    if (fontType == "plus") {
                        if (fontSize <= 15) {
                            fontSize = parseInt(fontSize) + 1 ;
                        }
                        if (fontSize > 16) {
                            fontSize = parseInt(fontSize) + 1;
                        }		
                    } else if (fontType == "minus") {
                        if (fontSize > 12) {
                            fontSize = parseInt(fontSize) - 1+1;
                        }
                        if (fontSize > 12) {
                            fontSize = parseInt(fontSize) - 1;
                        }  
                    } else {
                        fontSize = 14;
                    }
                    
                    _setCookie("nccfontSize", fontSize);
                    jQuery("body .main, #bodyId").css("font-size", fontSize + "px");
                    jQuery("a").css("font-size", fontSize + "px");
                }
                jQuery('.external').click(function(){
                    return confirm('This link shall take you to a page outside the website. For any query regarding the content of the linked page, please contact the webmaster of the concerned website.');
                }); 
                jQuery(function () {
                    setNavigation();
                });
                    
                function setNavigation() {
                    var path = window.location.pathname;
                    path = path.replace(/\/jQuery/, "");
                    path = decodeURIComponent(path);
                
                    jQuery("#block-mainnavigation a").each(function () {
                        var href = jQuery(this).attr('href');
                        if (location.pathname === href) {
                            jQuery(this).closest('li').addClass('active');
                            jQuery('.left-menu li.dropdown-item.active,.left-menu li.nav-item.active').parents('ul.dropdown-menu').css('display','block');
                            jQuery('.left-menu li.dropdown-item.active,.left-menu li.nav-item.active').parents('ul.dropdown-menu').css('display','block');
                            jQuery('.left-menu li.dropdown-item.active,.left-menu li.nav-item.active').parents('ul.dropdown-menu').addClass('parent-active');
                            jQuery(this).parents('.parent-active').parent('li').addClass("child-activate show");
                            jQuery(".child-activate.show > a").addClass("highlighted text-dark bg-light");
                        }
                    });
                }
                function showHideBranch(id) {
                    $('.div-shadow').show();
                    $('#branchDiv1').hide();
                    $('#branchDiv2').hide();
                    $('#branchDiv3').hide();
                    document.getElementById("parentDiv1").classList.remove("box");
                    document.getElementById("parentDiv2").classList.remove("box");
                    document.getElementById("parentDiv3").classList.remove("box");
                    
                    $('#branchDiv'+id).show();
                    document.getElementById("parentDiv"+id).classList.add("box");
                }
                // $("#spMessageBtn").click(function() {
                //     $('html, body').animate({
                //         scrollTop: $("#spMessageDiv").offset().top
                //     }, 2000);
                // });
                function handle1(e, nextFocus) {
                    if (e.keyCode === 13) {
                        e.preventDefault();
                        document.getElementById(nextFocus).focus();
                    }
                }
                function onlyNumber(e, nextFocus) {
                    var charCode;
                    if (e.keyCode > 0) {
                        charCode = e.which || e.keyCode;
                    } else if (typeof(e.charCode) !== "") {
                        charCode = e.which || e.keyCode;
                    }
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
                    if (e.keyCode === 13) {
                        e.preventDefault();
                        document.getElementById(nextFocus).focus();
                    }
                }
                $(document).ready(function() {
                    $("#ddlTarget").change(function () {
                        selectVal = $(this).val();
                        $("#form_name").val('');
                        $("#form_area").val('');
                        $("#form_town").val('');
                        $("#form_nature").val('');
                        $("#form_brief").val('');
                        
                        $("#form_name1").val('');
                        $("#form_area1").val('');
                        $("#form_town1").val('');
                        $("#form_nature1").val('');
                        $("#form_brief1").val('');
                        
                        $("#form_name").show();
                        $("#form_area").show();
                        $("#form_town").show();
                        $("#form_nature").show();
                        $("#form_brief").show();

                        $("#form_name1").hide();
                        $("#form_area1").hide();
                        $("#form_town1").hide();
                        $("#form_nature1").hide();
                        $("#form_brief1").hide();
                        if(selectVal == 'MR') {
                            $("#form_name").hide();
                            $("#form_area").hide();
                            $("#form_town").hide();
                            $("#form_nature").hide();
                            $("#form_brief").hide();
                            
                            $("#form_name1").show();
                            $("#form_area1").show();
                            $("#form_town1").show();
                            $("#form_nature1").show();
                            $("#form_brief1").show();
                        }
                    });
                    arr_input_ids = new Array("form_name1"
                        ,"form_area1"
                        ,"form_town1"
                        ,"form_nature1"
                        ,"form_brief1");
                    typeInOtherLanguage(
                        {
                            "language":"MARATHI",
                            "font_size":15,
                            "arr_input_ids" : arr_input_ids,
                        }
                    );
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).ready(function(e){
                    // Submit form data via Ajax
                    $("#complaintForm").on('submit', function(e){
                        e.preventDefault();
                        $("#errorMsgDiv1").html("");
                        
                        var ddlTarget = $("#ddlTarget").val();

                        if(ddlTarget == "MR") {
                            var form_name1 = $("#form_name1").val();
                            var form_mobile = $("#form_mobile").val();
                            var form_brief1 = $("#form_brief1").val();
                            /*if(form_name1 === '') {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>आपले नाव प्रविष्ठ करा</strong></div>');
                                document.getElementById("form_name1").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                            if(form_mobile === '') {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>मोबाईल नंबर प्रविष्ठ करा</strong></div>');
                                document.getElementById("form_mobile").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                            if(form_mobile.length !== 10) {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>१० अंकी मोबाईल नंबर टाका</strong></div>');
                                document.getElementById("form_mobile").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }*/
                            if(form_brief1 === '') {
                                $("#errorMsgDiv1").html('<div class="fade alert alert-danger show"><strong>आपली तक्रार प्रविष्ठ करा</strong></div>');
                                document.getElementById("form_brief1").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                        } else {
                            var form_name = $("#form_name").val();
                            var form_mobile = $("#form_mobile").val();
                            var form_brief = $("#form_brief").val();
                            /*if(form_name === '') {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>Enter your name</strong></div>');
                                document.getElementById("form_name").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                            if(form_mobile === '') {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>Enter mobile number</strong></div>');
                                document.getElementById("form_mobile").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                            if(form_mobile.length !== 10) {
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>Enter 10 digit mobile number</strong></div>');
                                document.getElementById("form_mobile").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }*/
                            if(form_brief === '') {
                                $("#errorMsgDiv1").html('<div class="fade alert alert-danger show"><strong>Enter complaint details in breif</strong></div>');
                                document.getElementById("form_brief").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                        }
                        if (document.getElementById("form_file").value !== "") {
                            myFile = $("#form_file").val();
                            var upld = myFile.split('.').pop();
                            if(upld=='pdf' || upld=='jpg'){
                            }else{
                                $("#form_file").val("");
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>{{ __("REGISTER_COMPLAINT_PAGE_FILE_TYPE_ERROR") }}</strong></div>');
                                document.getElementById("form_file").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                            var file = document.getElementById("form_file");
                            var size = parseFloat(file.files[0].size);
                            var fileSize = (size / 1024 / 1024).toFixed(2);
                            if(fileSize > 2){
                                $("#form_file").val("");
                                $("#errorMsgDiv1").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show"><strong>{{ __("REGISTER_COMPLAINT_PAGE_FILE_SIZE_ERROR") }}</strong></div>');
                                document.getElementById("form_file").focus();
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                return;
                            }
                        }
                        
                        $.ajax({
                            type: 'POST',
                            url: '/ajax-submit-complaint-Detail',
                            data: new FormData(this),
                            dataType: 'json',
                            contentType: false,
                            cache: false,
                            processData:false,
                            beforeSend: function(){
                                $(".ajaxLoader").show();
                                $('#submitBtnId1').attr("disabled","disabled");
                            },
                            success: function(response){
                                $(".ajaxLoader").hide();
                                $('#errorMsgDiv1').html('');
                                if(response.status == 1){
                                    $('#complaintForm')[0].reset();
                                    $('#errorMsgDiv1').html('<div class="fade alert alert-success show">'+response.message+'</div>');
                                }else{
                                    $('#errorMsgDiv1').html('<div class="fade alert alert-danger show">'+response.message+'</div>');
                                }
                                $('html, body').animate({
                                    scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                                $("#submitBtnId1").removeAttr("disabled");
                            }
                        });
                    });
                    
                    $("#trackForm").on('submit', function(e){
                        e.preventDefault();
                        $("#errorMsgDiv1").html("");
                        $("#ajaxResponseDiv").html("");
                        
                        var form_track_id = $("#form_track_id").val();
                        if(form_track_id === '') {
                            $("#errorMsgDiv1").html('<div class="fade alert alert-danger show"><strong>{{ __("TRACK_COMPLAINT_PAGE_TRACK_ID_PLACE_LABEL") }}</strong></div>');
                            document.getElementById("form_track_id").focus();
                            e.preventDefault();
                            $('html, body').animate({
                                scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                            }, 'slow');
                            return;
                        }
                        
                        $.ajax({
                            type: 'POST',
                            url: '/ajax-track-complaint-Detail',
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData:false,
                            beforeSend: function(){
                                $(".ajaxLoader").show();
                                $('#submitBtnId1').attr("disabled","disabled");
                            },
                            success: function(response){
                                grecaptcha.reset();
                                $(".ajaxLoader").hide();
                                $('#ajaxResponseDiv').html('');
                                if(response.includes("alert-danger")) {
                                    $('#errorMsgDiv1').html(response);
                                    $('html, body').animate({
                                        scrollTop: $('#errorMsgDiv1').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                    }, 'slow');
                                    $("#submitBtnId1").removeAttr("disabled");
                                } else {
                                    $('#ajaxResponseDiv').html(response);
                                    $('html, body').animate({
                                        scrollTop: $('#ajaxResponseDiv').offset().top - 70 //#DIV_ID is an example. Use the id of your destination on the page
                                    }, 'slow');
                                    $("#submitBtnId1").removeAttr("disabled");
                                }
                            }
                        });
                    });
                });
            </script>
            <script src="{{ asset('menu/jquery.smartmenus.js?sajjk9') }}"></script>
            <script src="{{ asset('menu/jquery.smartmenus.bootstrap-4.js?sajjk9') }}"></script>
            <script type="text/javascript" src="{{ asset('chat-ui/chatbot/dist/autosize.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('chat-ui/chatbot/dist/jquery.convform.js') }}"></script>
            <script>
                $("#chat-circle").click(function() {    
                    $("#chat-circle").toggle('scale');
                    $(".chat-box").toggle('scale');
                })
                
                $(".chat-box-toggle").click(function() {
                    $("#chat-circle").toggle('scale');
                    $(".chat-box").toggle('scale');
                })
                var rollbackTo = false;
                var originalState = false;
                function storeState(stateWrapper, ready) {
                    rollbackTo = stateWrapper.current;
                    console.log("storeState called: ",rollbackTo);
                    ready();
                }
                function rollback(stateWrapper, ready) {
                    console.log("rollback called: ", rollbackTo, originalState);
                    console.log("answers at the time of user input: ", stateWrapper.answers);
                    if(rollbackTo!=false) {
                    if(originalState==false) {
                        originalState = stateWrapper.current.next;
                        console.log('stored original state');
                    }
                    stateWrapper.current.next = rollbackTo;
                    console.log('changed current.next to rollbackTo');
                    }
                    ready();
                }
                function restore(stateWrapper, ready) {
                    if(originalState != false) {
                    stateWrapper.current.next = originalState;
                    console.log('changed current.next to originalState');
                    }
                    ready();
                }
            </script>
            <script>
                jQuery(function($){
                    convForm = $('#chat').convform({selectInputStyle: 'disable'});
                    console.log(convForm);
                });
                // $(".ssspath").click(function(){
                //     // openCopyrightModal();
                //     $('.statePopup').fadeIn();
                //     $('.statePopup').css('display','flex');
                // });
                
                $('.mahaMap a').click(function(){
                    var mapId = $(this).attr('id');
                    var link = $(this).attr('href');
                    console.log(link);
                    if(link ==  ""){
                        $('.statePopup').fadeIn();
                        $('.statePopup').css('display','flex');
                        $('.' + mapId).fadeIn();    
                    }else{
                        // console.log(mapId);
                    }
                });
                $('.statePopup .closeStatePopup').click(function(){
                    $('.statePopup').fadeOut();
                    $('.statePopupMain').fadeOut();
                });
                function getPhotoGallery(id) {
                    $('#ajaxGalleryData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: '/photo-gallery/ajax-view-photo-gallery',
                        type:"POST",
                        data: "id=" + id + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").hide();
                        $("#ajaxGalleryData").show();
                        $("#ajaxGalleryData").html(response);
                        $('html, body').animate({
                            scrollTop: $('#ajaxGalleryData').offset().top - 150 //#DIV_ID is an example. Use the id of your destination on the page
                        }, 'slow');
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxGalleryData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
                function closeGalleryDetailDiv() {
                    $("#ajaxGalleryData").hide();
                    $("#ajaxResponseData").show();
                    $("#ajaxGalleryData").html('');
                    $('html, body').animate({
                        scrollTop: $('#ajaxResponseData').offset().top - 150 //#DIV_ID is an example. Use the id of your destination on the page
                    }, 'slow');
                }
                var myFile="";
                $('#form_file').on('change',function(){
                    myFile = $("#form_file").val();
                    var upld = myFile.split('.').pop();
                    if(upld=='pdf' || upld=='jpg'){
                    }else{
                        $("#form_file").val("");
                        alert('{{ __("REGISTER_COMPLAINT_PAGE_FILE_TYPE_ERROR") }}')
                    }
                    var file = this.files[0];
                    var fileSize = (file.size / 1024 / 1024).toFixed(2);
                    if(fileSize > 2){
                        alert('{{ __("REGISTER_COMPLAINT_PAGE_FILE_SIZE_ERROR") }}')
                        $("#form_file").val('');
                        return false;
                    }
                })
                function close100DayModal() {
                    document.getElementById("100DayModal").style.opacity = 0;
                    document.getElementById("100DayModal").style.visibility = "hidden";
                }
                function open100DayModal() {
                    document.getElementById("100DayModal").style.visibility = "visible";
                    document.getElementById("100DayModal").style.opacity = 1;
                }
                function searchPressList() {
                    $('#ajaxResponseData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: "/press-release/ajax-paginate-press-release-list",
                        type:"POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
                function searchGradationList() {
                    $('#ajaxResponseData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: "/gradation-list/ajax-paginate-gradation-list",
                        type:"POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
                function searchRecruitmentList() {
                    $('#ajaxResponseData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: "/recruitment/ajax-paginate-recruitment-list",
                        type:"POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
                function searchSCActList() {
                    $('#ajaxResponseData').html('');
                    let _token = $('meta[name="csrf-token"]').attr("content");
                    $(".ajaxLoader").show();
                    $.ajax({
                        url: "/scheduled-cast-tribe/ajax-paginate-scheduled-cast-tribe-list",
                        type:"POST",
                        data: $("#form1").serialize() + "&_token=" + _token,
                    }).done(function (response) {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html(response);
                    }).fail(function () {
                        $(".ajaxLoader").hide();
                        $("#ajaxResponseData").html('<div class="fade d-flex justify-content-between align-items-center alert alert-danger show">Network connection error</div>');
                    });
                }
            </script>
        </div>
    </body>
</html>