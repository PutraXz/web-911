<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\answers;
use App\Models\question_options;
use App\Models\User;
use App\Models\Default_answers;
use Illuminate\Support\Facades\Auth;
class ValueController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::id();
        $default_asnwers= Default_answers::all();
        $data_questions = Question::all();
        $answer = answers::all();
        $data_question_options = question_options::all();
        $question_array = [];
        foreach ($data_questions as $quest)
        {
            $opt = question_options::where("question_id",$quest->id)->get();
            $optarr = [];
            foreach ($opt as $opti){
            $objectarr = (object)["text" => $opti->texts, "idopt" => $opti->id];
                array_push($optarr, $objectarr);
                // $ans = answers::all();
                // foreach ($ans as $answe){
                $answ = answers::select('question_option_id')->where('user_id', Auth::id())->get()->pluck('question_option_id');
                foreach ($answ as $answerss);{
                $ansarr = [];
                $object = (object)[$answerss];
                array_push($ansarr, $object);
                    };
            };
            $objek = (object)[
                "id" => $quest->id,
                "user"=> $users,
                "text" => $quest->text,
                "type" => $quest->question_type,
                "value" => $quest->value,
                "option" =>$optarr,
                "answers"=>$ansarr
            ];
            array_push($question_array, $objek);
        };

        // $questions = Question::all();
        // $answer = answers::all();
        // $default_asnwers= Default_answers::all();
        // $answer_array = [];
        // dd($default_asnwers);
        // foreach ($answer as $as)
        // {
        //     $ds = Default_answers::where("question_option_id",$as->question_option_id)->get();
        //     $optarr = [];
        //     foreach ($ds as $default){
        //         $objectarr = (object)["id_defaultanswers" => $default->question_option_id ];
        //         array_push($optarr, $objectarr);
        //     };
        //     $objek = (object)[
        //         "id" => $as->id,
        //         "id_option" => $as->question_option_id,
        //         "id_question" => $as->question_id,
        //         "default" =>$optarr,
        //     ];

        //     array_push($answer_array, $objek);
        // };
        return view('value', ['users'=> $users, 'answer'=> $answer, 'default_answers'=>$default_asnwers, 'question_array'=>$question_array]);
    }
}
