@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pertanyaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a>Pertanyaan</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card mx-5">
            <div class="card-body">
                <table id="tables" class="table table-borderless table-hover  table-stripeda">
                    <thead class="">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Question</th>
                        <th scope="col" style="width:10px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key => $i)
                        <tr>
                            <td>
                                <a href="/pertanyaan/{{$i->id}}" class="btn-block text-decoration-none text-dark">{{ $i->title }}</a>
                            </td>
                            <td>
                                <a href="/pertanyaan/{{$i->id}}" class="btn-block text-decoration-none text-dark">{{ $i->content }}</a>
                            </td>
                            <td>
                                <a href="/pertanyaan/{{$i->id}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@push('style')
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#tables").DataTable({
                "ordering": false
            });
        });
    </script>

@endpush
