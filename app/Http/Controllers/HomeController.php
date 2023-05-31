<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\IshiharaTest;
use Illuminate\Http\Request;
use App\Models\CambridgeTest;
use App\Models\IshiharaPlate;
use App\Models\IshiharaAnswer;
use Illuminate\Validation\Rule;
use App\Models\CambridgeBYPlate;
use App\Models\CambridgeRGPlate;
use App\Models\CambridgeBYAnswer;
use App\Models\CambridgeRGAnswer;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
            'user_id'       => $request->user_id,
            'start_time'    => $request->start_time,
            'end_time'      => $time,
            'status'        => 1,
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

        $resultTotalWrong = DB::table('ishihara_answers')
        ->join('ishihara_plates', 'ishihara_answers.ishihara_plates_id', '=', 'ishihara_plates.id')
        ->where('ishihara_answers.ishihara_test_id', $id)
        ->whereColumn('ishihara_answers.user_answer', '<>', 'ishihara_plates.answer_key')
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
            'resultTotalWrong',
            'totalPlates',
            'formattedPercentage',
            'test_id',
        ));
    }

    public function cambridgeTestRG($id)
    {
        $cambridgePlate = CambridgeRGPlate::inRandomOrder()->get();

        $testId = $id;
        $time = date("H:i:s");

        return view('cambridge.rg-test', compact(
            'cambridgePlate',
            'testId',
            'time',
        ));
    }

    public function storeCambridgeTestRG(Request $request)
    {
        $validOptions = ['Atas', 'Bawah', 'Kiri', 'Kanan', 'Serong Kiri Atas', 'Serong Kanan Atas', 'Serong Kiri Bawah', 'Serong Kanan Bawah'];

        $validator = Validator::make($request->all(), [
            'user_answer' => 'required|array',
            'user_answer.*' => ['required', Rule::in($validOptions)]
        ]);

        $validator->sometimes('user_answer.*', 'required', function ($input) {
            return is_array($input->user_answer) && count(array_filter($input->user_answer)) > 0;
        });

        if ($validator->fails()) {
            return back()->with('errortoast', $validator->messages()->all())->withInput();
        }

        $answers['user_answer'] = $request->input('user_answer');

        $cambridgeTest = CambridgeTest::create([
            'id'            => $request->id,
            'user_id'       => $request->user_id,
            'start_time'    => $request->start_time,
        ]);

        foreach ($answers['user_answer'] as $index => $answer) {
            CambridgeRGAnswer::create([
                'cambridge_test_id' => $cambridgeTest->id,
                'cambridgerg_plates_id' => $request->input('cambridgerg_plates_id')[$index],
                'user_answer' => $answer,
                'keywords' => $request->input('keywords')[$index],
            ]);
        }

        return redirect()->route('blue.test', $cambridgeTest->id)->with(['success' => 'Data tes berhasil disimpan, lanjutkan tes Cambridge Biru-Kuning.']);
    }

    public function cambridgeTestBlue($id)
    {
        $cambridgePlate = CambridgeBYPlate::all();

        $testId = $id;
        $time = date("H:i:s");

        return view('cambridge.blue-test', compact(
            'cambridgePlate',
            'testId',
            'time',
        ));
    }

    public function storeCambridgeTestBlue(Request $request)
    {
        $validOptions = ['Atas', 'Bawah', 'Kiri', 'Kanan', 'Serong Kiri Atas', 'Serong Kanan Atas', 'Serong Kiri Bawah', 'Serong Kanan Bawah', 'Tidak Ada'];

        $validator = Validator::make($request->all(), [
            'user_answer' => 'required|array',
            'user_answer.*' => ['required', Rule::in($validOptions)]
        ]);

        $validator->sometimes('user_answer.*', 'required', function ($input) {
            return is_array($input->user_answer) && count(array_filter($input->user_answer)) > 0;
        });

        if ($validator->fails()) {
            return back()->with('errortoast', $validator->messages()->all())->withInput();
        }

        $answers['user_answer'] = $request->input('user_answer');

        $time = date("H:i:s");

        $cambridgeTest = CambridgeTest::findOrFail($request->id);
        $cambridgeTest->end_time = $time;
        $cambridgeTest->updated_at = Carbon::now();
        $cambridgeTest->save();

        foreach ($answers['user_answer'] as $index => $answer) {
            CambridgeBYAnswer::create([
                'cambridge_test_id' => $cambridgeTest->id,
                'cambridgeby_plates_id' => $request->input('cambridgeby_plates_id')[$index],
                'user_answer' => $answer,
                'keywords' => $request->input('keywords')[$index],
            ]);
        }

        return redirect()->route('result.cambridge', $cambridgeTest->id)->with(['success' => 'Data tes berhasil disimpan.']);
    }

    public function cambridgeResult($id)
    {
        $rgMH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'mh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUB = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'ub')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'uh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgMHWrong = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'mh')
        ->whereColumn('cambridge_rg_answers.user_answer', '<>', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUBWrong = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'ub')
        ->whereColumn('cambridge_rg_answers.user_answer', '<>', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUHWrong = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'uh')
        ->whereColumn('cambridge_rg_answers.user_answer', '<>', 'cambridge_rg_plates.answer_key')
        ->count();

        $resultTotalRG = $rgMH + $rgUB + $rgUH;
        $resultTotalRGWrong = $rgMHWrong + $rgUBWrong + $rgUHWrong;

        $totalPlatesRG = DB::table('cambridge_rg_plates')
        ->count();

        $percentageRG = ($resultTotalRG / $totalPlatesRG) * 100;
        $formattedPercentageRG = number_format($percentageRG, 2);

        $resultTotalBY = DB::table('cambridge_by_answers')
        ->join('cambridge_by_plates', 'cambridge_by_answers.cambridgeby_plates_id', '=', 'cambridge_by_plates.id')
        ->where('cambridge_by_answers.cambridge_test_id', $id)
        ->whereColumn('cambridge_by_answers.user_answer', '=', 'cambridge_by_plates.answer_key')
        ->count();

        $wrongTotalBY = DB::table('cambridge_by_answers')
        ->join('cambridge_by_plates', 'cambridge_by_answers.cambridgeby_plates_id', '=', 'cambridge_by_plates.id')
        ->where('cambridge_by_answers.cambridge_test_id', $id)
        ->whereColumn('cambridge_by_answers.user_answer', '<>', 'cambridge_by_plates.answer_key')
        ->count();

        $totalPlatesBY = DB::table('cambridge_by_plates')
        ->count();

        $percentageBY = ($resultTotalBY / $totalPlatesBY) * 100;
        $formattedPercentageBY = number_format($percentageBY, 2);

        return view('cambridge.result', compact(
            'rgMH',
            'rgUB',
            'rgUH',
            'resultTotalRG',
            'resultTotalRGWrong',
            'totalPlatesRG',
            'formattedPercentageRG',
            'resultTotalBY',
            'wrongTotalBY',
            'totalPlatesBY',
            'formattedPercentageBY',
        ));
    }

    public function resultTest()
    {
        $result = DB::table('ishihara_tests')
        ->where('user_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('result_test', compact(
            'result',
        ));
    }

    public function resultData($id)
    {
        $profil = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->where('users.id', Auth::user()->id)
        ->get();

        $result = DB::table('ishihara_tests')
        ->where('user_id', Auth::user()->id)
        ->where('id', $id)
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

        foreach ($profil as $row) {
            $bornDate = Carbon::parse($row->born_date);
            $age = $bornDate->diffInYears(Carbon::now());
        }

        if ($resultTotal > 5 && $resultTotal < 16) {
            $hasilIshihara = "Buta Warna Parsial";
        } elseif ($resultTotal < 5) {
            $hasilIshihara = "Buta Warna Total";
        } else {
            $hasilIshihara = "Tidak Buta Warna";
        }

        $rgMH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'mh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUB = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'ub')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'uh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $resultTotalBY = DB::table('cambridge_by_answers')
        ->join('cambridge_by_plates', 'cambridge_by_answers.cambridgeby_plates_id', '=', 'cambridge_by_plates.id')
        ->where('cambridge_by_answers.cambridge_test_id', $id)
        ->whereColumn('cambridge_by_answers.user_answer', '=', 'cambridge_by_plates.answer_key')
        ->count();

        if (($rgMH < 4 || $rgUB < 4 || $rgUH < 3) && $resultTotalBY < 8) {
            $hasilCambridge = "Parsial Merah-Hijau dan Biru-Kuning";
        } elseif ($rgMH < 4 || $rgUB < 4 || $rgUH < 3) {
            $hasilCambridge = "Parsial Merah-Hijau";
        } elseif ($resultTotalBY < 8) {
            $hasilCambridge = "Parsial Biru-Kuning";
        } else {
            $hasilCambridge = "Tidak Ada";
        }

        $testId = $id;

        return view('result', compact(
            'profil',
            'result',
            'age',
            'hasilIshihara',
            'hasilCambridge',
            'testId',
        ));
    }

    public function generatePDF($id)
    {
        $profil = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->where('users.id', Auth::user()->id)
        ->get();

        $result = DB::table('ishihara_tests')
        ->where('user_id', Auth::user()->id)
        ->where('id', $id)
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

        foreach ($profil as $row) {
            $bornDate = Carbon::parse($row->born_date);
            $age = $bornDate->diffInYears(Carbon::now());
        }

        if ($resultTotal > 5 && $resultTotal < 16) {
            $hasilIshihara = "Buta Warna Parsial";
        } elseif ($resultTotal < 5) {
            $hasilIshihara = "Buta Warna Total";
        } else {
            $hasilIshihara = "Tidak Buta Warna";
        }

        $rgMH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'mh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUB = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'ub')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $rgUH = DB::table('cambridge_rg_answers')
        ->join('cambridge_rg_plates', 'cambridge_rg_answers.cambridgerg_plates_id', '=', 'cambridge_rg_plates.id')
        ->where('cambridge_rg_answers.cambridge_test_id', $id)
        ->where('cambridge_rg_answers.keywords', 'uh')
        ->whereColumn('cambridge_rg_answers.user_answer', '=', 'cambridge_rg_plates.answer_key')
        ->count();

        $resultTotalBY = DB::table('cambridge_by_answers')
        ->join('cambridge_by_plates', 'cambridge_by_answers.cambridgeby_plates_id', '=', 'cambridge_by_plates.id')
        ->where('cambridge_by_answers.cambridge_test_id', $id)
        ->whereColumn('cambridge_by_answers.user_answer', '=', 'cambridge_by_plates.answer_key')
        ->count();

        if (($rgMH < 4 || $rgUB < 4 || $rgUH < 3) && $resultTotalBY < 8) {
            $hasilCambridge = "Parsial Merah-Hijau dan Biru-Kuning";
        } elseif ($rgMH < 4 || $rgUB < 4 || $rgUH < 3) {
            $hasilCambridge = "Parsial Merah-Hijau";
        } elseif ($resultTotalBY < 8) {
            $hasilCambridge = "Parsial Biru-Kuning";
        } else {
            $hasilCambridge = "";
        }

        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('unduh-pdf', compact(
        //     'profil',
        //     'hasilIshihara',
        //     'hasilCambridge',
        //     'age',
        // ));
        // return $pdf->stream('Surat Keterangan Hasil Tes Buta Warna.pdf');

        // return redirect()->back()->with('success', 'PDF berhasil di-generate');
        // return view('unduh-pdf');
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
