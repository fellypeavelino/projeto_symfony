<?php

namespace Acme\symfonyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\symfonyBundle\Entity\Chamados;
use Acme\symfonyBundle\Form\ChamadosType;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Chamados controller.
 *
 * @Route("/chamados")
 */
class ChamadosController extends Controller
{
    /**
     * Lists all Chamados entities.
     *
     * @Route("/", name="chamados_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $indice = $request->query->get('page');
        if($indice == ""){
            $indice = 0;
        }else{
            $indice *= 5;
        }
        $em = $this->getDoctrine()->getManager();

        $listAllChamados = $em->getRepository('symfonyBundle:Chamados')->findAll();

        $dql = "SELECT c FROM symfonyBundle:Chamados c";
        $query = $em->createQuery($dql)
                       ->setFirstResult($indice)
                       ->setMaxResults(5)
                       ;
        //$paginator = new Paginator($query, $fetchJoinCollection = true);

        $chamados = $query->getResult();
        $pages = range(1,ceil(count($listAllChamados) / 5));
        return $this->render('chamados/index.html.twig', array(
            'chamados' => $chamados,
            'pages' => $pages
        ));
    }

    /**
     * Creates a new Chamados entity.
     *
     * @Route("/new", name="chamados_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chamado = new Chamados();
        $form = $this->createForm('Acme\symfonyBundle\Form\ChamadosType', $chamado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chamado);
            $em->flush();

            return $this->redirectToRoute('chamados_show', array('id' => $chamado->getId()));
        }

        return $this->render('chamados/new.html.twig', array(
            'chamado' => $chamado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chamados entity.
     *
     * @Route("/{id}", name="chamados_show")
     * @Method("GET")
     */
    public function showAction(Chamados $chamado)
    {
        $deleteForm = $this->createDeleteForm($chamado);

        return $this->render('chamados/show.html.twig', array(
            'chamado' => $chamado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chamados entity.
     *
     * @Route("/{id}/edit", name="chamados_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chamados $chamado)
    {
        $deleteForm = $this->createDeleteForm($chamado);
        $editForm = $this->createForm('Acme\symfonyBundle\Form\ChamadosType', $chamado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chamado);
            $em->flush();

            return $this->redirectToRoute('chamados_edit', array('id' => $chamado->getId()));
        }

        return $this->render('chamados/edit.html.twig', array(
            'chamado' => $chamado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chamados entity.
     *
     * @Route("/{id}", name="chamados_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chamados $chamado)
    {
        $form = $this->createDeleteForm($chamado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chamado);
            $em->flush();
        }

        return $this->redirectToRoute('chamados_index');
    }

    /**
     * Creates a form to delete a Chamados entity.
     *
     * @param Chamados $chamado The Chamados entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chamados $chamado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chamados_delete', array('id' => $chamado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
