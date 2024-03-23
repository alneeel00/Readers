<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Readers school">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    

  
    @include('layouts-site.head')
  </head>


    


<body>

    

        <!--=================================
 preloader -->

        {{-- <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div> --}}

        <!--=================================
 preloader -->


        @include('layouts-site.main-header')

     

     

            @yield('content')

 

          
   
    

  

    @include('layouts-site.footer-scripts')

</body>

</html>
