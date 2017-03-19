@include('layout.header')
<body>
    <div class="header">
        <div class="container  navbar">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ URL.('img/logo.png') }}" height="100px" width="100px" class="img-responsive"/>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="container">
            <div class="row">
                <!-- nav -->
                <div class="left_column col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class=""><a
                                       href="">Dashboard</a></li>
                           <li role="presentation" class=""><a
                                       href="">Serial</a></li>
                          <li role="presentation"><a href="#">Verification</a></li>
                            <li role="presentation"><a href="#">Account</a></li>
                            <li role="presentation"><a href="#">Sign out</a></li>
                    </ul>
                </div>
                <!-- column -->

                <div class="center_column col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    @if(isset($alert))
                        <div class="alert alert-"></div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
<!-- jQuery, loaded in the recommended protocol-less way -->
<!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->


<!-- our JavaScript -->
@foreach($js as $file)
    <script src="{{ URL.$file }}" type="text/javascript"></script>
@endforeach
</body>
</html>

