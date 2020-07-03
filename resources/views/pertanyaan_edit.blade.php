@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pertanyaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
                        <li class="breadcrumb-item"><a href="/pertanyaan/{{$data->id}}">{{$data->title}}</a></li>
                        <li class="breadcrumb-item active">Edit pertanyaan</li>
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
                        <form role="form" action="/pertanyaan/edit/{{$data->id}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$data->title}} " autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="textarea">Question</label>
                                    <textarea id="textarea" class="form-control" placeholder="Place some text here" name="content">{{$data->content}}</textarea>
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

