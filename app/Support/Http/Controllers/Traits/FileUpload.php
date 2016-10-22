<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

trait FileUpload
{
    protected $imagesPath = 'uploads/images/';

    public function upload(UploadedFile $image)
    {
        $data['image_name'] = $this->getFileName($image->getClientOriginalExtension());
        $data['image_url'] = $this->getFileUrl($data['image_name']);

        $this->resizing($image, $data);

        return $data;
    }

    protected function getFileName($extension)
    {
        return 'img-' . md5(date('d/m/Y H:i:s')) . '.' . $extension;
    }

    protected function getFileUrl($image_name)
    {
        return asset('uploads/images/' . $image_name);
    }

    protected function resizing($image, $data)
    {
        Image::make($image)->fit(600)->save($this->imagesPath . $data['image_name']);
    }
}
