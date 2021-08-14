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
    a.btn{
    padding: 6px;
    font-size:13px;
    margin: 0px  0px 20px;
    }
    </style>
            <form action="{{ route('admin.role.permissionSync' , ['role' => $role->id]) }}"   method="POST">
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
                                <a href="{{ route('admin.role.index') }}" class="ml-3 btn btn-primary">⬅ Voltar para a listagem</a>

                                    <h2 class="ml-3">Permissões para : {{ $role->name }}</h2>
                                    <div class="form-group col-md-12">
                                        @foreach($permissions as $permission)
                                        <label class="ml-2" for="{{ $permission->id }}">
                                        <input type="checkbox" name="{{ $permission->id }}" id="{{ $permission->id }}">  {{ $permission->name }}
                                        </label>
                                        @endforeach
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="mb-2 btn btn-primary" >Sicronizar Perfil</button>
                                    </div>
                                </div>
                            </div>
                        <div>
                    </div>
                </div>
            </form>

@endsection