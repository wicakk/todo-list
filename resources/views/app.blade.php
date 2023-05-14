@extends('layouts.template')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between breadcrumb-content">
                        <h5>Calender</h5>
                        <div>
                            <a href="#" class="btn btn-primary" data-target="#new-create-modal"
                                data-toggle="modal">Create New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                <h5 class="mr-3" value="{{date('l')}}"></h5>
                        <div class="mt-1">
                            <a href="#" id="cal-prev" class="text-dark mr-2 font-size-18"><i
                                    class="las la-chevron-circle-left m-0"></i></a>
                            <a href="#" id="cal-next" class="text-dark font-size-18"><i
                                    class="las la-chevron-circle-right m-0"></i></a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <select name="cal_type" class="selectpicker calender-select" id="cal-type">
                            <option value="day">Day</option>
                            <option value="week">Week</option>
                            <option value="month">Month</option>
                        </select>
                        <a href="#" class="btn btn-primary btn-new"><i class="ri-add-line"></i>New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="calendar" style="height: 640px;">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-1">
                                <div class="btn btn-primary" style="height:100%"></div>
                                </div>
                                <div class="col-md-11">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        <div class="d-flex flex-row-reverse gap-2 px-2">
                                            <button class="btn-danger btn-sm border-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                            </svg></button>
                                            <button class="btn-primary btn-sm border-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                            </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-block card-stretch ">
                <div class="card-body">
                    <div class="card border-bottom">
                        <div class="card-body text-center inln-date flet-datepickr">
                            <input type="text" id="inline-date" class="date-input basicFlatpickr d-none"
                                readonly="readonly">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
@endsection