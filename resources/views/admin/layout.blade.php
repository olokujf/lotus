<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body>

<!-- Navigation -->
    @include('admin.nav')

<!-- Page Content -->
<div class="container">

    <div class="row">

        @include('admin.leftMenu')

        <div class="col-lg-9">

            @yield('content')

        </div>

    </div>

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="js/admin/jquery.min.js"></script>
<script src="bootstrap/admin/js/bootstrap.bundle.min.js"></script>

</body>

</html>