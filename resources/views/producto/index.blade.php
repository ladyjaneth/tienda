{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body> --}}

    @extends('layout')
    @section('content')
         <div>
            <h2>PRODUCTOS</h2>
            <!--//que me mande a la vista agregar para ver el formulario-->

            <button type="button" onclick="window.location='{{ route('productos.create')}}'" class="btn btn-primary">Crear Producto</button>
            {{-- <div class="container">
                <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/audifonos1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">AUDIFONOS</h5>
                            @if($productos->isNotEmpty())
                                @foreach($productos as $producto)
                                    <p class="card-text">{{$producto->id}}{{$producto->nombre}}{{$producto->cantidad}}{{$producto->precio}}</p>
                                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                @endforeach
                            @endif
                            <a href="#" class="btn btn-primary">Descuento 15%</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/teclado.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">TECLADOS</h5>
                            @if ($productos->isNotEmpty())
                                @foreach ($productos as $producto)
                                <p class="card-text">{{$producto->id}}{{$producto->nombre}}{{$producto->cantidad}}{{$producto->precio}}</p>
                                @endforeach

                            @endif

                            <a href="#" class="btn btn-primary">Descuento 20%</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/mouse.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">MOUSE</h5>
                            @if ($productos->isNotEmpty())
                                @foreach ($productos as $producto)
                                <p class="card-text">{{$producto->id}}{{$producto->nombre}}{{$producto->cantidad}}{{$producto->precio}}</p>
                                @endforeach
                            @endif
                            <a href="#" class="btn btn-primary">Descuento 15%</a>
                        </div>
                    </div>
                </div>
                </div>

            </div> --}}
            <div class="container">
                @if ($productos->isNotEmpty())
                    @foreach ($productos->chunk(3) as $divisionProductos)
                        <div class="row">
                            @foreach ($divisionProductos as $producto)
                                <div class="col-xs-4">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src={{ asset('./public/img')}} alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$producto->nombre}}</h5>
                                            <p class="card-text">{{$producto->descripcion}}</p>
                                            <a href="#" class="btn btn-primary">{{$producto->precio}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @else

                @endif
            </div>

        </div>
    @endsection
       {{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        </body>
</html>
 --}}

