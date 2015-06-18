<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MatpriFornecedores Controller
 *
 * @property \App\Model\Table\MatpriFornecedoresTable $MatpriFornecedores
 */
class MatpriFornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fornecedores', 'MateriasPrimas']
        ];
        $this->set('matpriFornecedores', $this->paginate($this->MatpriFornecedores));
        $this->set('_serialize', ['matpriFornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Matpri Fornecedore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matpriFornecedore = $this->MatpriFornecedores->get($id, [
            'contain' => ['Fornecedores', 'MateriasPrimas']
        ]);
        $this->set('matpriFornecedore', $matpriFornecedore);
        $this->set('_serialize', ['matpriFornecedore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matpriFornecedore = $this->MatpriFornecedores->newEntity();
        if ($this->request->is('post')) {
            $matpriFornecedore = $this->MatpriFornecedores->patchEntity($matpriFornecedore, $this->request->data);
            if ($this->MatpriFornecedores->save($matpriFornecedore)) {
                $this->Flash->success(__('Relação adicionada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The matpri fornecedore could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->MatpriFornecedores->Fornecedores->find('list', ['limit' => 200]);
        $materiasPrimas = $this->MatpriFornecedores->MateriasPrimas->find('list', ['limit' => 200]);
        $this->set(compact('matpriFornecedore', 'fornecedores', 'materiasPrimas'));
        $this->set('_serialize', ['matpriFornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Matpri Fornecedore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matpriFornecedore = $this->MatpriFornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matpriFornecedore = $this->MatpriFornecedores->patchEntity($matpriFornecedore, $this->request->data);
            if ($this->MatpriFornecedores->save($matpriFornecedore)) {
                $this->Flash->success(__('A relação entre matéria prima e fornecedor foi salva.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The matpri fornecedore could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->MatpriFornecedores->Fornecedores->find('list', ['limit' => 200]);
        $materiasPrimas = $this->MatpriFornecedores->MateriasPrimas->find('list', ['limit' => 200]);
        $this->set(compact('matpriFornecedore', 'fornecedores', 'materiasPrimas'));
        $this->set('_serialize', ['matpriFornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Matpri Fornecedore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matpriFornecedore = $this->MatpriFornecedores->get($id);
        if ($this->MatpriFornecedores->delete($matpriFornecedore)) {
            $this->Flash->success(__('A relação entre matéria prima e fornecedor foi removida.'));
        } else {
            $this->Flash->error(__('The matpri fornecedore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
