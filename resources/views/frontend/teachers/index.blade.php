@extends('layouts.main')
@section('content')
    @php
        $i = 1;
    @endphp
    <div class="container-fluid ml-3 mr-3">
        <div class="container-fluid m-3">
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong>{{session()->get('message')}}
            </div>
        @endif
        <br>
        <h2 class="text-center">O'qtuvchilar Ro'yxati</h2>
        </div>
        <div class="table-responsive">
        <div class="container-fluid"><a href="{{route('teachers.create')}}"><button class="btn btn-success text-white">Create</button></a></div>
        <br>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>F.I.O</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @forelse($teachers as $teacher)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><a href="{{route('big',['teacher'=>$teacher])}}" class="text-info">{{$teacher->firstname .' '. $teacher->lastname}}</a></td>
                        <td>{{$teacher->phone_number}}</td>
                        <td>
                        <form class="" action="{{route('teachers.destroy',['teacher'=>$teacher])}}" method="post">
                          <a href="teachers/{{$teacher->id}}/edit" class="btn btn-success btn-sm text-white">edit <i class="fa fa-edit"></i></a>
                          @csrf
                              @method('Delete')
                          <button class="btn btn-danger btn-sm text-white">delate <i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Hozircha hech qanday hodimlar ro'yxati mavjud emas!</td>
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
