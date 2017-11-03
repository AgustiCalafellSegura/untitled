# A project to learn about Symfony components

## Console component

List of console commands developed

- app:test
- app:calculator
- app:string:analyzer

### app:test

A test command that prints a list of "Hello World" messages.

> Usage
```
$ ./console.php app:test 4

Hello World 2!
Hello World 4!
```

### app:calculator

This command make a calculation between two numbers and says which one is the greatest.

> Usage
```
$ ./console.php app:calculator 3 7

The greather number is: 7
3 + 7 = 10
3 - 7 = -4
3 * 7 = 21
3 ÷ 7 = 0.43
3 ^ 7 = 2187
```

### app:string:analyzer

This command can count the letters that are repeated.

> Usage
```
$ ./console.php app:string:analyzer "this is an example string"

The string "this is an example string" has:
· 5 words
· 25 characters
· character " " 4 times
· character "a" 2 times
· character "e" 2 times
· character "g" 1 time
· character "h" 1 time
· character "i" 3 times
· character "l" 1 time
· character "m" 1 time
· character "n" 2 times
· character "p" 1 time
· character "r" 1 time
· character "s" 3 times
· character "t" 2 times
· character "x" 1 time
```
