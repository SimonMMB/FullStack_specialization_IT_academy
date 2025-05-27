# Sprint_1_tema_6
Advanced PHP

📄 EXERCISES DESCRIPTION

LEVEL 1
- Exercise 1: Create an HTML form with the fields you want (at least a name or username). The form must have a PHP document as an action. The code of this PHP document must display the values ​​of the different fields of the form using superglobal variables. Also, record some of these values ​​in session variables.
-> Files: exercise1.html, exercise1.php
- Exercise 2: Write a program that uses at least a couple of magic constants.
- Exercise 3: Override the logic of some magic method other than __construct.
-> Files: Vehicle.php, Bike.php, Car.php, Bus.php, exercises2and3.php

LEVEL 2
- Exercise 1: Create a class that represents a teaching resource for this specialty. Resources must have a name, a theme (which can only be PHP, CSS, HTML, SQL, Laravel), a URL, and a resource type (File, Web Article, Video). Implement both the theme and the resource type with enums.
- Exercise 2: Implement a class named Car that has information about a car (brand, license plate, fuel type, maximum speed). Also, implement a Trait called Turbo that has a boost() method that displays a message “Turbo has started.” Use this method from the Car class.

LEVEL 3
- Exercise 1: Install Composer on your computer. Take a look at a library that interests you and install it using Composer.

📋 NOTES 

* Display de execution of Exercise 1 in navigator.
* Vehicle.php contains writeInfo() function, which uses magic constants, and an overriding of magic method __toString(), which is overridden in Bike, Car and Bus subclasses. 
* Execution of exercises2and3.php in console generates a txt file with the output of exercises 2 and prints overridden __toString() methods (exercise 3).
* Corrected by Lena Prado.