<?php

namespace App\Http\Controllers;

use App\AdminModels\Entity;
use App\AdminModels\EntityData;
use App\AdminModels\EntityDataLang;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($lang,ContactRequest $request)
    {
        $data = $request->validated();

        $languages = ['hy' =>1, 'ru'=>2, 'en'=>3];

        $entity = new Entity();
        $entity->entity_creation_date = date("Y-m-d H:i:s");
        $entity->entity_creator = 1;
        $entity->entity_update_date = date("Y-m-d H:i:s");
        $entity->entity_updater = 1;
        $entity->entity_order = 1;
        $entity->entity_parent = CONTACT;
        $entity->entity_visible = 1;
        $entity->entity_type = 'Message';
        $entity->entity_sub_type = NULL;
        $entity->entity_role = NULL;
        $entity->entity_removable = 1;
        $entity->entity_is_widget = 0;

        $entity->save();

        $entityDataLang = new EntityDataLang();

        $entityDataLang->edl_title = $data['name'];
        $entityDataLang->edl_lang =  $languages[$lang]??1;

        $entityData = new EntityData();
        $entityData->ed_char_1 = $data['phone'];
        $entityData->ed_char_2 = $data['email'];
        $entityData->ed_text_1 = $data['message'];

        if($entity->entityDataLang()->save($entityDataLang) && $entity->entityData()->save($entityData)){
            try {
                Mail::to( env("CLIENT_MAIL"))->send(new ContactMail($data['name'],$data['phone'],$data['email'],$data['message']));
                return redirect()->back()->with('success', 'true');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'mail ro db insert is fail');
            }
        }



    }
}
