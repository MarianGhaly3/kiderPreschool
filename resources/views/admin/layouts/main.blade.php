<!DOCTYPE html>
<html lang="en">

<!-- Head  -->
@include('admin/includes.head')
<!-- end of Head -->

<body>

    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin/includes.sidebar')
        <!-- End Sidebar -->

        <!--  main-panel -->
        <div class="main-panel">

            <!-- Main Header  -->
            @include('admin/includes.header')
            <!-- end of Main Header -->

            @yield('content')

            <!--  footer  -->
            @include('admin/includes.footer')
            <!--  end of footer  -->

        </div>

        <!-- custom 
        include('admin/includes.custom')
         End custom -->

    </div>

    <!-- scripts -->
    @include('admin/includes.scripts')
    <!-- End of scripts -->

</body>

</html>