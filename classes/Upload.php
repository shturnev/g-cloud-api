<?php
/**
 * Created by PhpStorm.
 * User: sht-home
 * Date: 03.08.2018
 * Time: 19:37
 * api для https://console.cloud.google.com/storage/
 */

namespace classes;
use Google\Cloud\Storage\StorageClient; //https://packagist.org/packages/google/cloud-storage

class Upload
{

    private $storage;

    public function __construct()
    {
        $this->storage = new StorageClient([
            'keyFile' => json_decode(file_get_contents('./cloud_keys.json'), true)
        ]);
    }

    /**
     * Загрузить файл
     * @param $array - [file, filename, bucket]
     * @return array
     */
    public function upload($array)
    {
        $bucket = $this->storage->bucket($array['bucket']);
        $object = $bucket->upload(
            fopen($array['file'], 'r'),
            [
                'name' => $array['filename'],
                'predefinedAcl' => 'publicRead'
            ]
        );

        return $object->info();
    }

    /**
     * Получить файл
     * @param $array - [filename, bucket]
     * @return \Google\Cloud\Storage\StorageObject
     */
    public function getFile($array)
    {
        $bucket = $this->storage->bucket($array['bucket']);
        $object = $bucket->object($array['filename']);

        $tt = $object->downloadAsString();

        return base64_encode($tt);
    }
}