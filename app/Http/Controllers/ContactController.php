<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $Contact = Contact::all();
    return view('pages.Contact.Contact',compact('Contact'));
  }



  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
// return $request;
 try {
          $contact = new Contact();
       
          $contact->name = $request->name;
          $contact->email = $request->email;
          $contact->mobile = $request->mobile;
          $contact->message = $request->message;
          $contact->save();
          return redirect()->route('website.home');
      }

      catch (\Exception $e){
        return redirect()->route('website.home');
      }


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
   public function update( $request)
 {
   
 }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
     

  }

}
