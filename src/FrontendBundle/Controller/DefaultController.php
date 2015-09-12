<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {
    return $this->render('FrontendBundle:Page:index.html.twig');
  }

  public function staffAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }
  public function lessonsAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }
  public function onlineAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }
  public function studyAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }
  public function translationsAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }
  public function contactAction() {
    return $this->render('FrontendBundle:Page:staff.html.twig');
  }

}
