    @extends("layouts.app")
	@section("style")
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	@endsection



        @section("wrapper")
            <div class="page-wrapper">
            <div class="page-content">
                
                
                
                
                    <div class="col-md-12 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    
                                    @can('is_Admin')
                                        
                                    <input type="button" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
                                    @endcan    
                                    <input type="button" onclick="window.location.href = '/wastes';" value="Lihat Data"/>
                                    <input type="button" onclick="window.location.href = '/user-profile';" value="Buat Laporan"/>
                                    
                                    <input type="button" onclick="window.location.href = '/user-profile';" value="Riwayat Laporan"/>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--end row-->
                
                 
            </div>
        </div>
		@endsection


    @section("script")
	<!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- highcharts js -->
    <script src="assets/plugins/highcharts/js/highcharts.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/js/index2.js"></script>
    <script>
        new PerfectScrollbar('.dashboard-top-countries');
    </script>
    @endsection
