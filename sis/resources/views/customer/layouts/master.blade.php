<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Students Informaion System</title>
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link rel="icon" href="vendor_customer/img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="vendor_customer/style.css">


    <!-- Bootstrap core CSS-->
    <link href="vendor_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor_admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="vendor_admin/css/sb-admin.css" rel="stylesheet">

</head>

<body style="">
    <!-- ##### Header Area Start ##### -->
    @include('customer.layouts.header')
    <!-- ##### Header Area End ##### -->
    {{-- @include('customer.layouts.body') --}}
    @yield('content')
    <!-- ##### Footer Area Start ##### -->
    @include('customer.layouts.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="vendor_customer/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="vendor_customer/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="vendor_customer/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="vendor_customer/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="vendor_customer/js/active.js"></script>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor_admin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor_admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor_admin/vendor/chart.js/Chart.min.js"></script>
    <script src="vendor_admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor_admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vendor_admin/js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="vendor_admin/js/demo/datatables-demo.js"></script>
    <script src="vendor_admin/js/demo/chart-area-demo.js"></script>
</body>

</html>