<style>
    .form-control {
        padding: 1.375rem !important;
    }
    .btn-primary {
        padding: 1rem !important;
    }
</style>

@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row w-100">
    <div class="col-lg-8 md-10 sm-12 mx-auto">
        <div class="error">
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
        </div>
        <div class="auto-form-wrapper">
            <h3> <center> Edit Profile </center> </h3>
            <form method="POST" action="">
                @csrf

                <div class="form-group">
                    <label class="label">Name</label>
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="label">Mobile No</label>
                    <div class="input-group">
                        <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
                    </div>
                </div>

                <div class="form-group">
                    <label class="label">Profile Picture</label>
                    <div class="input-group">
                        <input type="file" name="photo" accept="image/jpg,image/jpeg,image/png">
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Submit</button>
                </div>
            </form>
        </div>
        {{-- <p class="footer-text text-center">copyright © 2023 ShonaliApp . All rights reserved.</p> --}}
    </div>
</div>
<div class="row">
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
