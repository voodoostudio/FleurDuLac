<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {

    public function Index(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.index')->withLang('$lang');
    }

    public function Rooms(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.rooms')->withLang('$lang');
    }

    public function Restaurant(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.restaurant')->withLang('$lang');
    }

    public function BarAndTerrace(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.bar_and_terrace')->withLang('$lang');
    }

    public function Events(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.events')->withLang('$lang');
    }

    public function Contact(Request $request,$locale){
        //set’s application’s locale
        app()->setLocale($locale);

        //get the view
        $lang = trans('lang');
        return view('pages.contact')->withLang('$lang');
    }

}
