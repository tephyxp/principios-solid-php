# principios-solid-php


hi there! this is a repository for the principles of SOLID in PHP.  it's an example project to show how these five design principles from object-oriented programming can be used to create a circus.


## Principle of Single Responsibility (SRP):
 states that a class should have only one reason to change, focusing on a single responsibility or task. 

## Open/Closed Principle (OCP):
This principle suggests that entities should be open for extension but closed for modification. In a circus, this could translate to designing performances and acts that can be easily extended or modified without the need to alter the entire show. For example, a juggling act could be extended by adding more juggling objects, but without needing to rewrite the entire act.

## Liskov Substitution Principle (LSP):
This principle states that objects in a program should be replaceable with instances of their subtypes without affecting the correctness of the program. In the context of the circus, this means that any specific artist (such as a clown, a juggler, or a tightrope walker) should be able to be used interchangeably with any other artist in any situation without causing any operational issues in the program. This makes our code more flexible, maintainable, and easy to understand.

## Interface Segregation Principle (ISP):
This principle states that clients should not be forced to depend on interfaces they do not use. 
## Dependency Inversion Principle (DIP):
This principle suggests that high-level modules should not depend on low-level modules, but rather on abstractions. 