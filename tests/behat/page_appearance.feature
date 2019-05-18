@mod @mod_vplayer
Feature: Configure vplayer appearance
  In order to change the appearance of the vplayer resource
  As an admin
  I need to configure the vplayer appearance settings

  Background:
    Given the following "courses" exist:
      | shortname | fullname   |
      | C1        | Course 1 |
    And the following "activities" exist:
      | activity | name       | intro      | course | idnumber |
      | vplayer     | VPlayerName1  | VPlayerDesc1  | C1     | VPLAYER1    |
    And I log in as "admin"

  @javascript
  Scenario: Hide and display the vplayer name
    Given I am on "Course 1" course homevplayer
    When I follow "VPlayerName1"
    Then I should see "VPlayerName1" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display vplayer name" "checkbox"
    And I press "Save and display"
    Then I should not see "VPlayerName1" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display vplayer name" "checkbox"
    And I press "Save and display"
    Then I should see "VPlayerName1" in the "region-main" "region"

  @javascript
  Scenario: Display and hide the vplayer description
    Given I am on "Course 1" course homevplayer
    When I follow "VPlayerName1"
    Then I should not see "VPlayerDesc1" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display vplayer description" "checkbox"
    And I press "Save and display"
    Then I should see "VPlayerDesc1" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display vplayer description" "checkbox"
    And I press "Save and display"
    Then I should not see "VPlayerDesc1" in the "region-main" "region"

  @javascript
  Scenario: Display and hide the last modified date
    Given I am on "Course 1" course homevplayer
    When I follow "VPlayerName1"
    Then I should see "Last modified:" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display last modified date" "checkbox"
    And I press "Save and display"
    Then I should not see "Last modified:" in the "region-main" "region"
    And I navigate to "Edit settings" in current vplayer administration
    And I follow "Appearance"
    When I click on "Display last modified date" "checkbox"
    And I press "Save and display"
    Then I should see "Last modified:" in the "region-main" "region"
