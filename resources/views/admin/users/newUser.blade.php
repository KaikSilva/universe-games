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
    padding: 10px;
    font-weight: 500;
    font-size: 13px;
    float: right;
    }
    </style>
            <form action="{{ route('admin.user.store') }}" enctype="multipart/form-data"  method="POST">
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

                        <div class="col-md-7">
                            <div class="card">
                                <div content="awsLL" class="card-body" >
                                    <div class="form-group col-md-12">
                                        <label for="name-post">Nome <code>*</code></label>
                                        <input name="name" type="text" value="{{ old('nome') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name-post">E-mail <code>*</code></label>
                                        <input name="email" type="text" value="{{ old('email') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name-post">Senha <code>*</code></label>
                                        <input name="senha" type="password" value="{{ old('senha') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name-post">Confirmar Senha <code>*</code></label>
                                        <input name="confSenha" type="password" value="{{ old('confSenha') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name-post">foto de perfil <code>*</code></label>
                                        <input name="ImgPerfil" type="file" value="{{ old('ImgPerfil') }}" class="form-control-file">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="mb-2 btn btn-primary" >Cadastrar</button>
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