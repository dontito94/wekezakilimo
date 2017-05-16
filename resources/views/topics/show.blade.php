@extends('layouts.app')

@section('content')
    <section class="content-header">
       
    </section>
    <div class="">
   
            
                <div class="row">
                    @include('topics.show_fields')
                    <a href="{!! route('topics.index') !!}" class="btn btn-default">Back</a>
                </div>
            
    
    </div>
@endsection
