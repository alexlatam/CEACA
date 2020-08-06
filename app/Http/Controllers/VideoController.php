<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use File;
use Validator;


class VideoController extends Controller
{
    public function index()
    {
    	$videos = Video::all();
    	return view('cms.videos.videos', compact('videos'));
    }

    public function crearVideos()
    {
    	return view('cms.videos.crear_videos');
    }

    public function guardarVideo(Request $request){


    	$file = $request->file('video_file');


    	$video = new Video;
        $video->seccion = $request->video_seccion;


    	 //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/video';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $video->video = $fileName;
                $video->save();
            }

            return back()->with('message', '¡Video guardado exitosamente!');
            // return back();
        } else {
        	$video->video = $request->video_url;
        	$video->save();
        	return back()->with('message', '¡Video guardado extiosamente!');	
        }
    }

    public function actualizarPublicidad(Request $request, $id){
       

        $file = $request->file('video_file');
        $video = Video::find($id);

        $video->seccion = $request->video_seccion;
        

        if($file){
            if($video->video){
                if(substr($video->video, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/video/' . $video->video;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $video->video === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/video';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $video->video = $fileName;
                        $video->save();
                    }

                    return back()->with('message', '¡Video actualizado con éxito!');
                    // return back();
                } else {
                    return back()->with('error', 'No se pudo actualizar el video');
                }
            }
        } else {
            $video->save();
            return back()->with('message', '¡Video actualizado con éxito!');
        }

    }


    public function eliminarVideo(Request $request, $id){
        $video = Video::find($id);

        if(isset($video->video))
        {
            $fullpath = public_path() . '/video/' . $video->video;
            $deleted = File::delete($fullpath);

            if(isset($deleted) || $video->video == null){
                $video->delete();
                return back()->with('message','Video eliminado con éxito');
            } else {
                return back()->with('error','Ha ocurrido un error al eliminar el video');
            }
        } else {
            $video->delete();
            return back()->with('message','Video eliminada con éxito');
        }

        
    }


}
