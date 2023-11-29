<!DOCTYPE html>
<html lang="zxx">

@include('client.layout.head')

<body>
    <!--/banner-->
@include('client.layout.banner')
@include('client.layout.logo')
    <!--//banner-->
    <!--/nav-->
@include('client.layout.menu')
    <!--//nav-->
    <!--/inner-content-->

    <!--/banner-bottom-->
@include('client.layout.category')
    <!--//banner-bottom-->



    <!--/Gallry-->
@yield('content')
    <!--//gallery-->

    <!--//inner-content-->
    <!--footer-->
@include('client.layout.footer')
    <!---->

    <!-- js -->
@include('client.layout.script')


</body>

</html>