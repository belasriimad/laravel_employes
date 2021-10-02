@extends('adminlte::page')

@section('title', 'Employes Management System | '.$employe->fullname)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Profile : {{$employe->fullname}}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <a href="{{route('work.vacation',$employe->registration_number)}}"
                                class="btn btn-outline-dark">
                                {{ __('Vacation request') }}
                            </a>
                            <a href="{{route('work.certificate',$employe->registration_number)}}"
                                class="btn btn-outline-danger">
                                {{ __('Work certificate') }}
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Full Name</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->fullname}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Registration Number</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->registration_number}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Departement</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->depart}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Hired Since</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->hire_date}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Phone</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->phone}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Address</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->address}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">City</label>
                        <div class="border border-secondary rounded p-2">
                            {{$employe->city}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



