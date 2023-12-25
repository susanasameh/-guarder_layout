<!DOCTYPE html>
<html>

@include('include.head')

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
   @include('include.header')
    <!-- end header section -->
</div>



@yield('content')


 <!-- info section -->

 @include('include.infoSection')

 <!-- end info_section -->


     <!-- footer section -->
  @include('include.footer')
  <!-- footer section -->

  @include('include.footerjs')
</body>

</html>
