@extends('site')

@section('site')
<div class="jumbotron">
   <div class="container">
       <h1>{{__('Welcome')}}!</h1>
       <h3>@lang('about.show.header', ['name' =>'Code Lửng'])</h3>

       <p>{{__('Lorem')}}</p>
       <p>
           <a class="btn btn-primary btn-lg">Learn more</a>
       </p>
   </div>
</div>
@stop()