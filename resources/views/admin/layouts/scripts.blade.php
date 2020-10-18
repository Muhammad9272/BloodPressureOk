<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script type="text/javascript">
			  var mainurl = "{{url('/')}}";
			  var admin_loader = {{ $gs->is_admin_loader }};
</script>



<script src="{{ asset('assets/admin_assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<script src="{{asset('assets/admin_assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>

   {{--   CK editor    --}}
        <script src="{{asset('assets/admin_assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>

      


<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('pagelevel_scripts')
@show
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/admin_assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<script src="{{ asset('assets/admin_assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>

 <script src="{{ asset('assets/admin_assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/admin_assets/layouts/layout4/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<script src="{{ asset("assets/admin_assets/myscript.js") }}" type="text/javascript"></script>

  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>



<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>



