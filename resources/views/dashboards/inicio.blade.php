<div class="container-2">
    <header>
        <img src="{{asset('img/RMHC_Mexico_logo.png')}}" class="logo" height="75" width="200">
        <hr>
    </header>
    <article>
        <div class="saludo">
            <h1>¡BIENVENIDOS!</h1>
            <h3>Fundación Infantil Ronald McDonald México</h3>
        </div>

        <div class="slides" >
            <img src="{{asset('img/a.png')}}" alt="">
            <img src="{{asset('img/b.jpg')}}" alt="">
            <img src="{{asset('img/c.jpg')}}" alt="">
            <img src="{{asset('img/d.jpg')}}" alt="">
        </div>
    </article>
    <article>
        <div class="saludo">
            <h2>Modulos</h2>
            <hr>
        </div>
        <div class="contenedor">
            <div class="contenedor_tarjeta">
                <a href="#">
                    <figure id="tarjeta">
                        <div class="frontal" id="r1" align="center">
                            <i class="fa fa-plus-circle fa-5x"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Solicitudes</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="contenedor_tarjeta">
                <a href="#">
                    <figure id="tarjeta">
                        <div class="frontal" id="r2" align="center">
                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Acompañantes</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="contenedor_tarjeta">
                <a href="#">
                    <figure id="tarjeta">
                        <div class="frontal" id="r3" align="center">
                            <i class="fa fa-search fa-5x"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Registros</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </article>
    <article>
        <footer>
            <p>
                © RMHC

                Las siguientes marcas comerciales utilizadas aquí son propiedad de la Corporación McDonald’s y sus filiales; McDonald’s, Ronald McDonald House Charities, el logo de Ronald McDonald House Charities, el término RMHC, Casa Ronald McDonald, Sala Familiar Ronald McDonald, Unidad o Clínica Móvil Ronald McDonald y el eslogan “manteniendo a las familias cerca.”

                Fundación Infantil Ronald McDonald es una organización sin fines de lucro, con autorización de donataria, según el DOF de 19 de enero de 2018.
            </p>    
        </footer>
    </article>
</div>
<!--script src="http://code.jquery.com/jquery-1.9.1.min.js"></script -->
<script>

        $(function(){
        $(".slides").slidesjs({
        play: {
            active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
            effect: "slide",
            // [string] Can be either "slide" or "fade".
            interval: 5000,
            // [number] Time spent on each slide in milliseconds.
            auto: true,
            // [boolean] Start playing the slideshow on load.
            swap: true,
            // [boolean] show/hide stop and play buttons
            pauseOnHover: true,
            // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
            // [number] restart delay on inactive slideshow
        }
        });
    });
</script>