# SPRINT 3

## TEMA 1 : antecedents

### TASCK 1 : SOLID

### LEVEL 1 - _complete_

**Exercici 1 :** Refactor code according to the **single Responsibility Principle :**
_A class should have only one reason to change._<br>
The single _OlympicGames_ class has beenn divided into smaller classes each one with a specific role. Each class now handles its own responsibility, facilitating future maintenance and adaptability. If any of the classes need to be modified or expanded, the rest of the code will not be affected.

**Exercise 2:** Refactor code according to the **Dependency Inversion Principle:**<br> 
_High-Level modules should not depend on low-levels Modules. Both should depen on abstraction._ <br>
We updated the code by adding an interface to establish a better class hierarchy. We can now apply changes or update any of the subclasses without affecting the rest of the system. We can also add new payment methods without needing to modify existing classes.

### LEVEL 2 - _complete_

**Exercici 1 :**  Refactor code according to the **Open/Closed Principle:** <br>
_A class should be open for extension but closed for modification._ <br>
By separating the classes and adding an interface, we have a much cleaner code and less risk of errors. while all classes must implement the interface's method, each class implements it in its own way. This removes the need for if/else statements that would otherwise require extension with each new modification.

**Exercici 2 :** Refactor code according to the **Interface Segregation Principle:** <br>
_A class should not be forced to implement an interface it doesn’t use._ <br>
The parent class has been updated with the common methods and two interface classes added. Both machines can be children of the same parent class while implementing their own specific methods via interfaces.

### LEVEL 3 - _complete_

**Exercici  :** Refactor code according to the **Liskov Substitution Principle_:** <br>
_You should be able to use any subclass in place of its parent class._ <br
to ensure this, we moved the attack() method out of the Character class and into an interface. This allows us to have subclasses that can attack and others that cannot, while both still inherit properties from Character. We also added a new subclass that can fulfill the doCombat() function.

## Technologies
- PHP 




