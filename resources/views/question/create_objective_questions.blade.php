@extends('layouts.master_layout')
@section('content')



    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create Objective Question</header>


                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="col-md-12">
                        <form action="" class="row">
                            <div class="col-md-3 form-group margin-left">
                                <input type="number" name="quantity" class="form-control" placeholder="Question Quantity">
                            </div>
                           <div class="col-md-2">
                               <button type="submit" class="btn btn-info btn-lg m-r-20">Create</button>
                           </div>
                        </form>
                    </div>


                @if(isset($questions))
                    <form action="{{route('create.objective.question')}}" method="post">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{$questions}}" name="question_qty">
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="class">Class name</label>
                                <select class="form-control" name="class" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($classes as $class)
                                        <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Subject name</label>
                                <select class="form-control" name="subject" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}" @if(old('subject') == $subject->subject_name)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Exam term name</label>
                                <select class="form-control" name="exam_term" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($exam_terms as $term)
                                        <option value="{{$term->exam_term_name}}" @if(old('exam_term') == $term->exam_term_name)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>

                            <div class="col-md-12">
                                    @for($i=1; $i<=$questions;$i++)
                                   <div class="col-md-12 form-group">
                                       <label for="qty_{{$i}}">{{$i}}. Question name</label>
                                       <input type="text" id="qty_{{$i}}" name="objective_question_name_{{$i}}" value="{{old('objective_question_name_'.$i)}}" class="form-control" placeholder="Objective question name">
                                       <span class="text text-danger">{{$errors->first('objective_question_name_'.$i)}}</span>
                                       <br>
                                       <div class="row">
                                           <div class="col-md-3 form-group">
                                               <input type="text" name="option_a_{{$i}}" value="{{old('option_a_'.$i)}}"  class="form-control" placeholder="Option A">
                                                <span class="text text-danger">{{$errors->first('option_a_'.$i)}}</span>
                                           </div>
                                           <div class="col-md-3 form-group">
                                               <input type="text" name="option_b_{{$i}}" value="{{old('option_b_'.$i)}}"  class="form-control" placeholder="Option B">
                                               <span class="text text-danger">{{$errors->first('option_b_'.$i)}}</span>
                                           </div>
                                           <div class="col-md-3 form-group">
                                               <input type="text" name="option_c_{{$i}}" value="{{old('option_c_'.$i)}}" class="form-control" placeholder="Option C">
                                               <span class="text text-danger">{{$errors->first('option_c_'.$i)}}</span>
                                           </div>
                                           <div class="col-md-3 form-group">
                                               <input type="text" name="option_d_{{$i}}" value="{{old('option_d_'.$i)}}" class="form-control" placeholder="Option D">
                                               <span class="text text-danger">{{$errors->first('option_d_'.$i)}}</span>
                                           </div>
                                       </div>
                                   </div>
                                    @endfor

                            </div>



                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create Objective Question</button>

                                    <a href="{{route('objective.question.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </div>

@endsection
