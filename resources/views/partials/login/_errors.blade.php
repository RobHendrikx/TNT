@if(count($errors) > 0)
    <div class="row" style="margin-top: 15px; padding-left: 20px; padding-right: 20px">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="row" style="margin-top: 15px; padding-left: 20px; padding-right: 20px">
        <div class="col-sm-12">
            <div class="alert alert-success">
                <ul>
                    {{ session('success') }}
                </ul>
            </div>
        </div>
    </div>
@endif

@if(session('warning'))
    <div class="row" style="margin-top: 15px; padding-left: 20px; padding-right: 20px">
        <div class="col-sm-12">
            <div class="alert alert-warning">
                <ul>
                    {{ session('warning') }}
                </ul>
            </div>
        </div>
    </div>
@endif