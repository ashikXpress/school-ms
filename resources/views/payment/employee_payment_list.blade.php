@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-aqua">
                <div class="card-head">
                    <header>Employee Payments</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="{{route('employee.payment.form')}}" id="addRow" class="btn btn-info">
                                    Add Payment <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as
                                            PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i>
                                            Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="display dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Receipt no</th>
                                            <th>Salary</th>
                                            <th>Honorarium</th>
                                            <th>Payment by</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $payment)
                                            <tr class="gradeX odd" role="row">
                                                <td class="left">{{$loop->iteration}}</td>
                                                <td class="left">{{$payment->employee->first_name.' '.$payment->employee->last_name}}</td>
                                                <td class="left">{{$payment->payment_type}}</td>
                                                <td class="left">{{$payment->payment_date}}</td>
                                                <td class="left">{{$payment->receipt_no}}</td>
                                                <td class="left">{{$payment->basic_salary.' BDT'}}</td>
                                                <td class="left">{{$payment->others_honorarium.' BDT'}}</td>
                                                <td class="left">{{$payment->paymentBy->first_name.' '.$payment->paymentBy->last_name}}</td>
                                                <td>
                                                    <a href="{{route('employee.payment.edit',$payment->id)}}" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing {{$payments->count()}} of {{$counts}} entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    {{$payments->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
