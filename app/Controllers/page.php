<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Halaman home',
            'content' => 'Ini adalah halaman home yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Belum ada data',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function faqs()
    {
    echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
