<?php

namespace App\Http\Controllers;

use App\AdminModels\Entity;
use App\Helpers\GetData;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = GetData::getElement(BLOG);

        $blogs = GetData::getData(['entity_parent' => BLOG], ['entity_order' => 'desc'], false,3);

        return view('blog',compact('data','blogs'));
    }

    public function blogInner($lang, $id)
    {

      $data = GetData::getElement($id);

      $widgets = GetData::getData(['entity_parent' => $data['entity_id']], ['entity_order' => 'DESC']);

        $blogs = Entity::where('entity_parent', BLOG)
            ->where('entity_id', '!=', $id)
            ->orderBy('entity_order', 'desc')
            ->with('entityData', 'entityDataLang', 'entitySEO')
            ->limit(2)
            ->get();

      return view('blogInner', compact('data','widgets', 'blogs'));
    }
}
