<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

        dump($request instanceof Request);
        $contentType = $request->server->getHeaders()['CONTENT_TYPE'];
        if(preg_match('/multipart\/form-data/', $contentType) == 0){
            $response = new JsonResponse('Error: Format attendu : multipart/form-data',Response::HTTP_BAD_REQUEST);
            return $response;
        };
        try {
            $dsqf6->getMLKJ();
        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), 500);
        }
    }
}
