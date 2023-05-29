<?php

namespace App\Http\Controllers;

use App\Models\IshiharaTest;
use Illuminate\Http\Request;
use App\Models\IshiharaPlate;
use App\Models\IshiharaAnswer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function ishiharaTest()
    {
        $ishiharaPlate = IshiharaPlate::inRandomOrder()->take(18)->get();

        $time = date("H:i:s");

        return view('ishihara.ishihara-test', compact(
            'ishiharaPlate',
            'time',
        ));
    }

    public function storeIshiharaTest(Request $request)
    {
        $ishiharaPlate = IshiharaPlate::all(); // Ambil semua data dari database

        // Menggabungkan semua nilai pilihan radio dari database
        $validValues = $ishiharaPlate->pluck('pil_a')
            ->concat($ishiharaPlate->pluck('pil_b'))
            ->concat($ishiharaPlate->pluck('pil_c'))
            ->concat($ishiharaPlate->pluck('pil_d'))
            ->unique()
            ->toArray();

        $validator = Validator::make($request->all(), [
            'user_answer' => 'required|array',
            'user_answer.*' => 'required|in:' . implode(',', $validValues)
        ]);

        $validator->sometimes('user_answer.*', 'required', function ($input) {
            return is_array($input->user_answer) && count(array_filter($input->user_answer)) > 0;
        });

        if ($validator->fails()) {
            return back()->with('errortoast', $validator->messages()->all())->withInput();
        }

        $answers['user_answer'] = $request->input('user_answer');

        $time = date("H:i:s");
        $ishiharaTest = IshiharaTest::create([
            'user_id' => $request->user_id,
            'start_time' => $request->start_time,
            'end_time' => $time,
            'status' => 1,
        ]);

        foreach ($answers['user_answer'] as $index => $answer) {
            IshiharaAnswer::create([
                'ishihara_test_id' => $ishiharaTest->id,
                'ishihara_plates_id' => $request->input('ishihara_plates_id')[$index],
                'user_answer' => $answer,
                'status' => 1,
            ]);
        }

        return redirect()->route('result.ishihara', $ishiharaTest->id)->with(['success' => 'Data tes berhasil disimpan.']);
    }

    public function ishiharaResult($id)
    {
        $result = DB::table('ishihara_answers')
        ->join('ishihara_plates', 'ishihara_answers.ishihara_plates_id', '=', 'ishihara_plates.id')
        ->where('ishihara_answers.ishihara_test_id', $id)
        ->get();

        $resultTotal = DB::table('ishihara_answers')
        ->join('ishihara_plates', 'ishihara_answers.ishihara_plates_id', '=', 'ishihara_plates.id')
        ->where('ishihara_answers.ishihara_test_id', $id)
        ->whereColumn('ishihara_answers.user_answer', '=', 'ishihara_plates.answer_key')
        ->count();

        $totalPlates = DB::table('ishihara_answers')
        ->join('ishihara_plates', 'ishihara_answers.ishihara_plates_id', '=', 'ishihara_plates.id')
        ->where('ishihara_answers.ishihara_test_id', $id)
        ->count();

        $test_id = $id;

        $percentage = ($resultTotal / $totalPlates) * 100;
        $formattedPercentage = number_format($percentage, 2);

        return view('ishihara.result-ishihara', compact(
            'result',
            'resultTotal',
            'totalPlates',
            'formattedPercentage',
            'test_id',
        ));
    }

    public function cambridgeTestRG($id)
    {
        $ishiharaPlate = IshiharaPlate::inRandomOrder()->take(18)->get();

        $time = date("H:i:s");

        return view('cambridge.rg-test', compact(
            'ishiharaPlate',
            'time',
        ));
    }

    public function cambridgeTestBlue($id)
    {
        $ishiharaPlate = IshiharaPlate::inRandomOrder()->take(18)->get();

        $time = date("H:i:s");

        return view('cambridge.blue-test', compact(
            'ishiharaPlate',
            'time',
        ));
    }

    public function resultTest()
    {
        return view('result_test');
    }

    public function about()
    {
        return view('about');
    }

    public function howtodo()
    {
        return view('instruction');
    }
}
