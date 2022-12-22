@extends('dashboard.layouts.main')

@section('container')

<section class="row">
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                        <h6 class="text-muted mb-0">{{ auth()->user()->email }}</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Log out -->
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">

                    <div class="ms-3 name">
                        <h5 class="font-bold">You can Logout Here</h5>
                        <!-- <h6 class="text-muted mb-0">@johnducky</h6> -->
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-link logout bg-transparent border-0" href="#">      Logout  </button>
                           </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- main -->


</section>

<div class="col-6 col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon purple mb-2">
                        <i class="iconly-boldShow"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Aspiration total</h6>
                    <h6 class="font-extrabold mb-0">{{ auth()->user()->messages->count() }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon blue mb-2">
                        <i class="iconly-boldProfile"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Comments Total</h6>
                    <h6 class="font-extrabold mb-0">{{ auth()->user()->comments->count() }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
