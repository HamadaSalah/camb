@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">Add Nwe Slider </h2>

<div class="clearfix"></div>

<form method="POST" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="img">IMG</label>
        <input type="file" class="form-control" id="img" name="img"  placeholder="Write Body.." required>
    </div>
    <div class="form-group">
        <label for="name">Head</label>
        <textarea type="name" class="form-control" id="name" name="head[]"  placeholder="Write Head.." required></textarea>
    </div>
	<div id='input-cont'>
        <!--Input container-->
    </div>
    <button onclick='addInput()' style="float: right" type="button" class="btn btn-success">+ Add New head</button>
    
    <script>
        const container = document.getElementById('input-cont');

        // Call addInput() function on button click
        function addInput(){
            let input = document.createElement('textarea');
            input.placeholder = 'Type something';
            input.className = 'form-control mb-2';
            input.name = 'head[]';
            container.appendChild(input);
        }
    </script>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@push("custom-css")

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

@endpush
@endsection
