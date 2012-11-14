<?php

namespace Serge\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Serge\GuestbookBundle\Entity\Entry;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
    }

    public function importAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('GuestbookBundle:KasJcomments');

        //fins all comments from
        $comments = $repo->findBy(array ('objectId' => '69'));
        foreach ($comments as $comment) {
            $oEntry = new Entry();
            $oEntry->setName($comment->getName());
            $oEntry->setEmail($comment->getEmail());
            $oEntry->setText($comment->getComment());
            $em->persist($oEntry);
        }
        $em->flush();
        return $this->render('GuestbookBundle:Default:index.html.twig', array(
            'comments' => $comments,
        ));
    }
}
