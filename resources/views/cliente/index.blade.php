
@extends('layout')

@section('content')
<div>
    <h2>CLIENTES</h2>
    <button type="button" onclick="window.location='{{ route('cliente.create')}}' " class="btn btn-primary" >Crear Cliente</button>
    <table class="table" style="text-align:center">
        <thead>
            <tr>
                <th scope="col">Número de Documento</th><!--th head-->
                <th scope="col">Tipo de Documento</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
         {{--  <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
            @if ($clientes->isNotEmpty())
                @foreach ($clientes as $cliente)
                    <tr>
                        <td scope="row">{{$cliente->numero_documento}}</td>
                        <td>{{$cliente->tipoDocumento->nombre}}</td>
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>

                            <button type="button" onclick="window.location='{{ route('cliente.edit',[$cliente->numero_documento,$cliente->idtipos_documentos])}}'" class="btn btn-info">Editar</button>
                            {{-- <form method="POST" action="{{ url("cliente/{$cliente->numero_documento}/{$cliente->idtipos_documentos}") }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form> --}}
                            <button type="button" onclick="javascript:eliminar(this, {{$cliente->numero_documento}},{{$cliente->idtipos_documentos}})" class="btn btn-info">Eliminar</button>
                            </td>
                        </tr>
                @endforeach
            @endif


        </tbody>


    </table> <!--agregar los clientes-->

</div>
@endsection

    <script src="./editar.blade.php"></script>
    <script src="{{ asset('/js/eliminar.js') }}"></script>
