<?php

namespace Amoungui\Contact\Http\Controllers;

use Amoungui\Contact\Http\Requests\ContactRequest;
use Amoungui\Contact\Mail\ContactMailable;
use Amoungui\Contact\Repositories\ContactRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

/**
 * Description of ContactController
 *
 * @author Amoungui
 */
class ContactController extends Controller {

    public function __construct(ContactRepository $contactRepository) {
        $this->contactRepository = $contactRepository;
    }    

    public function index(){
        return view('contact::contact');
    }

    public function store(ContactRequest $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));

        $this->contactRepository->store($request->all());

        return redirect(route('contact'));
    }
}
