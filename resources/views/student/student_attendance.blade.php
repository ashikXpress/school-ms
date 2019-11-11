@extends('layouts.master_layout')
@section('content')

   <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Student attendance</header>
                    <button id="panel-button3"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button3">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('student.attendance')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-3 col-sm-3">
                                <label>Student name</label>
                                <select class="form-control" name="student_name" id="studentattendanceselected">
                                    <option disabled selected>Select student</option>
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(old('student_name') == $student->id)selected @endif>{{$student->first_name.' '.$student->last_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('student_name')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label>Teacher name</label>
                                <select class="form-control" name="teacher_name" id="studentattendanceselected">
                                    <option disabled selected>Select teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}" @if(old('teacher_name') == $teacher->id)selected @endif>{{$teacher->first_name.' '.$teacher->last_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('teacher_name')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="dp1">Attend date</label>
                                <div class="input-append date" id="dp1">
                                    <input class="form-control formDatePicker" name="attend_date" value="{{old('attend_date')}}"  placeholder="Enter attend date" size="44" type="text" aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                    <span class="text text-danger">{{$errors->first('attend_date')}}</span>
                                </div>

                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label>status</label>
                                <div class="row col-md-12">
                                    <div class="radio p-0 col-md-6">
                                        <input type="radio" name="status" id="optionsRadios1" value="0" {{ old('status') == '0' ? 'checked' : ''}}>
                                        <label for="optionsRadios1">Present</label>
                                    </div>
                                    <div class="radio p-0 col-md-6">
                                        <input type="radio" name="status"  id="optionsRadios2" value="1" {{ old('status') == '1' ? 'checked' : ''}}>
                                        <label for="optionsRadios2">Absent</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('status')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description"  id="description" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Check in</button>
                                    <a class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <div class="row">
       <div class="col-md-12">
           <div class="card card-topline-red">
               <div class="card-head">
                   <header>MANAGED TABLE</header>
                   <div class="tools">
                       <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                       <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                       <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                   </div>
               </div>
               <div class="card-body " >
                   <div class="row">
                       <div class="col-md-6 col-sm-6 col-6">
                           <div class="btn-group">
                               <button id="addRow1" class="btn btn-info">
                                   Add New <i class="fa fa-plus"></i>
                               </button>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6 col-6">
                           <div class="btn-group pull-right">
                               <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                   <i class="fa fa-angle-down"></i>
                               </button>
                               <ul class="dropdown-menu pull-right">
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-print"></i> Print </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="table-scrollable">
                       <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example4"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" style="width: 100%;" id="example4" role="grid" aria-describedby="example4_info">
                                       <thead>
                                       <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="




                                                    : activate to sort column descending" style="width: 0px;">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes">
                                                   <span></span>
                                               </label>
                                           </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Username : activate to sort column ascending" style="width: 0px;"> Username </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 0px;"> Email </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Status : activate to sort column ascending" style="width: 0px;"> Status </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Joined : activate to sort column ascending" style="width: 0px;"> Joined </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Actions : activate to sort column ascending" style="width: 0px;"> Actions </th></tr>
                                       </thead>
                                       <tbody>

























                                       <tr class="gradeX odd" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> shuxer </td>
                                           <td>
                                               <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-success"> Approved </span>
                                           </td>
                                           <td> 12 Jan 2012 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu pull-left" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX even" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> looper </td>
                                           <td>
                                               <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-warning"> Suspended </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX odd" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> userwow </td>
                                           <td>
                                               <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-success"> Approved </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX even" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> user1wow </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-danger"> Blocked </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX odd" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> restest </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-success"> Approved </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX even" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> foopl </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-info"> Info </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX odd" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> weep </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-danger"> Rejected </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX even" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> coop </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-info"> Info </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX odd" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> pppol </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-danger"> Suspended </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr><tr class="gradeX even" role="row">
                                           <td class="sorting_1">
                                               <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                   <input type="checkbox" class="checkboxes" value="1">
                                                   <span></span>
                                               </label>
                                           </td>
                                           <td> test </td>
                                           <td>
                                               <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                           </td>
                                           <td>
                                               <span class="label label-sm label-warning"> Suspended </span>
                                           </td>
                                           <td> 12.12.2011 </td>
                                           <td class="valigntop">
                                               <div class="btn-group">
                                                   <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false">
                                                       Actions
                                                       <i class="fa fa-angle-down"></i>
                                                   </button>
                                                   <ul class="dropdown-menu" role="menu">
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-docs"></i> New Post </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-tag"></i> New Comment </a>
                                                       </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-user"></i> New User </a>
                                                       </li>
                                                       <li class="divider"> </li>
                                                       <li>
                                                           <a href="javascript:;">
                                                               <i class="icon-flag"></i> Comments
                                                               <span class="badge badge-success">4</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </td>
                                       </tr></tbody>
                                   </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 25 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example4_previous"><a href="#" aria-controls="example4" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example4" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example4" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="example4_next"><a href="#" aria-controls="example4" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
