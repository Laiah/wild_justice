<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 20:52
 * PHP version 7
 */

namespace Model;


use GuzzleHttp\Client;

/**
 * Abstract class handling default manager.
 */
abstract class AbstractManager
{
    protected $client; //variable de connexion
    protected $queryId;

    /**
     *  Initializes Manager Abstract class.
     *
     * @param string $table Table name of current model
     */
    public function __construct()
    {
          $this->client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/',
        // You can set any number of default request options.
        'timeout' => 2.0,
        ]);
    }

    /**
     * Get all row from database.
     *
     * @return array
     */
    public function selectAll()
    {
        $queryAll = $this->client->request('GET', 'all.json');
        $body = $queryAll->getBody();
        $arrayAll = json_decode($body->getContents(), true);
        return $arrayAll;
    }

    /**
     * Get one row from database by ID.
     *
     * @param  int $id
     *
     * @return array
     */
    public function selectOneById(int $id)
    {
        $queryOneId = $this->client->request('GET', 'id/'. $id . '.json');
        $body = $queryOneId->getBody();
        $arrayOneId = json_decode($body->getContents(), true);
        return $arrayOneId;
    }

    public function getPuissance()
    {
        $puissance = selectOneById($_GET['select'])['power'];
        return $puissance;
        
    }

    public function getPv()
    {
        $pv = selectOneById($_GET['select'])['durability'];
        return $pv;
        
    }

    public function getSpeed()
    {
        $speed = selectOneById($_GET['select'])['speed'];
        return $speed;
        
    }

    public function getName()
    {
        $nom = selectOneById($_GET['select'])['name'];
        return $nom;
        
    }


    /**
     * SELECT Powerstat by id
     *
     * @param int $id
     */
    public function selectPowerstat(int $id)
    {
        $queryPowerstat = $this->client->request('GET', 'powerstats/'. $id . '.json');
        $body = $queryPowerstat->getBody();
        $arrayOneId = json_decode($body->getContents(), true);
        return $arrayPowerstat;
    }


    /**
     * @param int   $id   Id of the row to update
     * @param array $data $data to update
     */
    public function update(int $id, array $data)
    {
        //TODO : Implements SQL UPDATE request
    }

}

