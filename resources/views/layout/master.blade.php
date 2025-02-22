<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('startmin-master/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('startmin-master/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="{{asset('startmin-master/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{asset('startmin-master/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('startmin-master/css/startmin.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('startmin-master/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            @include('layout.navbar')

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                        @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="{{asset('startmin-master/js/jquery.min.js')}}"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="{{asset('startmin-master/js/bootstrap.min.js')}}"></script>
        
                <!-- Metis Menu Plugin JavaScript -->
                <script src="{{asset('startmin-master/js/metisMenu.min.js')}}"></script>
        
                <!-- DataTables JavaScript -->
                <script src="{{asset('startmin-master/js/dataTables/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('startmin-master/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
        
                <!-- Custom Theme JavaScript -->
                <script src="{{asset('startmin-master/js/startmin.js')}}"></script>
        
                <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <!-- End custom js for this page-->
        <script>
            $(document).ready(function() {
                $('#table-data').DataTable({
                        responsive: true
                });
            });
        </script>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            const Toast = Swal.mixin({
              toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
              })
              @if(Session::has('message'))
            var type = "{{Session::get('alert-type')}}";
            switch (type) {
              case 'info':
                Toast.fire({
                        icon: 'info',
                        title: "{{Session::get('message')}}"
                          })
                    break;
                    case 'success':
                      Toast.fire({
                        icon: 'success',
                        title: "{{Session::get('message')}}"
                      })
                      break;
                      case 'warning':
                        Toast.fire({
                        icon: 'warning',
                        title: "{{Session::get('message')}}"
                    })
                    break;  
                    case 'error':
                      Toast.fire({
                        icon: 'error',
                        title: "{{Session::get('message')}}"
                      })
                      break;
            }
            @endif
            @if ($errors->any())
            @foreach($errors->all() as $error)
            Swal.fire({
                icon: 'error',
                title: "Oppsss",
                text: "{{ $error }}",
            });
            @endforeach
            @endif
            let baseurl = "<?=url('/')?>";
            let fullURL = "<?=url()->full()?>";
            </script>
    </body>
</html>
