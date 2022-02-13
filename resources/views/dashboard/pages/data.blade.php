@extends('dashboard.layouts.master')
@section('title')
    <title>Datatable - store</title>
@endsection

@section('custom-styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard_files/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard_files/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Article</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('arti.create') }}" class="btn btn-info">Create</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>arti Name</th>
                                        <th>arti details</th>
                                        <th>arti slug</th>
                                        <th>categroy name</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($arti as $art)
                                        <tr>

                                            <td>{{ $art->id }}</td>
                                            <td>{{ $art->name }}</td>
                                            <td>{{ $art->details }}</td>
                                            <td>{{ $art->slug }}</td>
                                            <td>
                                                @foreach ($art->categories as $cate)
                                                    {{-- categories  function bta3t el model --}}


                                                    {{ $cate->name }} /
                                                @endforeach
                                            </td>




                                            <td><a class="btn btn-primary"
                                                    href="{{ url('/arti/show', $art->id) }}">show</a></td>
                                            <td><a href="{{ url('/arti/edit', $art->id) }}"
                                                    class="btn btn-success">Edit</a></td>
                                            {{-- <td><a href="{{ url('/cat/delete',$cate->id) }}" class="btn btn-danger">Delete</a></td> --}}
                                            <td>
                                            <td>
                                                <form action="{{ url('/arti/delete', $art->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                                </form>

                                            </td>



                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('custom-scripts')
    <script src="{{ asset('dashboard_files/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endsection
