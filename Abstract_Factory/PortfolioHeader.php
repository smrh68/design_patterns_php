<?php
require('Header.php');

class PortfolioHeader implements Header {
    public function render() {
        return "<header><h1>Portfolio Header</h1></header>";
    }
}
