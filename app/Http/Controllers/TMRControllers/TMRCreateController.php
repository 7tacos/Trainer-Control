<?php

namespace App\Http\Controllers\TMRControllers;

use App\Models\TMRModels\tmr_item_main;

use App\Models\TMRModels\tmr_main;
use App\Models\TMRModels\tmr_class;
use App\Models\TMRModels\tmr_ship;
use App\Models\TMRModels\tmr_equip;
use App\Models\TMRModels\tmr_stat_change;
use App\Models\TMRModels\tmr_history;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TMRCreateController extends Controller
{
    public function getItems() {
      $url = '/utility/tmr/utility/getitems';
      $src = 'TMRControllers\TMRCreateController@getItems';

      $a = tmr_item_main::all();
      return response()->json([ 'success' => true, 'url' => $url, 'src' => $src, 'data' => $a ]);
    }

    public function saveNewTMR(Request $request) {
      $url = '/utility/tmr/utility/savetmr';
      $src = 'TMRControllers\TMRCreateController@saveNewTMR';

      $this->validate($request, [
          'agency' => 'required|string|min:2|max:191',
          'studCount' => 'required|string|min:2|max:191',
          'c_start_date' => 'required|date',
          'mustDate' => 'required|date',
          'aName' => 'required|string|min:2|max:191',
          'aAddr' => 'required|string|min:2|max:191',
          'aCity' => 'required|string|min:2|max:191',
          'aState' => 'required|string|min:2|max:191',
          'aZip' => 'required|string|min:2|max:191',
          'chosenEquip' => 'required|array',
      ]);
      if($request->c_end_date != '' && $request->c_end_date != null) { $this->validate($request, [ 'c_end_date' => 'date' ] }
      if($request->returnDate != '' && $request->returnDate != null) { $this->validate($request, [ 'returnDate' => 'date' ] }
      if($request->shipNotes != '' && $request->shipNotes != null) { $this->validate($request, [ 'shipNotes' => 'string|min:2|max:1000' ] }

      // create the main tmr model record
      $newTMRMain = new tmr_main;
      $newTMRMain->status = 0;
      $newTMRMain->trainer_id = Auth::user()->id;
      $newTMRMain->src = 0;
      $newTMRMain->creator_id = Auth::user()->id;
      $newTMRMain->save();

      // create the tmr class model record
      $newTMRClass = new tmr_class;
      $newTMRClass->tmr_id = $newTMRMain->id;
      $newTMRClass->agencyRaw = $request->agency;
      $newTMRClass->studCount = $request->studCount;
      $newTMRClass->classStart = $request->c_start_date;
      $newTMRClass->classEnd = $request->c_end_date;
      $newTMRClass->save();

      // create the tmr ship model record
      $newTMRShip = new tmr_ship;
      $newTMRShip->tmr_id = $newTMRMain->id;
      $newTMRShip->mustArriveDate = $request->mustDate;
      $newTMRShip->returnShipDate = $request->returnDate;
      $newTMRShip->attnRaw = $request->aName;
      $newTMRShip->addrRaw = $request->aAddr;
      $newTMRShip->cityRaw = $request->aCity;
      $newTMRShip->stateRaw = $request->aState;
      $newTMRShip->zipRaw = $request->aZip;
      $newTMRShip->shipNotes = $request->shipNotes;
      $newTMRShip->save();

      // cycle through and create the tmr equip model records
      foreach($request->chosenEquip as $value) {
        $newTMREquip = new tmr_equip;
        $newTMREquip->tmr_id = $newTMRMain->id;
        $newTMREquip->title = $value['title'];
        $newTMREquip->qty = $value['qty'];
        $newTMREquip->notes = $value['notes'];
        $newTMREquip->save();
      }

      // create the tmr status change model record
      $newTMRStatChange = new tmr_stat_change;
      $newTMRStatChange->tmr_id = $newTMRMain->id;
      $newTMRStatChange->new_stat = 0;
      $newTMRStatChange->src = 0;
      $newTMRStatChange->creator = Auth::user()->id;;
      $newTMRStatChange->save();

      // create the tmr history model record

      return response()->json([ 'success' => true, 'url' => $url, 'src' => $src, 'data' => $a ]);
    }
}
