<?php

namespace Main\Page\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    $form = $this->get('form.factory')->create(new \Main\Page\FrontendBundle\Form\Type\ContactEmailType());
    return $this->render('MainPageFrontendBundle:Default:index.html.twig', array('form' => $form->createView()));
  }

  public function aboutAction() {
    return $this->render('MainPageFrontendBundle:Default:about.html.twig');
  }

  public function lessonsAction() {
    return $this->render('MainPageFrontendBundle:Default:lessons.html.twig');
  }

  public function contactAction() {
    return $this->render('MainPageFrontendBundle:Default:contact.html.twig');
  }

  public function emailAction(\Symfony\Component\HttpFoundation\Request $request) {
    $form = $this->get('form.factory')->create(new \Main\Page\FrontendBundle\Form\Type\ContactEmailType());
    $form->handleRequest($request);
    if ($form->isValid()) {
      if ($form->get('save')->isClicked()) {
        $data = $form->getData();

        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('info@logintofrench.com')
                ->setTo($data['email'])
                ->setBcc('lauragramirez@logintofrench.com')
                ->setContentType("text/html")
                ->setBody(
                $this->renderView(
                        'MainPageFrontendBundle:Email:email.html.twig', array('data' => $data)
                )
                )
        ;
        $this->get('mailer')->send($message);


        return new \Symfony\Component\HttpFoundation\JsonResponse($data);
      } else {
        return new \Symfony\Component\HttpFoundation\JsonResponse(array('error2'));
      }
    } else {
      return new \Symfony\Component\HttpFoundation\JsonResponse(array('error1'));
    }
  }

}
