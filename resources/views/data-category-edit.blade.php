<link href="{{ asset('js/vendor/toastr/build/toastr.css') }}" rel="stylesheet">

<script src="{{asset('js/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/vendor/toastr/build/toastr.min.js')}}"></script>
<script>
    var name = null;
    var description = null;
    function setCategoryName(){
        name = document.getElementById("name").value;
    }
    function setCategoryDescription(){
        description = document.getElementById("description").value;
    }

    function putDataCategory(){
        console.log("made it to post category");


        $.put('/api/data-category', {name: name, description:description})
            .done(function(data, status) {
                toastr.success( "Data Category metadata updated." );

            })
            .fail(function(data, status) {
                toastr.error( "There was an error completing your action." );
            });

    }

    categoryFields = [];

    function addNewCategoryField(){

    }

</script>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit Data Category</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Category Metadata
                    </div>
                    <div class="panel-body">
                        {{--<form>--}}
                        <label for="name">Name</label>
                        <br><input type="text" name="name" id="name" onblur="setCategoryName()" value="{{$dataCategory->name}}">
                        {{--{{$dataCategory->name}}--}}
                        <br><label for="description">Description</label>
                        <br><textarea name="name" id="description" onblur="setCategoryDescription()">
                            {{$dataCategory->description}}
                        </textarea>
                        <br><button onclick="putDataCategory()">Save</button>
                        {{--</form>--}}

                    </div>
                </div>
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--Add/Delete Category Fields--}}
                    {{--</div>--}}
                    {{--<div class="panel-body">--}}
                        {{--@foreach()--}}
                        {{--<form>--}}
                        {{--<label for="name">Name</label>--}}
                        {{--<br><input type="text" name="name" id="name" onblur="setCategoryName()" value="{{$dataCategory->name}}">--}}
                        {{--<br><label for="description">Description</label>--}}
                        {{--<br><textarea name="name" id="description" onblur="setCategoryDescription()">--}}
                            {{--{{$dataCategory->description}}--}}
                        {{--</textarea>--}}
                        {{--<br><button onclick="()">Save</button>--}}
                        {{--</form>--}}

                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                {{--Data Category Fields--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                {{--<form>--}}
                {{--<label for="name">Name</label><input type="text" name="name" id="name" onblur="setCategoryName()">--}}
                {{--<label for="description">Description</label><textarea name="name" id="description" onblur="setCategoryDescription()"></textarea>--}}
                {{--</form>--}}
                {{--</div>--}}

                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection

