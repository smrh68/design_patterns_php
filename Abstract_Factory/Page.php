<?php
require('Header.php');
require('Footer.php');
require('PageFactory.php');
require('BlogHeader.php');
require('BlogFooter.php');
require('BlogPageFactory.php');


function renderPage(PageFactory $factory) {
    $header = $factory->createHeader();
    $footer = $factory->createFooter();
    
    echo $header->render();
    echo "<main><p>Page Content</p></main>";
    echo $footer->render();
}

$blogFactory = new BlogPageFactory();
renderPage($blogFactory);
