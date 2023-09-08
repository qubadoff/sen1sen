<?php

namespace App\Http\Controllers;

use App\Cv;
use App\Education;
use App\Language;
use App\Message;
use App\Project;
use App\Service;
use App\Subscriber;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use TCG\Voyager\Models\Post;

class GeneralController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(3);
        $testimonials = Testimonial::all();
        $services = Service::all();

        return \view('Frontend.index', compact('posts', 'testimonials', 'services'));
    }
    public function about(): View
    {
        $team = Team::all();

        return \view('Frontend.about', compact('team'));
    }
    public function projects(): View
    {
        $projects = Project::all();

        return \view('Frontend.projects', compact('projects'));
    }

    public function contact(): View
    {
        return \view('Frontend.contact');
    }

    public function cv(): View
    {
        $education = Education::all();
        $languages = Language::all();

        return \view('Frontend.cv', compact('education', 'languages'));
    }

    public function cv_upload(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'surname' => 'required|max:30',
            'father_name' => 'required|max:30',
            'age' => 'required|max:5',
            'education' => 'required|max:2',
            'education_school_name' => 'required|max:200',
            'speciality' => 'required|max:50',
            'computer_skills' => 'required|max:200',
            'hobby' => 'required|max:100',
            'experience' => 'required|max:2',
            'language' => 'required|max:2',
            'city' => 'required|max:50',
            'email' => 'required|max:50|email|unique:cv,email',
            'phone' => 'required|max:30|unique:cv,phone',
            'cv_file' => 'required|mimes:pdf,doc,docx',
            'cv_video' => 'required|mimes:mp4|max:100000',
            'information' => 'required|max:5000'
        ],[
            'name.required' => 'Name is Required !',
            'name.max' => 'Name max 30 !',
            'surname.required' => 'Surname is Required !',
            'surname.max' => 'Surname max 30 !',
            'father_name.required' => 'Father name required !',
            'father_name.max' => 'Father Name max 30 !',
            'age.required' => 'Age is Required !',
            'age.max' => 'Age Max 5 !',
            'education.required' => 'Education is required !',
            'education.max' => 'Education Max 2 !',
            'experience.required' => 'experience is required !',
            'experience.max' => 'experience max 2',
            'education_school_name.required' => 'education_school_name required !',
            'education_school_name.max' => 'education_school_name max 200',
            'speciality.required' => 'speciality required !',
            'speciality.max' => 'speciality max 200',
            'computer_skills.required' => 'computer_skills required',
            'computer_skills.max' => 'speciality max 200',
            'hobby.required' => 'hobby required',
            'hobby.max' => 'hobby max 200',
            'language.required' => 'language is required !',
            'language.max' => 'language max 2',
            'city.required' => 'City is required !',
            'city.max' => 'City max 50 !',
            'email.required' => 'Email is required !',
            'email.max' => 'Email max 50 !',
            'email.email' => 'Email Format is invalid !',
            'email.unique' => 'This email already used !',
            'phone.required' => 'Phone us required !',
            'phone.max' => 'Phone max 30 !',
            'phone.unique' => 'This phone already used !',
            'cv_file.required' => 'CV File is Required !',
            'cv_file.mimes' => 'CV File Mimes not allowed !',
            'cv_file.max' => 'CV File Max 8 MB',
            'cv_video.required' => 'CV Video is required !',
            'cv_video.mimes' => 'CV Video Mimes not allowed !',
            'cv_video.max' => 'CV Video Max 100 MB !',
            'information.required' => 'Message is required !',
            'information.max' => 'Information Max 5000 !'
        ]);

        $path = 'cv/August2023/';

        $cvFile = $request->file('cv_files');
        $cvVideo = $request->file('cv_video');

        $cvFileName = md5(time().'-'. $request->file('cv_file')->getClientOriginalName());
        $cvVideoName = md5(time().'-'. $request->file('cv_video')->getClientOriginalName());


        $cvFileUpload = Storage::disk('public')->put($path.$cvFileName, (string) file_get_contents($cvFile));
        $cvVideoUpload = Storage::disk('public')->put($path.$cvVideoName, (string) file_get_contents($cvVideo));


        if ($cvFileUpload && $cvVideoUpload)
        {
            $save = new Cv();
            $save->name = $request->input('name');
            $save->surname = $request->input('surname');
            $save->age = $request->input('age');
            $save->education = $request->input('education');
            $save->experience = $request->input('experience');
            $save->language = $request->input('language');
            $save->city = $request->input('city');
            $save->email = $request->input('email');
            $save->phone = $request->input('phone');
            $save->information = $request->input('information');
            $save->cv_status = 'pending';

            $save->cv_file = json_encode([["download_link" => $path.$cvFileName,"original_name" => "User IP :" . $request->ip() ]]);
            $save->cv_video = json_encode([["download_link" => $path.$cvVideoName,"original_name" => "User IP :" . $request->ip() ]]);
            $save->save();


            return back()->with('success', 'Sizin məlumatlarınız uğurla göndərildi !');
        }

        return back()->with('success', 'Sizin Video CV uğurla göndərildi !');
    }

    public function singleNews($locale, string $slug): View
    {
        $news = Post::where('slug', $slug)->first();

        if (! $news)
        {
            abort(404);
        }

        return \view('Frontend.singleNews', compact('news'));
    }

    public function singleProject($locale, string $slug): View
    {
        $project = Project::where('slug', $slug)->first();

        if (! $project)
        {
            abort(404);
        }

        return \view('Frontend.singleProject', compact('project'));
    }

    public function sendMessage(Request $request): string
    {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'required|max:50',
            'message' => 'required|max:2000'
        ],[
            'name.required' => 'Name is required !',
            'name.max' => 'Name max 50',
            'surname.required' => 'Surname is required !',
            'surname.max' => 'Surname max 50 !',
            'email.required' => 'Email is required !',
            'email.max' => 'Email max 50 !',
            'email.email' => 'Email type is not valid !',
            'phone.required' => 'Phone is required !',
            'phone.max' => 'Phone max 50 !',
            'message.required' => 'Message is required !',
            'message.max' => 'Message Max 2000 !'
        ]);

        Message::create($request->all());

        return back()->with('success', 'Sizin mesajınız uğurla göndərildi. Təşəkkür edirik !');
    }

    public function subscribers(Request $request): string
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email|max:50'
        ],[
            'email.required' => 'Email is required !',
            'email.email' => 'Email type not valid !',
            'email.unique' => 'This email already used !',
            'email.max' => 'Email max 50 !'
        ]);

        Subscriber::create($request->all());

        return back()->with('success', 'Siz uğurla abunə oldunuz !');

    }
}