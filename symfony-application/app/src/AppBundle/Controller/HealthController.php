<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HealthCheck;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class HealthController extends Controller
{

    /**
     * @Route("/health", name="health.new")
     */
    public function newAction(Request $request)
    {
        # Create a new HealthCheck
        $healthcheck = new HealthCheck();

        $form = $this->createFormBuilder($healthcheck)
            ->add('message', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create HealthCheck'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $client = $this->get('guzzle.client.api');
            $healthcheck = $form->getData();

            try {
                $response = $client->post('/health_checks', [
                    'json' => ['message' => $healthcheck->getMessage()],
                    'headers' => ['Content-Type' => 'application/json'],
                ]);

                $id = json_decode($response->getBody()->getContents())->id;
                return $this->redirectToRoute('health.status', ['id' => $id]);
            } catch (\Exception $e) {
                return $this->render('health/error.html.twig', ['message' => $e->getMessage()]);
            }
        }

        return $this->render('health/new.html.twig', ['form' => $form->createView()]);

    }

    /**
     * @Route("/health/{id}", name="health.status")
     */
    public function healthAction(Request $request, $id)
    {
        $client = $this->get('guzzle.client.api');

        try {
            $response = $client->get(sprintf('/health_checks/%d', $id));
            $results = json_decode($response->getBody()->getContents());
        } catch (\Exception $e) {
            $results = ['message' => $e->getMessage()];
        }

        return $this->render('health/status.html.twig', ['message' => $results->message]);
    }

}
