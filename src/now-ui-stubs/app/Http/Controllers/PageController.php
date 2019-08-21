<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        } elseif (view()->exists("pages.forms.{$page}")) {
            return view("pages.forms.{$page}");
        } elseif (view()->exists("pages.tables.{$page}")) {
            return view("pages.tables.{$page}");
        } elseif (view()->exists("pages.maps.{$page}")) {
            return view("pages.maps.{$page}");
        } elseif (view()->exists("pages.laravel-examples.{$page}")) {
            return view("pages.laravel-examples.{$page}");
        }
        return abort(404);
    }

    /**
     * Display the pricing page
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Display the lock page
     *
     * @return \Illuminate\View\View
     */
    public function lock()
    {
        return view('pages.lock');
    }
}
