@extends('layouts.main')
@section('content')
    <div class="container-fluid pl-5 pr-5">
        <h2>Tizimga Talaba  qo'shish</h2>
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-6">
            @if($model!=null)
                    <label for="teacher">O'qtuvchisi</label>
                    <select id="" class="form-control @error('teacher_id') is-invalid @enderror" name="teacher_id">
                        <option selected disabled>--select once--</option>
                        @foreach($model as $one)
                        <option value="{{$one->id}}">{{$one->firstname.' '.$one->lastname}}</option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="otm">OTM</label>
                    <input id="otm" type="text" name="otm" class="form-control @error('otm') is-invalid @enderror" value="{{ old('otm') }}">
                       @error('otm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="name_of_faculty">Fakultet Nomi</label>
                    <input id="name_of_faculty" type="text" name="name_of_faculty" class="form-control @error('name_of_faculty') is-invalid @enderror" value="{{old('name_of_faculty')}}">
                        @error('name_of_faculty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="diraction_name">Yo'nalish Nomi</label>
                    <input id="diraction_name" type="text" name="diraction_name" class="form-control  @error('diraction_name') is-invalid @enderror" value="{{old('diraction_name')}}">
                    @error('diraction_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="group_number">Gruh Nomeri</label>
                    <input id="group_number" type="text" name="group_number" class="form-control @error('group_number') is-invalid @enderror" value="{{old('group_number')}}">
                        @error('group_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="level">Kursi</label>
                    <input id="level" type="number" name="level" class="form-control @error('level') is-invalid @enderror" value="{{old('level')}}">
                        @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="shir">Shir</label>
                    <input id="shir" type="number" name="shir" class="form-control @error('shir') is-invalid @enderror" value="{{old('shir')}}">
                        @error('shir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="g">Ismi</label>
                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="surname">Familyasi</label>
                    <input id="surname" type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{old('surname')}}">
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="father_name">Otasini ismi</label>
                    <input id="father_name" type="text" name="father_name" class="form-control @error('father_name') is-invalid @enderror" value="{{old('father_name')}}">
                       @error('father_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="be_born_year">Tug'ulgan yili</label>
                    <input id="be_born_year" type="text" name="be_born_year" class="form-control @error('be_born_year') is-invalid @enderror" value="{{old('be_born_year')}}">
                        @error('be_born_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="place_of_residence">Tug'ulgan Joyi</label>
                    <input id="place_of_residence" type="text" name="place_of_residence" class="form-control @error('place_of_residence') is-invalid @enderror" value="{{old('place_of_residence')}}">
                        @error('place_of_residence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="residence_address">Yashayotgan Joyi</label>
                    <input id="residence_address" type="text" name="residence_address" class="form-control @error('residence_address') is-invalid @enderror" value="{{old('residence_address')}}">
                        @error('residence_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="student_phone_number">Talabaning Telfon Raqami</label>
                    <input id="student_phone_number" type="text" name="student_phone_number" class="form-control @error('student_phone_number') is-invalid @enderror" value="{{old('student_phone_number')}}">
                        @error('student_phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>

              <div class="col-md-4">
                    <label for="parent_home_address">Ota Onasining Uy manzili </label>
                    <input id="parent_home_address" type="text" name="parent_home_address" class="form-control @error('parent_home_address') is-invalid @enderror" value="{{old('parent_home_address')}}">
                        @error('parent_home_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <label for="father_f_i_o">Otasining F.I.O</label>
                    <input id="father_f_i_o" type="text" name="father_f_i_o" class="form-control @error('father_f_i_o') is-invalid @enderror" value="{{old('father_f_i_o')}}">
                        @error('father_f_i_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <label for="mather_f_i_o">Onasining F.I.O</label>
                    <input id="mather_f_i_o" type="text" name="mather_f_i_o" class="form-control @error('mather_f_i_o') is-invalid @enderror" value="{{old('mather_f_i_o')}}">
                        @error('mather_f_i_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
              <div class="col-md-4">
                    <label for="nationality">Millati</label>
                    <select id="nationality" type="date" class="form-control select2 @error('nationality') is-invalid @enderror" name="nationality">
                        <option selected disabled>-- millatni tanlang --</option>
                        <option value="O'zbek">O'zbek</option>
                        <option value="Rus">Rus</option>
                        <option value="Tojik">Tojik</option>
                        <option value="Qirg'iz">Qirg'iz</option>
                        <option value="Qozoq">Qozoq</option>
                        <option value="Turkman">Turkman</option>
                    </select>
                    @error('nationality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="education_type">Talim turi</label>
                    <input id="education_type" type="text" name="education_type" class="form-control @error('education_type') is-invalid @enderror" value="{{old('education_type')}}">
                        @error('education_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                 <div class="col-md-4">
                    <label for="img">Talabaninng 3x4 rasmi</label>
                    <input id="img" type="file" name="image"  value="" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

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
    <script>
        $(function(){
            $('#select2').select2();
        })
    </script>
@endsection
