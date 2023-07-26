<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,400;1,500&family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Psicóloga Karina Beatriz Gangi 🍃</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon-96x96.png') }}">
</head>

<body>
    <header>
        <div class="nav">
            <a href="{{ route('home') }}"> <img class="logo" src="{{ asset('img/logo-sem-fundo.png') }}" style="max-width: 100%; max-height: 100%;" alt=""></a>
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">


                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>

            <div class="nav-links">
                <a href="{{ url('/') }}#servicos">Serviços</a>
                <a href="{{ url('/') }}#ebook">E-book</a>
                <a href="{{ url('/') }}#artigo">Artigo</a>
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </header>
    <main>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <img class="logo" src="{{ asset('img/logo-sem-fundo.png') }}" style="width: 150px; position: relative;top:5vh; display: block; margin-left: auto; margin-right: auto;" alt="">
            
            <label for="name">Usuário</label>
            <input type="text" id="name" name="name" placeholder="Email ou nome de usuário">
        
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Senha">
        
            <input type="submit" value="Submit">
        </form>
        <br>
    </main>
    <footer class="main_footer container">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="#" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="#servicos" title="serviços">Serviços</a></li>
                    <li><a href="#ebook" title="ebook">Ebook</a></li>
                    <li><a href="#artigo" title="artigos">Artigos</a></li>

                </ul>
            </div>

            <!--Col Footer 1-->
            <div class="colfooter">

                <h3 class="titleFooter"> Contato</h3>
                <i class="icon icon-mail"></i> <a href="mailto: karinabeatriz.psico@hotmail.com" style="color: whitesmoke;">karinabeatriz.psico@hotmail.com</a><br>
                <a href="https://web.whatsapp.com/send?phone=+5511954214938?text=Ol%C3%A1%2C%20psic%C3%B3loga%20Karina%21%20Encontrei%20voc%C3%AA%20no%20seu%20site%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20seus%20atendimentos." style="text-decoration: none; color: whitesmoke;" target="_blank">(11) 95421-4938</a>
            </div>
            <div class="colFooter">

                <a style="border-radius: 100%;" href="https://www.google.com/maps/dir//Avenida+General+Ataliba+Leonel,+3173+-+Parada+Inglesa,+S%C3%A3o+Paulo+-+SP/@-23.4880174,-46.6129528,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94cef6113331e2af:0x798c25890d737ace!2m2!1d-46.6085754!2d-23.4880273"
                    class="botao" target="_blank"><img src="{{ asset('img/icon/maps.png') }}" style="max-width: 25vw; border-radius: 100%; max-height: 25vh" alt=""> </a>
            </div>
            <!--Col Footer 2-->
            <div class="colfooter">

                <h3 class="titleFooter"> Redes Sociais</h3>

                <a href="https://www.facebook.com/psi.karinabeatriz?_rdc=2&_rdr" target="_blank" class="botao"><img src="{{ asset('img/icon/facebook.png') }}" width="30px" alt=""></a>
                <a href="https://www.instagram.com/psi.karinabeatriz/" target="_blank" class="botao"><img src="{{ asset('img/icon/instagram.png') }}" width="30px" alt=""></a>
                <a href="https://web.whatsapp.com/send?phone=5511954214938&text=Ol%C3%A1%2C%20psic%C3%B3loga%20Karina%21%20Encontrei%20voc%C3%AA%20no%20seu%20site%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20seus%20atendimentos." target="_blank" class="botao"><img src="{{ asset('img/icon/whatsapp.png') }}" width="30px" alt=""></a>
                <a href="https://www.tiktok.com/@psi.karinabeatriz" target="_blank" class="botao"><img src="{{ asset('img/icon/tiktok.png') }}" width="30px" alt=""></a>
                <a href="https://www.youtube.com/@psicologakarinabeatriz9317" target="_blank" class="botao"><img src="{{ asset('img/icon/youtube.png') }}" width="30px" alt=""></a>
                <a href="mailto: karinabeatriz.psico@hotmail.com" target="_blank" class="botao"><img src="{{ asset('img/icon/email.png') }}" width="30px" alt=""></a>
            </div>
            <!--Col Footer 3-->

            <!--Contant-->

        </div>
    </footer>
    <script src="{{ asset('scripts.js') }}"></script>
</body>

</html>
