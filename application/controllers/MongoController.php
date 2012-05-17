<?php



class MongoController extends Zend_Controller_Action{
	private $_db;

    public function init(){
        $this->_db  = new Application_Model_Oportunidade();
    }

    public function indexAction(){

        $data = array(
            '_id' => '',
            'nome' => 'Ederson Sandre',
            'empresa' => 'Telecontrol',
            'titulo' => 'Titulo da Oportunidade',
            'origem' => '2',
            'campanha' => 'NEW CAMPANHA',
            'setor' => '6',
            'telefone' => '1497338022',
            'celular' => '1434521421',
            'fax' => '1490905421',
            'email' => 'ederson.sandre@gmail.com',
            'status' => '3',
            'classificacao' => '2',
            'qtde_funcionarios' => '20',
            'cep' => '17580000',
            'endereco' => 'Rua Nelson do carmo 420',
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'pais' => 'BR',
            'idioma' => 'BR',
            'observacao' => 'Nenhuma observacoo!'
            );
        //$this->_db->_save($data);

	echo "<pre>";
	$data = $this->_db->_all(array('pesquisa'=>'derson','show'=>3,'campo'=>'nome','order'=>'desc'));

	//$data = null;
	//$data = $this->_db->_all($data);
	print_r($data);

        exit;


        $id = "4fa17d57c6c8696076000003";
        $this->_db->_delete($id);



        exit;
        $data = Array();


        $data["_id"] = "4fa17d57c6c8696076000003";
        $data['nome'] = "Teste";
        $data['ativo'] = "20";

        echo "<pre>";
          // print_r($data);
        
        

    	$data = $this->_db->_save($data);
    	
        
        


    	exit;


    	$id = "4f9ecde0c6c8691d5d000001";
    	echo "<pre>";
    	/*
    	* $grupo->remove(array("name" => "Bob"));
    	*
    	* Remove todos os registro da tabela que OS = 1020
    	* $this->_db->remove(array("os" => "1020"));
    	* $this->_db->remove(array("name.first" => "John"));
    	*
    	*/


    	// MULTIPLOS INSERT
		// $grupos = array(
		//     array(
		//         'name' => array(
		//             'first' => 'Ederson',
		//             'last' => 'Sandre'
		//         ),
		//         'email' => 'ederson.sandre@telecontrol.com.br'
		//     ),
		//     array(
		//         'name' => array(
		//             'first' => 'Brayan',
		//             'last' => 'Rastelli'
		//         ),
		//         'email' => 'brayan.rastelli@telecontrol.com.br'
		//     )
		// );
		// $this->_db->insertBatch($grupos);


    	// SELECT
		// $users = $this->_db->all();
		// $users = $this->_db->all(array("name.first" => "Ederson"));
		// foreach ($users as $user) {
		//     echo $user->_id." - Nome: {$user->name->first}<br />";
		// }

		//$users = $this->_db->all(array("email" => "joan@mackison.com"));
		// $users = $this->_db->all(array('name.first' => 'Brayan'))->skip(8)->limit(5);
		// foreach ($users as $user) {
		//      echo $user->_id." - Nome: {$user->name->first}<br />";
		// }

		// Apaga o subArray do campo
		//$users = $this->_db->find("4f9ece4ec6c869ec5e000004");
		//if(!empty($users->id))
		//	$users->name->delete();
		//$users->delete("name");

    	//DELETE registro
    	//$users = $this->_db->find("4f9ece4ec6c869ec5e000004");
    	//$user->delete();

    	//$grupo = new Application_Model_Grupo();
    	//$this->_db->remove(array("name.first" => "John"));
    	
    	//$grupo->name->delete();

    	//$grupo = User::find($id);

    	//Atualiza
    	// $user = $this->_db->find("4f9ece4ec6c869ec5e000005");
    	// $user->inc('posts', 1);
    	// $user->save();
    	//$user->delete();
    	//$this->_db->update({"b":'q'}, {$set:{"_id":"4f9ece69c6c869825f000002"}}, false, true);

    }


}

