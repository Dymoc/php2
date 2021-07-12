<?php


use app\models\entities\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct() {
        $name = "Чай";
        $product = new Product($name);
        $this->assertEquals($name, $product->name);
    }
    public function testProductNameClass() {
        $nameClass = Product::class;
        $appPos = strpos($nameClass, "app\\");
       // var_dump($appPos);
        $this->assertTrue($appPos);
        $this->assertEquals(0, $appPos);
    }

}