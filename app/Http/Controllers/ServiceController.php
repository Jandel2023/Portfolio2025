<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonials;
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

    public function sendMessage()
    {

        $data = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // reCAPTCHA verification
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $recaptchaSecret = '6Lc-eHkrAAAAADKJb3flkpm66xjBDyY7MMqRo8Av';
            $recaptchaResponse = $_POST['g-recaptcha-response'];

            // Verify with Google
            $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
            $response = file_get_contents($verifyUrl.'?secret='.$recaptchaSecret.'&response='.$recaptchaResponse);
            $responseData = json_decode($response);

            if ($responseData->success) {
                // CAPTCHA success — process form
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                // (Optional) Send email or save to DB
                echo 'Thank you for contacting me!';
            } else {
                echo 'reCAPTCHA verification failed. Please try again.';
            }
        }

        Mail::to('jandellopez1997@gmail.com'
        )->send(new \App\Mail\ContactMessage($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
