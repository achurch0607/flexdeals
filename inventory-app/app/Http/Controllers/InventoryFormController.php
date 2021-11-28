<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventory;
use Sheets;

class InventoryFormController extends Controller
{
    //
    // Create Contact Form
    public function createForm(Request $request) {
      return view('inventory-form');
    }
    
    public function dashboard(Request $request) {
        
        

$user = $request->user();

$token = [
      'access_token'  => $user->access_token,
      'refresh_token' => $user->refresh_token,
      'expires_in'    => $user->expires_in,
      'created'       => $user->updated_at->getTimestamp(),
];

// all() returns array
//$values = Sheets::setAccessToken($token)->spreadsheet('1N-to0lyme91FnsNRjpGJ-WfYYYCL9M08FsdnlTTf79Y')->sheet('Inventory')->all();
     
return view('dashboard', compact('user'));
      
    }

    // Store Contact Form data
    public function inventoryForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'quantity' => 'required',
            'datePurchased' => 'required',
            'platformListed' => 'required',
            'description' => 'required',
            'retailPrice' => 'required',
            'askingPrice' => 'required',
            'notes' => 'required'
         ]);

        //  Store data in database
        Inventory::create($request->all());

        // 
        return back()->with('success', 'You have successfully added an item to the inventory.');
    }
    
    //show table of all inventory
    public function showInventory(Request $request) {
        $inventory = Inventory::all();
        return view('show-inventory', compact('inventory'));
    }
    
    public function fileImportExport(Request $request) {
        
    }
    public function fileImport(Request $request) {
        
    }
    public function fileExport(Request $request) {
        
    }
}