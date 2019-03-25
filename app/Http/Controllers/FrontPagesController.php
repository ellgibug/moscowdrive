<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Contact;
use App\ShortForm;
use Illuminate\Http\Request;
use App\Mail\CommentMail;
use App\Mail\ContactMail;
use App\Mail\ShortFormMail;

class FrontPagesController extends Controller
{
    public function sitemap()
    {
        return view('front_pages.sitemap')->header('Content-Type', 'xml');
    }
    
    public function landing()
    {
        return view('front_pages.landing');
    }

    public function prices()
    {
        return view('front_pages.prices');
    }

    public function contacts()
    {
        return view('front_pages.contacts');
    }

    public function send_contacts(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'phone' => 'required|max:20',
            'email' => 'required|email|max:50',
            'theme' => 'required|max:20',
            'message' => 'required|max:65535'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->theme = $request->theme;
        $contact->message = $request->message;
        $contact->created_at = now();
        $result = $contact->save();

        \Mail::to('info@moscow-drive.com')->send(new ContactMail($contact));
        \Mail::to('oly-fomenk@yandex.ru')->send(new ContactMail($contact));

        if($result){
            return back()->with('msg', 'Ваша форма успешно отправлена!');
        } else {
            return back()->with('msg', 'При отправке формы произошла ошибка, позвоните пожалуйста по телефону 8 (499) 391 43 15.');
        }
    }

    public function send_comment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'message' => 'required|max:65535'
        ]);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->message = $request->message;
        $comment->display = 0;
        $result = $comment->save();

        \Mail::to('info@moscow-drive.com')->send(new CommentMail($comment));
        \Mail::to('oly-fomenk@yandex.ru')->send(new CommentMail($comment));

        if($result){
            return back()->with('msg', 'Спасибо за Ваш отзыв! В ближайшее время он будет опубликован.');
        } else {
            return back()->with('msg', 'При отправке отзыва произошла ошибка. Если Вы хотите что-то передать, позвоните пожалуйста по телефону 8 (499) 391 43 15 для связи с администратором.');
        }

    }

    public function send_short_form(Request $request)
    {
        if($request->ajax()){

            $this->validate($request, [
                'name' => 'required|max:50',
                'phone' => 'required|max:20',
                'url' => 'required|max:20',
                'message' => 'max:255'
            ]);

            $short_form = new ShortForm();
            $short_form->url = $request->url;
            $short_form->name = $request->name;
            $short_form->phone = $request->phone;
            $short_form->message = $request->message;
            $short_form->created_at = now();
            $result = $short_form->save();

            \Mail::to('info@moscow-drive.com')->send(new ShortFormMail($short_form));
            \Mail::to('oly-fomenk@yandex.ru')->send(new ShortFormMail($short_form));

            if($result){
                $status = 1;
                $msg = 'Ваша форма успешно отправлена!';
            } else {
                $status = 0;
                $msg = 'При отправке формы произошла ошибка, позвоните пожалуйста по телефону 8 (499) 391 43 15.';
            }

            return response()->json(['status'=> $status]);

        } else {
            return back();
        }
    }

    public function pdd()
    {
        return view('front_pages.pdd');
    }

    public function theory()
    {
        return view('front_pages.theory');
    }

    public function autodrom()
    {
        return view('front_pages.autodrom');
    }

    public function exercise_garage()
    {
        return view('front_pages.exercise_garage');
    }

    public function overpass_exercise()
    {
        return view('front_pages.overpass_exercise');
    }

    public function turn_in_confined_space_exercise()
    {
        return view('front_pages.turn_in_confined_space_exercise');
    }

    public function turns_90_degrees_exercise()
    {
        return view('front_pages.turns_90_degrees_exercise');
    }

    public function parallel_parking_exercise()
    {
        return view('front_pages.parallel_parking_exercise');
    }

    public function city()
    {
        return view('front_pages.city');
    }

    public function driving()
    {
        return view('front_pages.driving');
    }

    public function exams()
    {
        return view('front_pages.exams');
    }

    public function parking()
    {
        return view('front_pages.parking');
    }

    public function student_auto()
    {
        return view('front_pages.student_auto');
    }

    public function new_car()
    {
        return view('front_pages.new_car');
    }

    public function admission()
    {
        return view('front_pages.admission');
    }

    public function learning()
    {
        return view('front_pages.learning');
    }

    public function schedule()
    {
        return view('front_pages.schedule');
    }

    public function gallery()
    {
        return view('front_pages.gallery');
    }

    public function comments()
    {
        $comments = Comment::where('display', '=', 1)->orderBy('created_at', 'desc')->get();
        return view('front_pages.comments', compact('comments'));
    }

    public function addresses()
    {
        return view('front_pages.addresses');
    }
}
