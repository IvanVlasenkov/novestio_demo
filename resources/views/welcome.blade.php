<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>{{ __('landing.cadr_1_1') }} — {{ __('landing.cadr_1_2') }}</title>        
        <meta name="description" content="Novestio — оптимальное инвестирование с помощью математически точного интеллекта" />

        <link href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/landing.css') }}?ver=1.1" rel="stylesheet">
    </head>

    <body>
        @includeIf('chunks.main_svg')
        <!-- cadr-1 -->
        <section id="main" class="shadow">

            <div class="slide" id="main-slide-1">
                <div class="content">
                    <div class="">
                        <h1 class="white">
                            <span class="bigger">{{ __('landing.cadr_1_1') }}</span>
                            <span class="smaller">{{ __('landing.cadr_1_2') }}</span>
                        </h1>

                        <p class="text white">{{ __('landing.cadr_1_3') }}</p>
                        <p class="text white">{{ __('landing.cadr_1_4') }}</p>
                    </div>
                    
                    <a class="btn btn-style-1" href="{{ route('demo') }}">{{ __('landing.cadr_1_5') }}</a>
                    
                </div>
            </div>

            <ul class="landing-locale">
                @includeIf('chunks.locale_select')
            </ul>
                
        </section>



        <!-- cadr-2 -->
        <section id="cadr-2" class="">
            <div class="content">
                <h2 class="c-blue text-center">{{ __('landing.cadr_2_1') }}</h2>
                <p class="text">{{ __('landing.cadr_2_2') }}</p>
                <a class="btn btn-style-1" href="{{ route('demo') }}">{{ __('landing.cadr_2_4') }}</a>
                <p class="text">{{ __('landing.cadr_2_3') }}</p>           
            </div>
        </section>

        <!-- cadr-3 -->
        <section id="cadr-3" class="">
            <div class="content">
                <h2 class="c-blue text-center mb-15">{{ __('landing.cadr_3_1') }}</h2>
                <p class="text-subtitle text-center mb-75 c-blue">{{ __('landing.cadr_3_2') }}</p>
                <p class="text text-center mb-25">{{ __('landing.cadr_3_3') }}</p>
                <p class="text text-center mb-35">{{ __('landing.cadr_3_4') }}</p>    

                <p class="text text-center text-subtitle mb-85">{{ __('landing.cadr_3_5') }}</p>


                <div class="slider" id="slider-7">

                    <div class="item">
                        <img class="mb-35" alt="{{ __('landing.slide_1_1') }}" src="/img/landing/slide-bg-1.webp" title="{{ __('landing.slide_1_1') }}" />
                        <p class="slider-text text">{{ __('landing.slide_1_1') }}</p>
                    </div>
                    <div class="item">
                        <img class="mb-35" alt="{{ __('landing.slide_1_2') }}" src="/img/landing/slide-bg-2.webp" title="{{ __('landing.slide_1_2') }}" />
                        <p class="slider-text text">{{ __('landing.slide_1_2') }}</p>
                    </div>  
                    <div class="item">
                        <img class="mb-35"  alt="{{ __('landing.slide_1_4') }}" src="/img/landing/slide-bg-4.webp" title="{{ __('landing.slide_1_4') }}" />
                        <p class="slider-text text">{{ __('landing.slide_1_4') }}</p>
                    </div>  	                
                    <div class="item">
                        <img class="mb-35"  alt="{{ __('landing.slide_1_3') }}" src="/img/landing/slide-bg-3.webp" title="{{ __('landing.slide_1_3') }}" />
                        <p class="slider-text text">{{ __('landing.slide_1_3') }}</p>
                    </div>

                </div>  

                <p class="text text-center text-subtitle">{{ __('landing.cadr_3_6') }}</p>
                <p class="text text-center text-subtitle">{{ __('landing.cadr_3_7') }}</p> 
            </div>
        </section>

        <!-- cadr-4 -->
        <section id="cadr-4" class="">
            <div class="content">
                <h2 class="white text-center mb-11">{{ __('landing.cadr_4_1') }}</h2>
                <p class="text-subtitle text-center white mb-100">{{ __('landing.cadr_4_2') }}</p>
                <div class="gallery">
                    <div class="gallery-text">
                        <p class="mb-35 white">{{ __('landing.cadr_4_3') }}</p>
                        <p class="mb-35 white">{{ __('landing.cadr_4_4') }}</p>
                        <p class="mb-35 white">{{ __('landing.cadr_4_5') }}</p>
                        <a class="btn btn-style-1" href="{{ route('demo') }}">{{ __('landing.cadr_1_5') }}</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- cadr-5 -->
        <section id="cadr-5" class="">
            <div class="content">
                <h2 class="c-blue text-center">{{ __('landing.cadr_5_1') }}</h2>
                <p class="text-subtitle text-center">{{ __('landing.cadr_5_2') }}</p>
                <div class="gallery">
                    <div class="gallery-text">
                        <p class="mb-35">{{ __('landing.cadr_5_3') }}</p>
                        <p class="mb-35">{{ __('landing.cadr_5_4') }}</p>
                        <p class="mb-35">{{ __('landing.cadr_5_5') }}</p>
                    </div>
                    <img class="gallery-img img-style-1" src="/img/landing/cadr-5-1.webp" alt="{{ __('landing.cadr_5_2') }}" title="{{ __('landing.cadr_5_2') }}" />
                </div>
            </div>
        </section>

        <!-- cadr-6 -->
        <section id="cadr-6" class="">
            <div class="content">
                <h2 class="landing-title c-blue text-center mb-51">{{ __('landing.cadr_6_1') }}</h2>
                <p class="text-subtitle text-center mb-100">{{ __('landing.cadr_6_2') }}</p>

                <div class="dual-block mb-51">
                    <div class="dual-block-minor">
                        <img src="/img/landing/cadr-6-1.webp" alt="{{ __('landing.cadr_6_3') }}" title="{{ __('landing.cadr_6_3') }}" class="" id="" />
                    </div>
                    <div class="dual-block-major">
                        <p class="text-subtitle mb-11">{{ __('landing.cadr_6_3') }}</p>
                        <p class="">{{ __('landing.cadr_6_4') }}</p>
                    </div>
                </div>

                <div class="dual-block mb-s-35">
                    <div class="dual-block-minor">
                        <img src="/img/landing/cadr-6-2.webp" alt="{{ __('landing.cadr_6_5') }}" title="{{ __('landing.cadr_6_5') }}" class="" id="" />
                    </div>
                    <div class="dual-block-major">
                        <p class="text-subtitle mb-11">{{ __('landing.cadr_6_5') }}</p>
                        <p class="">{{ __('landing.cadr_6_6') }}</p>
                    </div>
                </div>

                <div class="dual-block mb-100">
                    <div class="dual-block-minor"></div>
                    <div class="dual-block-major">
                        <p class="mb-11">{{ __('landing.cadr_6_7') }}</p>
                        <ul class="ul-style-1">
                            <li>{{ __('landing.cadr_6_8') }}</li>
                            <li>{{ __('landing.cadr_6_9') }}</li>
                            <li>{{ __('landing.cadr_6_10') }}</li>
                            <li>{{ __('landing.cadr_6_11') }}</li>
                        </ul>
                    </div>
                </div>

                <p class="text-subtitle text-center mb-11">{{ __('landing.cadr_6_12') }}</p>
                <p class="text-subtitle text-center">{{ __('landing.cadr_6_13') }}</p>
            </div>
        </section>

        <!-- cadr-7 -->
        <section id="cadr-7" class="">
            <div class="content">
                <h2 class="landing-title white text-center">{{ __('landing.cadr_7_1') }}</h2>
                <p class="white mb-51">{{ __('landing.cadr_7_2') }}</p>
                <p class="white">{{ __('landing.cadr_7_3') }}</p>
            </div>
        </section>


        <!-- cadr-8 -->
        <section id="cadr-8" class="">
            <div class="content">
                <h2 class="c-blue text-center mb-11">{{ __('landing.cadr_8_1') }}</h2>
                <p class="text-subtitle text-center mb-100">{{ __('landing.cadr_8_2') }}</p>
                <div class="gallery">
                <img class="gallery-img img-style-1" src="/img/landing/cadr-8.webp" alt="{{ __('landing.cadr_8_2') }}" title="{{ __('landing.cadr_8_2') }}" />
                    <div class="gallery-text">
                        <p class="mb-51">{{ __('landing.cadr_8_3') }}</p>
                        <ul class="ul-style-1">
                            <li>{{ __('landing.cadr_8_4') }}</li>
                            <li>{{ __('landing.cadr_8_5') }}</li>
                            <li>{{ __('landing.cadr_8_6') }}</li>
                            <li>{{ __('landing.cadr_8_7') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- cadr-9 -->
        <section id="cadr-9" class="">
            <div class="content">
                <h2 class="c-blue text-center">{{ __('landing.cadr_9_1') }}</h2>
                <p class="text-subtitle text-center mb-55 mt-55">{{ __('landing.cadr_9_2') }}</p>
                <p class="mb-35 text-center">{{ __('landing.cadr_9_3') }} <a class="a-style-1" href="mailto:{{ __('landing.cadr_9_4') }}">{{ __('landing.cadr_9_4') }}</a></p>
                <img class="landing-icon mb-55" src="/img/landing/cadr-9-1.webp" alt="{{ __('landing.cadr_9_2') }}" title="{{ __('landing.cadr_9_2') }}" />     
                <p class="text-subtitle text-center mb-35">{{ __('landing.cadr_9_5') }}</p>
                <ul class="ul-style-1">
                    <li>{{ __('landing.cadr_9_6') }}</li>
                    <li>{{ __('landing.cadr_9_7') }}</li>
                    <li>{{ __('landing.cadr_9_8') }}</li>
                    <li>{{ __('landing.cadr_9_9') }}</li>
                    <li>{{ __('landing.cadr_9_10') }}</li>
                    <li>{{ __('landing.cadr_9_11') }}</li>
                </ul>
            </div>
        </section>

        <!-- cadr-10 -->
        <section id="cadr-10" class="">
            <div class="content">
                <h2 class="landing-title c-blue text-center mb-55">{{ __('landing.cadr_10_1') }}</h2>
                <div class="landing-plase-1 mb-75">
                    <p class="mb-35">{{ __('landing.cadr_10_2') }}</p>
                    <p class="">{{ __('landing.cadr_10_3') }} <a class="a-style-1" href="mailto:{{ __('landing.cadr_10_7') }}">{{ __('landing.cadr_10_7') }}</a></p>
                </div>
                <p class="text-subtitle text-center mb-65">{{ __('landing.cadr_10_4') }}</p>

                <ul class="gallery">

                    <li class="gallery-block">
                        <img id="cadr-10-img-1" class="gallery-img" src="/img/landing/cadr-10-1.svg" alt="{{ __('landing.cadr_10_5') }}" title="{{ __('landing.cadr_10_5') }}" />
                        <a class="gallery-text a-style-1" href="{{ route('register') }}">{{ __('landing.cadr_10_5') }}</a>
                    </li>

                    <li class="gallery-block">
                        <img id="cadr-10-img-2" class="gallery-img" src="/img/landing/cadr-10-2.svg" alt="{{ __('landing.cadr_10_6') }}" title="{{ __('landing.cadr_10_6') }}" />
                        <a class="gallery-text a-style-1" href="{{ route('login') }}">{{ __('landing.cadr_10_6') }}</a>
                    </li>

                    <li class="gallery-block">
                        <img id="cadr-10-img-3" class="gallery-img" src="/img/landing/cadr-10-3.svg" alt="{{ __('landing.cadr_10_7') }}" title="{{ __('landing.cadr_10_7') }}" />
                        <a class="gallery-text a-style-1" href="{{ route('password.request') }}">{{ __('landing.cadr_10_7') }}</a>
                    </li>
                    
                </ul>

            </div>
        </section>

        <!-- cadr-11 -->
        <section id="cadr-11" class="">

            <form class="content" id="landing-callback" name="landing-callback">
                @csrf
                <h2 class="c-blue landing-title">{{ __('landing.cadr_11_1') }}</h2>


                    <input type="text" id="landing-callback-name" name="landing-callback-name" class="landing-callback-input text-18" placeholder="{{ __('landing.cadr_11_2') }}" value="" />

                    <input type="phone" id="landing-callback-phone" name="landing-callback-phone" class="landing-callback-input text-18" placeholder="{{ __('landing.cadr_11_3') }}" value="" />

                    <input type="mail" id="landing-callback-mail" name="landing-callback-mail" class="landing-callback-input text-18" placeholder="{{ __('landing.cadr_11_4') }}" value="" />

                    <div class="row text-left d-flex-row mt-8">
                        <input type="checkbox" id="landing-callback-check" name="landing-callback-check" class="landing-callback-check" />
                        <p class="text-18">{{ __('landing.cadr_11_6') }}</p>
                    </div>

                <a class="btn btn-style-1 js-send-landing-callback" data-from="landing-callback" >{{ __('landing.cadr_11_5') }}</a>            
            </form>

        </section>

        <footer>
            <div class="content">
                <div class="footer-col-1 mb-15">
                    <a href="{{ route('register') }}" class="mb-11">{{ __('landing.footer_1') }}</a>
                    <a href="{{ route('login') }}" class="mb-11">{{ __('landing.footer_2') }}</a>
                    <a href="" class="mb-11">{{ __('landing.footer_3') }}</a>
                </div>
                <div class="footer-col-2 mb-15">
                    <div class="white">
                        <p class="text mb-11">{{ __('landing.footer_office_ru') }}</p>
                        <p class="text">{{ __('landing.footer_office_ru_adress') }}</p>
                    </div>
                </div>
                <div class="footer-col-2 mb-15">
                    <div class="white">
                        <p class="text mb-11">{{ __('landing.footer_office_de') }}</p>
                        <p class="text">{{ __('landing.footer_office_de_adress') }}</p>
                    </div>
                </div>
                <div class="footer-col-2 mb-15">
                    <div class="white">
                        <p class="text mb-11">{{ __('landing.footer_office_sv') }}</p>
                        <p class="text">{{ __('landing.footer_office_sv_adress') }}</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        
        <script type="text/javascript" src="https://vd.cards/themes/vdcard/slick.min.js"></script>
        <script>
            $('document').ready(function(){
                $('.dropdown-menu').addClass('hidden');
            });

            $('body').on('click', '.landing-locale', function(){
                $('.dropdown-menu').toggleClass('hidden');
                $('#navbarDropdownMenuLink').toggleClass('hidden');
                
            })
        </script>

        <script>
        var send_status = false;

        function checkTel( tel = null ){
            let phone_pattern = /^(\+)?(\(\d{2,3}\) ?\d|\d)(([ \-]?\d)|( ?\(\d{2,3}\) ?)){5,12}\d$/;
            if ( phone_pattern.test(tel) ){ return true; }
            else return false;
        }
        function checkmMail( mail = null ){
            let mail_pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
            if ( mail_pattern.test(mail) ){ return true; }
            else return false;
        }
        function submitansw() {
            if( send_status ){
                $('.succes-post-form').removeClass('text-fail');
                let tel = $('input[name=callme-phone]').val();
                let email = $('input[name=callme-mail]').val();
                let name = $('input[name=callme-name]').val();

            if( ( tel != '' && checkTel(tel) ) ||
                        ( email != '' && checkmMail(email) ) 
                    ){
                        $.get( '/my_lead_2.php' , {   
                            name: name,
                            tel: tel,
                            email: email,
    
                    }, function( data ){  });
            $('.succes-post-form').text('Сообщение успешно отправлено!');
            send_status = false;
            } else {
                        $('.succes-post-form').text('Необходимо правильно заполнить контактные данные').addClass('text-fail');
                    }
        return false;
            }
        }

        $(document).ready( function(){

            send_status = true;

            $('#cadr-3 .slider').slick({
                infinite: true,
                autoplay:false,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots:false,
                responsive: [
                    { breakpoint: 1281, settings: { slidesToShow: 1, } },
                ]
            });
        });

        $(document).on('click', '.js--send-form' , function(e){
            e.preventDefault();    
            submitansw();
        });


        $(document).on("click", ".js--send", function(e){
            e.preventDefault();
            $('#callback-form input').removeClass('red-alert');
            if( !$('#callback-form-check').prop('checked') || ( $('#callback-form-phone').val() == '' && $('#callback-form-email').val() == '' ) ){


                $.each( $('#callback-form input'), function(i,k){
                    if( $(k).val() == '' ){
                        $(k).addClass('red-alert');
                    } else if( $(k).attr('type') == 'checkbox' &&   !$(k).prop('checked') ){
                        $(k).addClass('red-alert');
                    }
                });


            } else {

            $.get( "/my_lead_2.php", 
                {
                    name:$('#callback-form-name').val(),
                    tel:$('#callback-form-phone').val(),
                    email:$('#callback-form-email').val(), 
                    tariff:'someone'
                }, function( data ) {
                    $('#callback-form .succes-post-form').text('Сообщение успешно отправлено!');
                    setTimeout(function(){ hideObj('.popup');}, 3500);
                });
            }
        });
        </script>

    </body>
</html>