<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 */
class PedidosController extends AppController
{

    /*public function isAuthorized($user){
        //exemplo para denar uma página
        //$this->Flash->error(__('The pedido not accessed.'));
        //return false;
    }*/

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $startdate = Time::parseDateTime($this->request->query("startDate"), 'dd/MM/yyyy');
        $enddate = Time::parseDateTime($this->request->query("endDate"), 'dd/MM/yyyy');

        $this->paginate = [
            'contain' => ['Fornecedores', 'Status', 'Usuarios'],
            'finder' => [
                "date" => [
                    "start" => $startdate,
                    "end" => $enddate
                ]
            ]
        ];

        $this->set('pedidos', $this->paginate($this->Pedidos));
        $this->set('_serialize', ['pedidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Fornecedores', 'Status', 'Usuarios', 'PedidoItens']
        ]);
        $MateriasPrimas = TableRegistry::get('MateriasPrimas');
        foreach ($pedido->pedido_itens as $k => $pedidoItem){
            $matPrimaNome = $MateriasPrimas->find('all', [
               'conditions' => ['id' => $pedido->pedido_itens[$k]['materia_prima_id']]
            ])->first();
            $pedido->pedido_itens[$k]['materia_prima_nome'] = $matPrimaNome['nome'];
        }
        $this->set('pedido', $pedido);
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedido = $this->Pedidos->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->data);
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('O pedido foi cadastrado com sucesso.'));
                return $this->redirect(['controller' => 'PedidoItens', 'action' => 'add', $pedido['id']]);
            } else {
                $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->Pedidos->Fornecedores->find('list', ['limit' => 200]);
        $status = $this->Pedidos->Status->find('list', ['limit' => 200]);
        $usuarios = $this->Pedidos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'fornecedores', 'status', 'usuarios'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['PedidoItens']
        ]);
        $MateriasPrimas = TableRegistry::get('MateriasPrimas');
        foreach ($pedido->pedido_itens as $k => $pedidoItem){
            $matPrimaNome = $MateriasPrimas->find('all', [
                'conditions' => ['id' => $pedido->pedido_itens[$k]['materia_prima_id']]
            ])->first();
            $pedido->pedido_itens[$k]['materia_prima_nome'] = $matPrimaNome['nome'];
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->data);
            if ($this->Pedidos->save($pedido)) {
                if($pedido['status_id'] == '4'){
                    foreach($pedido->pedido_itens as $item) {
                        $estoquesTable = TableRegistry::get('Estoques');
                        $itemEstoque = $estoquesTable->findByMateriaPrimaId($item['materia_prima_id'])->first();
                        $estoque = $estoquesTable->newEntity();
                        if(isset($itemEstoque)){
                            $estoque = $itemEstoque;
                        }else {
                            $estoque->materia_prima_id = $item['materia_prima_id'];
                        }
                        if(isset($itemEstoque)){
                            $estoque->quantidade = $item['quantidade'] + $itemEstoque->quantidade;
                        }else {
                            $estoque->quantidade = $item['quantidade'];
                        }
                        //debug($itemEstoque);
                        //die;
                        if(!$estoquesTable->save($estoque)){
                            $erroEstoque = '1';
                        }
                    }
                }
                $this->Flash->success(__('O pedido foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->Pedidos->Fornecedores->find('list', ['limit' => 200]);
        $status = $this->Pedidos->Status->find('list', ['limit' => 200]);
        $usuarios = $this->Pedidos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'fornecedores', 'status', 'usuarios'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            $this->Flash->success(__('The pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
