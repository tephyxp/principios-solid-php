# principios-solid-php


hi there! this is a repository for the principles of SOLID in PHP.  it's an example project to show how these five design principles from object-oriented programming can be used to create a circus.


## Principle of Single Responsibility (SRP):
 states that a class should have only one reason to change, focusing on a single responsibility or task. 

## Open/Closed Principle (OCP):
This principle suggests that entities should be open for extension but closed for modification. In a circus, this could translate to designing performances and acts that can be easily extended or modified without the need to alter the entire show. For example, a juggling act could be extended by adding more juggling objects, but without needing to rewrite the entire act.

## Liskov Substitution Principle (LSP):
This principle states that objects in a program should be replaceable with instances of their subtypes without affecting the correctness of the program. 

## Interface Segregation Principle (ISP):
This principle states that clients should not be forced to depend on interfaces they do not use. 

In this example, we have a circus theme with different types of performers: jugglers, tightrope walkers, and clowns. Each performer has specific actions they can perform. To adhere to the Interface Segregation Principle, we define separate interfaces for each performer type: Juggler, TightropeWalker, and Clown. Each interface declares methods specific to the corresponding performer type.

For example, the Juggler interface declares the juggle() method, the TightropeWalker interface declares the balance() method, and the Clown interface declares the entertain() method.

The classes implementing these interfaces provide concrete implementations of the methods. The Client class interacts with performers through these interfaces, calling only the methods it needs, without being forced to depend on methods irrelevant to its context.

This approach ensures that each class and interface has a clear and specific purpose, promoting code clarity, maintainability, and flexibility, which are the key objectives of the Interface Segregation Principle.

## Dependency Inversion Principle (DIP):
This principle suggests that high-level modules should not depend on low-level modules, but rather on abstractions. 