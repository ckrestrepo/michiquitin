@extends('app')

@section('content')

    <div class="row">
        <h4>Estado del cliente: Christian Camilo Restrepo L</h4>
            <div class="col-md-7">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Factura</th>
                        <th>Saldo Anterior</th>
                        <th>Saldo Restante</th>
                        <th>Proximo Pago</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div><h3>Abonos</h3></div>

            <div class="">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Factura</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Saldo Restante</th>
                    </tr>
                    </thead>
                </table>
            </div>
    </div>
@endsection