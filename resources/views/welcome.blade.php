<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>{{ __('landing.cadr_1_1') }} — {{ __('landing.cadr_1_2') }}</title>        
        <meta name="description" content="Novestio — оптимальное инвестирование с помощью математически точного интеллекта" />

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

        <!-- cadr-7 -->
        <section id="cadr-7" class="hidden">
            <div class="content">
                <h2 class="landing-title white text-center">{{ __('landing.cadr_7_1') }}</h2>
                <p class="white mb-51">{{ __('landing.cadr_7_2') }}</p>
                <p class="white">{{ __('landing.cadr_7_3') }}</p>
            </div>
        </section>

        <!-- cadr-11 -->
        <section id="cadr-11" class="hidden">

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

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>
            $('document').ready(function(){
                $('.dropdown-menu').addClass('hidden');
            });

            $('body').on('click', '.landing-locale', function(){
                $('.dropdown-menu').toggleClass('hidden');
                $('#navbarDropdownMenuLink').toggleClass('hidden');
                
            })
        </script>

    </body>
</html>