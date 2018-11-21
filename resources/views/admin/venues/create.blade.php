@extends('layouts.app') @section('content')
<body>
	<h1>Create Venue</h1>
	<form method="post" action="/admin/venues">
		{{ csrf_field() }} <br>

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

		<input type="text" name="PTBTVenueName" placeholder="Enter Venue Name">
		<input type="text" name="PTBTAddress" placeholder="Enter Venue Address">
		<input type="integer" name="PTBTZip" placeholder="Enter Venue Zip">
		<input type="text" name="PTBTLocationNote" placeholder="Enter Location Note">
			<input type="submit" name="submit">

	</form>

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
</body>
@endsection
