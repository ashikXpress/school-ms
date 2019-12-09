@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Student Result</header>

                </div>

                <div class="card-body">
                    <form class="row" action="">

                        <div class="form-group col-md-3 col-sm-3">
                            <label for="class">Student</label>
                            <select class="form-control" name="student_id" id="class">
                                <option disabled selected>Select student</option>
                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->id_number}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>

                    </form>

                    <table class="col-md-8 mdl-data-table">
                        <thead>
                            <tr>
                                <td colspan="1" rowspan="2"><img style="width:50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqCnWcgPnoRaRRPc-gMlwpfDvNcMFCNf5BcBe9tlcdoO9LWdmW" alt=""></td>
                                <td colspan="4"><h4>Dhaka Ideal model School, Dhaka</h4></td>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($std))
                        <tr>
                            <td colspan="1">Name: {{$std->first_name.' '.$std->last_name}}</td>
                            <td colspan="1">Class: {{$std->class}}</td>
                            <td colspan="1">Roll: {{$std->roll}}</td>
                            <td colspan="2">Reg: {{$std->reg}}</td>

                        </tr>
                        @endif
                        <tr>
                            <td>Sl</td>
                            <td>Subject Name</td>
                            <td>Marks</td>
                            <td>Grade Point</td>
                            <td>Grade</td>
                        </tr>
                        @if(isset($marks))
                        @foreach($marks as $mark)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mark->subject_name}}</td>
                            <td>{{$mark->marks}}</td>
                            <td>{{$mark->grade_point}}</td>
                            <td>{{$mark->grade}}</td>
                        </tr>

                        @endforeach

                        @endif
                        <tfooter>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                                <th></th>

                                @if(isset($marks))
                                <th>GPA: {{$marks->sum('grade_point')/$marks->count()}}</th>
                                @endif




                            </tr>
                        </tfooter>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
