<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body class="c-app">
    @include('layout.nav')
    <div class="c-wrapper c-fixed-components">
        @include('layout.navfron')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#empleados').DataTable();
        });

        $(document).ready(function() {
            $('#cargos').DataTable();
        });

        $(document).ready(function() {
            $('#horarios').DataTable();
        });

        $(document).ready(function() {
            $('#departamentos').DataTable();
        });

        $(document).ready(function() {
            $('#pagos').DataTable();
        });

        $(document).ready(function() {
            $('#nomina-individual').DataTable();
        });

        $(document).ready(function() {
            $('#nomina-general').DataTable();
        });

        $(document).ready(function() {
            $('#asistencias').DataTable();
        });

        $(document).ready(function() {
            $('#extras').DataTable();
        });

        $(document).ready(function() {
            $('#descuentos').DataTable();
        });
    </script>
</body>

</html>