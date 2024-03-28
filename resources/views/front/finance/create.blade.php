@extends('front.app_front')
@section('content')

<div class="page-banner" style="background-image: url('{{ asset('uploads/page_banners/'.$page_other_item->login_page_banner) }}')">
	<div class="page-banner-bg"></div>
	<h1>{{ FINANCE }}</h1>
	<nav>
		<ol class="breadcrumb justify-content-center">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">{{ HOME }}</a></li>
			<li class="breadcrumb-item active">{{ FINANCE }}</li>
		</ol>
	</nav>
</div>


<div class="page-content pt_50 pb_60">
	<div class="container">
		<div class="row cart">

			<div class="col-md-12">
				<div class="">
					<div class="inner">

						<form action="{{ route('finance.store') }}" method="post">
							@csrf
							<div class="row">
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
                                            <h4>{{YOUR_INFO}}</h4>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-12 col-xl-12">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title*">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name ">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                                <input type="text" name="last_name"  class="form-control" placeholder="{{LAST_NAME}}">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                                <select name="marital_status" class="form-control">
                                                    <option value="">Select Marital Status</option>
                                                    @foreach($maritalStatusOptions as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="date" name="dob" class="form-control" placeholder="{{DOB}}">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="license_no" class="form-control" placeholder="Driving License No">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="dependent" class="form-control" placeholder="No of Dependent">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                           <h4>Contact Info</h4>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="landline" class="form-control" placeholder="Landline">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>

                                        <!-- contact deatils start -->
                                        <div class="col-12">
                                           <h4>Address</h4>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="house_no" class="form-control" placeholder="House Number / Name">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="street" class="form-control" placeholder="Street">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="town" class="form-control" placeholder="Town">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="country" class="form-control" placeholder="country">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                            <input type="text" name="postal_code" class="form-control" placeholder="Postal_Code">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <div class="form-group">
                                                <select name="residential_status" class="form-control">
                                                    <option value="">Select Residential Status</option>
                                                    @foreach($residentStatusOptions as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                            <label for="">Time at Address<span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" name="adress_year" class="form-control" placeholder="Years">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6 col-xl-6 col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" name="adress_month" class="form-control" placeholder="Months">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- contact details end -->
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6 col-xl-6">
                                    <div class="row">
                                        <div class="col-12">
                                           <h4>Employment Details</h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                               <input type="text" name="occupation" class="form-control" placeholder="Occupation">
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="form-group">
                                            <input type="text" name="employer_name" class="form-control" placeholder="Employers Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col ">
                                            <div class="form-group">
                                            <textarea type="text" name="employer_address" class="form-control" placeholder="Employer Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="emp_postal_code" class="form-control" placeholder="Postal_Code">
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="form-group">
                                               <input type="text" name="emp_mobile" class="form-control" placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="form-group">
                                              <input type="text" name="emp_telephone" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="form-group">
                                              <input type="text" name="weekly_income" class="form-control" placeholder="Weekly Income">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-6 col-xl-6">
                                            <label for="">Time With Employer<span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="emp_year" class="form-control" placeholder="Years">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="emp_month" class="form-control" placeholder="Months">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Bank details -->
                                        <div class="col-12">
                                           <h4>Bank Details</h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                               <input type="text" name="bank_name" class="form-control" placeholder="Bank Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="branch" class="form-control" placeholder="Bank Branch">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="account_name" class="form-control" placeholder="Account Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="account_number" class="form-control" placeholder="Account Number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                               <input type="text" name="shortcode" class="form-control" placeholder="Short Code">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                            <input type="text" name="account_type" class="form-control" placeholder="Account Type">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                              <input type="text" name="emp_telephone" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <label for="">Time With Bank<span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="bank_year" class="form-control" placeholder="Years">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" name="bank_month" class="form-control" placeholder="Months">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Bank details -->
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary text-end">Submit</button>
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
