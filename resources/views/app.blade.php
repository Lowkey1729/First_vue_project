<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <style>
    body {
        font-family: 'Nunito', sans-serif;

    }

    </style>
</head>

<body>
    <div id="app">
        <div class="container px-3 ">

            <header class="py-3">
                <img class=" object-scale-down h-20 " alt="vue" src="/images/vue.png">
            </header>


            <main class="flex">
                <aside class="w-1/5 pt-8">

                <section class="mb-8">
                    <h5 class="uppercase font-bold mb-4 text-base">The Brand</h5>

                    <ul class="list-none">
                        <li class="text-sm leading-loose"> <router-link class="text-black"   to="/logo">Logo</router-link></li>
                        <li class="text-sm leading-loose"><router-link  class="text-black"  to="/logo_symbol">Logo Symbol</router-link></li>
                        <li class="text-sm leading-loose"> <router-link class="text-black"   to="/colors">Colors</router-link></li>
                        <li class="text-sm leading-loose"><router-link  class="text-black"  to="/typography">Typography</router-link></li>
                    </ul>
                </section>

                <section>
                    <h5 class="uppercase font-bold mb-4 text-base">Doodles</h5>
                    <ul class="list-none">
                        <li class="text-sm leading-loose"> <router-link class="text-black"   to="/mascot">Mascot</router-link></li>
                        <li class="text-sm leading-loose"><router-link  class="text-black"  to="/illustrations">Illustrations</router-link></li>
                        <li class="text-sm leading-loose"> <router-link class="text-black"   to="/loaders_animations">Loaders & Animations</router-link></li>
                        <li class="text-sm leading-loose"><router-link  class="text-black"  to="/wallpapers">Wallpapers</router-link></li>
                    </ul>
                </section>

                <section>

                </section>


                </aside>


                <div class="primary flex-1">
                    <router-view></router-view>
            </main>




            <hr>
        </div>







    </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
