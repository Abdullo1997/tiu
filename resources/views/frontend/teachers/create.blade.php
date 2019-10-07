@extends('layouts.main')
@section('content')
    <div class="container-fluid pl-5 pr-5">
        <h2>Tizimga Hodim qo'shish</h2>
        <form action="{{ route('teachers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="firstname">Ismi</label>
                    <input id="firstname" type="text" name="firstname" class="form-control" value="">
                        <span class="invalid-feedback" role="alert">
                            <strong>message</strong>
                        </span>
                </div>
                <div class="col-md-4">
                    <label for="lastname">Familya</label>
                    <input id="lastname" type="text" name="lastname" class="form-control" value="">
                        <span class="invalid-feedback" role="alert">
                            <strong>message</strong>
                        </span>
                </div>
                <div class="col-md-4">
                    <label for="phone_number">Telfon Raqami</label>
                    <input id="phone_number" type="text" name="phone_number" class="form-control" value="">
                        <span class="invalid-feedback" role="alert">
                            <strong>message</strong>
                        </span>
                </div>             
            </div>
            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <button type="submit" class="form-control btn btn-outline-primary">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

