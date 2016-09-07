<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/upload", name="upload")
     */
    public function uploadAction(Request $request)
    {
        $file  = $request->files->get('image');
        dump($file->getClientOriginalExtension(), $file->getClientOriginalName(), $file->getClientMimeType());
        dump($file);

        $file->move('uploads');
        exit();
        return $this->render('default/index.html.twig');
    }
}
