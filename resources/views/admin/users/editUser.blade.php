@extends('admin.master.master')

@section('content')

<style>
    button.btn.compartilhar{
        padding: 6px;
    margin-right: 10px;
    }
    input{
        width: 26%!important;float: left;margin-top: -5px;margin-left: 10px;
    }
</style>

            <!-- Page Container START -->
            <div style="padding-left: 0px;" class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <form>
                        <div class="page-header no-gutters has-tab">
                            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                                <div class="media align-items-center m-b-15">
                                    <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                                        <img src="{{ $Author->cover }}" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">{{ $Author->name }}</h4>
                                        <p class="text-muted m-b-0">Código: #{{ $Author->id }}</p>
                                    </div>
                                </div>
                                <div class="m-b-15">
                                    <button class="btn btn-primary">
                                        <i class="anticon anticon-save"></i>
                                        <span>Salvar</span>
                                    </button>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Dados</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="product-edit-basic" >
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b style=" float: left; " >Nome:  </b><input  class="form-control" type="text" value="{{ $Author->name }}"></li>
                                            <li class="list-group-item"><b style=" float: left; " >E-mail:  </b><input  class="form-control" type="text" value="{{ $Author->email }}"></li>
                                            <li class="list-group-item"><b style=" float: left; " >Senha:  </b><input  class="form-control" type="text" value=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Content Wrapper END -->


                <script>
                    let btn = document.querySelector('#copy');
                    btn.addEventListener('click', function(e) {
                    let textArea = document.querySelector('.text');
                    textArea.select();
                    document.execCommand('copy');
                    
                    });
                </script>

@endsection