<?php
namespace App\Controller;

use App\Controller\AppController;

class SiteController extends AppController
{
    public function guiche($id){

        $this->viewBuilder()->setLayout('site');
        $this->set(compact('id'));

    }

    function index(){
        $this->loadModel('Configs');
        $config = $this->Configs->get(1);
        $this->viewBuilder()->setLayout('site');
        $this->set(compact('config'));
    }

    function anteriores(){

        $this->loadModel('Chamadas');

        $chamadas = $this->Chamadas->find()
            ->contain([
                'Senhas',
                'Guiches'
            ])
            ->order([
                'Chamadas.id' => 'DESC'
            ])
            ->limit(5);
        
        $this->viewBuilder()->setLayout('ajax');

        $this->set(compact('chamadas'));

    }

    public function repetir($guiche_id){
        $this->loadModel('Chamadas');
        $this->loadModel('TelaMaster');

        $chamada = $this->Chamadas->find()
            ->where([
                'guiche_id' => $guiche_id
            ])
            ->order([
                'id' => 'DESC'
            ])
            ->first();

        //debug($chamada->senha_id);
        //die;
        
        $this->TelaMaster->updateAll(
            [
                'guiche_id' => $guiche_id,
                'senha_id' => $chamada->senha_id,
                'som' => 's'
            ],
            [
                'id' => 1
            ]
            
        );

        die('ok');
        

    }

    function chamar($guiche_id){
        
        $this->loadModel('Senhas');
        $this->loadModel('Chamadas');
        $this->loadModel('TelaMaster');
        $senha = $this->Senhas
            ->find()
            ->where(['em_uso' => 'n'])
            ->order(['id' => 'ASC'])
            ->first();
        
        

        $this->Chamadas->updateAll(
            ['finalizada' => 's'],
            ['guiche_id' => $guiche_id]
        );

        $this->TelaMaster->updateAll(
            [
                'guiche_id' => $guiche_id,
                'senha_id' => $senha->id,
                'som' => 's'
            ],
            [
                'id' => 1
            ]
            
        );

        $chamada = $this->Chamadas->newEntity();

        $chamada->senha_id = $senha->id;
        $chamada->guiche_id = $guiche_id;

        $this->Chamadas->save($chamada);

        $senha->em_uso = 's';
        $this->Senhas->save($senha);
        echo ($senha->senha);
        die;
    }

    public function exibeMaster(){
        
        $this->loadModel('TelaMaster');

        $telaMaster = $this->TelaMaster
            ->find()
            ->contain([
                'Senhas',
                'Guiches'
            ])
            ->where([
                'TelaMaster.id' => 1
            ])
            ->first();
        
        
        $som = $telaMaster->som;

        if($som == 's'){
            $this->TelaMaster->updateAll(
                ['som' => 'n'],
                ['id' => 1]
            );
        }
        $this->viewBuilder()->setLayout('ajax');

        $this->set(compact('telaMaster', 'som'));

    }

    public function contador(){

        $this->loadModel('Contagem');

        $contagem = $this->Contagem->get(1);

        $contagem->contagem = $contagem->contagem + 1;

        $this->Contagem->save($contagem);

        die;

    }
}