@extends('front.app_front')
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('financeForm');
    var checkbox = document.getElementById('termsCheckbox');
    var submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function(event) {
        if (!checkbox.checked) {
            event.preventDefault(); // Prevent form submission
            alert('Please agree to the terms and conditions.');
        }
    });
});
</script>
@endpush
@section('content')

<div class="page-banner" style="background-image: url('{{ asset('uploads/page_banners/'.$page_other_item->login_page_banner) }}')">
	<div class="page-banner-bg"></div>
	<h1> Parts Exchange </h1>
	<nav>
		<ol class="breadcrumb justify-content-center">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">{{ HOME }}</a></li>
			<li class="breadcrumb-item active">Parts Exchange</li>
		</ol>
	</nav>
</div>


<div class="page-content pt_50 pb_60">
	<div class="container">
		<div class="row cart">

			<div class="col-md-12">
				<div class="">
					<div class="inner">

						<form id="financeForm" action="{{ route('partexchange.store') }}" method="post">
							@csrf
							<div class="row  justify-content-center">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>{{SELECT_VEHICLE}}</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select name="vehicle" class="form-control">
                                                    <option >{{ CHOOSE_VEHICLE }}</option>
                                                    @foreach($listings as $listing)
                                                        <option value="{{ $listing->id }}">{{ $listing->listing_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h4>Personal Details</h4>
                                        </div>
                                        <div class="col-6 col-md-12 col-lg-12 col-xl-12">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title*">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name ">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" name="last_name"  class="form-control" placeholder="{{LAST_NAME}}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>

                                        <!-- contact deatils start -->
                                        <div class="col-12">
                                           <h4>Your Vehicle Details</h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="make" class="form-control" placeholder="Make*">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="model" class="form-control" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="registeration" class="form-control" placeholder="Registeration">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="mileage" class="form-control" placeholder="Mileage">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="owners" class="form-control" placeholder="Owners">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="fuel_type" class="form-control" placeholder="Fuel Type">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="color" class="form-control" placeholder="Color">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select name="transmissions" class="form-control">
                                                    <option value="">transmissions</option>
                                                        <option value="auto">Auto</option>
                                                        <option value="manual">Manual</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- contact details end -->
                                </div>
                                    <div class="col-12 mt-0">
                                        <div class="form-check form-check-inline mt-0">
                                            <input type="checkbox" id="termsCheckbox" name="termsCheckbox" class="form-check-input">
                                            <label for="termsCheckbox" class="form-check-label">Please click to give us consent to store your data and contact you about the product requested and our services in the future via phone and email. Please see our privacy policy here.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary " id="submitBtn">Submit</button>
                                    </div>
                            </div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection