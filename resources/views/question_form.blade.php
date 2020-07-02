@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pertanyaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
                        <li class="breadcrumb-item active">Tambah pertanyaan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card ">
                        <form role="form" action="/pertanyaan" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="textarea">Question</label>
                                    <textarea id="textarea" class="form-control" placeholder="Place some text here" name="content">
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Default box -->

        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@push('style')
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/summernote/summernote-bs4.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('#textarea').summernote()
        })
    </script>
@endpush
