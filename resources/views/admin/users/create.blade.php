@extends('layouts.app') @section('content')

    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>
    'AdminUsersController@store','files'=>true]) !!}


    <div class="form-group">{!! Form::label('name', 'Name:') !!} {!!
	Form::text('name', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('firstname', 'First Name:') !!} {!!
	Form::text('firstname', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('middleinitial', 'Middle Initial:') !!} {!!
	Form::text('middleinitial', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('lastname', 'Last Name:') !!} {!!
	Form::text('lastname', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('email', 'Email:') !!} {!!
	Form::email('email', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('gender', 'Gender:') !!} {!!
	Form::select('gender', array('M' => 'Male', 'F'=> 'Female'), 0 ,
	['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('PTBTRole', 'Role:') !!} {!!
	Form::select('PTBTRole', ['' => 'Choose Options'] + $roles, null,
	['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('age', 'Age:') !!} {!!
	Form::number('age')!!}</div>

    <div class="form-group">{!! Form::label('address1', 'Address 1:') !!} {!!
	Form::text('address1', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('address2', 'Address 2:') !!} {!!
	Form::text('address2', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">
        <label for="">Region</label> <select class="form-control"
                                             name="PTBTRegionId" id="ptbtregion">
            <option value="0" disable="true" selected="true">=== Select Region
                ===</option> @foreach ($regions as $key => $value)
                <option value="{{$value->id}}">{{ $value->PTBTRegionName }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="">Country</label> <select class="form-control"
                                              name="PTBTCountryId" id="ptbtcountry">
            <option value="0" disable="true" selected="true">=== Select Country
                ===</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="">State/Province</label> <select class="form-control"
                                                     name="PTBTStProvId" id="ptbtstprov">
            <option value="0" disable="true" selected="true">=== Select State /
                Province initial ===</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="">City</label> <select class="form-control"
                                           name="PTBTCityId" id="ptbtcity">
            <option value="0" disable="true" selected="true">=== Select City ===</option>
        </select>
    </div>
    <br>

    <div class="form-group">{!! Form::label('is_active', 'Status:') !!} {!!
	Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 ,
	['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('photo_id', 'Photo:') !!} {!!
	Form::file('photo_id', null, ['class'=>'form-control'])!!}</div>

    <div class="form-group">{!! Form::label('password', 'Password:') !!} {!!
	Form::password('password', ['class'=>'form-control'])!!}</div>


    <div class="form-group">{!! Form::submit('Create User', ['class'=>'btn
	btn-primary']) !!}</div>

    {!! Form::close() !!}

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('#ptbtregion').on('change', function(e){
            console.log(e);
            var PTBTRegionId = e.target.value;
            $.get('/json-ptbtcountry?PTBTRegionId=' + PTBTRegionId,function(data) {
                console.log(data);
                $('#ptbtcountry').empty();
                $('#ptbtcountry').append('<option value="0" disable="true" selected="true">=== Select Country ===</option>');

                $('#ptbtstprov').empty();
                $('#ptbtstprov').append('<option value="0" disable="true" selected="true">=== Select State/Province empty 1 ===</option>');

                $('#ptbtcity').empty();
                $('#ptbtcity').append('<option value="0" disable="true" selected="true">=== Select City 1 ===</option>');

                $.each(data, function(index, ptbtcountryObj){
                    $('#ptbtcountry').append('<option value="'+ ptbtcountryObj.id +'">'+ ptbtcountryObj.PTBTCountryName +'</option>');
                })
            });
        });

        $('#ptbtcountry').on('change', function(e){
            console.log(e);
            var PTBTCountryId = e.target.value;
            $.get('/json-ptbtstprov?PTBTCountryId=' + PTBTCountryId,function(data) {
                console.log(data);
                $('#ptbtstprov').empty();
                $('#ptbtstprov').append('<option value="0" disable="true" selected="true">=== Select State / Province empty 2 ===</option>');

                $.each(data, function(index, ptbtstprovObj){
                    $('#ptbtstprov').append('<option value="'+ ptbtstprovObj.id +'">'+ ptbtstprovObj.PTBTStProvName +'</option>');
                })
            });
        });

        $('#ptbtstprov').on('change', function(e){
            console.log(e);
            var PTBTStProvId = e.target.value;
            $.get('/json-ptbtcity?PTBTStProvId=' + PTBTStProvId,function(data) {
                console.log(data);
                $('#ptbtcity').empty();
                $('#ptbtcity').append('<option value="0" disable="true" selected="true">=== Select City 3 ===</option>');

                $.each(data, function(index, cityObj){
                    $('#ptbtcity').append('<option value="'+ cityObj.id +'">'+ cityObj.PTBTCity +'</option>');
                })
            });
        });


    </script>
@stop