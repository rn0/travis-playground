Feature:
  In order to start using Behat with TravisCI
  As a developer
  I need sample scenarios

  Scenario: Show Hello World
    Given i am on the home page
    Then i should see "Hello world!"

  @javascript
  Scenario: Show Hello World from JS
    Given i am on the home page
    Then i should see "Hello JS!"
