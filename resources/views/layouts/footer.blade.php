
    <script src="{{ asset('js/lib/jquery.min.js')}}"></script>
    <!-- jquery vendor -->
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/lib/bootstrap.min.js')}}"></script>
    <!-- bootstrap -->
    {{-- <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{ asset('js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{ asset('js/lib/chartist/chartist-init.js')}}"></script> --}}

{{-- 
    <script src="{{ asset('js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/lib/morris-chart/morris-init.js')}}"></script> --}}





    {{-- <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js')}}"></script> --}}
    <script src="{{ asset('js/scripts.js')}}"></script>
    {{-- <script src="{{ asset('js/dropzone.js')}}"></script>
    <script src="{{ asset('js/dropzone-config.js')}}"></script> --}}
    <script src="{{ asset('js/sweetalert2.js')}}"></script>
    <script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    {{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>

 
    
    

    <script>
        $(document).ready(function() {
        var table = $('#example').DataTable({
            "order": [],
            "iDisplayLength": 50,
            "language": {
            "decimal":        "",
            "emptyTable":     "Aucune donnée disponible dans le tableau",
            "info":           "Affichage _START_ à _END_ sur _TOTAL_ lignes",
            "infoEmpty":      "Affichage 0 à 0 sur 0 lignes",
            "infoFiltered":   "(filtrés sur _MAX_ total lignes)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Voir _MENU_ lignes",
        
           
            "search":         "Rechercher:",
            "zeroRecords":    "Aucune donnée trouvée",
            "paginate": {
                "first":      "First",
                "last":       "Last",
                "next":       "Suivant",
                "previous":   "Précédent"
            },
   
            }
        });
    } );
        var table1 = $('#example1').DataTable({
            "order": [],
            "iDisplayLength": 50,

            "language": {
            "decimal":        "",
            "emptyTable":     "Aucune donnée disponible dans le tableau",
            "info":           "Affichage _START_ à _END_ sur _TOTAL_ lignes",
            "infoEmpty":      "Affichage 0 à 0 sur 0 lignes",
            "infoFiltered":   "(filtrés sur _MAX_ total lignes)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Voir _MENU_ lignes",
        
           
            "search":         "Rechercher:",
            "zeroRecords":    "Aucune donnée trouvée",
            "paginate": {
                "first":      "First",
                "last":       "Last",
                "next":       "Suivant",
                "previous":   "Précédent"
            },
   
            }

        }); 
        // mandataire
        var table = $('#example2').DataTable({
            paging: false,
            "order": [],
            

            "language": {
            "decimal":        "",
            "emptyTable":     "Aucune donnée disponible dans le tableau",
            "info":           "Affichage _START_ à _END_ sur _TOTAL_ lignes",
            "infoEmpty":      "Affichage 0 à 0 sur 0 lignes",
            "infoFiltered":   "(filtrés sur _MAX_ total lignes)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Voir _MENU_ lignes",
        
           
            "search":         "Rechercher:",
            "zeroRecords":    "Aucune donnée trouvée",
            "paginate": {
                "first":      "First",
                "last":       "Last",
                "next":       "Suivant",
                "previous":   "Précédent"
            },
   
            }
        });       


$(document).ready(function() {
    $('#examplex').DataTable();
} );

    </script>


{{-- DASHBOARD --}}

<script src="{{ asset('js/lib/preloader/pace.min.js') }}"></script>
{{-- <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('js/lib/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/lib/circle-progress/circle-progress-init.js') }}"></script>
<script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
<script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>
<!--range sliders-->
<script src="{{ asset('js/lib/rangeSlider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('js/lib//rangeSlider/rangeslider.init.js') }}"></script>
<!--range sliders end-->
<!--charts-->
<script src="{{ asset('js/lib/morris-chart/raphael-min.js') }}"></script>
<script src="{{ asset('js/lib/moment/moment.js') }}"></script>
{{-- <script src="{{ asset('js/lib/moment/locale/fr.js') }}"></script> --}}
<!-- moment.js (gestion des dates) -->
<script src="{{ asset('js/lib/morris-chart/morris.js') }}"></script>
<!--chartsend-->
<!--toastr-->
<script src="{{ asset('js/lib/toastr/toastr.min.js') }}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-fr_FR.min.js"></script>
{{-- dropzone --}}
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="{{ asset('js/dropzone-config.js') }}"></script>
<!--chartjs-->
<script src="{{ asset('js/lib/chart-js/Chart.bundle.js') }}"></script>
<!--depot-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<!--stack tables-->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/stacktable.js"></script>
<!--calendar-->
<script src="{{ asset('js/lib/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/lib/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/lib/calendar/fullcalendar-init.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/fr.js"></script> --}}
<!--calendar end-->
<!--tokenfield-->
{{-- <script src="{{ asset('js/lib/tokenfield/bootstrap-tokenfield.min.js') }}"></script> --}}

    @yield('js-content')
</body>

</html>