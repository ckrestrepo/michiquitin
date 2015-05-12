@extends('app')

@section('content')

    <h1>Informe general de carteras por {!!strtolower($documento)!!}</h1>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Tercero</th>
            <th class="text-right">Saldo corriente</th>
            <th class="text-right">31 a 60 días</th>
            <th class="text-right">61 a 90 días</th>
            <th class="text-right">91 a 120 días</th>
            <th class="text-right">Más de 120 días</th>
            <th class="text-right">Abonado</th>
            <th class="text-right">Saldo</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th class="text-right">Totales</th>
            <th class="text-right">
                {!!number_format($saldos['sum_0a30'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_31a60'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_61a90'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_91a120'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_mas120'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_abonado'], 2, ',', '.')!!}
            </th>
            <th class="text-right">
                {!!number_format($saldos['sum_saldo'], 2, ',', '.')!!}
            </th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($saldos as $key => $value)
            @if(! is_numeric($key))
                <?php continue; ?>
            @endif
            <tr>
                <td>
                    <a href="{{route('listado_de_carteras', ['documento' => $documento,
					'tercero' => $key])}}" class="btn-link">
                        {!!$saldos[$key]['nombre']!!}
                    </a>
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['0a30']))
                        {!!number_format($saldos[$key]['0a30'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['31a60']))
                        {!!number_format($saldos[$key]['31a60'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['61a90']))
                        {!!number_format($saldos[$key]['61a90'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['91a120']))
                        {!!number_format($saldos[$key]['91a120'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['mas120']))
                        {!!number_format($saldos[$key]['mas120'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['abonado']))
                        {!!number_format($saldos[$key]['abonado'], 2, ',', '.')!!}
                    @endif
                </td>
                <td class="text-right">
                    @if(isset($saldos[$key]['saldo']))
                        {!!number_format($saldos[$key]['saldo'], 2, ',', '.')!!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop