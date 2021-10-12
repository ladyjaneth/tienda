<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<div>
    <h2>CREAR CLIENTES</h2>
    <form method="POST" id="crear">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Número de Documento</label>
                <input type="text" class="form-control" id="" required name="numero_documento">
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Seleccione Tipo de Documento</label>
                <select class="custom-select" id="inputGroupSelect01" name="tipo_documento">
                    <option selected>Seleccione...</option>
                    @if ($tiposDocumentos->isNotEmpty())
                        @foreach ($tiposDocumentos as $tipoDocumento)
                            <option value="{{ $tipoDocumento->id}}">{{ $tipoDocumento->nombre }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="col-md-5 mb-3">
                <label for="validationDefault02">Nombres</label>
                <input type="text" class="form-control" id="" required name="nombres">
            </div>

            <div class="col-md-5 mb-3">
                <label for="validationDefault02">Apellidos</label>
                <input type="text" class="form-control" id="" required name="apellidos">
            </div>
            <button class="btn btn-primary" id="crearCliente">Guardar Cliente</button>
    </form>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/cliente.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
