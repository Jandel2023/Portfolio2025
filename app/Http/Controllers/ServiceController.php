<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $projects = Project::all();
        $testimonials = Testimonials::all();
        $blogs = Blog::where('is_published', true)
            ->latest()
            ->take(3)
            ->get();

        return view('index', compact('services', 'projects', 'testimonials', 'blogs'));

    }

    public function show($slug)
    {
        $blog = Blog::where('id', $slug)->firstOrFail();

        return view('index', compact('blog'));
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        try {
            // Use Laravel HTTP client to verify reCAPTCHA
            $recaptchaSecret = config('recaptcha.secret_key');
            $recaptchaResponse = $data['g-recaptcha-response'];

            $googleResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
                'remoteip' => $request->ip(), // optional but recommended
            ]);

            $result = $googleResponse->json();

            if (! ($result['success'] ?? false)) {
                return redirect()->back()->with('error', 'CAPTCHA verification failed. Please try again.');
            }

            // Send email
            Mail::to('jandellopez1997@gmail.com')->send(new \App\Mail\ContactMessage($data));

            return redirect()->back()->with('success', 'Thank you for contacting me!');

        } catch (\Exception $e) {
            // Optionally log the error: Log::error($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
