@extends('admin.layouts.app')

@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">


                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i style="margin-top: 9px" class="fa fa-list"></i>
                                        <span class="caption-subject  sbold uppercase">Menu Page (Classification)   </span>
                                        <span>
                                            
                                                <span class="caption-subject  sbold uppercase">&nbsp;&nbsp;(Display link in menu)</span>
                                                <form method="post" id="pg-status-sub" action="{{route('admin-pgclass-status')}}" style="display: -webkit-inline-box">
                                                @csrf
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default {{$gs->is_pgclass==1?'active':'' }}">
                                                        <input type="radio" name="status" value="1" class="toggle pg-status">Active</label>
                                                    <label class="btn btn-default {{$gs->is_pgclass==0?'active':'' }}">
                                                        <input type="radio" name="status" value="0" class="toggle pg-status">Inactive</label>
                                                
                                                </div>
                                              </form>
                                        </span>

                                    </div>
                                    <div class="actions">

                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-pgclass-create')}}"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                         
                                    </div>
                                </div>
                                @include('includes.admin.form-both')
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-light">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Title</th>

                                                    <th>Slug</th>

                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datas as $key=>$data)

                                                <tr >
                                                
                                                    <td>{{$data->title}}</td>
                                                    <td>{{$data->slug}}</td>
                                                                                                       
                                                    <td><a href="{{route('admin-pgclass-edit',$data->id)}}" class="btn btn-outline  btn-sm blue">
                                                            <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="{{route('admin-pgclass-delete',$data->id)}}" class="btn btn-outline delete-data  btn-sm red" data-toggle="confirmation" data-placement="top" data-id="{{ $data->id }}" >
                                                            <i class="fa fa-trash"></i> Delete </a>



                                                        </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>

                    </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('pagelevel_scripts')
<script type="text/javascript">
      $(document).ready(function() {
   $(".pg-status").on( "change", function() {
     $('#pg-status-sub').submit();
   })
});
</script>
@endsection