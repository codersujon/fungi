@extends('frontend.layouts.master')

@section('content')

	@php
		/**
		 * List of Sections to render in order
		 * Add/Remove Section names as need
		 */
		$sections = [
			'hero' 			=> true,
			'intro' 		=> true,
			'facts' 		=> true,
			'about'			=> true,
			'skill'			=> true,
			'portfolio'		=> true,
			'service'		=> true,
			'resume'		=> true,
			'testimonial'	=> true,
			'blog'			=> true,
			'partner'		=> true,
			'contact'		=> true,
		];
	@endphp

	@foreach($sections as $section => $enabled)
		@includeWhen($enabled, "frontend.components.$section")
	@endforeach

@endsection


{{-- 
	Alternative Dynamic Solutions
	1. Page clean & readable
	2. Section orde easy
	3. new section add only insert name into array

	<!-- HERO AREA -->
	@include('frontend.components.hero')

	<!-- INTRO SECTION -->
	@include('frontend.components.intro')

	<!-- FACTS SECTION -->
	@include('frontend.components.facts')

	<!-- ABOUT SECTION -->
	@include('frontend.components.about')

	<!-- SKILL SECTION -->
	@include('frontend.components.skill')

	<!-- PORTFOLIO SECTION -->
	@include('frontend.components.portfolio')

	<!-- SERVICE SECTION -->
	@include('frontend.components.service')

	<!-- RESUME SECTION -->
	@include('frontend.components.resume')

	<!-- TESTIMONIAL SECTION -->
	@include('frontend.components.testimonial')

	<!-- BLOG SECTION -->
	@include('frontend.components.blog')

	<!-- PARTNER SECTION -->
	@include('frontend.components.partner') 

	<!-- CONTACT SECTION -->
	@include('frontend.components.contact')

--}}

		
