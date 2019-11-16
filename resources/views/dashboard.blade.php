@extends('layouts.master_layout')
@section('content')

    <!-- start widget -->
    <div class="state-overview">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-green">
                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Students</span>
                        <span class="info-box-number">450</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 45%"></div>
                        </div>
                        <span class="progress-description">
											45% Increase in 28 Days
										</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-yellow">
                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Students</span>
                        <span class="info-box-number">155</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
											40% Increase in 28 Days
										</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-blue">
                    <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Course</span>
                        <span class="info-box-number">52</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <span class="progress-description">
											85% Increase in 28 Days
										</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">monetization_on</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fees Collection</span>
                        <span class="info-box-number">13,921</span><span>$</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
											50% Increase in 28 Days
										</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- end widget -->

    <!-- end new student list -->
@endsection
