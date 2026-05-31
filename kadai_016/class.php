<?php
//クラス定義(Food)
class Food{
  //プロパティ定義
  private $name;
  private $price;

  //コンストラクタ定義
  public function __construct(string $name,int $price){
    $this->name = $name;
    $this->price = $price;
  }

  //プロパティの値を出力メソッド
  public function show_price(){
    echo $this->price .'<br>';
  }
}

//クラス定義(Animal)
class Animal{
  //プロパティ定義
  private $name;
  private $height;
  private $weight;

  //コンストラクタ定義
  public function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  //プロパティの値を出力メソッド
  public function show_height(){
    echo $this->height . '<br>';
  }
}
//↑ココまでが設計図（FoodとAnimal2種の）


//インスタンス化(Food)
  $potato = new Food('potato',250);
//インスタンスの出力(potatoデータ表示)
print_r($potato);
echo '<br>';//見栄えのための改行


//インスタンス化(Animal)
$dog = new Animal('dog',60,5000);
//インスタンスの出力(Animalデータ表示)
print_r($dog);
echo '<br>';

//実行//(potatoのpriceデータ表示)
$potato->show_price();
//実行(Animalのheightデータ表示)
$dog->show_height();
?>