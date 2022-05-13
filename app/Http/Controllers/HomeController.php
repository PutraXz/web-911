<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\answers;
use App\Models\question_options;
use Auth;
use App\Models\Default_answers;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_questions = Question::all();
        $_user = User::all();
        $data_question_options = question_options::all();
        $question_array = [];
        foreach ($data_questions as $quest)
        {
            $opt = question_options::where("question_id",$quest->id)->get();
            $optarr = [];
            foreach ($opt as $opti){
            $objectarr = (object)["text" => $opti->texts, "idopt" => $opti->id];
                array_push($optarr, $objectarr);
            };
            $objek = (object)[
                "id" => $quest->id,
                "text" => $quest->text,
                "type" => $quest->question_type,
                "value" => $quest->value,
                "option" =>$optarr
            ];
            array_push($question_array, $objek);
        };
        return view('home', ['users'=> $_user,'data_questions'=> $data_questions, 'data_question_options'=>$data_question_options,'question_array'=>$question_array]);
    }
    public function answers(Request $request)
    {
        for($i = 0; $i < count($request->all())-1; $i++) {
            $option = explode(',', $request['radio_'.$i+1]);
            answers::create([
                'user_id' => Auth::id(),
                'question_id' =>$option[0],
                'question_option_id' => $option[1]
            ]);
        }
    }
}
