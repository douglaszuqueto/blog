<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

trait FileUpload
{
  protected $basePath = 'uploads/';
  protected $imagePath;

  public function upload(UploadedFile $image, $name, $width = null)
  {
    $data['image_name'] = $this->getFileName($name, $image->getClientOriginalExtension());
    $data['image_url'] = $this->getFileUrl($data['image_name']);

    $this->resizing($image, $data, $width);

    return $data;
  }

  public function setPath($path)
  {
    $imagePath = $this->basePath . $path;
    if (!is_dir($imagePath)) {
      mkdir($imagePath);
    }

    $this->imagePath = $imagePath;

    return $this;
  }

  protected function getFileName($name, $extension)
  {
    return $name . '.' . $extension;
  }

  protected function getFileUrl($image_name)
  {
    $basePath = 'https://' . env('APP_DOMAIN') . DIRECTORY_SEPARATOR . $this->imagePath . $image_name;
    return $basePath;
  }

  protected function resizing($image, $data, $width)
  {
    if (!$width) {
      return Image::make($image)->save($this->imagePath . $data['image_name']);
    }
    return Image::make($image)->resize($width, null, function ($constraint) {
      $constraint->aspectRatio();
      $constraint->upsize();

    })->save($this->imagePath . $data['image_name']);
  }
}
