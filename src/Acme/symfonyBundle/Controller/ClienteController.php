<?php

namespace Acme\symfonyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\symfonyBundle\Entity\Cliente;
use Acme\symfonyBundle\Entity\Chamados;
use Acme\symfonyBundle\Entity\Pedidos;
use Acme\symfonyBundle\Form\ClienteType;
use Acme\symfonyBundle\Form\ClienteChamadosType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

/**
 * Cliente controller.
 *
 * @Route("/cliente")
 */
class ClienteController extends Controller
{
    /**
     * Lists all Cliente entities.
     *
     * @Route("/", name="cliente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clientes = $em->getRepository('symfonyBundle:Cliente')->findAll();

        return $this->render('cliente/index.html.twig', array(
            'clientes' => $clientes,
        ));
    }

    /**
     * Creates a new Cliente entity.
     *
     * @Route("/new", name="cliente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cliente = new Cliente();
        $chamados = new Chamados();
        $pedidos = new Pedidos();
        //$form = $this->createForm('Acme\symfonyBundle\Form\ClienteType', $cliente);
        $attr = ['attr' => ['class'=>"form-control"]];
        $form = $this->createFormBuilder()
            ->add('nome', TextType::class,['attr' => ['class'=>"form-control",'label'=>"Nome"]])
            ->add('email', EmailType::class,['attr' => ['class'=>"form-control",'label'=>"Email"]])
            ->add('titulo', TextType::class,['attr' => ['class'=>"form-control",'label'=>"Título"]])
            ->add('numero_pedido', IntegerType::class,['attr' => ['class'=>"form-control",'label'=>"Número do Pedido"]])
            ->add('observacao', TextareaType::class,['attr' => ['class'=>"form-control",'label'=>"Observação"]])
            ->getForm();

        $form->handleRequest($request);
        $errors = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $cliente->setNome($data['nome']);
            $cliente->setEmail($data['email']);
            $pedidos = $this->getDoctrine()
                        ->getRepository('symfonyBundle:Pedidos')
                        ->findBy(
                            ["numero" => $data['numero_pedido']]
                        );
            $chamados->setTitulo($data['titulo']);
            $chamados->setObservacao($data['observacao']);
            $chamados->setCliente($cliente);
            $chamados->setPedidos($pedidos[0]);
            $validator = $this->get('validator');
            $errors = $validator->validate($cliente);

            if (count($errors) == 0) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cliente);
                $em->persist($chamados);
                $em->flush();
                echo $cliente->getId();
                return $this->redirectToRoute('chamados_index');
            }
            //return $this->redirectToRoute('cliente_show', array('id' => $cliente->getId()));
        }

        return $this->render('cliente/new.html.twig', array(
            'cliente' => $cliente,
            'form' => $form->createView(),
            'errors' => $errors,
        ));
    }

    /**
     * 
     * @Route("/{email}", name="cliente_validEmailAjax")
     * @Method("GET")
     */
    public function validEmailAjaxAction(Request $request){
        $cliente = $this->getDoctrine()
                        ->getRepository('symfonyBundle:Cliente')
                        ->findBy(
                            ["email" => $request->query->get('email')]
                        );
        if (!$cliente) {
            echo json_encode(['success' => false]);
        }else{
            echo json_encode(['success' => true]);
        }
        die();
    }



    /**
     * Finds and displays a Cliente entity.
     *
     * @Route("/{id}", name="cliente_show")
     * @Method("GET")
     */
    public function showAction(Cliente $cliente)
    {
        $deleteForm = $this->createDeleteForm($cliente);

        return $this->render('cliente/show.html.twig', array(
            'cliente' => $cliente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cliente entity.
     *
     * @Route("/{id}/edit", name="cliente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cliente $cliente)
    {
        $deleteForm = $this->createDeleteForm($cliente);
        $editForm = $this->createForm('Acme\symfonyBundle\Form\ClienteType', $cliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('cliente_edit', array('id' => $cliente->getId()));
        }

        return $this->render('cliente/edit.html.twig', array(
            'cliente' => $cliente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cliente entity.
     *
     * @Route("/{id}", name="cliente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cliente $cliente)
    {
        $form = $this->createDeleteForm($cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cliente);
            $em->flush();
        }

        return $this->redirectToRoute('cliente_index');
    }

    /**
     * Creates a form to delete a Cliente entity.
     *
     * @param Cliente $cliente The Cliente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cliente $cliente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cliente_delete', array('id' => $cliente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
