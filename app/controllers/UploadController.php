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
        if ($this->request->hasFiles() == true) {
            $baseLocation = 'uploads/';

            foreach ($this->request->getUploadedFiles() as $file) {
                $image = new Images();
                $image->url = '/uploads/' . $file->getName();
                $image->save();

                $file->moveTo($baseLocation . $file->getName());
            }
        }
    }

} 