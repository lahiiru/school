<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;

class StudentController extends Controller
{

    public function addAction(Request $request,$name,$indexno,$icbc,$gender,$birthyear)
    {
        // replace this example code with whatever you need

        $product = new Student();
        $product->setName($name);
        $product->setIndexNo($indexno);
        $product->setIcbc($icbc);
        $product->setGender($gender);
        $product->setBirthyear($birthyear);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new product with id '.$product->getIndexNo());

    }

    public function listAction(Request $request)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Student')
            ->findOneBy(
                array(
                    'icbc' => '12',
                )
            );

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }
        var_dump($product);
    }

}