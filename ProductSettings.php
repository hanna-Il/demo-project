<?php

class ProductSettings
{
    public $catalog_mode;
    public $catalog_mode_with_prices;
    public $showPrices;

    public function shouldShowPrice()
    {
        return $this->showPrices && (!$this->catalog_mode || $this->catalog_mode_with_prices);
    }
}
