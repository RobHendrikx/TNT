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
                    <th data-column-id="Company">Bedrijf</th>
                    @if(\App\Users::isAdmin())
                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($data as $instance)
                    @if(empty($instance->fk_company) && !\App\Users::isAdmin())
                        @continue
                    @endif
                    <tr class="students" id="{{ $instance->id }}">
                        <td>{{ $instance->id }}</td>
                        <td>{{ $instance->Voornaam }}</td>
                        <td>{{ $instance->Achternaam }}</td>
                        <td>{{ $instance->CheckIn }}</td>
                        <td>{{ $instance->CheckOut }}</td>
                        <td>{{ $instance->TotalTime }}</td>
                        <td>{{ $instance->Student }}</td>
                        <td>{{ $instance->Rfid }}</td>
                        <td>{{ $instance->Checkedin }}</td>
                        <td>{{ (!empty($instance->fk_company->name)) ? $instance->fk_company->name : 'Geen' }}</td>
                        @if(\App\Users::isAdmin())
                        <td></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-"></button>
        </div>
    </div>
@stop

@section('script')
    <script>
        $( document ).ready(function() {
            studentrow = $('.studentrow');
            $('.students').click(function () {
                alert('1');
                var id = this.id;

            });
            var grid = $("#grid-basic").bootgrid({
                formatters: {
                    "commands": function(column, row)
                    {
                        return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-pencil\"></span></button> ";
                    }
                }
            }).on("loaded.rs.jquery.bootgrid", function()
            {
                /* Executes after data is loaded and rendered */
                grid.find(".command-edit").on("click", function(e)
                {
                    var tr = $(this).closest('tr');
                    var children = tr.children();
                    var id = children.first().html();
                    window.location.href = '/student/'+id;
                    return

                });
            });
        });
    </script>
@stop


