<?php

namespace Application\Model;

class ProductSearch {
    public $title;
    public $description;
    public $image_link;
    public $price;

    public function exchangeArray($data) {
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
        $this->description = (!empty($data['description'])) ? $data['description'] : null;
        $this->image_link = (!empty($data['image_link'])) ? $data['image_link'] : null;
        $this->price = (!empty($data['price'])) ? $data['price'] : null;
    }
}