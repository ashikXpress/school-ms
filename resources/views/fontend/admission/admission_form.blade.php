@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Student Admission Form</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Admission form</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->


    <!-- cart -->
    <section id="account" class="account section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="inner-heading">
                        <h3>Admission </h3>
                        @if(session()->has('success'))

                            <h3 class="text text-success">{{session()->get('success')}}</h3>
                            @endif
                    </div>
                    <div class="account-inner">
                        <!-- section title -->

                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" value="{{old('first_name')}}" class="form-control" name="first_name" id="first_name">
                                    <span class="text text-danger">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="first_name">Last Name:</label>
                                    <input type="text" value="{{old('last_name')}}" class="form-control" name="last_name" id="first_name">
                                    <span class="text text-danger">{{$errors->first('last_name')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="class">Class Name:</label>
                                    <select class="form-control" name="class" id="class">
                                        <option disabled selected>Select class</option>
                                        @foreach($classes as $class)
                                            <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>

                                        @endforeach
                                    </select>
                                    <span class="text text-danger">{{$errors->first('class')}}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="dpicker1">Date of Birthday:</label>
                                    <input type="text" value="{{old('date_of_birth')}}" readonly class="form-control" name="date_of_birth" id="dpicker1">
                                    <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birth_certificate_number">Birth Certificate Number:</label>
                                    <input type="text" value="{{old('birth_certificate_number')}}" class="form-control" name="birth_certificate_number" id="birth_certificate_number">
                                    <span class="text text-danger">{{$errors->first('birth_certificate_number')}}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="number" value="{{old('contact_number')}}" class="form-control" name="contact_number" id="contact_number">
                                    <span class="text text-danger">{{$errors->first('contact_number')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contact_number2">Contact Number 2:</label>
                                    <input type="number" value="{{old('contact_number2')}}" class="form-control" name="contact_number2" id="contact_number2">
                                    <span class="text text-danger">{{$errors->first('contact_number2')}}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="present_address">Present Address:</label>
                                    <input type="text" value="{{old('present_address')}}" class="form-control" name="present_address" id="present_address">
                                    <span class="text text-danger">{{$errors->first('present_address')}}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="permanent_address">Permanent Address:</label>
                                    <input type="text" value="{{old('permanent_address')}}" class="form-control" name="permanent_address" id="permanent_address">
                                    <span class="text text-danger">{{$errors->first('permanent_address')}}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="father_name">Father Name:</label>
                                    <input type="text" value="{{old('father_name')}}" class="form-control" name="father_name" id="father_name">
                                    <span class="text text-danger">{{$errors->first('father_name')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="father_contact_number">Father Contact Number:</label>
                                    <input type="number" value="{{old('father_contact_number')}}" class="form-control" name="father_contact_number" id="father_contact_number">
                                    <span class="text text-danger">{{$errors->first('father_contact_number')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="father_occupation">Father Occupation:</label>
                                    <input type="text" value="{{old('father_occupation')}}" class="form-control" name="father_occupation" id="father_occupation">
                                    <span class="text text-danger">{{$errors->first('father_occupation')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mother_name">Mother Name:</label>
                                    <input type="text" value="{{old('mother_name')}}" class="form-control" name="mother_name" id="mother_name">
                                    <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address:</label>
                                    <input type="email" value="{{old('email')}}" class="form-control" name="email" id="email">
                                    <span class="text text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="photo">Photo:</label>
                                    <input type="file" value="{{old('photo')}}"  name="photo" id="photo">
                                    <span class="text text-danger">{{$errors->first('photo')}}</span>
                                </div>
                                <div class="form-group col-md-6" style="margin-top:15px;">
                                    <label class="col-md-2" for="gender_name">Gender: </label>
                                    <label for="" class="col-md-3">
                                        Male<input  type="radio"  value="0" name="gender_name" id="gender_name" {{ old('gender_name') == '0' ? 'checked' : ''}}>
                                    </label>
                                    <label for="" class="col-md-3">
                                        Female<input type="radio"  value="1" name="gender_name" id="gender_name" {{ old('gender_name') == '1' ? 'checked' : ''}}>
                                    </label>

                                    <span class="text text-danger col-md-12">{{$errors->first('gender_name')}}</span>
                                </div>

                                <div class="form-group col-md-12">
                                    <button class="mt_btn_yellow">Submit</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End store -->

@endsection
