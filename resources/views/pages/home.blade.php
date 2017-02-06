@extends('main')

@section('title', '| Home')


@section('content')
	<h3> Leerlingen </h3>
	<div class="row mt">
		<div class="col-md-12">
            <table id="grid-basic" class="table table-condensed table-hover table-striped">
                <thead>
                <tr>
                    <th data-column-id="id" data-type="numeric">ID</th>
                    <th data-column-id="firstname">Voornaam</th>
                    <th data-column-id="surname">Achternaam</th>
                    <th data-column-id="CheckIn">Ingecheckt op</th>
                    <th data-column-id="CheckOut">Uitgecheckt op</th>
                    <th data-column-id="TotalTime">Totale Tijd</th>
                    <th data-column-id="Student">is Student?</th>
                    <th data-column-id="RFID">RFID</th>
                    <th data-column-id="Checkedin">Ingecheckt ?</th>
                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $instance)
                    <tr>
                        <td>{{ $instance->id }}</td>
                        <td>{{ $instance->Voornaam }}</td>
                        <td>{{ $instance->Achternaam }}</td>
                        <td>{{ $instance->CheckIn }}</td>
                        <td>{{ $instance->CheckOut }}</td>
                        <td>{{ $instance->TotalTime }}</td>
                        <td>{{ $instance->Student }}</td>
                        <td>{{ $instance->Rfid }}</td>
                        <td>{{ $instance->Checkedin }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
		</div>
	</div>
@stop

@section('script')
    <script>
        $( document ).ready(function() {
            $("#grid-basic").bootgrid({

            });
        });
    </script>
@stop


