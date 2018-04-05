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
    protected $className;

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
        return $queryId = $this->client->request('GET', 'id/1.json');

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
        // prepared request
        
    }

    /**
     * DELETE on row in dataase by ID
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        //TODO : Implements SQL DELETE request
    }


    /**
     * INSERT one row in dataase
     *
     * @param Array $data
     */
    public function insert(array $data)
    {
        //TODO : Implements SQL INSERT request
    }


    /**
     * @param int   $id   Id of the row to update
     * @param array $data $data to update
     */
    public function update(int $id, array $data)
    {
        //TODO : Implements SQL UPDATE request
    }

    public function connectGuzzle()
    {

      
    }

 
}
