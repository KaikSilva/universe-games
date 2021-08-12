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
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Ultimo login</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="avatar avatar-image  m-h-10 m-r-15">
                                            <img src="{{ $user->cover }}" alt="">
                                        </div>    
                                        <a href="{{ route('admin.view.user' , ['user' => $user->id]) }}" >{{ $user->name }}</a>

                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y H:i:s' , strtotime($user->last_login_at)) }}</td>
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