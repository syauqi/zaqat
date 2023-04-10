<!DOCTYPE html>
<html lang="id">

@include('includes.frontend.head')

<div class="preloader">
    <div class="loading"><span></span><span></span><span></span><span></span></div>
</div><!-- /.preloader -->

<!--====== Start Header ======-->
@include('includes.frontend.navbar')
<!--====== End Header ======-->

@yield('content')

<!--====== Start Footer ======-->
@include('includes.frontend.footer')
<!--====== End Footer ======-->

@include('includes.frontend.script')
</body>

</html>
