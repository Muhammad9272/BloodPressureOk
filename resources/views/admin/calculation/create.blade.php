@extends('admin.layouts.app')

@section('pagelevel_styles')
<link href="{{ asset('assets/admin_assets/img_upload/imgUpload.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                   <i class="fa fa-plus"></i>                       
                </a>
                <span class="caption-subject font-red-sunglo bold uppercase">Add Calculation</span>
                <div class="btn-group">
                    <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-bcl-index')}}"> <i class="fa fa-arrow-left"></i>&nbsp;Back
                        
                    </a>
                </div>
               
            </div>

        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
            <form id="geniusform" action="{{route('admin-bcl-store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
               @include('includes.admin.form-both')
            
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Upper value</label>
                        <div class="col-md-3 d-inline-flex">
                            <input type="number" class="form-control"  name="upper1">  

                            <label class="col-md-3 control-label" >TO</label>

                              <input type="number" class="form-control"  name="upper2">                           
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Lower value</label>
                        <div class="col-md-3 d-inline-flex">
                            <input type="number" class="form-control"  name="lower1">  

                            <label class="col-md-3 control-label" >TO</label>

                              <input type="number" class="form-control"  name="lower2">                           
                        </div>                        
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" >Use the BB codes, it show the data dynamically in your Page.</label>
                        <div class="col-md-6 ">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                    
                                                    <th> Meaning </th>
                                                    <th> BB code </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>Upper value</td>
                                                    <td>{upper_val}</td>
                                                </tr>
                                                 <tr>
                                                    <td>Lower value</td>
                                                    <td>{lower_val}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                        <div class="form-group last">
                            <label class="control-label col-md-3">Page Deatil</label>
                            <div class="col-md-8">
                                  <textarea name="desc" style="width: 100%;">
                                  </textarea>
                            </div>
                        </div>

                        </div>
                    </div>

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-4">
                            <button type="submit" class="btn green addProductSubmit-btn">Submit</button>
                            <button type="button" class="btn default">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->

@endsection
@section('pagelevel_scripts')

<script src="{{ asset('assets/admin_assets/img_upload/imgUpload.js') }}" type="text/javascript"></script>


@endsection