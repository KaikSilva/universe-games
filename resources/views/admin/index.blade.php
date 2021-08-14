<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>Universe Games - Admin</title>

    <link rel="shortcut icon" href="backend/assets/images/logo/universe_games__7_-removebg-preview.png">
    <link href="backend/assets/css/app.css" rel="stylesheet">

    <style>
        button.btn{
            width: 100%;
            background-color: #38b6ff;
            border-color: #38b6ff;
        }
        img.img-fluid{
            width: 157px;
            margin: -127px;
            margin-left: -9px;
        }

        .d-flex {
            display: flex !important;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
        }
    </style>

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('backend/assets/images/others/pexels-photo-3945673.jpeg')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="ajax_response"></div>

                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="backend/assets/images/logo/universe_games__5_-removebg-preview.png">
                                        <h2 class="m-b-0">Login</h2>
                                    </div>

                                    <form name="login" action="{{ route('admin.login.do') }}" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">E-mail:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-mail"></i>
                                                <input style="height: 38px!important;" type="text" class="form-control" name="email" id="email" placeholder="email">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="senha">Senha:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input style="height: 38px!important;" type="password" name="senha" class="form-control" id="senha" placeholder="senha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-primary">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div style="text-align:center;" >com ❤ , Kaik Silva</div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© {{ date('Y') }} @kaik_silvaks</span>
                    <ul class="list-inline">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <script src="backend/assets/js/libs/libs.css"></script>
    <script src="backend/assets/js/javascript.js"></script>

</body>
</html>