<?php
require('PageFactory.php');
require('PortfolioHeader.php');
require('PortfolioFooter.php');
require('Header.php');
require('Footer.php');

class PortfolioPageFactory implements PageFactory {
    public function createHeader(): Header {
        return new PortfolioHeader();
    }
    
    public function createFooter(): Footer {
        return new PortfolioFooter();
    }
}