<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FabricaProdutos Controller
 *
 * @property \App\Model\Table\FabricaProdutosTable $FabricaProdutos
 */
class FabricaProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos', 'MateriasPrimas']
        ];
        $this->set('fabricaProdutos', $this->paginate($this->FabricaProdutos));
        $this->set('_serialize', ['fabricaProdutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Fabrica Produto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabricaProduto = $this->FabricaProdutos->get($id, [
            'contain' => ['Produtos', 'MateriasPrimas']
        ]);
        $this->set('fabricaProduto', $fabricaProduto);
        $this->set('_serialize', ['fabricaProduto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabricaProduto = $this->FabricaProdutos->newEntity();
        if ($this->request->is('post')) {
            $fabricaProduto = $this->FabricaProdutos->patchEntity($fabricaProduto, $this->request->data);
            if ($this->FabricaProdutos->save($fabricaProduto)) {
                $this->Flash->success(__('The fabrica produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fabrica produto could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->FabricaProdutos->Produtos->find('list', ['limit' => 200]);
        $materiasPrimas = $this->FabricaProdutos->MateriasPrimas->find('list', ['limit' => 200]);
        $this->set(compact('fabricaProduto', 'produtos', 'materiasPrimas'));
        $this->set('_serialize', ['fabricaProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabrica Produto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabricaProduto = $this->FabricaProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabricaProduto = $this->FabricaProdutos->patchEntity($fabricaProduto, $this->request->data);
            if ($this->FabricaProdutos->save($fabricaProduto)) {
                $this->Flash->success(__('The fabrica produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fabrica produto could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->FabricaProdutos->Produtos->find('list', ['limit' => 200]);
        $materiasPrimas = $this->FabricaProdutos->MateriasPrimas->find('list', ['limit' => 200]);
        $this->set(compact('fabricaProduto', 'produtos', 'materiasPrimas'));
        $this->set('_serialize', ['fabricaProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabrica Produto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fabricaProduto = $this->FabricaProdutos->get($id);
        if ($this->FabricaProdutos->delete($fabricaProduto)) {
            $this->Flash->success(__('The fabrica produto has been deleted.'));
        } else {
            $this->Flash->error(__('The fabrica produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
