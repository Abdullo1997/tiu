@extends('layouts.main')
@section('content')
    @php
        $i = 1;
    @endphp
    <div class="container-fluid ml-3 mr-3">
        <div class="container-fluid ">
        <h2 class="text-center">Studentlar Ro'yxati</h2>
        </div>
        <div class="container">
            <div class="row">
            @if(!session()->has('message'))
                <div class="alter alter-success">
                    <Strong>{{session()->get('message')}}</Strong>
                </div>
            @endif
            </div>
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
                <div class="col-md-4">
                    <form action="{{route('search')}}" method="">
                        <div class="input-group">
                            <input type="search" name="search" placeholder="search" class="form-control" value="{{ $search }}">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <h3>Data searching <span id="total_records"></span></h3>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Yo'nalish</th>
                        <th>F.I.O</th>
                        <th>Region</th>
                        <th>Tellfon Raqami</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                @forelse($students as $student)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$student->diraction_name}}</td>
                        <td>{{$student->surname.' '.$student->name.' '.$student->father_name}}</td>
                        <td>{{$student->residence_address}}</td>
                        <td>{{$student->student_phone_number}}</td>
                        <td>

                            <a class="btn btn-info btn-sm text-white" href="{{ route('students.show', ['student' => $student]) }}">
                                 <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-success btn-sm text-white" href="{{ route('students.edit', ['student' => $student]) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm delete-student text-white" data-toggle="modal" data-target="#fullHeightModalRight" data-item="{{ $student }}" data-url="{{ route('students.destroy', ['student' => $student]) }}"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Hozircha hech qanday hodimlar ro'yxati mavjud emas!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
            {{$students->links()}}
        </div>
    </div>
    <script>
        $(function () {
            $('.delete-student').on('click', function () {
                // $(this).preventDefault();
                
                var url = $(this).attr('data-url');
                var data = JSON.parse($(this).attr('data-item'));
                $('#myModalLabel').text(data.name + ' ' + data.surname);
                $('.permission-delete-form').attr('action', url);
                $('.delete-question').find('span').text(data.name);
            })
        })
        
    </script>
<!-- Full Height Modal Right -->
@endsection
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
