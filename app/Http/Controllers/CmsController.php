<?php

namespace App\Http\Controllers;

use App\Models\CmsData;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function index()
    {
        $cmsData = CmsData::first();

        if ($cmsData) {
            // Decode JSON fields for proper use in views
            $cmsData->features = !empty($cmsData->features) ? json_decode($cmsData->features, true) : [];
            $cmsData->videos = !empty($cmsData->videos) ? json_decode($cmsData->videos, true) : [];
            $cmsData->userTestimonials = !empty($cmsData->userTestimonials) ? json_decode($cmsData->userTestimonials, true) : [];
            $cmsData->pricingPlans = !empty($cmsData->pricingPlans) ? json_decode($cmsData->pricingPlans, true) : [];
            $cmsData->carousel_image = !empty($cmsData->carousel_image) ? json_decode($cmsData->carousel_image, true) : [];
        }

        return view('welcome', compact('cmsData'));
    }

    public function edit()
    {
        $cmsData = CmsData::firstOrCreate(); // Create a record if it doesn't exist

        // Decode JSON fields for proper use in the form
        $cmsData->features = !empty($cmsData->features) ? json_decode($cmsData->features, true) : [];
        $cmsData->videos = !empty($cmsData->videos) ? json_decode($cmsData->videos, true) : [];
        $cmsData->userTestimonials = !empty($cmsData->userTestimonials) ? json_decode($cmsData->userTestimonials, true) : [];
        $cmsData->pricingPlans = !empty($cmsData->pricingPlans) ? json_decode($cmsData->pricingPlans, true) : [];
        $cmsData->carousel_image = !empty($cmsData->carousel_image) ? json_decode($cmsData->carousel_image, true) : [];

        return view('cms.edit', compact('cmsData'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_title' => 'nullable|string|max:500',
            'profile_image' => 'nullable|string|max:255',
            'features_description' => 'nullable|string',
            // Add validation for other fields as needed
        ]);

        $cmsData = CmsData::firstOrCreate(); // Create if not existing

        // If JSON fields are coming as arrays, encode them back to JSON
        $cmsData->carousel_image = $request->has('carousel_image') ? json_encode($request->input('carousel_image')) : $cmsData->carousel_image;
        $cmsData->features = $request->has('features') ? json_encode($request->input('features')) : $cmsData->features;
        $cmsData->videos = $request->has('videos') ? json_encode($request->input('videos')) : $cmsData->videos;
        $cmsData->userTestimonials = $request->has('userTestimonials') ? json_encode($request->input('userTestimonials')) : $cmsData->userTestimonials;
        $cmsData->pricingPlans = $request->has('pricingPlans') ? json_encode($request->input('pricingPlans')) : $cmsData->pricingPlans;

        $cmsData->fill($request->except(['carousel_image', 'features', 'videos', 'userTestimonials', 'pricingPlans']));

        $cmsData->save(); // Save updated data

        return redirect()->route('cms.edit')->with('success', 'CMS Data updated successfully.');
    }
}
