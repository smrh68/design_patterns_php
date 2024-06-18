<?php

class BlogPageFactory implements PageFactory {
    public function createHeader(): Header {
        return new BlogHeader();
    }
    
    public function createFooter(): Footer {
        return new BlogFooter();
    }
}
