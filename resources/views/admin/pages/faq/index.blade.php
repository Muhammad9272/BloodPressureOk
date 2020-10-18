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
                                        <i class="fa fa-list"></i>
                                        <span class="caption-subject sbold uppercase">Faq Page   </span>
                                    </div>
                                    <div class="actions">

                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-faqs-create')}}"> Add New
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
                                                    
                                                    <th>Faq Title</th>

                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datas as $key=>$data)

                                                <tr >
                                                 
                                                    <td>{{$data->title}}</td>
                                                    
                                                                                                       
                                                    <td><a href="{{route('admin-faqs-edit',$data->id)}}" class="btn btn-outline  btn-sm blue">
                                                            <i class="fa fa-edit"></i> Edit </a>

                                                            <a href="{{route('admin-faqs-delete',$data->id)}}" class="btn btn-outline delete-data  btn-sm red" data-toggle="confirmation" data-placement="top" data-id="{{ $data->id }}" >
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