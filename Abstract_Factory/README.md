Explanation:

1.Abstract Products (Header, Footer): Define the interface for types of page elements.

2.Concrete Products (BlogHeader, BlogFooter, PortfolioHeader, PortfolioFooter): Implement the interfaces.

3.Abstract Factory (PageFactory): Declares the creation methods for each type of product.

4.Concrete Factories (BlogPageFactory, PortfolioPageFactory): Implement the creation methods to instantiate the concrete products.

5.Client Code: Uses the factories to create page elements without depending on their concrete classes.

This design allows for easy extension. If a new page type is needed, you just add new product classes and a corresponding factory class, without modifying existing code.