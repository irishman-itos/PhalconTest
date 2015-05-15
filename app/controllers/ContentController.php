<?php

/**
 * Created by PhpStorm.
 * User: kimduk
 * Date: 15.05.15
 * Time: 13:41
 */
class ContentController extends ControllerBase
{
    public function getSliderListAction()
    {
        $listObj = Slider::find();

        $list = [];

        foreach ($listObj as $item) {
            $list[] = [
                'url' => $item->url,
                'title' => $item->title
            ];
        }

        echo json_encode($list);
        /*$robot       = new Slider();
        $robot->url = "http://placehold.it/1900x1080";
        $robot->title = "Image Three";

        if ($robot->save() == false) {
            echo "Umh, We can't store robots right now: \n";
            foreach ($robot->getMessages() as $message) {
                echo $message, "\n";
            }
        } else {
            echo "Great, a new robot was saved successfully!";
        }die;*/
    }

    public function getImagesListAction()
    {
        $listObj = Images::find();

        $list = [];

        foreach ($listObj as $item) {

            $id = (array)$item->_id;

            $list[] = [
                'id' => $id['$id'],
                'url' => $item->url,
                'title' => $item->title
            ];
        }

        echo json_encode($list);
    }

    public function deleteImageAction($id)
    {
        $image = Images::findFirst(array(
            array("_id" => new MongoId($id))
        ));

        if ($image->delete() == false) {
            $messages = [];
            foreach ($image->getMessages() as $message) {
                $messages[] = $message;
            }

            echo json_encode(['success' => false, 'msg' => $messages]);
        } else {
            echo json_encode(['success' => true, 'msg' => 'object deleted']);
        }
    }

} 