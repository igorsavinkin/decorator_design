<?php
/**
 * Базовый класс Decorator следует тому же интерфейсу, что и другие компоненты.
 * Основная цель этого класса - определить интерфейс обёртки для всех конкретных
 * декораторов. Реализация кода обёртки по умолчанию может включать в себя поле
 * для хранения завёрнутого компонента и средства его инициализации.
 */
class Decorator implements Product
{
    /**
     * @var product
     */
    protected $product;
	
    public function __construct(Product $product)
    {
        $this->product = $product; 
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     */
    public function getName() : string
    {
        return $this->product->getName();
    }
	public function get_Type() : string  
    {
        return $this->product->get_Type();
    }
	public function getPrice() : float  
    {
        return $this->product->getPrice();
    }
}
?>