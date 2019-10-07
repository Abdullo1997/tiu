@extends('layouts.main')
@push('script')
    <style>
        .user-name p{
            color: #000000;
        }
        .user-name span{
            border-bottom: 1px solid black;
            padding: 0 3em;
            color: #000000;
            font-weight: bold;
        }
        @media print {
            body * {
                visibility: hidden;
            }
            .print-content * {
                visibility: visible;
            }
            .print-content {
                position: absolute;
                left: 0;
                top: 0;
            }
            .print-button{
                display: none !important;
            }
            .user-name{
                padding-left: 5em;
                padding-top: 5em;
            }
        }
        .print-button:focus{
            border: none !important;
            outline: none !important;
        }
        .user-name{
            padding-left: 5em;
            padding-top: 5em;
        }
    </style>
@endpush
@section('content')
    <div class="print-content mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 user-name">
                    <p>Familyasi: <span><strong>{{$student->surname}}</strong></span></p>
                    <p>Ismi: <span><strong>{{$student->name}}</strong></span></p>
                    <p>Otasinig ismi: <span><strong>{{$student->father_name}}</strong></span></p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('storage').'/'. $student->image}}" alt="" style="width: 100%">
                </div>
            </div>
            <div class="container mt-5 text-center">
                <h3><b>Student</b></h3>
            </div>
            <div class="container-fluid table-responsive">
                <button class="float-right btn bg-transparent print-button">
                    <i class="fas fa-print"></i>
                </button>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Jinsi</td>
                        <td>
                            <b>
                                    Erkak
                                    Ayol

                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>OTM</td>
                        <td><b>{{$student->otm}}</b></td>
                    </tr>
                    <tr>
                        <td>Fakultet Nomi</td>
                        <td><b>{{$student->name_of_faculty}}</b></td>
                    </tr>
                    <tr>
                        <td>Yo'nalish Nomi</td>
                        <td><b>{{$student->diraction_name}}</b></td>
                    </tr>
                    <tr>
                        <td>Gruh Nomeri</td>
                        <td><b>{{$student->group_number}}</b></td>
                    </tr>
                    <tr>
                        <td>Kursi</td>
                        <td><b>{{$student->level}}</b></td>
                    </tr>
                    <tr>
                        <td>Shir</td>
                        <td><b>{{$student->shir}}</b></td>
                    </tr>
                    <tr>
                        <td>Tug'ilgan yili</td>
                        <td><b>{{$student->be_born_year}}</b></td>
                    </tr>
                    <tr>
                        <td>Tug'ilgan joyi manzili</td>
                        <td class="w-75"><b>{{$student->residence_address}}</b></td>
                    </tr>
                    <tr>
                        <td>Hozirgi yashash joyi manzili</td>
                        <td class="w-75"><b>{{$student->place_of_residence}}</b></td>
                    </tr>
                    <tr>
                        <td>Millati</td>
                        <td class="w-75"><b>{{$student->nation}}</b></td>
                    </tr>
                    <tr>
                        <td>Otasining F.I.O</td>
                    <td class="w-75"><b>{{$student->father_f_i_o}}</b></td>
                    </tr>
                    <tr>
                        <td>Onasining F.I.O</td>
                        <td class="w-75"><b>{{$student->mather_f_i_o}}</b></td>
                    </tr>
                    <tr>
                        <td>Ota Onasining Uy manzili</td>
                        <td class="w-75"><b>{{$student->parent_home_address}}</b></td>
                    </tr>
                    <tr>
                        <td>Ta'lim Turi </td>
                        <td class="w-75"><b>{{$student->education_type}}</b></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.print-button').on('click', function () {
               window.print();
            })
        })
    </script>
@endsection
