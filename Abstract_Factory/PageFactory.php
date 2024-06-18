<?php

interface PageFactory {
    public function createHeader(): Header;
    public function createFooter(): Footer;
}
