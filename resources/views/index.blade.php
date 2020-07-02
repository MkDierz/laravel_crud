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
                        <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
                        {{--<li class="breadcrumb-item active">Blank Page</li>--}}
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card mx-5">
{{--            <ul class="navbar-nav  m-1">--}}
{{--                <li>--}}
{{--                    <a href="">--}}
{{--                        <button type="submit" class="btn btn-outline-success">--}}
{{--                            <i class="fas fa-plus"></i>--}}
{{--                            Tambah Pertanyaan--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
            <div class="card-body">
                <table id="tables" class="table table-borderless table-stripeda">
                    <thead>
                    <tr>
{{--                        <th scope="col" style="width:10px"></th>--}}
                        <th scope="col">Title</th>
                        <th scope="col">Question</th>
                        <th scope="col" style="width:100px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key => $i)
                        <tr>
{{--                            <th scope="row">{{ $key + 1 }}</th>--}}
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->content }}</td>
                            <td>
                                <a href="/jawaban/script?id={{ $i->id }}">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                </a>
                                <a href="">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
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
            $("#tables").DataTable({});
        });
    </script>

@endpush
