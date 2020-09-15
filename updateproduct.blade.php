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
                            <div class="page-title-heading">
                               <h3>Add product</h3>
                             </div>
                                </div>
                    </div>            <div class="main-card mb-3 card">
                        <div class="card-body">
                            
                          
                              <form action="updateproductss" class="col-md-10 mx-auto" method="post">
                               @csrf
                               <div class="form-group">
                                    <label for="threadnm">product SKU</label>
                                    <div>
                                        <input name="t1" id="threadnm" placeholder="enter thread name" type="text" class="form-control">
                                                     <p class="error-register" id="threadcheck"></p>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="threadnm">product Name</label>
                                    <div>
                                        <input name="t2" id="threadnm" placeholder="enter thread name" type="text" class="form-control">
                                                     <p class="error-register" id="threadcheck"></p>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                     <label for="" class="">Price</label>
                                                   
                                   <div>
                                        <input name="t3" id="threadnm" placeholder="enter thread name" type="text" class="form-control">
                                                     <p class="error-register" id="threadcheck"></p>
                                    </div>
                                </div>
                                  <div class="form-group">
                                     <label for="threaddisc" class="">category</label>
                                                   
                                   <div>
                                        <input name="t4" id="threadnm" placeholder="enter thread name" type="text" class="form-control">
                                                     <p class="error-register" id="threadcheck"></p>
                                    </div>
                                </div>
                                  <div class="form-group">
                                     <label for="threaddisc" class="">qty</label>
                                                   
                                   <div>
                                        <input name="t5" id="threadnm" placeholder="enter thread name" type="text" class="form-control">
                                                     <p class="error-register" id="threadcheck"></p>
                                    </div>
                                </div>
        
        
        
                                <div class="upload-btn-wrapper" class="file-path-wrapper"><label for="fileinput" class="" id="threadfilenm">Image</label>&nbsp;
                                                  <input type="file" name="t6" id="myfile" onchange="  document.getElementById('file_name').value = this.value.split('\\').pop().split('/').pop()"  ></i>
                                                    
                                                  </div>
                                                  
                                   
                      <div class="form-group">
                                    <input type="submit" name="createthread" value="Add product" id="btnSubmit" class="mt-1 btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>

