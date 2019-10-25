<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog; // the Blog model is located at app/Models/Blog ,so you need to specify it to use it
use http\Env\Response;
use Illuminate\Http\Request;
use DB; //you should type type this to use DB::table();
class ApiController extends Controller
{
    public function getBlogs()
    {
        // we can use this too $data=DB::table('blogs')->get();
            $data=Blog::get();
        return response()->json(['$status'=>true,'blogs'=>$data]);
    }

    public function getSingleBlog(Request $request)
    {
        $id = (int)$request->id; // the id is the name of the {id} at the api.php ko route
        $blog=Blog::find($id); // blog is the model and find is its method
        return response()->json(['$status'=>true,'blog'=>$blog]);
    }

    public function InsertBlog(Request $request)
    {
        $data['title']=$request->title;
        $data['summary']=$request->summary;
        $data['details']=$request->details;
        $blog=Blog::insert($data);
        if($blog)
        {
            return response()->json([
                'status'=>true,
                'message'=>'The blog has been inserted',
                'blog'=>$blog
            ]);
        }
        else
        {
            return response()->json([
                'status'=>false,
                'message'=>'Post could not be inserted'],
                405);
        }


    }

    public function DeleteBlog(Request $request)
    {
        $id=$request->id;
        $blog=Blog::find($id);
        if($blog->delete())
        {
            return response()->json([
                'status'=>true,
                'meessage'=>'The Blog has been deleted',
                'blog'=>$blog
            ]);
        }
        else
        {
            return response()->json(
                [
                    'status'=>false,
                    'message'=>'Delete unsuccessful, there was some problem'
                ]
            );
        }
    }

    public function UpdateBlog(Request $request)
    {
        $id=$request->id;
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->summary=$request->summary;
        $blog->details=$request->details;
        if($blog->save())
        {
            return response()->json(['status'=>true
                ,'message'=>'The Blog was updated',
                'blog'=>$blog
                ]);
        }
        else
        {
            return response()->json(['status'=>false
                ,'message'=>'Updating unsuccessful'
                ],402);
        }

    }
}
