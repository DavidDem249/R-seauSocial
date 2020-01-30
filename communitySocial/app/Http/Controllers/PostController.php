<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Intervention\Image\Facades\Image;
use App\User;

class PostController extends Controller 
{

  
  public function __construct()
  {
      return $this->middleware('auth'); //Permettra d'interdit //l'utilisateur de ne pas voir les fonction dans ce //controller sans être logger
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request, User $user)
  {

      $validate = request()->validate([

          'title' => 'required',
          'content' => 'required',
          'image' => 'image|max:3000', 
      ]);

      if(request('image'))
      {
          $imagePath = request('image')->store('images', 'public');
          $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200, 1200);
          $image->save();
          //dd($imagePath);
          auth()->user()->posts()->create([

              'title' => $validate['title'],
              'content' => $validate['content'],
              'photo' => $imagePath,
          ]);
          return redirect()->back()->with('success','Publication effectuée avec succès');
          // $image->save();
          // $video->save();
          // $document->save();
      }
      else if(request('video'))
      {

          $file = $request->file('video');
          $destination_path = public_path().'/files';
          $extention = $file->getClientOriginalExtension();
          $files = $file->getClientOriginalName();
          $fileName = $files.'_'.time().'.'.$extention;
          $file->move($destination_path, $fileName);

          //dd($fileName);

          auth()->user()->posts()->create([

              'title' => $validate['title'],
              'content' => $validate['content'],
              'video' => $fileName,
          ]);
          return redirect()->back()->with('success','Publication effectuée avec succès');

      }
      else if(request('document'))
      {

          $document = request('document')->store('documents', 'public');

          auth()->user()->posts()->create([

              'title' => $validate['title'],
              'content' => $validate['content'],
              'document' => $document,
          ]);
          return redirect()->back()->with('success','Publication effectuée avec succès');

      }
      else{

          auth()->user()->posts()->create([

              'title' => $validate['title'],
              'content' => $validate['content'],
          ]);


          return redirect()->back()->with('success','Publication effectuée avec succès');
      }
      

      // // $videoPath = request('video')->store('videos', 'public');
      // // $documentPath = request('document')->store('document', 'public');
      
      // //$video = Image::make(public_path("/storage/{$videoPath}"))->fit(800, 800);
      // //$video->save();


      // if($validate)
      // {
      //     $user_id = auth()->user()->id;

      //     Post::create([
      //         'title' => $validate['title'],
      //         'content' => $validate['content'],
      //         'photo' => request('image'),
      //         'video' => request('video'),
      //         'document' => request('document'),
      //         'user_id' => $user_id,
      //     ]);
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>