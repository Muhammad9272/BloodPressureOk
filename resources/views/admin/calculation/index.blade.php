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
                                        <i class="fa fa-calculator font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">BloodPressure Calculations</span>
                                    </div>
                                    <div class="actions">

                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-bcl-create')}}"> Add New
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
                                                    
                                                    <th>Upper(Systole)</th>

                                                    
                                                    
                                                   
                                                    <th>Lower(Diastole)  </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datas as $key=>$data)

                                                <tr >
                                                    
                                                    <td>{{$data->upper1}} to {{$data->upper2}}</td>
                                                    
                                                    <td>{{$data->lower1}} to {{$data->lower2}}</td>
                                                    
                                                    
                                                    

                                                    <td><a href="{{route('admin-bcl-edit',$data->id)}}" class="btn btn-outline  btn-sm blue">
                                                            <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="{{route('admin-bcl-delete',$data->id)}}" class="btn btn-outline delete-data  btn-sm red" data-toggle="confirmation" data-placement="top" data-id="{{ $data->id }}" >
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