@extends('layouts.main')
@section('content')
    @php
        $i = 1;
    @endphp
    <div class="container-fluid ml-3 mr-3">
        <div class="container-fluid ">
        <h2 class="text-center">Studentlar Ro'yxati</h2>
        </div>
        <div class="table-responsive">
        <div class="container-fluid"><a href="{{route('students.create')}}"><button class="btn btn-success text-white">Create</button></a></div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4">

                </div>
                
            </div>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Yo'nalish</th>
                        <th>F.I.O</th>
                        <th>Region</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                @forelse($student as $one)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$one->diraction_name}}</td>
                        <td>{{$one->name.' '.$one->surname.' '.$one->father_name}}</td>
                        <td>{{$one->residence_address}}</td>
                        <td>
                        <form action="{{route('del',['student'=>$one])}}" method="post">
                            <a class="btn btn-info btn-sm text-white" href="#">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-success btn-sm text-white" href="#">
                                <i class="fa fa-edit"></i>
                            </a>
                        @csrf 
                        @method('delete')

                        <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>

                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Hozircha hech qanday hodimlar ro'yxati mavjud emas!</td>
                    </tr>
                @endforelse    
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(function () {
            $('.delete-permission').on('click', function () {
                // $(this).preventDefault();
                var url = $(this).attr('data-url');
                var data = JSON.parse($(this).attr('data-item'));
                $('#myModalLabel').text(data.first_name + ' ' + data.last_name);
                $('.permission-delete-form').attr('action', url);
                $('.delete-question').find('span').text(data.first_name);
            })
        })
    </script>
@endsection
<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-top" role="document"  style="">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 text-danger" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger font-weight-bold delete-question">  <span></span>ni tizimdan o'chirishni hohlaysizmi?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="" class="permission-delete-form" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                    <button type="submit" class="btn btn-danger">Ha, hohlayman!</button>
                </form>
            </div>
        </div>
    </div>
</div>