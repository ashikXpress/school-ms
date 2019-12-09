@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Employee Payment</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('employee.payment')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="class">Employee name</label>
                                <select class="form-control" name="employee_name" id="class">
                                    <option disabled selected>Select teacher</option>
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}" @if(old('employee_name') == $employee->id)selected @endif>{{$employee->first_name.' '.$employee->last_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('employee_name')}}</span>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="dpicker1">Payment date</label>

                                <input id="dpicker1" readonly class="form-control" name="payment_date"  placeholder="Enter payment date" size="44" type="text" >
                                <span class="text text-danger">{{$errors->first('payment_date')}}</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="class">Payment type</label>
                                <select class="form-control" name="payment_type" id="class">
                                        <option disabled selected>Select</option>

                                        <option value="cash" @if(old('payment_type') == 'cash')selected @endif>Cash</option>
                                        <option value="check" @if(old('payment_type') == 'check')selected @endif>Check</option>
                                        <option value="bank_payment" @if(old('payment_type') == 'bank_payment')selected @endif>Bank payment</option>


                                </select>
                                <span class="text text-danger">{{$errors->first('payment_type')}}</span>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="receipt_no">Payment Receipt no</label>

                                <input type="text" id="receipt_no" value="{{old('receipt_no')}}" class="form-control" name="receipt_no"  placeholder="Enter receipt no" >
                                <span class="text text-danger">{{$errors->first('receipt_no')}}</span>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="basic_salary">Basic salary</label>

                                <input type="number" id="basic_salary" value="{{old('basic_salary')}}" class="form-control" name="basic_salary"  placeholder="Enter basic salary" >
                                <span class="text text-danger">{{$errors->first('basic_salary')}}</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="others_honorarium">Others honorarium</label>

                                <input type="number" id="others_honorarium" value="{{old('others_honorarium')}}" class="form-control" name="others_honorarium"  placeholder="Enter others honorarium" >
                                <span class="text text-danger">{{$errors->first('others_honorarium')}}</span>
                            </div>


                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Payment</button>
                                    <a href="{{route('employee.payment.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
