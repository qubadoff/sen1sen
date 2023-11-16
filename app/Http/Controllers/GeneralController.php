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
        $testimonials = Testimonial::orderBy('sort', 'ASC')
                                    ->get();
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

    public function aboutCV(): View
    {
        return \view('Frontend.aboutCV');
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
            'cv_video' => 'required|mimes:mp4,mov,ogg,flv,3gp,avi,wmv|max:100000',
            'rules' => 'required'
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
            'cv_video.required' => 'CV Video is required !',
            'cv_video.mimes' => 'CV Video Mimes not allowed !',
            'cv_video.max' => 'CV Video Max 80 MB !',
            'rules.required' => 'Zəhmət olmazsa qaydaları qəbul edin !'
        ]);

        $path = 'cv/September2023/';

        $cvVideo = $request->file('cv_video');

        $cvVideoName = time().'-'. $request->file('cv_video')->getClientOriginalName();

        $cvVideoUpload = Storage::disk('public')->put($path.$cvVideoName, (string) file_get_contents($cvVideo));


        if ($cvVideoUpload)
        {
            $save = new Cv();
            $save->name = $request->input('name');
            $save->surname = $request->input('surname');
            $save->father_name = $request->input('father_name');
            $save->education_school_name = $request->input('education_school_name');
            $save->speciality = $request->input('speciality');
            $save->computer_skills = $request->input('computer_skills');
            $save->hobby = $request->input('hobby');
            $save->age = $request->input('age');
            $save->education = $request->input('education');
            $save->experience = $request->input('experience');
            $save->language = $request->input('language');
            $save->city = $request->input('city');
            $save->email = $request->input('email');
            $save->phone = $request->input('phone');
            $save->information = $request->input('information');
            $save->cv_status = 'pending';

            if ($request->is_private)
            {
                $save->is_private = $request->is_private;
            } else {
                $save->is_private = '2';
            }


            //$save->cv_file = json_encode([["download_link" => $path.$cvFileName,"original_name" => $cvFileName ]]);
            $save->cv_video = json_encode([["download_link" => $path.$cvVideoName,"original_name" => $cvVideoName ]]);
            $save->save();


            return back()->with('success1', 'Sizin məlumatlarınız uğurla göndərildi !');
        }

        return back()->with('success1', 'Sizin Video CV uğurla göndərildi !');
    }


    public function News(): View
    {
        $news = Post::latest('created_at')
        ->paginate(10);

        return \view('Frontend.News', compact('news'));
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

        return back()->with('success2', 'Sizin mesajınız uğurla göndərildi. Təşəkkür edirik !');
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
