<?php

namespace Amoungui\Contact\Repositories;

use Amoungui\Contact\Models\Contact;

/**
 * Description of ContactRepository
 *
 * @author Amoungui
 */
class ContactRepository extends ResourceRepository{

    public function __construct(Contact $contact) {
        $this->model = $contact;
    }

    private function save(Contact $contact, Array $inputs) {
        $contact->name = $inputs['name'];
        $contact->email = $inputs['email'];
        $contact->message = $inputs['message'];

        $contact->save();
    }        
    
    public function store(Array $inputs) {
        $post = new $this->model;		

        $this->save($post, $inputs);

        return $post;
    }    
}