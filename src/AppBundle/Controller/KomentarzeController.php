<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Komentarze;
use AppBundle\Form\KomentarzeType;

/**
 * Komentarze controller.
 *
 */
class KomentarzeController extends Controller
{

    /**
     * Lists all Komentarze entities.
     *
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Komentarze')->findAll();

        return $this->render('AppBundle:Komentarze:index.html.twig', array(
            'entities' => $entities,
            'user' => $user
        ));
    }
    /**
     * Creates a new Komentarze entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $entity = new Komentarze();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('komentarze_show', array('id' => $entity->getId(), 'user' => $user)));
        }

        return $this->render('AppBundle:Komentarze:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'user' => $user,
        ));
    }

    /**
     * Creates a form to create a Komentarze entity.
     *
     * @param Komentarze $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Komentarze $entity)
    {
        $form = $this->createForm(new KomentarzeType(), $entity, array(
            'action' => $this->generateUrl('komentarze_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Komentarze entity.
     *
     */
    public function newAction()
    {
        $entity = new Komentarze();
        $form   = $this->createCreateForm($entity);

        $user = $this->getUser();

        return $this->render('AppBundle:Komentarze:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'user' => $user
        ));
    }

    /**
     * Finds and displays a Komentarze entity.
     *
     */
    public function showAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Komentarze')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komentarze entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Komentarze:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'user' => $user
        ));
    }

    /**
     * Displays a form to edit an existing Komentarze entity.
     *
     */
    public function editAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Komentarze')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komentarze entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Komentarze:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user
        ));
    }

    /**
    * Creates a form to edit a Komentarze entity.
    *
    * @param Komentarze $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Komentarze $entity)
    {
        $form = $this->createForm(new KomentarzeType(), $entity, array(
            'action' => $this->generateUrl('komentarze_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Komentarze entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Komentarze')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komentarze entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('komentarze_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Komentarze:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $user
        ));
    }
    /**
     * Deletes a Komentarze entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $user = $this->getUser();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Komentarze')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Komentarze entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('komentarze'));
    }

    /**
     * Creates a form to delete a Komentarze entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('komentarze_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
