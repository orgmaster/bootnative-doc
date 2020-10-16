<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Version;
use App\Directory;

class MainController extends Controller
{
    public function versions()
    {
        $versions = array_map(function($item){
            return [
                "id" => $item['id'],
                "version" => $item['version'],
            ];
        },Version::where('published',true)->orderBy('version','DESC')->get()->toArray());

        return response()->json([
            'data' => $versions
        ]);
    }


    public function menu($version_id)
    {
        $version = Version::find($version_id);
        if(!$version || !$version->published){
            return response()->json([
                'status' => 404,
                'message' => 'Version not found'
            ],404);
        }
        $directories = Directory::whereHas('docs',function($query) use($version_id){
                return $query->whereHas('versions', function($query) use($version_id){
                    return $query->where('id',$version_id);
                });
            })
            ->orderBy('score','DESC')
            ->with(array('docs' => function($query){
                return $query->orderBy('score','DESC');
            }))
            ->get()
            ->toArray();

        $menu = array_map(function($item){
            return [
                'label' => $item['label'],
                'slug' => $item['slug'],
                'items' => array_map(function($doc){
                    return [
                        'label' => $doc['label'],
                        'slug' => $doc['slug']
                    ];
                }, $item['docs'])
            ];
        }, $directories);


        return response()->json([
            'version' => $version->version,
            'menu' => $menu
        ]);
    }
}
