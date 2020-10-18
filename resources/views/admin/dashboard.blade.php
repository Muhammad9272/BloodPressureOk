@extends('admin.layouts.app')

@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            @include('includes.admin.form-both')
            <div class="page-title">
                <h1>Blood Pressure Calculator
                    <small>Admin Panel</small>
                </h1>
            </div>

        </div>

        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="note note-info">
            <p> Welcome to BloodPressure Calculator Admin Panel </p>
        </div>


        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-share font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Guidlines</span>
                </div>
            </div>
            <div class="portlet-body">
                <h4 class="block">What i slug?</h4>
                <p>Slug is used as page links whenever you create any page, Try to create user friendly slug. Ex <b>https://bloodpressurecalculator.com/{slug}</b> if you create about us page & its slug is like "about-us" then its link will be like that
                     <b>https://bloodpressurecalculator.com/about-us</b>
                </p>

                <h4 class="block">Clearing cache ?</h4>
                 Clearing cache is a quick and easy way to free up space and (hopefully) fix a misbehaving app.
                
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection