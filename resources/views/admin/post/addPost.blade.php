@extends('admin.master.master')

@section('content')

    <style>
        .card-body {
    padding: 1.5rem;
    position: relative;
    padding-top: 17px;
    padding-bottom: 17px;
}
    div[content="awsLL"]{
        padding: 7px;
    padding-top: 21px;
    }
    button.btn{
        width: 100%;
    padding: 8px;
    font-weight: 500;
    font-size: 13px;
    }
    </style>
            <form action="{{ route('admin.add.post.do') }}" method="POST">
                @csrf
                <div class="main-content">
                    <div class="row">
                        @foreach($errors->all() as $error)
                            <div class="ajax_response col-md-12">
                                <div class="alert alert-danger"> 
                                    <div class="d-flex align-items-center justify-content-start"> 
                                        <span class="alert-icon"> 
                                            <i class="anticon anticon-close-o"></i> 
                                        </span> 
                                        <span>{{ $error }}</span> 
                                    </div> 
                                </div>
                            </div>
                            @endforeach

                        <div class="col-md-9">

                            <div class="card">
                            <div style="height: 100%;" class="card-body col-md-12" >
                                <label for="name-post">Conteúdo <code>*</code></label>
                                    <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div content="awsLL" class="card-body" >
                                    <div class="form-group col-md-12">
                                        <label for="name-post">Titulo <code>*</code></label>
                                        <input name="namePost" type="text" value="{{ old('namePost') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name-post">Subtítulo <code>*</code></label>
                                        <input name="subtitle" type="text" value="{{ old('subtitle') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary" >Publicar</button>
                                    </div>
                                </div>
                            </div>
                        <div>
                    </div>
                </div>
            </form>

                <script src="{{ asset('backend/assets/js/quill.js') }}"></script>
                <script>
                    new Quill('#editor', {
                    theme: 'snow'
                });
                </script>
@endsection