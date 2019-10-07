@extends('layouts.main')
@section('content')
    <h1 class="text-center font-weight-bold">Hello Group</h1>
    <p>
        <a href="{{ route('group.create') }}"class="btn btn-success text-light"> Yangi Guruh qo'shish  <span><i class="fa fa-plus"></i></span></a>
    </p>
    <div class="container-fluid">
            <div class="row">
                    <table class="table table-dark">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Faculty_id</th>
                                <th><span class="float-right mr-5">Action</span></th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td >
                                      <a href="" class="btn btn-success btn-sm float-right text-white m-1">edit <i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger float-right btn-sm text-white m-1">delate <i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Hozircha hech qanday hodimlar ro'yxati mavjud emas!</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
@endsection
