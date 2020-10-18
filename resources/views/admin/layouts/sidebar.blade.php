<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu" id="sidebare" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            <li class="nav-item start ">
                <a href="{{route('admin.dashboard')}}" >
                    <i class="icon-home"></i>
                    <span class="title">DashBoard</span>                    
                </a>
            </li>

            <li class="nav-item start {{ (request()->is('admin/slider*')) || (request()->is('admin/slider/create*')) || (request()->is('admin/slider/edit*')) ? 'active' : '' }}">
                <a href="{{route('admin-sl-index')}}" >
                    <i class="fa fa-sliders"></i>
                    <span class="title">Slider</span>                    
                </a>
            </li>

            <li class="nav-item start {{ (request()->is('admin/banner*'))  ? 'active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tripadvisor"></i>
                    <span class="title">Banners</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ Request::segment(4) === 'top-banner' ? 'active' : null }}">

                        <a href="{{route('admin-banner-edit', ['slug' =>"top-banner"])}}" class="nav-link ">
                            
                            <span class="title">Top Banner</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::segment(4) === 'bottom-banner' ? 'active' : null }}">
                        <a href="{{route('admin-banner-edit', ['slug' =>"bottom-banner"])}}" class="nav-link ">                            
                            <span class="title">Bottom Banner</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::segment(4) === 'side-banner1' ? 'active' : null }}">
                        <a href="{{route('admin-banner-edit', ['slug' =>"side-banner1"])}}" class="nav-link ">
                           
                            <span class="title">Side Banner 1</span>
                         
                        </a>
                    </li>
                    <li class="nav-item start {{ Request::segment(4) === 'side-banner2' ? 'active' : null }}">
                        <a href="{{route('admin-banner-edit', ['slug' =>"side-banner2"])}}" class="nav-link ">
                            
                            <span class="title">Side Banner 2</span>
                        </a>
                    </li>

                </ul>
            </li>



            <li class="nav-item start {{ (request()->is('admin/calculation*')) || (request()->is('admin/calculation/create*')) || (request()->is('admin/calculation/edit*')) ? 'active' : '' }} ">

                <a href="{{route('admin-bcl-index')}}" >
                    <i class="fa fa-calculator"></i>
                    <span class="title">Add Calculations</span>                    
                </a>
            </li>

            <li class="nav-item start {{ (request()->is('admin/faqs*')) || (request()->is('admin/faqs/create*')) || (request()->is('admin/faqs/edit*')) ? 'active' : '' }} ">

                <a href="{{route('admin-faqs-index')}}" >
                    <i class="fa fa-question-circle"></i>
                    <span class="title">Add Faqs Page</span>                    
                </a>
            </li>


            <li class="nav-item start {{ (request()->is('admin/article*')) || (request()->is('admin/article/create*')) || (request()->is('admin/article/edit*')) ? 'active' : '' }}">

                <a href="{{route('admin-article-index')}}" >
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Articles</span>                    
                </a>
            </li>

            <li class="heading">
                <h3 class="uppercase">Settings</h3>
            </li>


            <li class="nav-item start {{ Request::segment(2) === 'pgblood' ||Request::segment(2) === 'pgclassification' || Request::segment(2) === 'pgremedy' || Request::segment(2) === 'pgtreat' || Request::segment(2) === 'pgother' ? 'active' : null }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Menu Page Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ (request()->is('admin/pgblood*')) || (request()->is('admin/pgblood/create*')) || (request()->is('admin/pgblood/edit*')) ? 'active' : '' }}">

                        <a href="{{route('admin-pgblood-index')}}" class="nav-link ">
                            
                            <span class="title">Blood Pressure</span>
                        </a>

                    </li>
                    <li class="nav-item start {{ (request()->is('admin/pgclass*')) || (request()->is('admin/pgclass/create*')) || (request()->is('admin/pgclass/edit*')) ? 'active' : '' }} ">


                        <a href="{{route('admin-pgclass-index')}}" class="nav-link ">                            
                            <span class="title">Classification</span>
                        </a>

                    </li>
                    <li class="nav-item start {{ (request()->is('admin/pgremedy*')) || (request()->is('admin/pgremedy/create*')) || (request()->is('admin/pgremedy/edit*')) ? 'active' : '' }} ">
                        <a href="{{route('admin-pgremedy-index')}}" class="nav-link ">
                           
                            <span class="title">Remedies</span>
                         
                        </a>
                    </li>
                    <li class="nav-item start {{ (request()->is('admin/pgtreat*')) || (request()->is('admin/pgtreat/create*')) || (request()->is('admin/pgtreat/edit*')) ? 'active' : '' }}">

                        <a href="{{route('admin-pgtreat-index')}}" class="nav-link ">
                           
                            <span class="title">Treatment</span>
                         
                        </a>
                    </li>

                    <li class="nav-item start {{ (request()->is('admin/pgother*')) || (request()->is('admin/pgother/create*')) || (request()->is('admin/pgother/edit*')) ? 'active' : '' }} ">

                        <a href="{{route('admin-pgother-index')}}" class="nav-link ">
                           
                            <span class="title">Other Pages</span>
                         
                        </a>
                    </li>

                </ul>
                <li class="nav-item start">

                    <a href="{{route('admin-cache-clear')}}" >
                        <i class="fa fa-refresh"></i>
                        <span class="title">Clear Cache</span>                    
                    </a>
                </li>
            </li>
 
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->