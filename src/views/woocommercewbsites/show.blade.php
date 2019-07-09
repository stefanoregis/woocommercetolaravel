@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Woocommercewebsite</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Woocommercewebsite    </div>

    <div class="panel-body">
                

        <form action="{{ url('/woocommercewbsites') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control" value="{{$model['name'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="created_at" class="col-sm-3 control-label">Created At</label>
            <div class="col-sm-6">
                <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="updated_at" class="col-sm-3 control-label">Updated At</label>
            <div class="col-sm-6">
                <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="url_api" class="col-sm-3 control-label">Url Api</label>
            <div class="col-sm-6">
                <input type="text" name="url_api" id="url_api" class="form-control" value="{{$model['url_api'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="consumerKey" class="col-sm-3 control-label">ConsumerKey</label>
            <div class="col-sm-6">
                <input type="text" name="consumerKey" id="consumerKey" class="form-control" value="{{$model['consumerKey'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="consumerSecret" class="col-sm-3 control-label">ConsumerSecret</label>
            <div class="col-sm-6">
                <input type="text" name="consumerSecret" id="consumerSecret" class="form-control" value="{{$model['consumerSecret'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/woocommercewbsites') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection