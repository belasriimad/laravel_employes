@extends('adminlte::page')

@section('title', 'Employes Management System | Update')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Update employe
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('employes.update',$employe->registration_number) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname" value="{{old("fullname",$employe->fullname)}}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" value="{{old("registration_number",$employe->registration_number)}}"  placeholder="Registration Number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Departement</label>
                            <input type="text" class="form-control" value="{{old("depart",$employe->depart)}}"  name="depart" placeholder="Departement">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                            <input type="date" class="form-control" value="{{old("hire_date",$employe->hire_date)}}"  placeholder="Hiring Date" name="hire_date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{old("phone",$employe->phone)}}"  placeholder="Phone" name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="address">Address</label>
                            <input type="text" class="form-control" value="{{old("address",$employe->address)}}"  placeholder="Address" name="address">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="city">City</label>
                            <input type="text" class="form-control" value="{{old("city",$employe->city)}}"  placeholder="City" name="city">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

