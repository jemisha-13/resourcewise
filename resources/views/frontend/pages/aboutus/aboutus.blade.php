@extends('frontend.layout.app')
@section('section')

<!-- CONTENT START -->
<section>
    <!-- ABOUT SECTION START -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6" style="margin:auto">
                <div class="about-info-layer">
                    {{-- <h5 class="subtitle">About Washla</h5> --}}
                    <h2>
                        @if($aboutus_section_one[0]->title)
                        {{ $aboutus_section_one[0]->title }}
                        @endif
                    </h2>
                    <p>
                        @if($aboutus_section_one[0]->details)
                        {!! $aboutus_section_one[0]->details !!}
                        @endif
                    </p>

                    {{-- <div class="brand-layer d-flex">
                        <figure class="signature">
                            @if($aboutus_section_one[0]->signuture)
                            <img src="{{ asset('public/upload/aboutus_section/'.$aboutus_section_one[0]->signuture) }}" alt="signuture_image">
                            @endif
                        </figure>
                        <div class="bl-contact">
                            <p>Call Us for Service</p>
                            <h4>
                                @if($aboutus_section_one[0]->contact_no)
                                {{$aboutus_section_one[0]->contact_no}}
                                @endif
                            </h4>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 spacing-md">
                <figure class="about-img-layer">
                    @if($aboutus_section_one[0]->image)
                    <img src="{{ asset('public/upload/aboutus_section/'.$aboutus_section_one[0]->image) }}"  alt="aboutus_section_image ">
                    @endif
                    <div class="ai-banner">
                        <div class="media">

                            <div class="media-body">
                                <h5 class="mt-0">
                                    @if($aboutus_section_one[0]->image_headline)
                                    {{$aboutus_section_one[0]->image_headline}}
                                    @endif
                                </h5>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- GRID SECTION START -->
    <!-- @if(!$aboutus_section_two->isEmpty())
    <div class="bg-wrapper mt-5" style="background-color: white">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 spacing-md">
                    <div class="ws-left-side">

                        <h2>
                            @if($aboutus_section_two[0]->title)
                            {{ $aboutus_section_two[0]->title }}
                            @endif
                        </h2>
                        <p>
                            @if($aboutus_section_two[0]->details)
                            {!! $aboutus_section_two[0]->details !!}
                            @endif
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif -->

@endsection
