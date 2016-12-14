<?php
namespace App\Modules\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Class Service
 *
 * @package App\Services
 */
abstract class Service
{

    protected $uploadPath;


    /**
     * Upload contract file
     *
     * @param UploadedFile $file
     * @param int $width
     * @param int $height
     * @return bool
     */
    public function upload(UploadedFile $file, $width = 320, $height = 240)
    {

        $destination = $this->uploadPath;

        if ($file->isValid()) {
            $fileName = $file->getClientOriginalName();
            $file_type = $file->getClientOriginalExtension();
            $newFileName = sprintf("%s.%s", sha1($fileName . time()), $file_type);
            try {
                $image = $file->move($destination, $newFileName);
                if (substr($file->getClientMimeType(), 0, 5) == 'image')

                    return $image->getFilename();
            } catch (\Exception $e) {

            };
            return false;

        }

        return false;
    }

    /**
     * Delete Image
     *
     * @param $image
     * @return bool
     */
    public function deleteImage($image)
    {
        $path = $this->uploadPath;
        try {
            $large = sprintf('%s/thumb/%s', $path, $image);
            unset($large);
            $thumb = sprintf('%s/thumb/%s', $path, $image);
            unset($thumb);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}
