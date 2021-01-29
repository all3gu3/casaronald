<div class="container-2">
    <header>
        <img src="{{asset('img/RMHC_Mexico_logo.png')}}" class="logo" height="75" width="200">
        <hr>
    </header>
    <article>
        <div class="saludo">
            <h2>Registros</h2>
            <hr>
        </div>
        <div class="contenedor">
            <div class="contenedor_tarjeta">
                <a href="{{ route('registros-lavanderia') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r1" align="center">
                            <i class="fa fa-tint fa-5x" aria-hidden="true"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Lavanderia</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="contenedor_tarjeta">
                <a href="{{ route('registros-escuela') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r2" align="center">
                            <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Escuela</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="contenedor_tarjeta">
                <a href="{{ route('registros-comedor') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r3" align="center">
                            <i class="fas fa-drumstick-bite fa-5x"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Comedor</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>
		
	    <div class="contenedor_tarjeta">
                <a href="{{ route('registros-transporte') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r6" align="center">
                            <i class="fas fa-bus fa-5x"></i>                        
			             </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Transporte</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="contenedor_tarjeta">
                <a href="{{ route('registros-entradas-salidas') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r4" align="center">
                            <i class="fas fa-sign-in-alt fa-5x"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Entradas</h2>
                            <hr>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="contenedor_tarjeta">
                <a href="{{ route('registros-entradas-salidas') }}">
                    <figure id="tarjeta">
                        <div class="frontal" id="r5" align="center">
                            <i class="fas fa-sign-out-alt fa-5x"></i>
                        </div>
                        <figcaption class="trasera">
                            <h2 class="titulo">Salidas</h2>
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