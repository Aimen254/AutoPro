@extends('admin.app_admin')

@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">{{ __('View Customer Finance') }}</h1>
    @php
        $single_listing_item = \App\Models\Listing::find($finance->vehicle_id);
    @endphp

    <div class="card shadow mb-4">
        <div class="card-body">
            @if($single_listing_item)
                <div>
                    <img src="{{ asset('uploads/listing_featured_photos/'.$single_listing_item->listing_featured_photo) }}" alt="" class="w_300">
                </div>
            @else
                <p>No listing item found for this finance.</p>
            @endif
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('SEO Information') }}</h6>
        </div>
    </div>
@endsection
