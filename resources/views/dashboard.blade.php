@extends('layouts.app')

@section('content')
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="fa fa-calendar m-auto text-primary"></i>
                        </div>
                        <h3>Upcoming tasks</h3>
                        <p class="lead mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="fa fa-list  m-auto text-primary"></i>
                        </div>
                        <h3>Todo Items</h3>
                        <p class="lead mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="fa fa-bar-chart m-auto text-primary"></i>
                        </div>
                        <h3>Staticstics</h3>
                        <p class="lead mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection