@extends("themes.$theme.layout")
@section('titulo')
    Sistema de Menu
@endsection

@section('contenido')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h1 class="card-title text-center align-content-center">Crear Menu</h1>
                        <br><br>
                    </div>
                </div>
                    <!-- /.card-header -->
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                    @csrf
                    <!-- form star -->
                    <div class="card-body">
                        @include('admin.menu.form')
                    </div>
                    <!-- form end -->

                    <!-- fotter star -->
                    <div class="card-fotter">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-create')
                        </div>
                    </div>
                    <!-- fotter end -->
                </form>
            </div>
        </div>
    </div>

@endsection
