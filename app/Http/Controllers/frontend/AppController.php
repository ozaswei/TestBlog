<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    private $_view='Frontend.Pages.';
    public function index()
    {
        return view($this->_view.'home');
    }
    public function about()
    {
        return view($this->_view.'about');
    }
    public function contact()
    {
        $data=[
            'name' => 'Ozaswei Bahadur Tamarakar',
            'contact' => '+977 9818131687',
            'email' =>'ozaswei@gmail.com'
        ];
        return view($this->_view.'contact',$data);
    }

    public function insert()
        {
            return view($this->_view.'insert');
        }

}
