<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MateriasPrimas Controller
 *
 * @property \App\Model\Table\MateriasPrimasTable $MateriasPrimas
 */
class MateriasPrimasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('materiasPrimas', $this->paginate($this->MateriasPrimas));
        $this->set('_serialize', ['materiasPrimas']);
    }

    /**
     * View method
     *
     * @param string|null $id Materias Prima id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materiasPrima = $this->MateriasPrimas->get($id, [
            'contain' => []
        ]);
        $this->set('materiasPrima', $materiasPrima);
        $this->set('_serialize', ['materiasPrima']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materiasPrima = $this->MateriasPrimas->newEntity();
        if ($this->request->is('post')) {
            $materiasPrima = $this->MateriasPrimas->patchEntity($materiasPrima, $this->request->data);
            if ($this->MateriasPrimas->save($materiasPrima)) {
                $this->Flash->success(__('The materias prima has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materias prima could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materiasPrima'));
        $this->set('_serialize', ['materiasPrima']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materias Prima id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materiasPrima = $this->MateriasPrimas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiasPrima = $this->MateriasPrimas->patchEntity($materiasPrima, $this->request->data);
            if ($this->MateriasPrimas->save($materiasPrima)) {
                $this->Flash->success(__('The materias prima has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materias prima could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materiasPrima'));
        $this->set('_serialize', ['materiasPrima']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materias Prima id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiasPrima = $this->MateriasPrimas->get($id);
        if ($this->MateriasPrimas->delete($materiasPrima)) {
            $this->Flash->success(__('The materias prima has been deleted.'));
        } else {
            $this->Flash->error(__('The materias prima could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
