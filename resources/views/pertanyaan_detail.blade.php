@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $data_out['question']->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
                        <li class="breadcrumb-item active">{{ $data_out['question']->title }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h1 class="card-text">
                                {{ $data_out['question']->content }}
                            </h1>
                        </div>
                        <div class="card-footer">
                            <a href="/pertanyaan/delete/{{ $data_out['question']->id }}"
                               class=" btn btn-outline-danger float-right "><i class="fa fa-trash"></i></a>
                            <a href="/pertanyaan/edit/{{ $data_out['question']->id }}"
                               class=" btn btn-outline-success float-right mr-2"><i class="fa fa-edit"></i></a>
                            <a href="/jawaban/{{ $data_out['question']->id }}" class=" btn btn-outline-primary  mr-2"><i
                                    class="fa fa-reply"></i></a>
                        </div>
                    </div>
                    <!-- /.card -->
                    {{--                    {{dd($data_out)}}--}}
                    @if ($data_out['answer'])
                        <div class="card card-cyan">
                            <div class="card-body mb-0">
                                @foreach($data_out['answer'] as $key => $data)
{{--                                    <div class="m-0 card-body p-1">--}}
                                        <div class="callout callout-info m-1">
                                            <p>
                                                {{ $data->content}}
                                                <a href="/jawaban/edit/{{$data->id}}" class="btn  btn-sm mr-2">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/jawaban/delete/{{$data->id}}" class="btn btn-outline-danger btn-sm float-right">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </p>
                                        </div>
{{--                                    </div>--}}

                                @endforeach

                            </div>
                        </div>
                    @endif
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Details</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td style="width: 5px">Id</td>
                                    <td style="width: 5px">:</td>
                                    <td>{{ $data_out['question']->id }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 5px">Date Create</td>
                                    <td style="width: 5px">:</td>
                                    <td>{{ $data_out['question']->created_at }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 5px">Date Edit</td>
                                    <td style="width: 5px">:</td>
                                    <td>{{ $data_out['question']->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 5px">Like</td>
                                    <td style="width: 5px">:</td>
                                    <td>{{ $data_out['question']->like }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 5px">Dislike</td>
                                    <td style="width: 5px">:</td>
                                    <td>{{ $data_out['question']->dislike }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
