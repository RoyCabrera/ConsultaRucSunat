@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-lg-6 p-3">
                    <form method="post">
                        @csrf
                        <input type="text" class="form-control" placeholder="Ingrese RUC" id="ruc">
                        <div class="pt-3">
                            <button type="button" class="btn btn-outline-success pt btn-block" id="btnbuscar">
                                Consultar
                            </button>
                        </div>
                            <small id="mensaje" style="color: red;display: none;font-size: 12pt;" >
                                <i class="fa fa-remove"></i> El numero de RUC no es valido.
                            </small>
                        <hr>
                        <div>
                            <label for="txtruc">RUC</label>
                            <input type="text" id="txtruc" class="form-control" disabled >
                        </div>
                        <div>
                            <label for="txtrazon">Razon Social</label>
                            <input type="text" name="description" id="txtrazon" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtestado">Estado</label>
                            <input type="text" id="txtestado"  class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtdireccion">Direccion</label>
                            <input type="text" id="txtdireccion" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtdistrito">Distrito</label>
                            <input type="text" id="txtdistrito"class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtprovincia">Provincia</label>
                            <input type="text" id="txtprovincia" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtdepartamento">Departamento</label>
                            <input type="text" id="txtdepartamento" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="txtdireccioncompleta">Direccion Completa</label>
                            <input type="text" id="txtdireccioncompleta" class="form-control" disabled>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection