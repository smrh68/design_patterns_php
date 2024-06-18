<?php
require('Header.php');
require('Footer.php');
require('PageFactory.php');
//blog
require('BlogHeader.php');
require('BlogFooter.php');
require('BlogPageFactory.php');
//portfolio 
require('PortfolioHeader.php');
require('PortfolioFooter.php');
require('PortfolioPageFactory.php');


function renderPage(PageFactory $factory) {
    $header = $factory->createHeader();
    $footer = $factory->createFooter();
    
    echo $header->render();
    echo "<main><p>Page Content</p></main>";
    echo $footer->render();
}

$blogFactory = new BlogPageFactory();
renderPage($blogFactory);

echo "<hr>";

$portfolioFactory = new PortfolioPageFactory();
renderPage($portfolioFactory);