@extends('admin.master.master')

@section('content')

<style>
        a.btn{
        padding: 6px;
    font-size:13px;
    margin: 0px  0px 20px;
    }
</style>

    <div class="main-content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div style="height: 100%;" class="card-body col-md-12" >
                        <a href="{{ route('admin.role.create') }}" class="btn btn-primary">Nova Função</a>
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td><a href="{{ route('admin.role.edit' , ['role' => $role->id]) }}">Editar</a></td>
                                    <td><a href="{{ route('admin.role.permissions' , ['role' => $role->id]) }}">Permissões</a></td>
                                    <td><a href="{{ route('admin.role.destroy' , ['role' => $role->id]) }}">Excluir</a></td>
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