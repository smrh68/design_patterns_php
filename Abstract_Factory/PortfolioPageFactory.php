<?php

class PortfolioPageFactory implements PageFactory {
    public function createHeader(): Header {
        return new PortfolioHeader();
    }
    
    public function createFooter(): Footer {
        return new PortfolioFooter();
    }
}