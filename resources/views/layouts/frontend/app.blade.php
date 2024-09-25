<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta name="description" content="Logistiq HTML 5 Template " />
    @include('layouts.frontend.style')
   
</head>
<body >
    <div id="page-preloader"><span class="spinner"></span></div>
    <div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">

       @include('layouts.frontend.header')


        @yield('content')



       @include('layouts.frontend.footer') 

    </div>
   </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
   @include('layouts.frontend.script')
</body>
</html>