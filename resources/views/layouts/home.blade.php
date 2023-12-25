<!DOCTYPE html>
<html>

@include('include.head')

<body>
  <div class="hero_area">
    <!-- header section strats -->
   @include('include.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('include.sliderSection')
    <!-- end slider section -->
  </div>

  <!-- about section -->

@include('include.aboutSection')

  <!-- end about section -->

  <!-- service section -->

 @include('include.serviceSection')

  <!-- end service section -->


  <!-- client section -->

@include('include.clientSection')

  <!-- end client section -->

  <!-- contact section -->

  @include('include.contactSection')

  <!-- end contact section -->

  <!-- team section -->

  @include('include.teamSection')

  <!-- end team section -->

  <!-- info section -->

@include('include.infoSection')

  <!-- end info_section -->




  <!-- footer section -->
  @include('include.footer')
  <!-- footer section -->

  @include('include.footerjs')
</body>

</html>
