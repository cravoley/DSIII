<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * PedidoItens Controller
 *
 * @property \App\Model\Table\PedidoItensTable $PedidoItens
 */
class PedidoItensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedidos', 'MateriasPrimas']
        ];
        $this->set('pedidoItens', $this->paginate($this->PedidoItens));
        $this->set('_serialize', ['pedidoItens']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido Iten id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidoIten = $this->PedidoItens->get($id, [
            'contain' => ['Pedidos', 'MateriasPrimas']
        ]);
        $this->set('pedidoIten', $pedidoIten);
        $this->set('_serialize', ['pedidoIten']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($pedidoId)
    {
        $pedidoIten = $this->PedidoItens->newEntity();
        if ($this->request->is('post')) {
            $pedidoIten = $this->PedidoItens->patchEntity($pedidoIten, $this->request->data);
            if ($this->PedidoItens->save($pedidoIten)) {
                $this->Flash->success(__('O item do pedido foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'Pedidos', 'action' => 'edit', $pedidoIten['pedido_id']]);
            } else {
                $this->Flash->error(__('The pedido iten could not be saved. Please, try again.'));
            }
        }

        $materiasPrimas = $this->PedidoItens->MateriasPrimas->find('list')
            ->matching(
                'MatpriFornecedores', function($q) use ($pedidoId){
                    $Pedidos = TableRegistry::get('Pedidos');
                    $pedido = $Pedidos->find('all', [
                        'conditions' => ['id' => $pedidoId]
                    ])->first();
                    return $q
                        ->where(['MatpriFornecedores.fornecedor_id' => $pedido['fornecedor_id']]);
                }
            );

        $this->set(compact('pedidoIten', 'materiasPrimas', 'pedidoId'));
        $this->set('_serialize', ['pedidoIten']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido Iten id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidoIten = $this->PedidoItens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidoIten = $this->PedidoItens->patchEntity($pedidoIten, $this->request->data);
            if ($this->PedidoItens->save($pedidoIten)) {
                $this->Flash->success(__('O item do pedido foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'Pedidos', 'action' => 'edit', $pedidoIten['pedido_id']]);
            } else {
                $this->Flash->error(__('The pedido iten could not be saved. Please, try again.'));
            }
        }
        $pedidoId = $pedidoIten['pedido_id'];
        $materiasPrimas = $this->PedidoItens->MateriasPrimas->find('list')
            ->matching(
                'MatpriFornecedores', function($q) use ($pedidoId){
                    $Pedidos = TableRegistry::get('Pedidos');
                    $pedido = $Pedidos->find('all', [
                        'conditions' => ['id' => $pedidoId]
                    ])->first();
                    return $q
                        ->where(['MatpriFornecedores.fornecedor_id' => $pedido['fornecedor_id']]);
                }
            );
        $this->set(compact('pedidoIten', 'pedidoId', 'materiasPrimas'));
        $this->set('_serialize', ['pedidoIten']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido Iten id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidoIten = $this->PedidoItens->get($id);
        if ($this->PedidoItens->delete($pedidoIten)) {
            $this->Flash->success(__('The pedido iten has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido iten could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
