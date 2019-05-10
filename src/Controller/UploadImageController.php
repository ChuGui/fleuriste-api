<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UploadImageController extends AbstractController
{
    /**
     * @Route(
     *     "/api/image",
     *      name="upload_image",
     *      methods={"POST", "HEAD"}
     *     )
     */
    public function index(Request $request)
    {
        try {
            $file = $request->files->get('image');
            dump($request);
            dump($request->request->all());
            dump($file);
            die;
        } catch (\Exception $e) {

        }
    }
}
