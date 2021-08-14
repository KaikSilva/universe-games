<?php

namespace App\Support;

class SaveImage
{   
    public function newImage(object $image = null)
    {   
        if($image == null){
            return 'thumb-1.jpg'; 
        }

        $nameImage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('backend/assets/images/avatars');
        $image->move($destinationPath, $nameImage);
        return $nameImage;
    }

    public function ImageRaiz(object $image = null)
    {   
        if($image == null){
            return 'thumb-1.jpg'; 
        }

        $nameImage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = resources_path('views/admin/assets/images/avatars');
        return $destinationPath;
        $image->move($destinationPath, $nameImage);
        return $nameImage;
    }
}