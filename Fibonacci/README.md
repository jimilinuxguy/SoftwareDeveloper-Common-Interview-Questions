# Fibonacci Sequence
In mathematics, the Fibonacci numbers or Fibonacci sequence are the numbers in the following integer sequence:
0,1,1,2,3,5,8,13,21,34,44,89,144.....


## Form Closure / Closed Form

The N-th Fibonacci number can be calculated by a closed form formula: **((1 + Sqrt[5])^n - (1 - Sqrt[5])^n)/(2^n Sqrt[5])**
This solution has a time complexity of O(1) or slightly more depending on how your system implements the power method, which could be O(log n).
This is one of the more elegant solutions to this type of problem, and while the method is low complexity, it may not be practical to use this solution on an interview, as it requires a certain amount of mathematics knowledge.

## Recursion
The Fibonacci sequence can also be calculated using a recursive algorithm. This recursive algorithm has a time complexity of O(2^n).
This can be represented in psuedo-code as:

int fib(int n) {

 if (n <= 2) return 1

  else return fib(n-1) + fib(n-2)

}

