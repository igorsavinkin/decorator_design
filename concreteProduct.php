<?php
/**
 * Базовый интерфейс Компонента определяет поведение, которое изменяется
 * декораторами.
*/
interface Product
{
	public function getName(): string;
	public function get_Type(): string;
	public function getPrice(): float;
}
/**
 * Конкретные Компоненты предоставляют реализации поведения по умолчанию. Может
 * быть несколько вариаций этих классов.
 */
class ConcreteProduct implements Product
{
	protected $id;
	protected $name;
	protected $price;
	protected $type;
	
	public function __construct(){
		$this->id = '';
		$this->price = 0;
		$this->name = '';
		$this->type = 'Product type:';
	}
    public function getName(): string
    {
        return "product";
    }
	public function get_Type(): string   
    {
        return $this->type;
    } 
	public function getPrice(): float   
    {
        return $this->price;
    } 
}
?>