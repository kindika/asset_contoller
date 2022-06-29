
@include('/template/heder')
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('/template/menu')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @include($data['template'])
                 </div>
            <!-- End of Main Content -->
            <div>
@include('/template/footer')