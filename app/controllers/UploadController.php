<?php
/**
 * Created by PhpStorm.
 * User: kimduk
 * Date: 14.05.15
 * Time: 20:39
 */

class UploadController extends ControllerBase
{
    public function indexAction()
    {
        var_dump(11);die;
        // Check if the user has uploaded files
        if ($this->request->hasFiles() == true) {
            $baseLocation = 'files/';


            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
                $photos = new Photo();
                $photos->name = $file->getName();
                $photos->size = $file->getSize();
                $photos->save();

                //Move the file into the application
                $file->moveTo($baseLocation . $file->getName());
            }
        }
    }

} 