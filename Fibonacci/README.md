#Form Closure / Closed Form

The N-th Fibonacci number can be calculated by a closed form formula: ((1 + Sqrt[5])^n - (1 - Sqrt[5])^n)/(2^n Sqrt[5])
This solution has a time complexity of O(1) or slightly more depending on how your system implements the power method, which could be O(log n).
This is one of the more elegant solutions to this type of problem, and while the method is low complexity, it may not be practical to use this solution on an interview, as it requires a certain amount of mathematics knowledge.


