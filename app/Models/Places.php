<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Zhoupeng',
            'contry'=>'China',
            'height'=>'206CM',
            'weight'=>'90kg',
            'graduate school'=>'Guangdong University of Technology',
            'native place'=>'Liaoning province',
            'age'=>'27',
            'image' => 'zhoupeng.png',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Yijianlian',
            'contry'=>'China',
            'height'=>'213CM',
            'weight'=>'116KG',
            'graduate school'=>'Guangdong University of Technology',
            'native place'=>'Guangdong province',
            'age'=>'33',
            'image' => 'yijianlian.png',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Zhaorui',
            'contry'=>'China',
            'height'=>'194CM',
            'weight'=>'90KG',
            'graduate school'=>'Guangzhou Sports College',
            'native place'=>'Heilongjiang province',
            'age'=>'25',
            'image' => 'zhaorui.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Chenjianghua',
             'contry'=>'China',
            'height'=>'186CM',
            'weight'=>'82KG',
            'graduate school'=>'Guangzhou Sports College',
            'native place'=>'Guangdong province',
            'age'=>'31',
            'image' => 'chenjianghua.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Shaoyinlun',
            'contry'=>'China',
            'height'=>'204CM',
            'weight'=>'85KG',
            'graduate school'=>'Hebei Institute of Physical Education',
            'native place'=>'Hebei province',
            'age'=>'25',
            'image' => 'shaoyinlun.jpg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Zengfanri',
            'contry'=>'China',
            'height'=>'206CM',
            'weight'=>'102KG',
            'graduate school'=>'Harbin sport university',
            'native place'=>'Heilongjiang province',
            'age'=>'25',
            'image' => 'zengfanri.png',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
