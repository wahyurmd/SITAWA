<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\IshiharaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ImportController extends Controller
{
    public function import()
    {
        return view('import');
    }

    public function importIshihara(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'import_ishihara' => 'required|mimes:xls,xlsx',
        ]);

        $file = $req->file('import_ishihara');
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Pindahkan file ke direktori storage/app/import
        $file->storeAs('import', $fileName);

        try {
            Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));
        } catch (\Exception $e) {
            return back()->with('error', ['Failed to import plate data: ' . $e->getMessage()])->withInput();
        }
        // Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));

        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    public function importCambridgeRG(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'import_redgreen' => 'required|mimes:xls,xlsx',
        ]);

        $file = $req->file('import_redgreen');
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Pindahkan file ke direktori storage/app/import
        $file->storeAs('import', $fileName);

        try {
            Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));
        } catch (\Exception $e) {
            return back()->with('error', ['Failed to import plate data: ' . $e->getMessage()])->withInput();
        }
        // Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));

        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    public function importCambridgeBlue(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'import_blue' => 'required|mimes:xls,xlsx',
        ]);

        $file = $req->file('import_blue');
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Pindahkan file ke direktori storage/app/import
        $file->storeAs('import', $fileName);

        try {
            Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));
        } catch (\Exception $e) {
            return back()->with('error', ['Failed to import plate data: ' . $e->getMessage()])->withInput();
        }
        // Excel::import(new IshiharaImport, storage_path('app/import/' . $fileName));

        return redirect()->back()->with('success', 'Data imported successfully.');
    }
}
