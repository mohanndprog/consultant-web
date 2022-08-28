<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($id)
    {
        //        Language::where("id", $id)->update(["is_set" => 1]);
        //        Language::where("id", '!=', $id)->update(["is_set" => 0]);

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                if ($name == 'googtrans') {
                    setcookie($name, '', time() - 1000);
                    setcookie($name, '', time() - 1000, '/');
                }
            }
        }

        if ($id == 1) {
            Session::put('googtrans', 1);
            setrawcookie('googtrans', "/en", strtotime('+30 days'), "/", $_SERVER['SERVER_NAME']);
            //setrawcookie('googtrans',"/en",strtotime( '+30 days' ),"/", ".super-domain.com");      // If working in sub-domain
        } else {
            Session::put('googtrans', 2);
            setrawcookie('googtrans', "/ar", strtotime('+30 days'), "/", $_SERVER['SERVER_NAME']);
            //setrawcookie('googtrans',"/en",strtotime( '+30 days' ),"/", ".super-domain.com");      // If working in sub-domain
        }

        return back();
    }
}
