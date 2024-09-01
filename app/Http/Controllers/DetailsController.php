<?php

namespace App\Http\Controllers;

use App\Imports\DetailsImports;
use App\Models\Details;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class DetailsController extends Controller
{

    public function __construct(private Details $details) {}
    public function index()
    {
        $data = $this->details->all();
        return view('import', compact("data"));
    }
    public function import(Request $request)
    {
        $request->validate([
            'import_file' => "required"
        ]);
        Excel::import(new DetailsImports, $request->file('import_file'));

        return redirect()->route('home')->with("status", "Data Imported");
    }

    public function count()
    {
        $total = $this->details->select("name")->groupby("name")->get()->count();
        $city = $this->details->select("city")->groupby("city")->get()->count();
        $area = $this->details->select("subcategory", "area")->groupby("subcategory", "area")->get()->count();
        $subcat = $this->details->select("subcategory", "city")->groupby("subcategory", "city")->get()->count();
        return view('count', compact("total", "city", "area", "subcat"));
    }
}
