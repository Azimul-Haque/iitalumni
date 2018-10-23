@extends('layouts.index')
@section('title')
    IIT Alumni | {{ Auth::user()->name }}
@endsection

@section('css')

@endsection

@section('content')
    <section id="features" class="border-bottom no-padding-bottom xs-onepage-section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 text-center">
                    <h3 class="section-title no-padding">My Profile</h3>
                </div>
                <!-- end section title -->
            </div>
            <div class="row margin-ten no-margin-bottom">
                <div class="col-md-6 col-sm-6 text-center xs-margin-bottom-ten">
                    <img src="{{ asset('vendor/hcode/images/onepage-personal-img.jpg') }}" alt=""/>
                </div>
                <div class="col-md-6 col-sm-6 sm-margin-bottom-ten">
                    <div class="col-md-12 col-sm-12 no-padding">
                        <ul class="list-line text-med">
                            <li><span class="font-weight-600">Name:</span> {{ $user->name }}</li>
                            <li><span class="font-weight-600">Batch:</span> bsse 5th</li>
                            <li><span class="font-weight-600">Job(Company):</span></li>
                            <li><span class="font-weight-600">Designation:</span> </li>
                            <li><span class="font-weight-600">Email:</span>{{ $user->email }}</li>
                            <li><span class="font-weight-600">Phone:</span> (123) - 456-7890</li>
                            <li><span class="font-weight-600">Settings:</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection