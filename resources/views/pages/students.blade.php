@extends('main')

@section('title', '| Home')


@section('content')

    <h3><i class="fa fa-angle-right"></i> Student profiel</h3>

    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"> {{ $student->Voornaam . " " . $student->Achternaam }}</h4>
                {!! Form::open(['route' => array('postStudent', $student->id), 'class' => 'form-horizontal style-form']) !!}
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Voornaam</label>
                        <div class="col-sm-10">
                            {{ Form::text('Voornaam', $student->Voornaam, array('class' => 'form-control', 'placeholder' => 'Gebruikersnaam', 'autofocus' => '')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Achternaam</label>
                        <div class="col-sm-10">
                            {{ Form::text('Achternaam', $student->Achternaam, array('class' => 'form-control', 'placeholder' => 'Gebruikersnaam', 'autofocus' => '')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Totale tijd</label>
                        <div class="col-sm-10">
                            <label>{{ $student->TotalTime }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Bedrijf</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="company">
                                @if(!empty($student->fk_company))
                                    <option value="{{ \Illuminate\Support\Facades\DB::table('company')->where('id', '=', $student->fk_company)->first()->id }}">{{ \Illuminate\Support\Facades\DB::table('company')->where('id', '=', $student->fk_company)->first()->name }}</option>
                                @else
                                    <option value="geen">Geen</option>
                                @endif
                                @foreach($companies as $company)
                                    @if(!empty($student->fk_company) && $company->id == $student->fk_company)
                                        @continue
                                    @else
                                        <option value="{!! $company->id !!}">{{ $company->name }}</option>
                                    @endif
                                @endforeach
                                @if(!empty($student->fk_company))
                                    <option value="geen">Geen</option>
                                @endif
                            </select>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info btn-block">Opslaan</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->
    </div>

@stop