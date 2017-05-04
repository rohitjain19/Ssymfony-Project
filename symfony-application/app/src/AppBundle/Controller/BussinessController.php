<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Bussiness;
use AppBundle\Entity\Address;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\ImageType;


class BussinessController extends Controller
{
    /**
     * @Route("/bussiness", name="bussiness.new")
     */
    public function addAction (Request $request)
    {
        $drink = new Bussiness();
		$address=new Address();
        $form = $this->createFormBuilder()
        ->add('start_date', DateType::class, array('attr'=> array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('fein', TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-botton:15px;')))
        ->add('legal_name',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('type',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('industry',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('street1', TextType::class, array('attr'=> array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('street2', TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-botton:15px;')))
        ->add('street3',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('city',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
        ->add('region',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
         ->add('postcode',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
         ->add('timezone',TextType::class, array('attr'=>array('style'=>'margin-left:10%;margin-bottom:15px;')))
       
        ->add('Save',SubmitType::class, array('label'=>'Submit', 'attr' => array('class'=>'button', 'style'=>'margin-bottom:15px;')))
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $name= $form['start_date']->getData();
            $description= $form['fein']->getData();
            $image = $form['legal_name']->getData();
            $visibility = $form['type']->getData();
            $alc_content = $form['industry']->getData();
            $street1= $form['street1']->getData();
            $street2= $form['street2']->getData();
            $street3 = $form['street3']->getData();
            $city = $form['city']->getData();
            $region = $form['region']->getData(); 
			$postcode = $form['postcode']->getData();
            $timezone = $form['timezone']->getData();
            
			
            // Update the 'Bussiness' property to store the Informtion
            
            $drink->setStartDate($name);
            $drink->setfein($description);
            $drink->setLegalName($image);
            $drink->setType($visibility);
            $drink->setIndustry($alc_content);
			
            // ... persist

            $doc = $this->getDoctrine()->getManager();
            $doc->persist($drink);
            $doc->flush();
			$user = $drink->getId();
			$address->setStreet1($street1);
            $address->setStreet2($street2);
            $address->setStreet3($street3);
            $address->setCity($city);
            $address->setRegion($region);
            $address->setPostCode($postcode);
            $address->setTimezone($timezone);
			$address->setBussinessAddress($user);
            $doc1 = $this->getDoctrine()->getManager();
            $doc1->persist($address);
            $doc1->flush();
           // return $this->redirect($this->generateUrl('app_product_list'));
        }

        return $this->render('new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}