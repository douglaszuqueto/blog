<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\UploadedFile;

trait FileUpload
{

    public function upload(UploadedFile $image)
    {
        $data['image_name'] = $this->getFileName($image->getClientOriginalExtension());
        $data['image_url'] = $this->getFileUrl($data['image_name']);

        $image->storeAs('images', $data['image_name'], 'uploads',);

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
}
