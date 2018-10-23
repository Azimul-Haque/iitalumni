@extends('layouts.index')
@section('title')
    IIT Alumni | Member Application
@endsection

@section('css')

@endsection

@section('content')
    <section class="wow fadeIn bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-10 col-xs-11 center-col login-box">
                    <!-- form title  -->
                    <h1 style="text-align: center">Registration</h1>
                    <!-- end form title  -->
                    <form>
                        <div class="form-group no-margin-bottom">
                            <!-- label  -->
                            <label for="name" class="text-uppercase">Name</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="text" name="name" id="name">
                            <!-- end input  -->
                        </div>
                        <div class="form-group no-margin-bottom">
                            <!-- label  -->
                            <label for="email" class="text-uppercase">Email</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="text" name="email" id="email">
                            <!-- end input  -->
                        </div>
                        <div class="form-group no-margin-bottom">
                            <!-- label  -->
                            <label for="username" class="text-uppercase">Phone</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="text" name="username" id="username">
                            <!-- end input  -->
                        </div>
                        <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="username" class="text-uppercase">Date of Birth</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input type="text" name="username" id="username" autocomplete="off">
                                <!-- end input  -->
                            </div>
                        <div class="form-group">
                            <!-- label -->
                            <label class="text-uppercase">Degree</label>
                            <!-- end label -->
                            <!-- select -->
                            <div class="select-style input-round big-input">
                                <select>
                                    <option value="">Select one</option>
                                    <option value="">BSSE</option>
                                    <option value="">MIT</option>
                                    <option value="">PGDIT</option>
                                </select>
                            </div>
                            <!-- end select -->
                        </div>
                        <div class="form-group no-margin-bottom">
                            <!-- label  -->
                            <label for="username" class="text-uppercase">Batch</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="text" name="username" id="username">
                            <!-- end input  -->
                        </div>
                        <div class="form-group no-margin-bottom">
                            <!-- label  -->
                            <label for="username" class="text-uppercase">Passing Year</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="text" name="username" id="username">
                            <!-- end input  -->
                        </div>
                        <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="username" class="text-uppercase">Current Job</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input type="text" name="username" id="username">
                                <!-- end input  -->
                            </div>
                            <div class="form-group no-margin-bottom">
                                    <!-- label  -->
                                    <label for="username" class="text-uppercase">Job Designation</label>
                                    <!-- end label  -->
                                    <!-- input  -->
                                    <input type="text" name="username" id="username">
                                    <!-- end input  -->
                                </div>
                        <div class="form-group">
                            <!-- label -->
                            <label for="textbox" class="text-uppercase">Address</label>
                            <!-- end label -->
                            <!-- input -->
                            <input type="text" id="textbox" name="name" class="input-round big-input">
                            <!-- end input -->
                        </div>
                        <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="username" class="text-uppercase">Facebook Url</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input type="text" name="username" id="username">
                                <!-- end input  -->
                            </div>
                            <div class="form-group no-margin-bottom">
                                    <!-- label  -->
                                    <label for="username" class="text-uppercase">Twiter Url</label>
                                    <!-- end label  -->
                                    <!-- input  -->
                                    <input type="text" name="username" id="username">
                                    <!-- end input  -->
                                </div>
                                <div class="form-group no-margin-bottom">
                                        <!-- label  -->
                                        <label for="username" class="text-uppercase">Google plus Url</label>
                                        <!-- end label  -->
                                        <!-- input  -->
                                        <input type="text" name="username" id="username">
                                        <!-- end input  -->
                                    </div>
                                    <div class="form-group no-margin-bottom">
                                            <!-- label  -->
                                            <label for="username" class="text-uppercase">Linkedin Url</label>
                                            <!-- end label  -->
                                            <!-- input  -->
                                            <input type="text" name="username" id="username">
                                            <!-- end input  -->
                                        </div>
                        <div class="form-group">
                            <!-- label  -->
                            <label for="exampleInputFile">Photo</label>
                            <!-- end label  -->
                            <!-- input  -->
                            <input type="file" id="exampleInputFile" class="input-round big-input text-lowercase">
                            <!-- end input  -->
                        </div>
                        
                        <button class="btn highlight-button-dark btn-small btn-round margin-five no-margin-right" type="submit">Next</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection