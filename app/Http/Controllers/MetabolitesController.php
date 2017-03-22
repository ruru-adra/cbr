<?php

namespace App\Http\Controllers;

use App\Enzyme;
use Illuminate\Http\Request;

class MetabolitesController extends Controller
{
  // method/function
  public function index() {
    // $enzyme = new Enzyme;
    // $enzyme->name = 'enzyme A';
    // $enzyme->type = 'biology';
    // $enzyme->save();


    // copy paste code yang ni
    $enzymesToDelete = Enzyme::where('name', 'enzyme B')->get(); 

    foreach ($enzymesToDelete as $enzyme) {
      $enzyme->delete();
    }

    $enzymes = Enzyme::all();

    return view('pages.metabolites', compact('enzymes'));
  }

  public function getMetabolite() {

  }

  public function postMetabolite() {

  }
}
