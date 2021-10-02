@extends('adminlte::page')

@section('title', 'Employes Management System | '.$employe->fullname)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Vacation Request
                    </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        He is requesting a vacation starting from <b>________________</b>
                    </p>
                    <p class="lead">
                        And ends on <b>______________</b>
                    </p>

                    <p class="m-5">
                        ___________
                        ___________
                    </p>
                    <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



