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
                   <div class="row">
                       <div class="form-group col-md-3 col-sm-3">
                           <label for="shift">Class</label>
                           <select class="form-control" name="class_name" id="class">
                               <option disabled selected>Select class</option>
                               @foreach($classes as $class)
                                   <option value="{{$class->class_name}}" @if(old('class_name') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                               @endforeach
                           </select>
                           <span class="text text-danger">{{$errors->first('class_name')}}</span>
                       </div>
                       <div class="form-group col-md-3 col-sm-3">
                           <label for="shift">Shift</label>
                           <select class="form-control" name="shift_name" id="shift">
                               <option disabled selected>Select shift</option>
                               @foreach($shifts as $shift)
                                   <option value="{{$shift->shift_name}}" @if(old('shift_name') == $shift->shift_name)selected @endif>{{$shift->shift_name}}</option>
                               @endforeach
                           </select>
                           <span class="text text-danger">{{$errors->first('shift_name')}}</span>
                       </div>
                       <div class="form-group col-md-3 col-sm-3">
                           <label for="section">Section</label>
                           <select class="form-control" name="section_name" id="section">
                               <option disabled selected>Select section</option>
                               @foreach($sections as $section)
                                   <option value="{{$section->section_name}}" @if(old('section_name') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                               @endforeach
                           </select>
                           <span class="text text-danger">{{$errors->first('section_name')}}</span>
                       </div>

                       <div class="col-md-2 padd-less">

                           <button type="submit" class=" btn btn-info">Search</button>

                       </div>

                   </div>
                   <div class="table-scrollable">
                       <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                           <div class="row">
                               <div class="col-sm-12">
                                   <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" style="width: 100%;" id="example4" role="grid" aria-describedby="example4_info">
                                       <thead>
                                       <tr role="row">
                                           <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="




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
                                   </table></div></div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
