@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">Home Slider</h2>
<a href="{{route('admin.slider.create')}}">  
    <button class="btn btn-primary" style="float: right"><i class="fa fa-plus"> </i>  New Slider</button>
</a>
<div class="clearfix"></div>
<div class="clear"></div>
    @if ($sliders->count() > 0)
    <div class="table-responsive">
        <table class="table user-table no-wrap" id="myDTable">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">start</th>
                    <th class="border-top-0">end</th>
                    <th class="border-top-0">category</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calenders as $calender)
                <tr>
                    <td></td>
                    <td>
                        <form style="display: inline;" action="{{route('admin.calender.destroy', $calender->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                        <a href="{{Route('admin.calender.edit', $calender->id)}} ">
                            <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button>
                        </a>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    @else
        <div class="text-center">No Data Available</div> 
    @endif
@endsection
