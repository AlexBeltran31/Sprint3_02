Singleton Exercise.
This exercise implements the Singleton design pattern in PHP, using the character Tigger from Winnie the Pooh as an example. Since there's only one Tigger in the world, the goal is to ensure that only one instance of the Tigger class can ever be created.
The class also includes:
-A roar() method that makes Tigger roar and adds one to the counter every time he does so.
-A getRoarCount() method that prints the total number of roars.
Files:
    Tigger.php
    index.php
Key concepts:
-Singleton Pattern ensures that a class has only one instance and provides a global point of access to it.
-Private Constructor prevents creating a new instances using new.
-Static Instance Property holds the single instance.
-Static getInstance() method created and returns the instance.
-Private function __clone() that disables cloning.
