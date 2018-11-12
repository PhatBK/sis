<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="vendor_customer/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="vendor_customer/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    @include('customer.layouts.header')
    <!-- ##### Header Area End ##### -->
    @include('customer.layouts.body')
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
</body>

</html>