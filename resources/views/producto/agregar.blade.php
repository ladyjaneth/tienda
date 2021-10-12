@extends('layout')
@section('content')

<!--formulario-->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> --}}

<div>
    <h2>PRODUCTOS</h2>
    <form method="POST" id="crear">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Nombre</label>
                    <input type="text" class="form-control" id="" required name="nombre">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Cantidad</label>
                    <input type="text" class="form-control" id="" required name="cantidad">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Precio</label>
                    <input type="text" class="form-control" id="" required name="precio">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Imagen</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Descripción</label>
                    <input type="text" class="form-control" id="" required name="descripcion">
                </div>
                <div class="col-md-6 mb-3">
                    <button class="btn btn-primary" id="crearProducto">Guardar Producto</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
       {{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="./js/prueba.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> --}}


