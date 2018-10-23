<?php
namespace UtiliBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UtiliBundle\Entity\Admin;
use UtiliBundle\Form\AdminType;

class AdminController extends Controller
{
    public function ajoutAction(Request $request)
    {    $admin=new Admin();
    $form=$this->createForm('UtiliBundle\Form\AdminType',$admin);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($admin);
        $em->flush($admin);
        }
    return $this->render('UtiliBundle::admin.html.twig',array(
        'admin'=>$admin,
        'form'=>$form->CreateView(),
    )) ;   
}
}