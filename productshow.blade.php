 <!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/apps-forum-threads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 08:40:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Example layout page for forum threads">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora|Oswald" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" media="screen">
    <script src="{{asset('asset/ckeditor/ckeditor.js')}}"></script>

    
<link rel="stylesheet" type="text/css" href="{{asset('asset/mainadmin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('asset/font-awesome.min.css')}}">
<script type="text/javascript" src="{{asset('asset/jquery-1.11.0.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                                <h3>Thread List</h3>
                            </div>          <div class="d-flex flex-wrap justify-content-between">
                        <div>
                            <a href="addproduct"><button type="button" class="btn btn-shadow btn-wide btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                                Add product 
                            </button></a>
                        </div>
                        <div class="col-12 col-md-3 p-0 mb-3">
                           <br><br></div>



                               </div>
                    </div>            <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product SKU</th>
                                    <th>Product Name</th>
                                    <th>Product price</th>
                                    <th>Product category</th>
                                    <th>Product qty</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         @foreach($show as $pro)
                                   <td >{{$pro->sku}}</td>
                                  <td >{{$pro->name}}</td>
                                  <td >{{$pro->price}}</td>
                                  <td >{{$pro->category}}</td>
                                  <td >{{$pro->qty}}</td>
                                  <td ><img src="{{$pro->image}}"></td>
                                  <td><a href="updateproduct/{{$pro->id}}"></a></td>
                                  @endforeach
                                    </tr>
                               </tbody>