@extends('layout')
@section('content')
    <div>
    <h2>PRODUCTOS</h2>
    <!--//que me mande a la vista agregar para ver el formulario-->

    <button type="button" onclick="window.location='{{ route('productos.create')}}'" class="btn btn-primary">Crear Producto</button>

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
                                    <button type="button" onclick="javascript:eliminar(this,{{$producto->id}})" class="btn btn-primary" id="eliminar-producto-{{$producto->id}}">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else

        @endif
    </div>
@endsection

@section('js')
    <script src="{{ asset('./js/eliminarProducto.js')}}"></script>
@endsection
