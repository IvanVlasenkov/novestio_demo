<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Novestio — оптимальное инвестирование с помощью математически точного интеллекта</title>        
        <meta name="description" content="Novestio — оптимальное инвестирование с помощью математически точного интеллекта" />

        <link href="{{ asset('css/landing.css') }}?ver=1.1" rel="stylesheet">
    </head>

    <body>

        <!-- cadr-1 -->
        <section id="main" class="shadow">

            <div class="slide" id="main-slide-1">
                <div class="content">
                    <div class="">
                        <h1 class="white">
                            <span class="bigger">Novestio —</span>
                            <span class="smaller">оптимальное инвестирование с помощью математически точного интеллекта</span>
                        </h1>

                        <p class="text white">С помощью Novestio компании укрепляют свои инвестиционные решения и оптимизируют планирование. Увеличивают прибыль от вложений в основной капитал предприятия.</p>                    
                        <p class="text white">Решения принимает человек - Novestio помогает в поиске оптимальных инвестиций.</p>
                    </div>
                    
                    <a class="btn btn-style-1" href="{{ route('demo') }}">
                        Хотите попробовать Novestio?
                    </a>
                    
                </div>
            </div>
                
        </section>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    </body>
</html>