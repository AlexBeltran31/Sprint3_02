Person Leaving Home Simulation.
This project is a simple Object-Oriented Programming example in PHP that demostrates how a Person interacts with different items (wallet, keys, transport card and phone) before leaving the house.
It's designes following the Dependency Injection design pattern, ensuring flexibility, modularity and easier testing.

How it works.
1. The ItemInterfaces defines a common method take() that all item classes must implement.
2. Each item class (Wallet, HouseKeys, TransportCard, Phone) implements this interface and provides it's own behavior for the take() method.
3. The Person class receives dependencies (Wallet, HouseKeys, TransportCard, Phone) through Dependency Injection - they are passed as parameters to the constructor rather than being created internally.
4. This allows the Person class to remain loosely coupled to it's dependencies and makes it easy to extend, replace, or test each component independently.
5. The leaveHome() method simulates the person preparing to leave, taking each item one by one.
