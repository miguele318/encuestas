<?php
declare(strict_types=1);

namespace App\Controller;
use App\Model\Table\EvaluationsTable;
use Cake\Utility\Text;


/**
 * UsersTests Controller
 *
 * @property \App\Model\Table\UsersTestsTable $UsersTests
 *
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersTestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function isAuthorized($user)
    {
        $action=$this->request->getParam('action');
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($action, ['add', 'crearEncuesta', 'view', 'edit', 'delete']))
            {
                return true;

            }

        }

        return parent::isAuthorized($user);
        
    }
    public function index()
    {
        $this->paginate = [
            'conditions' => ['username'=>$this->Auth->user('username')],
        ];
        $usersTests = $this->paginate($this->UsersTests);

        $this->set(compact('usersTests'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => ['Tests'],
        ]);

        $this->set('usersTest', $usersTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersTest = $this->UsersTests->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTest = $this->UsersTests->get($id);
        if ($this->UsersTests->delete($usersTest)) {
            $this->Flash->success(__('The users test has been deleted.'));
        } else {
            $this->Flash->error(__('The users test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function crearEncuesta()
    {
        $this->viewBuilder()->setLayout('menu');
        $usersTest = $this->UsersTests->newEmptyEntity();
        /*$usersTest->name = 'encuestas de lujo';
        $usersTest->url_app = 'mercadolibre.com.co';
        $usersTest->max_date=date("Y-m-d H:i:s");
        $usersTest->message='esta es la prueba mondaaa';
        
        $usersTest->test_id=6;*/



        
        
        
        if ($this->request->is('post')) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            $usersTest->username = $this->Auth->user('username');
            
<<<<<<< HEAD
=======
            $correos=$this->request->getData('correos');
            $this->UsersTests->save($usersTest);
<<<<<<< HEAD
            $this->Flash->success(__('The users test has been saved.'));
=======
>>>>>>> a8677007118a4cea5b7689d94b4bb6ec7131cc95
            
            $correos=$this->request->getData('correos');
            if ($this->UsersTests->save($usersTest)) {
                $this->loadModel('Evaluations');

            
<<<<<<< HEAD
                //$correos= array("juanito@gmail.com", "carlos@unicauca.edu.co", "santiagos@yahoo.es");
                
    
                foreach($correos as $c) {
=======
>>>>>>> 318cada9f553ef0339d9e7c92abe0d04c968ee3c
                foreach ($correos as $c){
>>>>>>> a8677007118a4cea5b7689d94b4bb6ec7131cc95
                    
                    $evaluation = $this->Evaluations->newEmptyEntity();
                    $evaluation->token=Text::UUID(); 
                    $evaluation->email=$c;
                    $evaluation->user_test_id= $usersTest->id ;
                    $this->Evaluations->save($evaluation);

              }
                
                    
                $this->Flash->success(__('la encuesta se ha guardado correctamente.'));

                return $this->redirect(['controller'=>'Users', 'action' => 'home']);
            }else
            {
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));

            }
            
        }   
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
            $this->set(compact('usersTest', 'tests'));
    }
        
        
}
