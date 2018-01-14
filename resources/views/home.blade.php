@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                    <a href="/data-category"><button type="button" class="btn btn-primary btn-lg btn-block">Create Data Category</button></a>
                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    {{--{{$dataCategories}}--}}
                    @foreach ($dataCategories as $dataCategory)
                        <a href="/data-category/{{$dataCategory->id}}"><button type="button" class="btn btn-primary btn-lg btn-block">{{$dataCategory->name}}</button></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
