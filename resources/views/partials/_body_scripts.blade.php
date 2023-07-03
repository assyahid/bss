<script src="{{ asset('js/app.js') }}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('assets/js/countdown.min.js') }}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Apexcharts JavaScript -->
@if(isset($assets) && in_array('apexchart',$assets))
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
@endif
<!-- Slick JavaScript -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Select2 JavaScript -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('assets/js/smooth-scrollbar.js') }} "></script>
<!-- lottie JavaScript -->
<script src="{{ asset('assets/js/lottie.js') }} "></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/charts.js') }}"></script>
<script src="{{ asset('assets/js/animated.js') }}"></script>
<!-- High Chart JavaScript -->
@if(isset($assets) && in_array('highchart',$assets))
    <script src="{{ asset('assets/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/js/highcharts-3d.js') }}"></script>
    <script src="{{ asset('assets/js/highcharts-more.js') }}"></script>
@endif
<!-- morris chart JavaScript -->
@if(isset($assets) && in_array('morrischart',$assets))
    <script src="{{ asset('assets/js/morris.js') }} "></script>
    <script src="{{ asset('assets/js/raphael-min.js') }} "></script>
    <script src="{{ asset('assets/js/morris.min.js') }} "></script>
@endif
<!-- Chart Custom JavaScript -->
<script src="{{ asset('assets/js/chart-custom.js') }} "></script>
@if(isset($assets) && in_array('amchart',$assets))
    <script src="https://www.amcharts.com/lib/4/maps.js"></script>
    <script src="https://www.amcharts.com/lib/4/geodata/continentsLow.js"></script>
    <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
@endif

@if(isset($assets) && in_array('rearrange',$assets))
    <link href="{{ asset('css/dragula.css') }}" rel="stylesheet">
    <script src="{{ asset('js/dragula.min.js') }}"></script>
@endif

@if(isset($assets) && (in_array('textarea',$assets) || in_array('editor',$assets)))
    <script src="{{ asset("vendor/tinymce/js/tinymce/tinymce.min.js") }}"></script>
    <script src="{{ asset("vendor/tinymce/js/tinymce/jquery.tinymce.min.js") }}"></script>
@endif


    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.select.min.js') }}"></script>



    <!-- Custom JavaScript -->
<script>
    $(document).ready( function () {
        $('#datatable').DataTable({
            // lengthMenu: [[10, 50, 100, 500, -1], [10, 50, 100, 500, "All"]],
            // sDom : "R"+"<'row align-items-center pt-3 px-4'<'col-md-2' l><'col-md-4' B><'col-md-6' fr>>"+"<'row' <'col-md-12 table-responsive' t>>" +"<'row p-4'<'col-sm-6'i><'col-sm-6 text-sm-center'p>>",
            // buttons : [
            //     {extend : 'print', text : '<i class="fa fa-print"></i> Print', className: 'btn btn-primary btn-sm'},
            //     {extend : 'csv', text : '<i class="fa fa-file"></i> CSV', className: 'btn btn-primary btn-sm'},
            // ],

        });



    } );
    function baru() {
        var url = window.open("{{ route('pasien.create') }}", "_blank", "top=100, left=100, width=800, height=500");
        var title="Input Pesanan Pemeriksaan";
        popUp(url,title);

    }
    function tutup() {
        window.close();
    }
    </script>

<script src="{{ asset('assets/js/custom.js') }}"></script>
