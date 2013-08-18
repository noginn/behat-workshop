Feature: Shopping cart
    As a visitor
    I want to be able to add products to my shopping cart
    So that I can purchase them

    Scenario: Adding a book to the cart
        Given I am on the homepage
         When I follow "Mobile First"
          And I press "Add"
         Then I should be on the shopping cart page
          And I should see "Mobile First"
