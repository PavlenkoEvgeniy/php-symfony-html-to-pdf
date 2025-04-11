<?php

namespace App\Controller;

use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PdfGeneratorController extends AbstractController
{
    #[Route('/pdf-generator', name: 'app_pdf_generator_index', methods: [Request::METHOD_GET])]
    public function index(): Response
    {
        return $this->render('pdf_generator/index.html.twig');
    }

    #[Route('/pdf-generator/generate', name: 'app_pdf_generator_generate', methods: [Request::METHOD_POST])]
    public function generate(Pdf $knpSnappyPdf, Request $request): Response
    {
        $html = $this->renderView('pdf_generator/generate.html.twig', [
            'name'        => $request->request->get('name'),
            'date'        => $request->request->get('date'),
            'achievement' => $request->request->get('achievement'),
        ]);

        return new Response(
            $knpSnappyPdf->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="file.pdf"',
            ]
        );
    }
}
