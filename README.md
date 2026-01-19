# SPRINT 3

## TEMA 1 : antecedents

### TASCK 1 : SOLID

### LEVEL 1 - _complete_

**Exercici 1 :** Refactor code according to the _single Responsibility Principle_ :
A class should have only one reason to change. Where we divided the single _OlympicGames_ class into smaller classes each one with a determinate role instead of integrating all the "work" into one class. Each class now has an specific role, failitating the future maintenace and adaptability of the code.

**Exercise 2:** Refactor code according to the _Dependency Inversion Principle: High-Level modules should not depend on low-levels Modules. Both should depen on abstraction._ We updated the code by adding an interface to stablish better class hyerarchy. We can now apply any changes or update any of the subclasses without affecting the rest of the system. We can apply new payment methods without the need to modify any of the existing classes.

### LEVEL 2 - _complete_

**Exercici 1 :**  Refactor code according to the _Open/Closed Principle: A class should be open for extension but closed for modification._ By separating the classes and adding an interface, we have a much cleaner code and less risk of errors. While all classes must implement the interface's method each class implements it so on each way. No need for if/elseif statements that would have to be extended which each new modification.

**Exercici 2 :** Refactor code according to the _Interface Segregation Principle: A class should not be forced to implement an interface it doesn’t use._The parent class has been updated with the common methods and two interface classes added. Both machine can be a child of the same Parent class and implement their own specific methods via interface.

### LEVEL 3 - _complete_

**Exercici  :** Refactor code according to the _Liskov Substitution Principle_: You should be able to use any subclass in place of its parent class.
To ensure this, we moved the attack() method out of the Character class and into an interface. This allows us to have subclasses that can attack and others that cannot while both still have properties from Character. We also added a new subclass that can fullfill the doCombat() function.




