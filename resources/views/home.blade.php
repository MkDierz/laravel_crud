@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <h4>
                    Selamat Datang di forum
                </h4>
                <h5>
                    Silahkan untuk
                </h5>
                <div class="btn-group justify-content-center text-white">
                    <a href="/pertanyaan" type="button" class="btn bg-gradient-info "><i class="fas fa-eye"></i><br>Lihat Pertanyaan</a>
                    <a href="/pertanyaan/create" type="button" class="btn bg-gradient-success "><i class="fas fa-plus-circle"></i><br>Buat Pertanyaan</a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
