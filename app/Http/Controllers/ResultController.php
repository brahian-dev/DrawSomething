<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $post) {
        $totalLetters = strtolower($post->input('inpTotalLetter'));
        $totalWord = $post->input('inpLleterToFind');
        $result = array();

        for ($i=0; $i < $totalWord; $i++) {
            $string = '';
            $letterRand = array_rand(str_split($totalLetters), $totalWord);
            foreach ($letterRand as $key => $letter) {
                $string .= strtoupper($totalLetters[$letter]);
            }

            $result[$i] = $string;
        }

        return view('result', compact('result', 'totalLetters', 'totalWord'));
    }
}
