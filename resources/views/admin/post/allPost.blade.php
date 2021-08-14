@extends('admin.master.master')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="height: 100%;" class="card-body col-md-12" >
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Uri</th>
                                    <th>Author</th>
                                    <th>Criado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td><a href="{{ route('admin.edit.post' , ['post' => $post->id]) }}" >{{ $post->title }}</a></td>
                                    <td>{{ $post->subtitle }}</td>
                                    <td>{{ $post->uri }}</td>
                                    <td><a href="{{ route('admin.user.show' , ['user' => $post->Author->id]) }}" >{{ $post->Author->name }}</a></td>
                                    <td>{{ date('d/m/Y H:i:s' , strtotime($post->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- page js -->

       
@endsection