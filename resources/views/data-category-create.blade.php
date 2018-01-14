@extends('layouts.app')

<link href="{{ asset('js/vendor/toastr/build/toastr.css') }}" rel="stylesheet">
<link href="{{asset('js/vendor/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<script src="{{asset('js/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/vendor/toastr/build/toastr.min.js')}}"></script>
<script>
    var name = null;
    var description = null;
    var categoryId = null;
    var categoryFieldCount = 0;
    function setCategoryName(){
        name = document.getElementById("name").value;
    }
    function setCategoryDescription(){
        description = document.getElementById("description").value;
    }

    function postCategoryData(){
        console.log("made it to post category");


        $.post('/api/data-category', {name: name, description:description})
            .done(function(data, status) {
                toastr.success( "Data Category created.  Add fields to the category." );
                console.log(data);
            })
            .fail(function(data, status) {
                toastr.error( "There was an error completing your request" );
            });

    }

    function fillOutNewCategoryField(){
        // check last elements to see if populated
        // if they are then give another
        // else don't

        var catFieldContainer = document.getElementById("catFieldContainer");
        var id = categoryFieldCount;

        var html = "<div class='well'>";
        var nameId = 'name' + categoryFieldCount;
        var dataTypeId = 'dataType' + categoryFieldCount;
        var benchmarkOperator = 'benchmarkOperator' + categoryFieldCount;
        var benchmarkOperand = 'benchmarkOperand' + categoryFieldCount;
        html += "<label for='"+nameId+"'>Name</label><input type='text' id=>";

        html += "<br><label for='"+dataTypeId+"'>Type</label><select id='"+dataTypeId+"' onclick='appendCategoryField(id)'>";
        html += "<option value='boolean'>Boolean</option>";
        html += "<option value='percent'>Percentage</option>";
        html += "</select>";

        html += "<br><label for='"+benchmarkOperator+"'>Operator</label><select id='"+benchmarkOperator+"' onchange='appendCategoryField(id)'>";
        html += "<option value='boolean'>></option>";
        html += "<option value='percent'><</option>";
        html += "</select>";

        html += "<br><label for='"+benchmarkOperand+"'>Benchmark</label><select id='"+benchmarkOperand+"' onclick='appendCategoryField(id)'>";
        html += "<option value='0'>0</option>";
        html += "<option value='1'>1</option>";
        html += "</select>";

        catFieldContainer.innerHTML += html;
        categoryFieldCount++;
    }

    function appendCategoryField(id){
        console.log(id);
    }
</script>


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create a new Data Category</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Category Metadata
                    </div>
                    <div class="panel-body">
                        {{--<form>--}}
                            <label for="name">Name</label><br><input type="text" name="name" id="name" onblur="setCategoryName()">
                            <br><label for="description">Description</label><br><textarea name="name" id="description" onblur="setCategoryDescription()"></textarea>
                        {{--</form>--}}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Category Fields
                    </div>
                    <div class="panel-body">
                        <div id="catFieldContainer">



                        </div>
                        <div class="text-center">
                            <button onclick="fillOutNewCategoryField()" class="btn bnt-secondary"><span class="fa fa-plus-circle"></span></button>
                        </div>
                    </div>
                </div>

                <br><button class="btn btn-primary" onclick="postCategoryData()">Save</button>
            </div>
        </div>
    </div>
    {{--<example></example>--}}
@endsection
{{--<example></example>--}}