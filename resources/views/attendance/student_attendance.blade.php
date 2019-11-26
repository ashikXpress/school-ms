@extends('layouts.master_layout')
@section('content')

<div class="row">
       <div class="col-md-12">
           <div class="card card-topline-red">
               <div class="card-head">
                   <header>Students attendance</header>
                   <div class="tools">
                       <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                       <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                       <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                   </div>
               </div>
               <div class="card-body " >
                   <form class="row" action="">

                        <div class="form-group col-md-3 col-sm-3">
                           <label for="class">Class</label>
                           <select class="form-control" name="class" id="class">
                               <option disabled selected>Select class</option>
                               @foreach($classes as $class)
                                   <option  value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                               @endforeach
                           </select>
                           <span class="text text-danger">{{$errors->first('class')}}</span>
                       </div>

                       <div class="form-group col-md-3 col-sm-3">
                           <label for="section">Section</label>
                           <select class="form-control" name="section" id="section">
                               <option disabled selected>Select section</option>
                               @foreach($sections as $section)
                                   <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                               @endforeach
                           </select>
                           <span class="text text-danger">{{$errors->first('section')}}</span>
                       </div>
                       <div class="form-group col-md-3 col-sm-3">
                           <label for="shift">Shift</label>
                           <select class="form-control" name="shift" id="shift">
                               <option disabled selected>Select shift</option>
                               <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>
                               <option value="Day" @if(old('shift') == 'Day')selected @endif>Day</option>

                           </select>
                           <span class="text text-danger">{{$errors->first('shift')}}</span>
                       </div>
                       <div class="col-md-2 padd-less">

                           <button type="submit" class=" btn btn-info">Search</button>

                       </div>

                   </form>

                   <form class="table-scrollable" action="{{route('student.attendance')}}" method="post">
                       @csrf
                       <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                           <div class="row">
                               <div class="col-sm-12">
                                   <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                       <thead>
                                       <tr role="row">
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 200px;">Status</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Class</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Roll</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 150px;">Name</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 80px;">Shift</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 20px;">Section</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Contact number</th>

                                       </tr>
                                       </thead>
                                       <tbody>
                                       @if(isset($student_search_lists))
                                       @foreach($student_search_lists as  $key=>$student_list)

                                           <tr class="gradeX odd" role="row">
                                               <input type="hidden" name="student_id[]" value="{{$student_list->id}}">
                                               <td>
                                                   <label for="optionsRadios{{$student_list->id}}">Present </label>
                                                       <input type="radio" name="status[{{$key}}]" id="optionsRadios{{$student_list->id}}" checked value="1" >
                                                   <label for="optionsRadios{{$student_list->id}}"> Absent </label>
                                                       <input type="radio" name="status[{{$key}}]"  id="optionsRadios{{$student_list->id}}" value="0" >
                                               </td>

                                               <td class="left">{{$student_list->class}}</td>
                                               <td class="left">{{$student_list->roll}}</td>
                                               <td><a href="">{{$student_list->first_name.' '.$student_list->last_name}}</a></td>
                                               <td>{{$student_list->shift}}</td>
                                               <td>{{$student_list->section}}</td>
                                               <td>{{$student_list->contact_number}}</td>


                                           </tr>
                                       @endforeach
                                       @endif
                                       </tbody>
                                   </table>
                                   @if(isset($attendance_check))
                                       <h3 class="text text-danger">{{$attendance_check}}</h3>
                                   @endif
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6 col-md-6 ">
                                   @if(isset($student_search_lists))
                                   <p><strong>Total student is {{ $student_search_lists->count()}}</strong></p>
                                   <button type="submit" class="btn btn-lg btn-info present-btn">Present</button>
                                   @endif

                               </div>
                           </div>
                       </div>
                   </form>


               </div>
           </div>
       </div>
   </div>
@endsection
