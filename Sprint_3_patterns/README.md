# Sprint_3_patterns

📄 EXERCISES DESCRIPTION

LEVEL 1

SNGLETON

- Refactor the Tigger class into a Singleton considering the following points:
* Define the getInstance() method.
* Print Tigger's roar multiple times to the screen.
* Add a getCounter() method that returns the number of times Tigger has roared.

DEPENDENCY INJECTION

- Imagine you are a person who is about to leave home to go to study/work. 
You will need to bring your wallet, house keys, maybe car/motorcycle keys or public transport card, and smartphone. 
Write a program that simulates this logic using the dependency injection pattern.

LEVEL 2

ADAPTER

- Given the class Duck and the class Turkey, you want your turkeys to behave like ducks.
Implement the adapter pattern. In the same file, write a class called TurkeyAdapter. 
Translating quack between classes is easy: just call the Gobble method when appropriate.
Although both classes have a fly method, turkeys can only fly in short bursts.
To map between a duck's fly method and a turkey's fly method, the turkey's fly method must be called five times. 
Test your class with the given code.

FACADE

- When we wash dishes (by hand), we generally take a piece of laundry, soap it, rinse it, and place it in the dryer.
These steps are fully automated with an automatic dishwasher. Implement this logic using the Facade pattern.

LEVEL 3

STRATEGY

- Consider the function called couponGenerator($car).
The coupon takes into account the following factors to weight the discount rate:
* We may want to offer a discount during a recession in car purchases (!isHighSeason).
* We may want to offer a discount when the stock of cars for sale is too large (bigStock).
According to the previous considerations, use strategy pattern for, given the brand of a car, program calculates discount. Make sure to take the following into account:
* function addSeasonDiscount() adds a discount when sales are down.
* function addStockDiscount() adds a discount when inventory is too high.
Print the coupon result for the two car brands (BMW and Mercedes) to the screen.

OBSERVER

- Imagine we need to implement a mechanism to notify mentors that a new assignment (or any new) has been submitted to Moodle. 
Write a program that implements the Observer pattern so that each time a new submission is generated in Moodle, it notifies mentors of this submission.

💻 TECHNOLOGIES USED

- XAMPP package (PHP, Apache web server, MySQL database)
- Visual Studio Code
- PHP 8.2.4
- Git/Github

