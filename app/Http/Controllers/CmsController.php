<?php

namespace App\Http\Controllers;

use App\Models\CmsData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $cmsData->socials = !empty($cmsData->socials) ? json_decode($cmsData->socials, true) : [];

        }

        return view('welcome', compact('cmsData'));
    }

public function editLogo()
    {
        $cmsData = CmsData::first(); // Assuming there's a single entry for CMS data
        return view('cms.logo', compact('cmsData'));
    }

    // Handle the logo update
    public function updateLogo(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image upload
        ]);

        $cmsData = CmsData::first(); // Assuming you have one entry for CMS data

        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($cmsData->logo) {
                Storage::delete('public/' . $cmsData->logo);
            }

            // Store the new logo
            $path = $request->file('logo')->store('logos', 'public');
            $cmsData->logo = $path;
        }

        $cmsData->save();

        return redirect()->route('cms.logo')->with('success', 'Logo updated successfully!');
    }
public function editColors()
    {
        // Retrieve the CMS data (including color data)
        $cmsData = CmsData::first();
        return view('cms.colors', compact('cmsData'));
    }

    // Update colors
    public function updateColors(Request $request)
    {
        // Validate the color input (optional: add your own rules)
        $request->validate([
            'bg_color' => 'required|string|max:7',  // Example validation for hex code
            'primary_color' => 'required|string|max:7',
            'secondary_color' => 'required|string|max:7',
            'light_color' => 'required|string|max:7',  // Example validation for hex code
            'dark_color' => 'required|string|max:7',  // Example validation for hex code
        ]);

        // Retrieve or create the CMS data
        $cmsData = CmsData::firstOrCreate();

        // Update color fields
        $cmsData->update([
            'bg_color' => $request->input('bg_color'),
            'primary_color' => $request->input('primary_color'),
            'secondary_color' => $request->input('secondary_color'),
            'light_color' => $request->input('light_color'),
            'dark_color' => $request->input('dark_color'),
            'gradient_from' => $request->input('gradient_from'),
            'gradient_to' => $request->input('gradient_to'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Colors updated successfully!');
    }

    // Edit and Update Methods for Carousel
public function editCarousel()
    {
        $cmsData = CmsData::first(); // Get the first CmsData entry
        return view('cms.carousel', compact('cmsData'));
    }

    public function updateCarousel(Request $request)
    {
        $request->validate([
            'carousel_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cmsData = CmsData::firstOrCreate([]); // Create a new entry if it doesn't exist

        $images = json_decode($cmsData->carousel_image, true) ?? []; // Decode existing images

        if ($request->hasFile('carousel_image')) {
            foreach ($request->file('carousel_image') as $file) {
                $path = $file->store('carousel_images', 'public');
                $images[] = $path; // Add the new image path
            }
        }

        // Update the JSON field with the new image paths
        $cmsData->carousel_image = json_encode(array_values($images)); // Save the updated array
        $cmsData->save();

        return redirect()->route('cms.carousel')->with('success', 'Carousel updated successfully.');
    }

    public function deleteImage($index)
    {
        $cmsData = CmsData::first();
        $images = json_decode($cmsData->carousel_image, true);

        if (isset($images[$index])) {
            Storage::disk('public')->delete($images[$index]); // Delete the image from storage
            unset($images[$index]); // Remove the image from the array
            $cmsData->carousel_image = json_encode(array_values($images)); // Re-index the array and save
            $cmsData->save();
        }

        return redirect()->route('cms.carousel')->with('success', 'Image deleted successfully.');
    }

    public function editProfile()
{
    $cmsData = CmsData::firstOrCreate(); // Create a record if it doesn't exist

    return view('cms.profile', compact('cmsData')); // Load profile form view
}

public function updateProfile(Request $request)
{
    $request->validate([
        'profile_title' => 'nullable|string|max:500',
        'profile_image' => 'nullable|string|max:255',
    ]);

    // Retrieve the CMS data or create a new record if it doesn't exist
    $cmsData = CmsData::firstOrCreate();

    // Update the profile title and image
    $cmsData->profile_title = $request->input('profile_title', $cmsData->profile_title);
    $cmsData->profile_image = $request->input('profile_image', $cmsData->profile_image);

    // Save the updated data
    $cmsData->save();

    // Redirect back to the profile edit page with a success message
    return redirect()->route('cms.profile')->with('success', 'Profile updated successfully.');
}


    // Edit and Update Methods for Features
    public function editFeatures()
    {
        $cmsData = CmsData::firstOrCreate();
        $cmsData->features = !empty($cmsData->features) ? json_decode($cmsData->features, true) : [];

        return view('cms.features', compact('cmsData'));
    }

    public function updateFeatures(Request $request)
    {
        $request->validate([
            'features' => 'nullable|array',
            // Add validation for other fields if needed
        ]);

        $cmsData = CmsData::firstOrCreate();
        $cmsData->features = $request->has('features') ? json_encode($request->input('features')) : $cmsData->features;
        $cmsData->save();

        return redirect()->route('cms.features')->with('success', 'Features data updated successfully.');
    }

public function editVideos()
{
    $cmsData = CmsData::firstOrCreate();

    // Decode the JSON data into an array (if it's not empty)
    $cmsData->videos = !empty($cmsData->videos) ? json_decode($cmsData->videos, true) : [];

    return view('cms.videos', compact('cmsData'));
}


public function updateVideos(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'videos' => 'nullable|array',
        'video_section_title' => 'nullable|string|max:255',
        'video_section_description' => 'nullable|string|max:500',
        'videos.*.title' => 'required_with:videos.*.url|string|max:255',
        'videos.*.url' => 'required_with:videos.*.title|url|max:255',
    ]);

    // Retrieve or create the CMS data record
    $cmsData = CmsData::firstOrCreate();

    // Update the videos
    $cmsData->videos = $request->has('videos') ? json_encode($request->input('videos')) : $cmsData->videos;

    // Update the video section title and description
    $cmsData->video_section_title = $request->input('video_section_title', $cmsData->video_section_title);
    $cmsData->video_section_description = $request->input('video_section_description', $cmsData->video_section_description);

    // Save the updated CMS data
    $cmsData->save();

    // Redirect back with success message
    return redirect()->route('cms.videos')->with('success', 'Video section updated successfully.');
}


    // Edit and Update Methods for About Us
    public function editAboutUs()
    {
        $cmsData = CmsData::firstOrCreate();
        $cmsData->about_us = $cmsData->about_us ?? '';

        return view('cms.about-us', compact('cmsData'));
    }

    public function updateAboutUs(Request $request)
    {
        $request->validate([
            'about_us' => 'nullable|string|max:1000', // Adjust validation as needed
        ]);

        $cmsData = CmsData::firstOrCreate();
        $cmsData->about_us = $request->input('about_us', $cmsData->about_us);
        $cmsData->save();

        return redirect()->route('cms.aboutUs')->with('success', 'About Us data updated successfully.');
    }

    // Edit and Update Methods for Welcome
    public function editWelcome()
    {
        $cmsData = CmsData::firstOrCreate();
        $cmsData->welcome_message = $cmsData->welcome_message ?? '';

        return view('cms.welcome', compact('cmsData'));
    }

    public function updateWelcome(Request $request)
    {
        $request->validate([
            'welcome_message' => 'nullable|string|max:1000', // Adjust validation as needed
        ]);

        $cmsData = CmsData::firstOrCreate();
        $cmsData->welcome_message = $request->input('welcome_message', $cmsData->welcome_message);
        $cmsData->save();

        return redirect()->route('cms.welcome')->with('success', 'Welcome message updated successfully.');
    }

    // Edit and Update Methods for Contact
public function editContactSection()
{
    // Fetch the CMS data (assuming only one record)
    $cmsData = CmsData::firstOrCreate();

  $cmsData->socials = !empty($cmsData->socials) ? json_decode($cmsData->socials, true) : [];

    return view('cms.contact', compact('cmsData'));
}

    // Method to update the contact section
public function updateContactSection(Request $request)
{
    // Validate the form inputs
    $request->validate([
	'socials' => 'nullable|array',
        'contact_section_title' => 'nullable|string|max:255',
        'contact_section_description' => 'nullable|string',
        'no_telp' => 'nullable|string|max:255',
        'no_wa' => 'nullable|string|max:255',
        'alamat_1' => 'nullable|string|max:255',
        'alamat_2' => 'nullable|string|max:255',
        'socials.*.icon' => 'nullable|string|max:255',
        'socials.*.url' => 'nullable|url|max:255',
    ]);

    // Retrieve or create the CMS data record
    $cmsData = CmsData::firstOrCreate();

// Update the videos
    $cmsData->socials = $request->has('socials') ? json_encode($request->input('socials')) : $cmsData->socials;


    // Update the CMS data with the request input
    $cmsData->update([
        'contact_section_title' => $request['contact_section_title'] ?? null,
        'contact_section_description' => $request['contact_section_description'] ?? null,
        'no_telp' => $request['no_telp'] ?? null,
        'no_wa' => $request['no_wa'] ?? null,
        'alamat_1' => $request['alamat_1'] ?? null,
        'alamat_2' => $request['alamat_2'] ?? null,
        'socials' => json_encode($request['socials'] ?? []), // Save as JSON
    ]);
// Update the socials
    $cmsData->socials = $request->has('socials') ? json_encode($request->input('socials')) : $cmsData->videos;

    // Update the video section title and description
    $cmsData->contact_section_title = $request->input('contact_section_title', $cmsData->contact_section_title);
    $cmsData->contact_section_description = $request->input('contact_section_description', $cmsData->contact_section_description);
    $cmsData->no_telp = $request->input('no_telp', $cmsData->no_telp);
    $cmsData->no_wa = $request->input('no_wa', $cmsData->no_wa);
    $cmsData->alamat_1 = $request->input('alamat_1', $cmsData->alamat_1);
    $cmsData->alamat_2 = $request->input('alamat_2', $cmsData->alamat_2);


    // Save the updated CMS data
    $cmsData->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Contact section updated successfully.');
}

    // Edit and Update Methods for Testimonials
    public function editTestimonials()
    {
        $cmsData = CmsData::firstOrCreate();
        $cmsData->userTestimonials = !empty($cmsData->userTestimonials) ? json_decode($cmsData->userTestimonials, true) : [];

        return view('cms.testimonials', compact('cmsData'));
    }

 public function updateTestimonials(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'userTestimonials' => 'nullable|array',
        'testimonials_section_title' => 'nullable|string|max:255',
        'testimonials_section_description' => 'nullable|string|max:500',
    ]);

    // Retrieve or create the CMS data record
    $cmsData = CmsData::firstOrCreate();

    // Update user testimonials
    $cmsData->userTestimonials = $request->has('userTestimonials') ? json_encode($request->input('userTestimonials')) : $cmsData->userTestimonials;

    // Update the testimonials section title and description
    $cmsData->testimonials_section_title = $request->input('testimonials_section_title', $cmsData->testimonials_section_title);
    $cmsData->testimonials_section_description = $request->input('testimonials_section_description', $cmsData->testimonials_section_description);

    // Save the updated CMS data
    $cmsData->save();

    // Redirect back with success message
    return redirect()->route('cms.testimonials')->with('success', 'Testimonials data updated successfully.');
}
}
